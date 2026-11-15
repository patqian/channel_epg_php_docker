<?php
/**
 * app.env 配置加载器
 * 读取顺序：环境变量 > 同目录 app.env > 代码内默认值
 * 修改 app.env 后无需改动代码，刷新页面或重启容器即可生效
 */

if (!function_exists('app_env_all')) {
    /**
     * 解析同目录下的 app.env，格式为 KEY=VALUE，支持 # 注释和引号
     */
    function app_env_all()
    {
        static $vars = null;
        if ($vars !== null) {
            return $vars;
        }
        $vars = array();
        $file = __DIR__ . '/app.env';
        if (!is_readable($file)) {
            return $vars;
        }
        $content = file_get_contents($file);
        // 兼容 Windows 记事本保存的 UTF-8 BOM
        $content = preg_replace('/^\xEF\xBB\xBF/', '', $content);
        foreach (preg_split('/\r\n|\r|\n/', $content) as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#' || strpos($line, '=') === false) {
                continue;
            }
            list($key, $value) = explode('=', $line, 2);
            $key = trim($key);
            $value = trim($value);
            $len = strlen($value);
            if ($len > 1) {
                $first = $value[0];
                $last = $value[$len - 1];
                if (($first === '"' && $last === '"') || ($first === "'" && $last === "'")) {
                    $value = substr($value, 1, -1);
                }
            }
            if ($key !== '') {
                $vars[$key] = $value;
            }
        }
        return $vars;
    }

    /**
     * 取单个配置项，空值视为未设置
     */
    function app_env($key, $default = '')
    {
        $value = getenv($key);
        if ($value !== false && $value !== '') {
            return $value;
        }
        $vars = app_env_all();
        if (isset($vars[$key]) && $vars[$key] !== '') {
            return $vars[$key];
        }
        return $default;
    }

    /**
     * 取列表配置项，多个值用逗号或换行分隔
     */
    function app_env_list($key, $default = array())
    {
        $value = app_env($key, '');
        if ($value === '') {
            return $default;
        }
        $items = preg_split('/[\s,]+/', $value, -1, PREG_SPLIT_NO_EMPTY);
        return $items ? $items : $default;
    }
}
