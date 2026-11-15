<?php
//	
//	项目: phpLiteAdmin (https://www.phpliteadmin.org/)
//	版本: 1.9.8.2
//	简介: 基于 PHP 的在线 SQLite2 和 SQLite3 数据库管理工具
//	最后更新: 2019-09-05
//	开发者:
//	   Dane Iracleous (daneiracleous@gmail.com)
//	   Ian Aldrighetti (ian.aldrighetti@gmail.com)
//	   George Flanagin & Digital Gaslight, Inc (george@digitalgaslight.com)
//	   Christopher Kramer (crazy4chrissi@gmail.com, http://en.christosoft.de)
//	   Ayman Teryaki (http://havalite.com)
//	   Dreadnaut (dreadnaut@gmail.com, http://dreadnaut.altervista.org)
//	
//	
//	Copyright (C) 2019, phpLiteAdmin
//	
//	This program is free software: you can redistribute it and/or modify
//	it under the terms of the GNU General Public License as published by
//	the Free Software Foundation, either version 3 of the License, or
//	(at your option) any later version.
//	
//	This program is distributed in the hope that it will be useful,
//	but WITHOUT ANY WARRANTY; without even the implied warranty of
//	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//	GNU General Public License for more details.
//	
//	You should have received a copy of the GNU General Public License
//	along with this program.  If not, see <https://www.gnu.org/licenses/>.
//	
//	////////////////////////////////////////////////////////////////////////
//	
//	请将您遇到的任何 bug 报告到我们的 issue 跟踪器:
//		https://bitbucket.org/phpliteadmin/public/issues?status=new&status=open

//
// 这是示例配置文件
//
// 你可以用以下两种方式之一配置 phpliteadmin:
// 1. 将 phpliteadmin.config.sample.php 重命名为 phpliteadmin.config.php 并在其中修改参数。
//    你只需在 phpliteadmin.config.php 中设置自己的自定义项, 其余设置都会使用默认值。
// 2. 直接在 phpliteadmin.php 主文件中修改参数
//
// 更多详情请见 https://bitbucket.org/phpliteadmin/public/wiki/Configuration

// 从 app.env 读取配置(环境变量优先), 未配置时使用默认值
require_once __DIR__ . '/app_config.php';

//访问所需的密码
$password = app_env('APP_ADMIN_PASSWORD', 'admin');

//相对于本文件的目录, 用于搜索数据库 (如果为 false, 请在 $databases 变量中手动列出数据库)
$directory = '.';

//是否无限深度地扫描上述目录的子目录
$subdirectories = false;

//如果上面的 $directory 变量设为 false, 就必须在下一个变量的数组中手动指定数据库
//如果按路径引用的数据库不存在, 它们会被自动创建
$databases = array(
	array(
		'path'=> 'database1.sqlite',
		'name'=> 'Database 1'
	),
	array(
		'path'=> 'database2.sqlite',
		'name'=> 'Database 2'
	),
);


/* ---- Interface settings ---- */

// 主题! 如果想更换主题, 请把 CSS 文件保存到 phpliteadmin 所在目录或 "themes" 文件夹中
$theme = 'phpliteadmin.css';

// 默认语言! 如果想修改, 请把语言文件保存到 phpliteadmin 所在目录或 "languages" 文件夹中
// 关于本地化 (下载、如何翻译等) 的更多信息: https://bitbucket.org/phpliteadmin/public/wiki/Localization
// 中文界面: 语言文件为同目录下的 lang_cn.php
$language = 'en';

// 设置默认行数。修改此数值后需要重新登录
$rowsNum = 1000;

// 用大于 10 的数字截断字符串字符数
$charsNum = 300;

// 历史记录中最多保存的 SQL 查询数量
$maxSavedQueries = 10;

/* ---- Custom functions ---- */

//可应用于数据库列的自定义函数列表
//如果不是 PHP 核心函数, 请确保在下面定义每个函数
$custom_functions = array(
	'md5', 'sha1', 'time', 'strtotime',
	// 把你的自定义函数名添加到这个数组中
	/* 'leet_text', */
);

// 在这里定义你的自定义函数
/*
function leet_text($value)
{
  return strtr($value, 'eaAsSOl', '344zZ01');
}
*/


/* ---- Advanced options ---- */

//修改下面的变量可以让多个 phpLiteAdmin 安装在同一域名下工作。
$cookie_name = 'pla3412';

//是否让应用进入输出错误的调试模式
$debug = false;

// 只允许用户用这些扩展名创建数据库
$allowed_extensions = array('db','db3','sqlite','sqlite3');


// 英文字符串。
// 阅读我们的 wiki 了解如何翻译: https://bitbucket.org/phpliteadmin/public/wiki/Localization
$lang = array(
	"direction" => "LTR",
	"date_format" => "Y/m/d H:i:s",
	"ver" => "版本",
	"for" => "用于",
	"to" => "为",
	"go" => "转到",
	"yes" => "是",
	"no" => "否",
	"sql" => "SQL",
	"csv" => "CSV",
	"csv_tbl" => "和CSV关联的表为",
	"srch" => "搜索",
	"srch_again" => "再次搜索",
	"login" => "登录",
	"logout" => "登出",
	"view" => "视图",
	"confirm" => "确认",
	"cancel" => "取消",
	"save_as" => "另存为",
	"options" => "选项",
	"no_opt" => "无选项",
	"help" => "帮助",
	"installed" => "已安装",
	"not_installed" => "未安装",
	"done" => "完成",
	"insert" => "插入",
	"export" => "导出",
	"import" => "导入",
	"rename" => "改名",
	"empty" => "清空",
	"drop" => "删除",
	"tbl" => "表",
	"chart" => "图表",
	"err" => "错误",
	"act" => "动作",
	"rec" => "记录数",
	"col" => "列",
	"cols" => "列",
	"rows" => "行",
	"edit" => "修改",
	"del" => "删除",
	"add" => "添加",
	"backup" => "备份数据库文件",
	"before" => "之前",
	"after" => "之后",
	"passwd" => "输入密码",
	"passwd_incorrect" => "密码错误.",
	"chk_ext" => "正在检查支持SQLite的PHP扩展",
	"autoincrement" => "自动增量",
	"not_null" => "非NULL",
	"attention" => "注意",
	"none" => "无",
	"as_defined" => "按定义",
	"expression" => "表达式",
	"download" => "下载",
	"open_in_browser" => "在浏览器中打开",
	"sqlite_ext" => "SQLite扩展",
	"sqlite_ext_support" => "您的 PHP 安装中似乎没有任何受支持的 SQLite 库扩展。在安装至少其中一个之前，您无法使用 %s。",
	"sqlite_v" => "SQLite版本",
	"sqlite_v_error" => "您的数据库似乎是 SQLite %s 版本，但您的 PHP 安装缺少处理该版本所需的扩展。要解决此问题，请删除该数据库并让 %s 自动创建，或手动重建为 SQLite %s 版本。",
	"report_issue" => "无法正确诊断该问题。请在以下地址提交问题报告：",
	"sqlite_limit" => "受 SQLite 限制，只能修改字段名和数据类型。",
	"php_v" => "PHP版本",
	"new_version" => "有新版本可用！",
	"db_dump" => "数据库转储",
	"db_f" => "数据库文件",
	"db_ch" => "选择数据库",
	"db_event" => "数据库事件",
	"db_name" => "文件名",
	"db_rename" => "重命名数据库",
	"db_renamed" => "数据库 '%s' 的文件名已经修改为",
	"db_del" => "删除数据库",
	"db_path" => "路径",
	"db_size" => "文件大小",
	"db_mod" => "修改时间",
	"db_create" => "创建新数据库",
	"db_vac" => "数据库, '%s', 已经压缩[VACUUMed].",
	"db_not_writeable" => "数据库, '%s', 不存在并不能创建因为当前目录, '%s', 不可写. 除非使之可写否则程序不能使用.",
	"db_setup" => "设置数据库, %s 出现问题. 将尝试找出发生了什么事情, 这样你就可以更容易地解决这个问题",
	"db_exists" => "名称为 '%s' 的数据库, 文件或目录已存在.",
	"db_blank" => "数据库名不能为空。",
	"exported" => "导出",
	"struct" => "结构",
	"struct_for" => "结构",
	"on_tbl" => "在表",
	"data_dump" => "数据转储",
	"backup_hint" => "提示: 备份数据库的最简单方式是 %s.",
	"backup_hint_linktext" => "下载数据库文件",
	"total_rows" => "总 %s 行",
	"total" => "总数",
	"not_dir" => "您指定的目录扫描数据库不存在或不是一个目录。",
	"bad_php_directive" => "PHP指令，启用'register_globals的'。这是不好的。你需要禁用它，然后再继续。",
	"page_gen" => "页面呈现 %s 秒.",
	"powered" => "技术支持",
	"free_software" => "这是自由软件。",
	"please_donate" => "请捐赠。",
	"remember" => "记住我",
	"no_db" => "欢迎到 %s。似乎你已经选择好要扫描的目录数据库来管理。然而，%s 无法找到任何有效的SQLite数据库。您可以使用下面的表格来创建你的第一个数据库。",
	"no_db2" => "您指定的目录不包含任何现有的数据库管理，目录不可写。这意味着你不能用%s创建任何新的数据库。要么使目录可写或手动上传目录数据库。",
	"dir_not_executable" => "无法扫描您指定的目录，因为 %s 没有执行权限。在 Linux 下可用 'chmod +x %s' 修复。",
	"create" => "创建",
	"created" => "创建完毕",
	"create_tbl" => "创建新表",
	"create_tbl_db" => "在数据库中创建新表",
	"create_trigger" => "创建新触发器在表",
	"create_index" => "创建新索引在表",
	"create_index1" => "创建索引",
	"create_view" => "创建新视图",
	"trigger" => "触发器",
	"triggers" => "触发器",
	"trigger_name" => "触发器名称",
	"trigger_act" => "触发器动作",
	"trigger_step" => "触发器步骤[Trigger Steps] (分号终止)",
	"when_exp" => "WHEN 条件 (输入条件不包括 'WHEN')",
	"index" => "索引",
	"indexes" => "索引",
	"index_name" => "索引名",
	"name" => "名称",
	"unique" => "唯一值",
	"seq_no" => "序列号",
	"emptied" => "已被清空",
	"dropped" => "已被删除",
	"renamed" => "已被改名为",
	"altered" => "变更成功",
	"inserted" => "被插入",
	"deleted" => "被删除",
	"affected" => "被影响",
	"blank_index" => "索引名必须非空.",
	"one_index" => "必须至少指定一个索引列.",
	"docu" => "在线文档",
	"license" => "使用协议",
	"proj_site" => "官方网站",
	"bug_report" => "这或许是一个需要汇报的bug在",
	"return" => "返回",
	"browse" => "浏览",
	"fld" => "字段",
	"fld_num" => "表中字段数",
	"fields" => "字段",
	"type" => "类型",
	"operator" => "算符",
	"val" => "值",
	"update" => "更新",
	"comments" => "注释",
	"specify_fields" => "你必须指定表中的字段的数量。",
	"specify_tbl" => "你必须指定表名。",
	"specify_col" => "你必须指定一个列。",
	"tbl_exists" => "已存在同名表.",
	"show" => "显示",
	"show_rows" => "显示 %s 行. ",
	"showing" => "正在显示",
	"showing_rows" => "显示行",
	"query_time" => "(查询使用 %s 秒)",
	"syntax_err" => "你查询的语法有出现问题 (查询未被执行)",
	"run_sql" => "在数据库 '%s' 中执行查询",
	"recent_queries" => "最近执行的查询",
	"full_texts" => "显示完整内容",
	"no_full_texts" => "缩短长文本",
	"ques_empty" => "你确定要清空表 '%s'?",
	"ques_drop" => "你确定要删除表 '%s'?",
	"ques_drop_view" => "你确定要删除视图 '%s'?",
	"ques_del_rows" => "你确定要删除行 %s 从表 '%s'?",
	"ques_del_db" => "你确定要删除数据库 '%s'?",
	"ques_column_delete" => "确定要从表 '%s' 中删除列 %s 吗？",
	"ques_del_index" => "你确定要删除索引 '%s'?",
	"ques_del_trigger" => "你确定要删除触发器 '%s'?",
	"ques_primarykey_add" => "确定要为表 '%s' 的列 %s 添加主键吗？",
	"export_struct" => "导出结构",
	"export_data" => "导出数据",
	"add_drop" => "删除已存在表",
	"add_transact" => "添加实务",
	"fld_terminated" => "字段分隔符",
	"fld_enclosed" => "字段封闭符",
	"fld_escaped" => "字段转义符",
	"fld_names" => "字段名在第一行",
	"rep_null" => "替换NULL为",
	"rem_crlf" => "移除字段中的空字符CRLF",
	"put_fld" => "把字段名放在第一行",
	"null_represent" => "NULL描述为",
	"import_suc" => "导入成功.",
	"import_into" => "导入",
	"import_f" => "导入文件",
	"max_file_size" => "最大文件大小",
	"rename_tbl" => "表 '%s' 改名为",
	"rows_records" => "行, 开始于 # ",
	"rows_aff" => "行受影响。 ",
	"as_a" => "作为",
	"readonly_tbl" => "'%s' 是一个视图, 意味着它是一个只能使用 SELECT 语句的只读表. 你不能修改或插入记录.",
	"chk_all" => "全选",
	"unchk_all" => "取消全选",
	"with_sel" => "选中项",
	"no_tbl" => "数据库中没有表",
	"no_chart" => "如果你可以看到这一点，就意味着不能生成图表。想查看你的数据可能不适合图表。",
	"no_rows" => "您所选范围内，表中没有数据行。",
	"no_sel" => "你什么都没选.",
	"chart_type" => "图表类型",
	"chart_bar" => "柱状图",
	"chart_pie" => "饼图",
	"chart_line" => "线图",
	"lbl" => "标签",
	"empty_tbl" => "表是空的.",
	"click" => "点这里",
	"insert_rows" => "来插入数据.",
	"restart_insert" => "重新插入 ",
	"ignore" => "忽略",
	"func" => "函数",
	"new_insert" => "插入新行",
	"save_ch" => "保存修改",
	"def_val" => "默认值",
	"prim_key" => "主键",
	"tbl_end" => "个新字段在表尾",
	"query_used_table" => "用于创建此表的查询",
	"query_used_view" => "用于创建视图的查询",
	"create_index2" => "创建新索引使用",
	"create_trigger2" => "创建新触发器",
	"new_fld" => "在表 '%s' 中添加新字段",
	"add_flds" => "添加字段",
	"edit_col" => "修改列 '%s'",
	"vac" => "压缩[Vacuum]",
	"vac_desc" => "大型数据库有时需要在服务器上进行压缩. 点下面的按钮开始压缩[VACUUM]数据库 '%s'.",
	"vac_on_empty" => "重建数据库文件以回收未使用空间（VACUUM）",
	"event" => "事件",
	"each_row" => "在每行",
	"define_index" => "定义索引属性",
	"dup_val" => "重复值",
	"allow" => "允许",
	"not_allow" => "不允许",
	"asc" => "上升[ASC]",
	"desc" => "下降[DESC]",
	"warn0" => "你已经受到警告.",
	"warn_passwd" => "你正在使用默认的密码, 这比较危险的. 你可以很方便的在 %s 文件的中进行修改.",
	"counting_skipped" => "由于数据库较大且部分表没有主键，记录计数可能较慢，因此已跳过这些表的计数。请为这些表添加主键，或%s强制计数%s。",
	"sel_state" => "选择语句",
	"delimit" => "分隔符",
	"back_top" => "回到上面",
	"choose_f" => "选择文件",
	"instead" => "替代",
	"define_in_col" => "定义索引列",
	"delete_only_managed" => "只能删除由本工具管理的数据库！",
	"rename_only_managed" => "只能重命名由本工具管理的数据库！",
	"db_moved_outside" => "您要么试图把数据库移动到无法再被管理的目录，要么因权限不足而无法完成检查。",
	"extension_not_allowed" => "您提供的扩展名不在允许的扩展名列表中。请使用以下扩展名之一",
	"add_allowed_extension" => "您可以在配置中把扩展名加入 \\\$allowed_extensions，从而加入此列表。",
	"database_not_writable" => "数据库文件不可写，因此无法修改其任何内容。",
	"directory_not_writable" => "数据库文件本身可写，但要写入其中，其所在目录也必须可写。这是因为 SQLite 会在该目录放置用于加锁的临时文件。",
	"tbl_inexistent" => "表 %s 不存在",
	"col_inexistent" => "列 %s 不存在",
	"alter_failed" => "修改表 %s 失败",
	"alter_tbl_name_not_replacable" => "无法用临时表名替换原表名",
	"alter_no_def" => "缺少 ALTER 定义",
	"alter_parse_failed" => "解析 ALTER 定义失败",
	"alter_action_not_recognized" => "无法识别 ALTER 动作",
	"alter_no_add_col" => "ALTER 语句中未检测到要添加的列",
	"alter_pattern_mismatch" => "与您原始的 CREATE TABLE 语句模式不匹配",
	"alter_col_not_recognized" => "无法识别新列名或旧列名",
	"alter_unknown_operation" => "未知的 ALTER 操作！",
	"help_doc" => "帮助文档",
	"help1" => "SQLite 库扩展",
	"help1_x" => "%s 使用 PHP 库扩展与 SQLite 数据库交互。目前 %s 支持 PDO、SQLite3 和 SQLiteDatabase。PDO 和 SQLite3 处理 SQLite 第 3 版，SQLiteDatabase 处理第 2 版。因此，如果您的 PHP 安装了多个 SQLite 库扩展，PDO 和 SQLite3 会优先使用，以利用更好的技术。不过，如果您已有第 2 版的数据库，%s 只会对这些数据库强制使用 SQLiteDatabase。并非所有数据库都必须是同一版本。创建数据库时则会使用最先进的扩展。",
	"help2" => "创建新数据库",
	"help2_x" => "创建新数据库时，如果您没有自行填写扩展名，输入的名称后会自动附加合适的文件扩展名（.db、.db3、.sqlite 等）。数据库会创建在您为 \\\$directory 变量指定的目录中。",
	"help3" => "表与视图",
	"help3_x" => "数据库主页上会列出表和视图。由于视图是只读的，某些操作会被禁用。这些被禁用的操作会直接在其本应出现的位置上空缺。如果您想修改视图的数据，需要删除该视图，并用合适的 SELECT 语句重新创建一个查询其他现有表的新视图。更多信息请见 <a href='http://en.wikipedia.org/wiki/View_(database)' target='_blank'>http://en.wikipedia.org/wiki/View_(database)</a>",
	"help4" => "为新视图编写 SELECT 语句",
	"help4_x" => "创建新视图时，您必须编写一条 SQL SELECT 语句作为它的数据来源。视图本质上就是只读表，可以像普通表一样访问和查询，但不能通过插入、修改列或修改行来改变，只用于方便地取数据。",
	"help5" => "将结构导出到 SQL 文件",
	"help5_x" => "在导出为 SQL 文件的过程中，您可以选择包含创建表和列的语句。",
	"help6" => "将数据导出到 SQL 文件",
	"help6_x" => "在导出为 SQL 文件的过程中，您可以选择包含用表中的现有记录填充这些表的语句。",
	"help7" => "在导出的 SQL 文件中加入 DROP TABLE",
	"help7_x" => "在导出为 SQL 文件的过程中，您可以选择包含在创建表之前先 DROP 已存在表的语句，以避免表已存在时创建失败。",
	"help8" => "在导出的 SQL 文件中加入事务",
	"help8_x" => "在导出为 SQL 文件的过程中，您可以选择把语句包裹在 TRANSACTION（事务）中，这样使用导出文件导入时一旦出错，数据库可以回滚到之前的状态，避免只更新了一部分的数据。",
	"help9" => "在导出的 SQL 文件中加入注释",
	"help9_x" => "在导出为 SQL 文件的过程中，您可以选择包含说明每一步操作的注释，方便人工理解发生了什么。",
	"help10" => "部分索引",
	"help10_x" => "部分索引是由 WHERE 子句指定的表中部分行上的索引。注意这要求 SQLite 3.8.0 及以上版本，且带有部分索引的数据库文件无法被旧版本读写。参见 <a href='https://www.sqlite.org/partialindex.html' target='_blank'>SQLite 文档。</a>",
	"help11" => "文件上传大小上限",
	"help11_x" => "文件上传的最大大小由三个 PHP 配置决定：<em>upload_max_filesize</em>、<em>post_max_size</em> 和 <em>memory_limit</em>，以三者中的最小值为上限。要上传更大的文件，请调整 <em>php.ini</em> 中的这些值。",
);

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//普通用户没有理由修改此注释以下的任何内容
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

//- 初始化

// 加载可选的配置文件
$config_filename = './phpliteadmin.config.php';
if (is_readable($config_filename))
{
	include_once $config_filename;
}

//常量 1
define("PROJECT", "phpLiteAdmin");
define("VERSION", "1.9.8.2");
define("FORCETYPE", false); //强制指定所使用的扩展 (除调试外, 几乎所有情况下都应设为 false)
define("SYSTEMPASSWORD", $password); // 让事情更简单。
define('PROJECT_URL','https://www.phpliteadmin.org/');
define('DONATE_URL','https://www.phpliteadmin.org/donate/');
define('VERSION_CHECK_URL','https://www.phpliteadmin.org/current_version.php');
define('PROJECT_BUGTRACKER_LINK','<a href="https://bitbucket.org/phpliteadmin/public/issues?status=new&status=open" target="_blank">https://bitbucket.org/phpliteadmin/public/issues?status=new&status=open</a>');
define('PROJECT_INSTALL_LINK','<a href="https://bitbucket.org/phpliteadmin/public/wiki/Installation" target="_blank">https://bitbucket.org/phpliteadmin/public/wiki/Installation</a>');

// 到这里为止我们不输出任何内容。调试输出可能出现在这里, 会被 ob 捕获并稍后抛出
ob_start();

// 资源输出 (css 和 javascript 文件)
// 尽快跳出主代码, 而不初始化会话
if (isset($_GET['resource']))
{
	Resources::output($_GET['resource']);
	exit();
}

// 不要乱动这里 - 登录会话需要用到
ini_set('session.cookie_httponly', '1');
session_start();

// 加入了版本号, 这样更新后就不会再使用旧的会话数据
// cookie 名称不能包含符号, 下划线除外
define("COOKIENAME", preg_replace('/[^a-zA-Z0-9_]/', '_', $cookie_name . '_' . VERSION) );

$params = new GetParameters();

if($debug==true)
{
	ini_set("display_errors", 1);
	error_reporting(E_STRICT | E_ALL);
} else
{
	@ini_set("display_errors", 0);
}

// 类 MicroTimer (issue #146)
// 封装对 microtime() 的调用, 计算经过的时间并对输出取整
// 注意: 必须定义在使用之前, PHP 8 下不能依赖后置声明
class MicroTimer {

	private $startTime, $stopTime;

	// 创建并启动一个计时器
	function __construct()
	{
		$this->startTime = microtime(true);
	}

	// 停止一个计时器
	public function stop()
	{
		$this->stopTime = microtime(true);
	}

	// 返回从计时器创建起的秒数, 或已经过的
	// 从创建到调用 ->stop() 之间的时间
	public function elapsed()
	{
		if ($this->stopTime)
			return round($this->stopTime - $this->startTime, 4);

		return round(microtime(true) - $this->startTime, 4);
	}

	// 将 MicroTimer 对象当作字符串使用时调用
	public function __toString()
	{
		return (string) $this->elapsed();
	}

}

// 启动计时器以记录页面加载时间
$pageTimer = new MicroTimer();

// 加载语言文件
if($language != 'en') {
 	$temp_lang=$lang;
	if(is_file('languages/lang_'.$language.'.php'))
		include('languages/lang_'.$language.'.php');
	elseif(is_file('lang_'.$language.'.php'))
		include('lang_'.$language.'.php');
	$lang = array_merge($temp_lang, $lang);
	unset($temp_lang);
}

// 如果开启了 MAGIC QUOTES 则执行 stripslashes
// 这只是一个变通办法。最好还是关闭 magic quotes!
// 这段代码来自 http://php.net/manual/en/security.magicquotes.disabling.php
// PHP 8 已移除 get_magic_quotes_gpc(), 用 ini 读取替代
$get_magic_quotes_gpc = (($quotes_gpc = ini_get('magic_quotes_gpc')) && strtolower($quotes_gpc) !== 'off');
if ( function_exists('get_magic_quotes_gpc') && $get_magic_quotes_gpc ) {
	$process = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
	foreach ($process as $key => $val) {
		foreach ($val as $k => $v) {
			unset($process[$key][$k]);
			if (is_array($v)) {
				$process[$key][stripslashes($k)] = $v;
				$process[] = &$process[$key][stripslashes($k)];
			} else {
				$process[$key][stripslashes($k)] = stripslashes($v);
			}
		}
	}
	unset($process);
}


//数据类型数组
$sqlite_datatypes = array("INTEGER", "REAL", "TEXT", "BLOB","NUMERIC","BOOLEAN","DATETIME");

//可用的 SQLite 函数数组 (不要在这里添加任何内容, 否则会出问题)
$sqlite_functions = array("abs", "hex", "length", "lower", "ltrim", "random", "round", "rtrim", "trim", "typeof", "upper");

//- 支持函数

// 用于 php < 5.6.0
if(!function_exists('hash_equals'))
{
	function hash_equals($str1, $str2)
	{
		if(strlen($str1) != strlen($str2))
			return false;
		else {
			$res = $str1 ^ $str2;
			$ret = 0;
			for($i = strlen($res) - 1; $i >= 0; $i--)
				$ret |= ord($res[$i]);
			return !$ret;
		}
	}
}

//允许在注释或字符串内忽略 SQL 分隔符的函数
function explode_sql($delimiter, $sql)
{
	$ign = array('"' => '"', "'" => "'", "/*" => "*/", "--" => "\n"); // 忽略序列。
	$out = array();
	$last = 0;
	$slen = strlen($sql);
	$dlen = strlen($delimiter);
	$i = 0;
	while($i < $slen)
	{
		// 按分隔符拆分
		if($slen - $i >= $dlen && substr($sql, $i, $dlen) == $delimiter)
		{
			array_push($out, substr($sql, $last, $i - $last));
			$last = $i + $dlen;
			$i += $dlen;
			continue;
		}
		// 吞掉注释和字符串字面量
		foreach($ign as $start => $end)
		{
			$ilen = strlen($start);
			if($slen - $i >= $ilen && substr($sql, $i, $ilen) == $start)
			{
				$i+=strlen($start);
				$elen = strlen($end);
				while($i < $slen)
				{
					if($slen - $i >= $elen && substr($sql, $i, $elen) == $end)
					{
						// SQL 注释字符可以通过写两遍来转义。这里识别并跳过它们。
						if($start == $end && $slen - $i >= $elen*2 && substr($sql, $i, $elen*2) == $end.$end)
						{
							$i += $elen * 2;
							continue;
						}
						else
						{
							$i += $elen;
							continue 3;
						}
					}
					$i++;
				}
				continue 2;
			}
		}
		$i++;
	}
	if($last < $slen)
		array_push($out, substr($sql, $last, $slen - $last));
	return $out;
}

//扫描整个目录树及子目录的函数
function dir_tree($dir)
{
	$path = array();
	$stack = array($dir);
	while($stack)
	{
		$thisdir = array_pop($stack);
		if($dircont = scandir($thisdir))
		{
			$i=0;
			while(isset($dircont[$i]))
			{
				if($dircont[$i] !== '.' && $dircont[$i] !== '..')
				{
					$current_file = $thisdir.DIRECTORY_SEPARATOR.$dircont[$i];
					if(is_file($current_file))
					{
						$path[] = $thisdir.DIRECTORY_SEPARATOR.$dircont[$i];
					}
					elseif (is_dir($current_file))
					{
						$path[] = $thisdir.DIRECTORY_SEPARATOR.$dircont[$i];
						$stack[] = $current_file;
					}
				}
				$i++;
			}
		}
	}
	return $path;
}

//该函数输出指向文档的帮助 [?] 链接
function helpLink($name)
{
	global $lang;
	return "<a href='?help=1' onclick='openHelp(\"".$name."\"); return false;' class='helpq' title='".$lang['help'].": ".$name."' target='_blank'><span>[?]</span></a>";
}

// 将值编码为 HTML 的函数, 类似 htmlentities, 但调整了默认设置
function htmlencode($value, $flags=ENT_QUOTES, $encoding ="UTF-8")
{
	return htmlentities((string) $value, $flags, $encoding);
}

// 截断字符串字符数
function subString($str)
{
	global $charsNum, $params;
	if($charsNum > 10 && (!isset($params->fulltexts) || !$params->fulltexts) && mb_strlen($str)>$charsNum)
	{
		$str = mb_substr($str, 0, $charsNum).'...';
	}
	return $str;
}

// 正确标记搜索词并进行 HTML 编码
function markSearchWords($input, $field, $search)
{
	$output = htmlencode($input);
	if(isset($search['values'][$field]) && is_array($search['values'][$field]))
	{
		// 构建一个匹配 (所有) 搜索词的正则
		$regex = '/';
		$vali=0;
		foreach($search['values'][$field] as $searchValue)
		{
			if($search['operators'][$field] =='LIKE' || $search['operators'][$field] == 'LIKE%')
				$regex .= '(?:'.($searchValue[0]=='%'?'':'^'); // 搜索值必须出现在开头吗?
			$regex .= preg_quote(trim($searchValue,'%'),'/');  // 搜索值
			if($search['operators'][$field] =='LIKE' || $search['operators'][$field] == 'LIKE%')
				$regex .= (substr($searchValue,-1)=='%'?'':'$').')';  // 搜索值必须出现在结尾吗?
			if($vali++<count($search['values'][$field]))
				$regex .= '|';    // 还有一个搜索值, 所以我们加上一个竖线
		}
		$regex .= '/u';
		// LIKE 运算符不区分大小写, 其他运算符区分
		if($search['operators'][$field] =='LIKE' || $search['operators'][$field] == 'LIKE%')
			$regex.= 'i';

		// 把字符串拆成匹配且应高亮的部分和中间的部分
		// $fldBetweenParts: 不匹配的部分 (可能包含空字符串)
		$fldBetweenParts = preg_split($regex, $input);
		// $fldFoundParts[0]: 匹配的部分
		preg_match_all($regex, $input, $fldFoundParts);

		// 把各部分拼接起来
		$output = '';
		foreach($fldBetweenParts as $index => $betweenPart)
		{
			$output .= htmlencode($betweenPart); // 不匹配的部分 (可能为空)
			if(isset($fldFoundParts[0][$index]))
				$output .= '<u class="found">'.htmlencode($fldFoundParts[0][$index]).'</u>'; // 匹配到的部分
		}
	}
	return $output;
}

// 检查数据库文件的 (新) 名称
function checkDbName($name)
{
	global $allowed_extensions;
	$info = pathinfo($name);
	if(isset($info['extension']) && !in_array($info['extension'], $allowed_extensions))
	{
		return false;
	} else
	{
		return (!is_file($name) && !is_dir($name));
	}

}

// 检查某个路径是否为本工具管理的数据库
// 要求 $databases 已被填充!
// 如果受管理则返回数据库的键, 否则返回 false。
function isManagedDB($path)
{
	global $databases;
	foreach($databases as $db_key => $database)
	{
		if($path === $database['path'])
		{
			// 是我们管理的数据库。没问题。
			// 返回该键。
			return $db_key;
		}
	}
	// 不是我们管理的数据库!
	return false;
}

// 根据列的类型名获取该列的亲和类型
// 规则见 https://www.sqlite.org/datatype3.html 第 2.1 节
function get_type_affinity($type)
{
	if (preg_match("/INT/i", $type))
		return "INTEGER";
	else if (preg_match("/(?:CHAR|CLOB|TEXT)/i", $type))
		return "TEXT";
	else if (preg_match("/BLOB/i", $type) || $type=="")
		return "NONE";
	else if (preg_match("/(?:REAL|FLOA|DOUB)/i", $type))
		return "REAL";
	else
		return "NUMERIC";
}


// 根据 PHP 的 upload_max_filesize 返回以字节为单位的文件大小限制
// post_max_size 和 memory_limit。无限制时返回 -1。
function fileUploadMaxSize()
{
	$max1 = parseSize(ini_get('post_max_size'));
	$max2 = parseSize(ini_get('upload_max_filesize'));
	$max3 = parseSize(ini_get('memory_limit'));
	if($max1>0 && ($max1<=$max2 || $max2==0) && ($max1<=$max3 || $max3==-1))
		return $max1;
	elseif($max2>0 && ($max2<=$max1 || $max1==0) && ($max2<=$max3 || $max3==-1))
		return $max2;
	elseif($max3>-1 && ($max3<=$max1 || $max1==0) && ($max3<=$max2 || $max2==0))
		return $max3;
	else
		return -1; // 无限制
}

// 把给定的尺寸字符串 (如 "12M") 解析为字节数
// 基于 https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Component%21Utility%21Bytes.php/function/Bytes%3A%3AtoInt/8.2.x
function parseSize($size)
{
	// 从尺寸中移除非单位字符。
	$unit = preg_replace('/[^bkmgtpezy]/i', '', $size);
	// 从尺寸中移除非数字字符。
	$size = preg_replace('/[^0-9\.]/', '', $size);
	if ($unit)
	{
		// 在有序字符串中找到单位的位置, 该位置即为所需
		// 乘以千字节的数量级的幂。
		return round($size * pow(1024, stripos('bkmgtpezy', $unit[0])));
	}
	else {
		return round($size);
	}
}


//- 检查用户身份验证、登录和注销
$auth = new Authorization(); //创建授权对象

// 检查用户是否尝试注销
if (isset($_GET['logout']))
	$auth->revoke();
// 检查用户是否尝试登录
else if (isset($_POST['login']) && isset($_POST['password']))
{
	$attempt = $auth->attemptGrant($_POST['password'], isset($_POST['remember']));
	$params->redirect( $attempt ? array():array('failed'=>'1') );
}

//- 对数据库文件和批量数据的操作
if ($auth->isAuthorized())
{

	//- 创建新数据库
	if(isset($_POST['new_dbname']))
	{
		if($_POST['new_dbname']=='')
			$params->redirect(array('table'=>null), $lang['err'].': '.$lang['db_blank']);
		else
		{
			$str = preg_replace('@[^\w\-.]@u','', $_POST['new_dbname']);
			$dbname = $str;
			$dbpath = $str;
			if(checkDbName($dbname))
			{
				$tdata = array();
				$tdata['name'] = $dbname;
				$tdata['path'] = $directory.DIRECTORY_SEPARATOR.$dbpath;
				if(isset($_POST['new_dbtype']))
					$tdata['type'] = $_POST['new_dbtype'];
				else
					$tdata['type'] = 3;
				$td = new Database($tdata);
				$td->query("VACUUM");
			} else
			{
				if(is_file($dbname) || is_dir($dbname))
					$params->redirect(array('view'=>'structure'),$lang['err'].': '.sprintf($lang['db_exists'], htmlencode($dbname)));
				else
					$params->redirect(array('view'=>'structure'),$lang['extension_not_allowed'].': '.implode(', ', array_map('htmlencode', $allowed_extensions)).'<br />'.$lang['add_allowed_extension']);
			}
		}
	}

	//- 扫描目录以查找数据库
	if($directory!==false)
	{
		if($directory[strlen($directory)-1]==DIRECTORY_SEPARATOR) //如果目录末尾有斜杠, 则去掉它
			$directory = substr($directory, 0, strlen($directory)-1);

		if(is_dir($directory)) //确保目录有效
		{
			if($subdirectories===true)
				$arr = dir_tree($directory);
			else
				$arr = scandir($directory);
			$databases = array();
			$j = 0;
			for($i=0; $i<sizeof($arr); $i++) //遍历数据库目录中的所有文件
			{
				if($subdirectories===false)
					$arr[$i] = $directory.DIRECTORY_SEPARATOR.$arr[$i];

				if(@!is_file($arr[$i])) continue;
				$con = file_get_contents($arr[$i], false, null, 0, 60);
				if(strpos($con, "** This file contains an SQLite 2.1 database **", 0)!==false || strpos($con, "SQLite format 3", 0)!==false)
				{
					$databases[$j]['path'] = $arr[$i];
					if($subdirectories===false)
						$databases[$j]['name'] = basename($arr[$i]);
					else
						$databases[$j]['name'] = $arr[$i];
					$databases[$j]['writable'] = is_writable($databases[$j]['path']);
					$databases[$j]['writable_dir'] = is_writable(dirname($databases[$j]['path']));
					$databases[$j]['readable'] = is_readable($databases[$j]['path']);
					$j++;
				}
			}
			// 2011 年 8 月 22 日: gkf 修复了 bug #50。
			sort($databases);
			if(isset($tdata))
			{
				foreach($databases as $db_id => $database)
				{
					if($database['path'] === $tdata['path'])
					{
						$currentDB = $database;
						$params->database = $database['path'];
						break;
					}
				}
			}
		}
		else //目录无效 - 显示错误并退出
		{
			echo "<div class='confirm' style='margin:20px;'>".$lang['not_dir']."</div>";
			exit();
		}
	}
	else
	{
		for($i=0; $i<sizeof($databases); $i++)
		{
			if(!file_exists($databases[$i]['path']))
			{
				// 文件不存在, 如果权限允许, 将在点击时创建它
				$databases[$i]['writable'] = is_writable(dirname($databases[$i]['path']));
				$databases[$i]['writable_dir'] = is_writable(dirname($databases[$i]['path']));
				$databases[$i]['readable'] = is_writable(dirname($databases[$i]['path']));
			}
			else
			{
				$databases[$i]['writable'] = is_writable($databases[$i]['path']);
				$databases[$i]['writable_dir'] = is_writable(dirname($databases[$i]['path']));
				$databases[$i]['readable'] = is_readable($databases[$i]['path']);
			}
		}
		sort($databases);
	}
	// 现在 $databases 数组已设置。检查所选数据库是否为受管理的数据库 (是否在此数组中)
	if(!isset($currentDB) && (isset($_GET['database']) || isset($_POST['database']) ) )
	{
		$selected_db = ( isset($_POST['database']) ? $_POST['database'] : $_GET['database'] );
		$db_key = isManagedDB($selected_db);
		if($db_key!==false) {
			$currentDB = $databases[$db_key];
			$params->database = $databases[$db_key]['path'];
		}
	}

	//- 删除已有数据库
	if(isset($_GET['database_delete']))
	{
		$dbpath = $_POST['database_delete'];
		// 检查 $dbpath 是否真的是我们管理的数据库
		$checkDB = isManagedDB($dbpath);
		if($checkDB !== false)
		{
			unlink($dbpath);
			unset($params->database);
			unset($currentDB);
			unset($databases[$checkDB]);
		} else die($lang['err'].': '.$lang['delete_only_managed']);
	}

	//- 重命名已有数据库
	if(isset($_GET['database_rename']))
	{
		$oldpath = $_POST['oldname'];
		$newpath = $_POST['newname'];
		$oldpath_parts = pathinfo($oldpath);
		$newpath_parts = pathinfo($newpath);
		// 只是重命名?
		$newpath = $oldpath_parts['dirname'].DIRECTORY_SEPARATOR.basename($_POST['newname']);
		if($newpath != $_POST['newname'] && $subdirectories)
		{
			// 看来该文件不仅要重命名, 还要移动。
			// 我们需要确保它仍在 $directory 之内...
			$new_realpath = realpath($newpath_parts['dirname']).DIRECTORY_SEPARATOR;
			$directory_realpath = realpath($directory).DIRECTORY_SEPARATOR;
			if(strpos($new_realpath, $directory_realpath)===0)
			{
				// 没问题, 新目录在 $directory 之内
				$newpath =  $_POST['newname'];
			}
			else $params->redirect(array('view'=>'rename'), $lang['err'].': '.$lang['db_moved_outside']);
		}

		if(checkDbName($newpath))
		{
			$checkDB = isManagedDB($oldpath);
			if($checkDB !==false )
			{
				rename($oldpath, $newpath);
				$databases[$checkDB]['path'] = $newpath;
				$databases[$checkDB]['name'] = basename($newpath);
				$currentDB = $databases[$checkDB];
				$params->database = $databases[$checkDB]['path'];
				$params->redirect(array('view'=>'rename'), sprintf($lang['db_renamed'], htmlencode($oldpath))." '".htmlencode($newpath)."'.");
			}
			else $params->redirect(array('view'=>'rename'), $lang['err'].': '.$lang['rename_only_managed']);
		}
		else
		{
			if(is_file($newpath) || is_dir($newpath))
				$params->redirect(array('view'=>'rename'), $lang['err'].": " . sprintf($lang['db_exists'], htmlencode($newpath)));
			else
				$params->redirect(array('view'=>'rename'), $lang['err'].": " . $lang['extension_not_allowed'].': '.implode(', ', array_map('htmlencode', $allowed_extensions)).'<br />'.$lang['add_allowed_extension']);
		}
	}


	//- 导出 (下载转储) 已有数据库
	if(isset($_POST['export']))
	{
		ob_end_clean();
		$export_filename = str_replace(array("\r", "\n"), '',$_POST['filename']); // 防止 http 头注入 (仅限 php < 5.1.2)
		if($_POST['export_type']=="sql")
		{
			header('Content-Type: text/sql');
			header('Content-Disposition: attachment; filename="'.$export_filename.'.'.$_POST['export_type'].'";');
			if(isset($_POST['tables']))
				$tables = $_POST['tables'];
			else
			{
				$tables = array();
				$tables[0] = $_POST['single_table'];
			}
			$drop = isset($_POST['drop']);
			$structure = isset($_POST['structure']);
			$data = isset($_POST['data']);
			$transaction = isset($_POST['transaction']);
			$comments = isset($_POST['comments']);
			if(!isset($currentDB))
				die(htmlencode($lang['err']).': no database selected');
			$db = new Database($currentDB);
			echo $db->export_sql($tables, $drop, $structure, $data, $transaction, $comments);
		}
		else if($_POST['export_type']=="csv")
		{
			header("Content-type: application/csv");
			header('Content-Disposition: attachment; filename="'.$export_filename.'.'.$_POST['export_type'].'";');
			header("Pragma: no-cache");
			header("Expires: 0");
			if(isset($_POST['tables']))
				$tables = $_POST['tables'];
			else
			{
				$tables = array();
				$tables[0] = $_POST['single_table'];
			}
			$field_terminate = $_POST['export_csv_fieldsterminated'];
			$field_enclosed = $_POST['export_csv_fieldsenclosed'];
			$field_escaped = $_POST['export_csv_fieldsescaped'];
			$null = $_POST['export_csv_replacenull'];
			$crlf = isset($_POST['export_csv_crlf']);
			$fields_in_first_row = isset($_POST['export_csv_fieldnames']);
			if(!isset($currentDB))
				die(htmlencode($lang['err']).': no database selected');
			$db = new Database($currentDB);
			echo $db->export_csv($tables, $field_terminate, $field_enclosed, $field_escaped, $null, $crlf, $fields_in_first_row);
		}
		exit();
	}

	//- 把文件导入已有数据库
	if(isset($_POST['import']))
	{
		// PHP 8: 数据库参数缺失/非法时给出提示, 避免 $currentDB 未定义
		if(!isset($currentDB))
			die(htmlencode($lang['err']).': no database selected');
		$db = new Database($currentDB);
		$db->registerUserFunction($custom_functions);
		if($_POST['import_type']=="sql")
		{
			$data = file_get_contents($_FILES["file"]["tmp_name"]);
			$importSuccess = $db->import_sql($data);
		}
		else
		{
			$field_terminate = $_POST['import_csv_fieldsterminated'];
			$field_enclosed = $_POST['import_csv_fieldsenclosed'];
			$field_escaped = $_POST['import_csv_fieldsescaped'];
			$null = $_POST['import_csv_replacenull'];
			$fields_in_first_row = isset($_POST['import_csv_fieldnames']);
			if(isset($_POST['single_table']) && $_POST['single_table']!='')
				$table = $_POST['single_table'];
			else
			{
				$table = basename($_FILES["file"]["name"],".csv");
				$i="";
				while($db->getTypeOfTable($table.$i)!="")
				{
					if($i=="")
						$i=2;
					else
						$i++;
				}
				$table = $table.$i;
			}
			$importSuccess = $db->import_csv($_FILES["file"]["tmp_name"], $table, $field_terminate, $field_enclosed, $field_escaped, $null, $fields_in_first_row);
		}
	}
	//- 下载 (备份) 数据库文件 (作为 SQLite 文件, 而不是转储)
	if(isset($_GET['download']) && isManagedDB($_GET['download'])!==false)
	{
		ob_end_clean();
		header("Content-type: application/octet-stream");
		header('Content-Disposition: attachment; filename="'.basename($_GET['download']).'";');
		header("Pragma: no-cache");
		header("Expires: 0");
		readfile($_GET['download']);
		exit;
	}

	//- 选择数据库 (从会话中或第一个可用的)
	if(!isset($currentDB) && count($databases)>0)
	{
		//将当前数据库设为数组中第一个存在的数据库 (默认)
		$currentDB = reset($databases);
		$params->database = $currentDB['path'];
	}

	if(isset($currentDB))
	{
		//- 打开数据库 (创建 Database 对象)
		$db = new Database($currentDB); //创建 Database 对象
		$db->registerUserFunction($custom_functions);
	}

	// 尽早收集参数, 只收集一次
	$target_table = isset($_GET['table']) ? $_GET['table'] : null;
	// 我们是在处理视图吗? 在这里检查一次
	$target_table_type = !is_null($target_table) ? $db->getTypeOfTable($target_table) : null;
	if(is_null($target_table_type) && !is_null($target_table))
		$params->redirect(array('table'=>null), $lang['err'].': '.sprintf($lang['tbl_inexistent'], htmlencode($target_table)));
	$params->table = $target_table;

	// 初始化/修改 fulltexts 和 numrows 参数
	if(isset($_GET['fulltexts']))
		$params->fulltexts = ($_GET['fulltexts'] ? 1 : 0);
	else
		$params->fulltexts = 0;

	if(isset($_GET['numRows']) && intval($_GET['numRows'])>0)
		$params->numRows = intval($_GET['numRows']);
	else
		$params->numRows = $rowsNum;

	//- 根据 $_GET['action'] 分派无输出的操作
	if(isset($_GET['action']) && isset($_GET['confirm']))
	{
		switch($_GET['action'])
		{
		//- 表操作

			//- 创建表 (=table_create)
			case "table_create":
				$num = intval($_POST['rows']);
				$name = $_POST['tablename'];
				$primary_keys = array();
				for($i=0; $i<$num; $i++)
				{
					if($_POST[$i.'_field']!="" && isset($_POST[$i.'_primarykey']))
					{
						$primary_keys[] = $_POST[$i.'_field'];
					}
				}
				$query = "CREATE TABLE ".$db->quote($name)." (";
				for($i=0; $i<$num; $i++)
				{
					if($_POST[$i.'_field']!="")
					{
						$query .= $db->quote($_POST[$i.'_field'])." ";
						$query .= $_POST[$i.'_type']." ";
						if(isset($_POST[$i.'_primarykey']))
						{
							if(count($primary_keys)==1)
							{
								$query .= "PRIMARY KEY ";
								if(isset($_POST[$i.'_autoincrement']) && $db->getType() != "SQLiteDatabase")
									$query .=  "AUTOINCREMENT ";
							}
							$query .= "NOT NULL ";
						}
						if(!isset($_POST[$i.'_primarykey']) && isset($_POST[$i.'_notnull']))
							$query .= "NOT NULL ";
						if($_POST[$i.'_defaultoption']!='defined' && $_POST[$i.'_defaultoption']!='none' && $_POST[$i.'_defaultoption']!='expr')
							$query .= "DEFAULT ".$_POST[$i.'_defaultoption']." ";
						elseif($_POST[$i.'_defaultoption']=='expr')
							$query .= "DEFAULT (".$_POST[$i.'_defaultvalue'].") ";
						elseif(isset($_POST[$i.'_defaultvalue']) && $_POST[$i.'_defaultoption']=='defined')
						{
							$typeAffinity = get_type_affinity($_POST[$i.'_type']);
							if(($typeAffinity=="INTEGER" || $typeAffinity=="REAL" || $typeAffinity=="NUMERIC") && is_numeric($_POST[$i.'_defaultvalue']))
								$query .= "DEFAULT ".$_POST[$i.'_defaultvalue']."  ";
							else
								$query .= "DEFAULT ".$db->quote($_POST[$i.'_defaultvalue'])." ";
						}
						$query = substr($query, 0, -1);
						$query .= ", ";
					}
				}
				if (count($primary_keys)>1)
				{
					$compound_key = "";
					foreach ($primary_keys as $primary_key)
					{
						$compound_key .= ($compound_key=="" ? "" : ", ") . $db->quote($primary_key);
					}
					$query .= "PRIMARY KEY (".$compound_key."), ";
				}
				$query = substr($query, 0, -2);
				$query .= ")";
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['tbl']." '".htmlencode($_POST['tablename'])."' ".$lang['created'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(($result===false ? array() : array('action'=>'column_view', 'table'=>$name) ), $completed);
				break;

			//- 清空表 (=table_empty)
			case "table_empty":
				$query1 = "DELETE FROM ".$db->quote_id($_GET['table']).";";
				$result1 = $db->query($query1);
				if($result1 === false)
					$completed = $db->getError(true);
				if(isset($_POST['vacuum']) && $_POST['vacuum'])
				{
					$query2 = "VACUUM;";
					$result2 = $db->query($query2);
				}
				else
					$query2 = "";
				if($result1 !== false)
					$completed = $lang['tbl']." '".htmlencode($_GET['table'])."' ".$lang['emptied'].".<br/><span style='font-size:11px;'>".htmlencode($query1)."<br />".htmlencode($query2)."</span>";
				$params->redirect(($result1===false ? array() : array('action'=>'row_view') ), $completed);
				break;

			//- 创建视图 (=view_create)
			case "view_create":
				$query = "CREATE VIEW ".$db->quote($_POST['viewname'])." AS ".$_POST['select'];
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['view']." '".htmlencode($_POST['viewname'])."' ".$lang['created'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(($result===false ? array() : array('action'=>'column_view', 'table'=>$_POST['viewname']) ), $completed);
				break;

			//- 删除表 (=table_drop)
			case "table_drop":
				$query1 = "DROP TABLE ".$db->quote_id($_GET['table']).";";
				$result1=$db->query($query1);
				if($result1 === false)
					$completed = $db->getError(true);
				if(isset($_POST['vacuum']) && $_POST['vacuum'])
				{
					$query2 = "VACUUM;";
					$result2 = $db->query($query2);
				}
				else
					$query2 = "";
				if($result1 !== false)
				{
					$target_table = null;
					$completed = $lang['tbl']." '".htmlencode($_GET['table'])."' ".$lang['dropped'].".<br/><span style='font-size:11px;'>".htmlencode($query1)."<br />".htmlencode($query2)."</span>";;
				}
				$params->redirect(array('table'=>null), $completed);
				break;

			//- 删除视图 (=view_drop)
			case "view_drop":
				$query = "DROP VIEW ".$db->quote_id($_POST['viewname']);
				$result=$db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['view']." '".htmlencode($_POST['viewname'])."' ".$lang['dropped'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(array('table'=>null), $completed);
				break;

			//- 重命名表 (=table_rename)
			case "table_rename":
				$query = "ALTER TABLE ".$db->quote_id($_GET['table'])." RENAME TO ".$db->quote($_POST['newname']);
				$type = $db->getTypeOfTable($_GET['table']);
				if($db->getVersion()==3 && $type=='table' // SQLite 3 可以重命名表, 但不能重命名视图
					// 在 SQL(ite) 中表名不区分大小写, 因此 SQLite 不支持修改大小写。
					// 但表名在存储和显示时区分大小写, 所以我们用变通方法实现区分大小写的重命名。
					&& !($_GET['table'] !== $_POST['newname'] && strtolower($_GET['table']) === strtolower($_POST['newname']))
					)
					$result = $db->query($query, true);
				else
					// 该变通方法可重命名 sqlite2 的表以及两种 sqlite 版本的视图, 也能进行区分大小写的重命名。
					$result = $db->query($query, false); 
				if($result === false)
					$completed = $db->getError(true);
				else
				{
					$completed = $lang['tbl']." '".htmlencode($_GET['table'])."' ".$lang['renamed']." '".htmlencode($_POST['newname'])."'.<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
					$target_table = $_POST['newname'];
				}
				$params->redirect(array('action'=>'row_view', 'table'=>$_POST['newname']), $completed);
				break;

			//- 搜索表 (=table_search)
			case "table_search":
				$searchValues = array();
				$searchOperators = array();

				$tableInfo = $db->getTableInfo($target_table);
				$j = 0;
				$whereExpr = array();
				for($i=0; $i<sizeof($tableInfo); $i++)
				{
					$field = $tableInfo[$i][1];
					$operator = $_POST['field_'.$i.'_operator'];
					$searchOperators[$field] = $operator;
					$value = $_POST['field_'.$i.'_value'];
					if($value!="" || $operator=="!= ''" || $operator=="= ''" || $operator == 'IS NULL' || $operator == 'IS NOT NULL')
					{
						if($operator=="= ''" || $operator=="!= ''" || $operator == 'IS NULL' || $operator == 'IS NOT NULL')
							$whereExpr[$j] = $db->quote_id($field)." ".$operator;
						else{
							if($operator == "LIKE%"){
								$operator = "LIKE";
								if(!preg_match('/(^%)|(%$)/', $value)) $value = '%'.$value.'%';
								$searchValues[$field] = array($value);
								$valueQuoted = $db->quote($value);
							}
							elseif($operator == 'IN' || $operator == 'NOT IN')
							{
								$value = trim($value, '() ');
								$values = explode(',',$value);
								$values = array_map('trim', $values, array_fill(0,count($values),' \'"'));
								if($operator == 'IN')
									$searchValues[$field] = $values;
								$values = array_map(array($db, 'quote'), $values);
								$valueQuoted = '(' .implode(', ', $values) . ')';
							}
							else
							{
								$searchValues[$field] = array($value);
								$valueQuoted = $db->quote($value);
							}
							$whereExpr[$j] = $db->quote_id($field)." ".$operator." ".$valueQuoted;
						}
						$j++;
					}
				}
				$searchWhere = '';
				if(sizeof($whereExpr)>0)
				{
					$searchWhere .= " WHERE ".$whereExpr[0];
					for($i=1; $i<sizeof($whereExpr); $i++)
					{
						$searchWhere .= " AND ".$whereExpr[$i];
					}
				}
				$searchID = md5($searchWhere);
				$_SESSION[COOKIENAME.'search'][$searchID] = array(
					'where' => $searchWhere,
					'values' => $searchValues,
					'operators' => $searchOperators
					);
				$params->redirect(array('action'=>'table_search','search'=>$searchID));
			break;

		//- 行操作

			//- 创建行 (=row_create)
			case "row_create":
				$completed = "";
				$num = $_POST['newRows'];
				$z = 0;
				$error = false;

				$tableInfo = $db->getTableInfo($target_table);

				for($i=0; $i<$num; $i++)
				{
					if(!isset($_POST[$i.":ignore"]))
					{
						$query_cols = "";
						$query_vals = "";
						$all_default = true;
						for($j=0; $j<sizeof($tableInfo); $j++)
						{
							$null = isset($_POST[$j."_null"][$i]);
							$type = strtoupper($tableInfo[$j]['type']);
							$typeAffinity = get_type_affinity($type);
							if(!$null && isset($_POST[$i.":".$j]))
								$value = $_POST[$i.":".$j];
							else
								$value = "";
							if(preg_match('/^BLOB/', $type))
							{
								if($_FILES[$i.":".$j]["error"] == UPLOAD_ERR_OK && is_file($_FILES[$i.":".$j]["tmp_name"]))
									$blobFiles[$j] = $_FILES[$i.":".$j]["tmp_name"];
								else
									$blobFiles[$j] = null;
							}
							elseif($value===$tableInfo[$j]['dflt_value'])
							{
								// 如果该值是默认值, 则跳过它
								continue;
							}
							$all_default = false;
							$query_cols .= $db->quote_id($tableInfo[$j]['name']).",";

							$function = $_POST["function_".$j][$i];
							if($function!="")
								$query_vals .= $function."(";
							if(preg_match('/^BLOB/', $type))
								$query_vals .= ':blobval'.$j;
							elseif(($typeAffinity=="TEXT" || $typeAffinity=="NONE") && !$null)
								$query_vals .= $db->quote($value);
							elseif(($typeAffinity=="INTEGER" || $typeAffinity=="REAL"|| $typeAffinity=="NUMERIC") && $value=="")
								$query_vals .= "NULL";
							elseif($null)
								$query_vals .= "NULL";
							else
								$query_vals .= $db->quote($value);
							if($function!="")
								$query_vals .= ")";
							$query_vals .= ",";
						}
						$query = "INSERT INTO ".$db->quote_id($target_table);
						if(!$all_default)
						{
							$query_cols = substr($query_cols, 0, strlen($query_cols)-1);
							$query_vals = substr($query_vals, 0, strlen($query_vals)-1);

							$query.=" (". $query_cols . ") VALUES (". $query_vals. ")";
						} else {
							$query .= " DEFAULT VALUES";
						}
						if(isset($blobFiles))
						{
							// blob 文件需要用预处理语句处理, 否则查询体积会太大
							$handle = $db->prepareQuery($query);
							foreach($blobFiles as $j=>$filename)
								$db->bindValue($handle, ':blobval'.$j, file_get_contents($filename), 'blob');

							$result1 = $db->executePrepared($handle, false);
						}
						else
							$result1 = $db->query($query);
						if($result1===false)
							$error = true;
						$completed .= "<span style='font-size:11px;'>".htmlencode($query)."</span><br/>";
						$z++;
					}
				}
				if($error)
					$completed = $db->getError(true);
				else
					$completed = $z." ".$lang['rows']." ".$lang['inserted'].".<br/><br/>".$completed;
				$params->redirect(array('action'=>'row_view'), $completed);
				break;

			//- 删除行 (=row_delete)
			case "row_delete":
				$pks = json_decode($_GET['pk']);

				$query = "DELETE FROM ".$db->quote_id($target_table)." WHERE (".$db->wherePK($target_table,json_decode($pks[0])).")";
				for($i=1; $i<sizeof($pks); $i++)
				{
					$query .= " OR (".$db->wherePK($target_table,json_decode($pks[$i])).")";
				}
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = sizeof($pks)." ".$lang['rows']." ".$lang['deleted'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(array('action'=>'row_view'), $completed);
				break;

			//- 编辑行 (=row_edit)
			case "row_edit":
				$pks = json_decode($_GET['pk']);
				$z = 0;

				$tableInfo = $db->getTableInfo($target_table);

				if(isset($_POST['new_row']))
					$completed = "";
				else
					$completed = sizeof($pks)." ".$lang['rows']." ".$lang['affected'].".<br/><br/>";

				for($i=0; $i<sizeof($pks); $i++)
				{
					if(isset($_POST['new_row']))
					{
						$query_cols = "";
						$query_vals = "";
						$all_default = true;
						for($j=0; $j<sizeof($tableInfo); $j++)
						{
							$null = isset($_POST[$j."_null"][$i]);
							$type = strtoupper($tableInfo[$j]['type']);
							$typeAffinity = get_type_affinity($type);
							if(!$null)
							{
								if(preg_match('/^BLOB/', $type))
								{
									if(isset($_POST["row_".$i."_field_".$j."_blob_use"]) && $_POST["row_".$i."_field_".$j."_blob_use"]=='old')
									{
										$select = 'SELECT '.$db->quote_id($tableInfo[$j]['name']).' AS \'blob\' FROM '.$db->quote_id($target_table).' WHERE '.$db->wherePK($target_table, json_decode($pks[$i]));
										$bl = $db->select($select);
										$blobFiles[$j] = $bl['blob'];
										unset($bl);
									}
									else
									{
										if($_FILES[$i.":".$j]["error"] == UPLOAD_ERR_OK && is_file($_FILES[$i.":".$j]["tmp_name"]))
											$blobFiles[$j] = file_get_contents($_FILES[$i.":".$j]["tmp_name"]);
										else
											$blobFiles[$j] = null;
									}
								}
								else
									$value = $_POST[$j][$i];
							}
							else
								$value = "";
							if(!preg_match('/^BLOB/', $type) && $value===$tableInfo[$j]['dflt_value'])
							{
								// 如果该值是默认值, 则跳过它
								continue;
							}
							$all_default = false;
							$query_cols .= $db->quote_id($tableInfo[$j]['name']).",";

							$function = $_POST["function_".$j][$i];
							if($function!="")
								$query_vals .= $function."(";

							if(preg_match('/^BLOB/', $type))
								$query_vals .= ':blobval'.$j;
							elseif(($typeAffinity=="TEXT" || $typeAffinity=="NONE") && !$null)
								$query_vals .= $db->quote($value);
							elseif(($typeAffinity=="INTEGER" || $typeAffinity=="REAL"|| $typeAffinity=="NUMERIC") && $value=="")
								$query_vals .= "NULL";
							elseif($null)
								$query_vals .= "NULL";
							else
								$query_vals .= $db->quote($value);
							if($function!="")
								$query_vals .= ")";
							$query_vals .= ",";
						}
						$query = "INSERT INTO ".$db->quote_id($target_table);
						if(!$all_default)
						{
							$query_cols = substr($query_cols, 0, strlen($query_cols)-1);
							$query_vals = substr($query_vals, 0, strlen($query_vals)-1);

							$query.=" (". $query_cols . ") VALUES (". $query_vals. ")";
						} else {
							$query .= " DEFAULT VALUES";
						}

						if(isset($blobFiles))
						{
							// blob 文件需要用预处理语句处理, 否则查询体积会太大
							$handle = $db->prepareQuery($query);
							foreach($blobFiles as $j=>$blobval)
								$db->bindValue($handle, ':blobval'.$j, $blobval, 'blob');

							$result1 = $db->executePrepared($handle, false);
						}
						else
							$result1 = $db->query($query);
						if($result1===false)
							$error = true;
						$z++;
					}
					else
					{
						$query = "UPDATE ".$db->quote_id($target_table)." SET ";
						for($j=0; $j<sizeof($tableInfo); $j++)
						{
							$type = strtoupper($tableInfo[$j]['type']);
							$function = $_POST["function_".$j][$i];
							$null = isset($_POST[$j."_null"][$i]);
							// 如果选择保留旧的 BLOB 值, 就直接跳过这一列
							if(!$null && preg_match('/^BLOB/', $type) && isset($_POST["row_".$i."_field_".$j."_blob_use"]) && $_POST["row_".$i."_field_".$j."_blob_use"]=='old')
								continue;
							if(!$null && preg_match('/^BLOB/', $type))
							{
								if($_FILES[$i.":".$j]["error"] == UPLOAD_ERR_OK && is_file($_FILES[$i.":".$j]["tmp_name"]))
									$blobFiles[$j] = $_FILES[$i.":".$j]["tmp_name"];
								else
									$blobFiles[$j] = null;
							}

							$query .= $db->quote_id($tableInfo[$j]['name'])."=";
							if($function!="")
								$query .= $function."(";
							if($null)
								$query .= "NULL";
							else
							{
								if(preg_match('/^BLOB/', $type))
									$query .= ':blobval'.$j;
								else
									$query .= $db->quote($_POST[$j][$i]);
							}
							if($function!="")
								$query .= ")";
							$query .= ", ";
						}
						$query = substr($query, 0, -2);
						$query .= " WHERE ".$db->wherePK($target_table, json_decode($pks[$i]));
						if(isset($blobFiles))
						{
							// blob 文件需要用预处理语句处理, 否则查询体积会太大
							$handle = $db->prepareQuery($query);
							foreach($blobFiles as $j=>$filename)
								$db->bindValue($handle, ':blobval'.$j, file_get_contents($filename), 'blob');

							$result1 = $db->executePrepared($handle, false);
						}
						else
							$result1 = $db->query($query);
						if($result1===false)
						{
							$error = true;
						}
					}
					$completed .= "<span style='font-size:11px;'>".htmlencode($query)."</span><br/>";
				}
				if($error)
					$completed = $db->getError(true);
				elseif(isset($_POST['new_row']))
					$completed = $z." ".$lang['rows']." ".$lang['inserted'].".<br/><br/>".$completed;
				$params->redirect(array('action'=>'row_view'), $completed);
				break;


			case "row_get_blob":
				$blobVal = $db->select("SELECT ".$db->quote_id($_GET['column'])." AS 'blob' FROM ".$db->quote_id($target_table)." WHERE ".$db->wherePK($target_table, json_decode($_GET['pk'])));
				$filename = 'download';
				if(function_exists('getimagesizefromstring'))     // 在 PHP 5.4.0 中引入
					$imagesize = getimagesizefromstring($blobVal['blob']);
				if(isset($imagesize) && $imagesize!==false && isset($imagesize['mime']))
					$mimetype = $imagesize['mime'];
				elseif(class_exists('finfo'))  // 自 php 5.3.0 起包含, 但在 Windows 上可能被禁用
				{
					$finfo    = new finfo(FILEINFO_MIME);
					$mimetype = $finfo->buffer($blobVal['blob']);
				}
				else
					$mimetype = "application/octet-stream";

				if(isset($imagesize) && $imagesize!==false && isset($imagesize[2]))
					$extension = image_type_to_extension($imagesize[2]);
				else
					$extension = '.blob';
				ob_end_clean();
				header('Content-Length: '.strlen($blobVal['blob']));
				header("Content-type: ".$mimetype);
				if(isset($_GET['download_blob']) && $_GET['download_blob'])
					header('Content-Disposition: attachment; filename="'.$filename.$extension.'";');
				header("Pragma: no-cache");
				header("Expires: 0");
				echo $blobVal['blob'];
				exit;
				break;


		//- 列操作

			//- 创建列 (=column_create)
			case "column_create":
				$num = intval($_POST['rows']);
				for($i=0; $i<$num; $i++)
				{
					if($_POST[$i.'_field']!="")
					{
						$query = "ALTER TABLE ".$db->quote_id($target_table)." ADD ".$db->quote($_POST[$i.'_field'])." ";
						$query .= $_POST[$i.'_type']." ";
						if(isset($_POST[$i.'_primarykey']))
							$query .= "PRIMARY KEY ";
						if(isset($_POST[$i.'_notnull']))
							$query .= "NOT NULL ";
						if($_POST[$i.'_defaultoption']!='defined' && $_POST[$i.'_defaultoption']!='none' && $_POST[$i.'_defaultoption']!='expr')
							$query .= "DEFAULT ".$_POST[$i.'_defaultoption']." ";
						elseif($_POST[$i.'_defaultoption']=='expr')
							$query .= "DEFAULT (".$_POST[$i.'_defaultvalue'].") ";
						elseif(isset($_POST[$i.'_defaultvalue']) && $_POST[$i.'_defaultoption']=='defined')
						{
							$typeAffinity = get_type_affinity($_POST[$i.'_type']);
							if(($typeAffinity=="INTEGER" || $typeAffinity=="REAL" || $typeAffinity=="NUMERIC") && is_numeric($_POST[$i.'_defaultvalue']))
								$query .= "DEFAULT ".$_POST[$i.'_defaultvalue']."  ";
							else
								$query .= "DEFAULT ".$db->quote($_POST[$i.'_defaultvalue'])." ";
						}
						if($db->getVersion()==3 &&
							($_POST[$i.'_defaultoption']=='defined' || $_POST[$i.'_defaultoption']=='none' || $_POST[$i.'_defaultoption']=='NULL')
							// Sqlite3 不能添加默认值非常量的列
							&& !isset($_POST[$i.'_primarykey'])
							// sqlite3 不能添加主键列
							&& (!isset($_POST[$i.'_notnull']) || $_POST[$i.'_defaultoption']!='none')
							// 即使表为空, SQLite3 也不能添加没有 DEFAULT 的 NOT NULL 列
							)
							// 使用 SQLITE3 的 ALTER TABLE ADD COLUMN
							$result = $db->query($query, true);
						else
							// 使用 ALTER TABLE 变通方法
							$result = $db->query($query, false);
						if($result===false)
							$error = true;
					}
				}
				if($error)
					$completed = $db->getError(true);
				else
					$completed = $lang['tbl']." '".htmlencode($target_table)."' ".$lang['altered'].".";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 删除列 (=column_delete)
			case "column_delete":
				$pks = explode(":", $_GET['pk']);
				$query = "ALTER TABLE ".$db->quote_id($target_table).' DROP '.$db->quote_id($pks[0]);
				for($i=1; $i<sizeof($pks); $i++)
				{
					$query .= ", DROP ".$db->quote_id($pks[$i]);
				}
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['tbl']." '".htmlencode($target_table)."' ".$lang['altered'].".";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 添加主键 (=primarykey_add)
			case "primarykey_add":
				$pks = explode(":", $_GET['pk']);
				$query = "ALTER TABLE ".$db->quote_id($target_table).' ADD PRIMARY KEY ('.$db->quote_id($pks[0]);
				for($i=1; $i<sizeof($pks); $i++)
				{
					$query .= ", ".$db->quote_id($pks[$i]);
				}
				$query .= ")";
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['tbl']." '".htmlencode($target_table)."' ".$lang['altered'].".";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 编辑列 (=column_edit)
			case "column_edit":
				$query = "ALTER TABLE ".$db->quote_id($target_table).' CHANGE '.$db->quote_id($_POST['oldvalue'])." ".$db->quote($_POST['0_field'])." ".$_POST['0_type'];
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['tbl']." '".htmlencode($target_table)."' ".$lang['altered'].".";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 删除触发器 (=trigger_delete)
			case "trigger_delete":
				$query = "DROP TRIGGER ".$db->quote_id($_GET['pk']);
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['trigger']." '".htmlencode($_GET['pk'])."' ".$lang['deleted'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 删除索引 (=index_delete)
			case "index_delete":
				$query = "DROP INDEX ".$db->quote_id($_GET['pk']);
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['index']." '".htmlencode($_GET['pk'])."' ".$lang['deleted'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 创建触发器 (=trigger_create)
			case "trigger_create":
				$str = "CREATE TRIGGER ".$db->quote($_POST['trigger_name']);
				if($_POST['beforeafter']!="")
					$str .= " ".$_POST['beforeafter'];
				$str .= " ".$_POST['event']." ON ".$db->quote_id($target_table);
				if(isset($_POST['foreachrow']))
					$str .= " FOR EACH ROW";
				if($_POST['whenexpression']!="")
					$str .= " WHEN ".$_POST['whenexpression'];
				$str .= " BEGIN";
				$str .= " ".$_POST['triggersteps'];
				$str .= " END";
				$query = $str;
				$result = $db->query($query);
				if($result === false)
					$completed = $db->getError(true);
				else
					$completed = $lang['trigger']." ".$lang['created'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				$params->redirect(array('action'=>'column_view'), $completed);
				break;

			//- 创建索引 (=index_create)
			case "index_create":
				$num = $_POST['num'];
				if($_POST['name']=="")
				{
					$completed = $lang['blank_index'];
				}
				else if($_POST['0_field']=="")
				{
					$completed = $lang['one_index'];
				}
				else
				{
					$str = "CREATE ";
					if($_POST['duplicate']=="no")
						$str .= "UNIQUE ";
					$str .= "INDEX ".$db->quote($_POST['name'])." ON ".$db->quote_id($target_table)." (";
					$str .= $db->quote_id($_POST['0_field']).$_POST['0_order'];
					for($i=1; $i<$num; $i++)
					{
						if($_POST[$i.'_field']!="")
							$str .= ", ".$db->quote_id($_POST[$i.'_field']).$_POST[$i.'_order'];
					}
					$str .= ")";
					if(isset($_POST['where']) && $_POST['where']!='')
						$str.=" WHERE ".$_POST['where'];
					$query = $str;
					$result = $db->query($query);
					if($result === false)
						$completed = $db->getError(true);
					else
						$completed = $lang['index']." ".$lang['created'].".<br/><span style='font-size:11px;'>".htmlencode($query)."</span>";
				}
				$params->redirect(array('action'=>'column_view'), $completed);
				break;
		}
	}
}

// 如果不是调试模式, 销毁到目前为止的所有输出
if($debug)
	$bufferedOutput = ob_get_contents();
ob_end_clean();

//- HTML: 输出从这里开始
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!-- Copyright <?php echo date("Y").' '.PROJECT.' ('.PROJECT_URL.')'; ?> -->
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
<link rel="shortcut icon" href="?resource=favicon" />
<title><?php echo PROJECT ?></title>

<?php
//- HTML: 引入 css/主题
if(isset($_GET['theme'])) $theme = basename($_GET['theme']);

// 允许把主题放到 "themes" 子文件夹中
if(is_file('themes/'.$theme)) $theme = 'themes/'.$theme;

if (file_exists($theme))
	// 存在外部样式表 - 引入它
	echo "<link href='{$theme}' rel='stylesheet' type='text/css' />", PHP_EOL;
else
	// 只有在不存在外部样式表时才使用默认样式表
	echo "<link href='?resource=css' rel='stylesheet' type='text/css' />", PHP_EOL;

// HTML: 输出帮助文本, 然后退出
if(isset($_GET['help']))
{
	//帮助章节数组
	$help = array($lang['help1'] => sprintf($lang['help1_x'], PROJECT, PROJECT, PROJECT));
	for($i=2; isset($lang['help'.$i]); $i++)
		$help[$lang['help'.$i]]=$lang['help'.$i.'_x'];
	?>
	</head>
	<body style="direction:<?php echo $lang['direction']; ?>;">
	<div id='help_container'>
	<?php
	echo "<div class='help_list'>";
	echo "<span style='font-size:18px;'>".PROJECT." v".VERSION." ".$lang['help_doc']."</span><br/><br/>";
	foreach((array)$help as $key => $val)
	{
		echo "<a href='#".$key."'>".$key."</a><br/>";
	}
	echo "</div>";
	echo "<br/><br/>";
	foreach((array)$help as $key => $val)
	{
		echo "<div class='help_outer'>";
		echo "<a class='headd' name='".$key."'>".$key."</a>";
		echo "<div class='help_inner'>";
		echo $val;
		echo "</div>";
		echo "<a class='help_top' href='#top'>".$lang['back_top']."</a>";
		echo "</div>";
	}
	?>
	</div>
	</body>
	</html>
	<?php
	exit();
}

if($auth->isAuthorized())
{
	//- 引入 Javascript
	?>
	<!-- JavaScript Support -->
	<script type='text/javascript' src='?resource=javascript'></script>
	<script type="text/javascript">
	var fileUploadMaxSize = <?php echo fileUploadMaxSize(); ?>;
	var fileUploadMaxSizeErrorMsg = '<?php echo $lang['err'].': \n'.$lang['max_file_size']; ?>';
	</script>
	<!-- SQL code editor with Syntax Highlighting etc. -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.24.2/codemirror.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.24.2/addon/hint/show-hint.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.24.2/codemirror.min.js"></script>
	<!-- Codemirror 5.24.2 does not yet include the SQLite support that we wrote, so we fetch changed files from rawgit for the time being-->
	<script src="https://cdn.rawgit.com/codemirror/CodeMirror/c4387d6073b15ccf0f32773eb71a54f3b694f2f0/mode/sql/sql.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.24.2/addon/hint/show-hint.min.js"></script>
	<script src="https://cdn.rawgit.com/codemirror/CodeMirror/65c70cf5d18ac3a0c1a3fe717d90a81ff823aa9f/addon/hint/sql-hint.js"></script>
<?php
}
?>
</head>
<body style="direction:<?php echo $lang['direction']; ?>;">
<?php
// 如果处于调试模式, 现在输出上面生成的所有内容
if($debug)
	echo $bufferedOutput;

if(ini_get("register_globals") == "on" || ini_get("register_globals")=="1") //检查 register_globals 是否开启 - 如果开启了, 我们就不能继续
{
	echo "<div class='confirm' style='margin:20px;'>".$lang['bad_php_directive']."</div>";
	echo "</body></html>";
	exit();
}

//- HTML: 未授权时显示登录界面并退出
if(!$auth->isAuthorized())
{
	echo "<div id='loginBox'>";
	echo "<h1><span id='logo'>".PROJECT."</span> <span id='version'>v".VERSION."</span></h1>";
	echo "<div style='padding:15px; text-align:center;'>";
	if (isset($_GET['failed']))
		echo "<span class='warning'>".$lang['passwd_incorrect']."</span><br/><br/>";
	echo $params->getForm();
	echo $lang['passwd'].": <input type='password' name='password' autofocus='autofocus'/><br/>";
	echo "<label><input type='checkbox' name='remember' value='yes' checked='checked'/> ".$lang['remember']."</label><br/><br/>";
	echo "<input type='submit' value='".$lang['login']."' class='btn'/>";
	echo "<input type='hidden' name='login' value='true' />";
	echo "</form>";
	echo "</div>";
	echo "</div>";
	echo "<br/>";
	echo "<div style='text-align:center;'>";
	echo "<span style='font-size:11px;'>".$lang['powered']." <a href='".PROJECT_URL."' target='_blank' style='font-size:11px;'>".PROJECT."</a> | ";
	printf($lang['page_gen'], $pageTimer);
	echo "</span></div>";
	echo "</body></html>";
	exit();
}

//- 用户已授权, 显示主应用

if(count($databases)==0) // 数据库数组为空, 提示创建新数据库
{
	//- HTML: 创建新数据库的表单, 退出
	if($directory!==false && is_writable($directory))
	{
		echo "<div class='confirm' style='margin:20px;'>";
		printf($lang['no_db'], PROJECT, PROJECT);
		echo "</div>";
		//如果用户执行了某些操作, 显示结果消息
		if(isset($_GET['message']) && isset($_SESSION[COOKIENAME.'messages'][$_GET['message']]))
		{
			echo "<div class='confirm' style='margin:10px 20px;'>";
			echo $_SESSION[COOKIENAME.'messages'][$_GET['message']];
			echo "</div><br />";
			unset($_SESSION[COOKIENAME.'messages'][$_GET['message']]);
		}
		echo "<fieldset style='margin:15px;'><legend><b>".$lang['db_create']."</b></legend>";
		echo $params->getForm(array('table'=>null), 'post', false, 'create_database');
		echo "<input type='text' name='new_dbname' style='width:150px;'/> ";
		if(class_exists('SQLiteDatabase') && (class_exists('SQLite3') || class_exists('PDO')))
		{
			echo "<select name='new_dbtype' class='newDbType'>";
			echo "<option value='3'>SQLite 3</option>";
			echo "<option value='2'>SQLite 2</option>";
			echo "</select>";
		}
		echo "<input type='submit' value='".$lang['create']."' class='btn'/>";
		echo "</form>";
		echo "</fieldset>";
	}
	elseif(($directory!==false && !is_executable($directory)))
	{
		echo "<div class='confirm' style='margin:20px;'>";
		echo $lang['err'].": ".sprintf($lang['dir_not_executable'], PROJECT, $directory);
		echo "</div><br/>";
	}
	else
	{
		echo "<div class='confirm' style='margin:20px;'>";
		echo $lang['err'].": ".sprintf($lang['no_db2'], PROJECT);
		echo "</div><br/>";
	}
	exit();
}

//- HTML: 侧边栏
echo '<table class="body_tbl" width="100%" border="0" cellspacing="0" cellpadding="0"><tr><td valign="top" class="left_td" style="width:100px; padding:9px 2px 9px 9px;">';
echo "<div id='leftNav'>";
echo "<h1><a href='".$params->getURL()."'>";
echo "<span id='logo'>".PROJECT."</span> <span id='version'>v".VERSION."</span>";
echo "</a></h1>";
echo "<div id='headerlinks'>";
echo "<a href='javascript:void' onclick='openHelp(\"top\");'>".$lang['docu']."</a> | ";
echo "<a href='https://www.gnu.org/licenses/gpl.html' target='_blank'>".$lang['license']."</a> | ";
echo "<a href='".PROJECT_URL."' target='_blank'>".$lang['proj_site']."</a>";
echo "</div>";

//- HTML: 数据库列表
$db->print_db_list();
echo "<fieldset style='margin:15px;'><legend>";
echo "<a href='".$params->getURL(array('table'=>null))."'";
if (!$target_table)
	echo " class='active_table'";
$name = $currentDB['name'];
if(strlen($name)>25)
	$name = "...".substr($name, strlen($name)-22, 22);
echo ">".htmlencode($name)."</a>";
echo "</legend>";

//- HTML: 表列表
$tables = $db->getTables(true, false);
foreach($tables as $tableName => $tableType)
{
	echo "<span class='sidebar_table'>";
	echo $params->getLink(array('action'=>'column_view', 'table'=>$tableName), "[".$lang[$tableType=='table'?'tbl':'view']."]");
	echo "</span> ";
	echo $params->getLink(array('action'=>'row_view', 'table'=>$tableName), htmlencode($tableName),
		($target_table == $tableName ? 'active_table' : '') );
	echo "<br/>";
}
if(count($tables)==0)
	echo $lang['no_tbl'];
echo "</fieldset>";

//- HTML: 创建新数据库的表单
if($directory!==false && is_writable($directory))
{
	echo "<fieldset style='margin:15px;'><legend><b>".$lang['db_create']."</b> ".helpLink($lang['help2'])."</legend>";
	echo $params->getForm(array('table'=>null), 'post', false, 'create_database');
	echo "<input type='text' name='new_dbname' style='width:150px;'/>";
	if(class_exists('SQLiteDatabase') && (class_exists('SQLite3') || class_exists('PDO')))
	{
		echo "<select name='new_dbtype' class='newDbType'>";
		echo "<option value='3'>SQLite 3</option>";
		echo "<option value='2'>SQLite 2</option>";
		echo "</select>";
	}
	echo "<input type='submit' value='".$lang['create']."' class='btn'/>";
	echo "</form>";
	echo "</fieldset>";
}

echo "<div style='text-align:center;'>";
echo $params->getForm(array(),'get');
echo "<input type='submit' value='".$lang['logout']."' name='logout' class='btn'/>";
echo "</form>";
echo "</div>";
echo "</div>";
echo '</td><td valign="top" id="main_column" class="right_td" style="padding:9px 2px 9px 9px;">';

//- HTML: 面包屑导航
echo $params->getLink(array('table'=>null), htmlencode($currentDB['name']));
if ($target_table)
	echo " &rarr; ".$params->getLink(array('action'=>'row_view'), htmlencode($target_table));
echo "<br/><br/>";

//- 显示表的各个标签页视图
if($target_table)
{
	//- PHP 8: $_GET['action'] 可能不存在, 先取值避免 Undefined array key 警告
	$currentAction = isset($_GET['action']) ? $_GET['action'] : '';
	//- HTML: 标签页
	echo $params->getLink(array('action'=>'row_view'), $lang['browse'],
		(in_array($currentAction, array('row_view', 'row_editordelete') ) ? 'tab_pressed' : 'tab'));

	echo $params->getLink(array('action'=>'column_view'), $lang['struct'],
		(in_array($currentAction, array('column_view', 'column_edit', 'column_confirm', 'primarykey_add', 'column_create', 'index_create', 'index_delete', 'trigger_create', 'trigger_delete') ) ? 'tab_pressed' : 'tab'));

	echo $params->getLink(array('action'=>'table_sql'), $lang['sql'],
		($currentAction=="table_sql" ? 'tab_pressed' : 'tab'));

	echo $params->getLink(array(
		'action' => 'table_search',
		'oldSearch' => (isset($_GET['search'])?$_GET['search']:null)
		), $lang['srch'], ($currentAction=="table_search" ? 'tab_pressed' : 'tab'));

	if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
		echo $params->getLink(array('action'=>'row_create'), $lang['insert'],
			($currentAction=="row_create" ? 'tab_pressed' : 'tab'));

	echo $params->getLink(array('action'=>'table_export'), $lang['export'],
		($currentAction=="table_export" ? 'tab_pressed' : 'tab'));

	if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
		echo $params->getLink(array('action'=>'table_import'), $lang['import'],
			($currentAction=="table_import" ? 'tab_pressed' : 'tab'));

	if($db->isWritable() && $db->isDirWritable())
		echo $params->getLink(array('action'=>'table_rename'), $lang['rename'],
			($currentAction=="table_rename" ? 'tab_pressed' : 'tab'));

	if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
	{
		echo $params->getLink(array('action'=>'table_empty'), $lang['empty'],
			($currentAction=="table_empty" ? 'tab_pressed empty' : 'tab empty'));

		echo $params->getLink(array('action'=>'table_drop'), $lang['drop'],
			($currentAction=="table_drop" ? 'tab_pressed drop' : 'tab drop'));
	} elseif($db->isWritable() && $db->isDirWritable()) {
		echo $params->getLink(array('action'=>'view_drop'), $lang['drop'],
			($currentAction=="view_drop" ? 'tab_pressed drop' : 'tab drop'));
	}
}
else
//- 显示数据库的各个标签页视图
{
	$view = isset($_GET['view']) ? $_GET['view'] : 'structure';

	echo $params->getLink(array('view'=>'structure'), $lang['struct'], ($view=="structure" ? 'tab_pressed': 'tab')  );

	echo $params->getLink(array('view'=>'sql'), $lang['sql'], ($view=="sql" ? 'tab_pressed': 'tab')  );

	echo $params->getLink(array('view'=>'export'), $lang['export'], ($view=="export" ? 'tab_pressed': 'tab')  );

	if($db->isWritable() && $db->isDirWritable())
		echo $params->getLink(array('view'=>'import'), $lang['import'], ($view=="import" ? 'tab_pressed': 'tab')  );

	if($db->isWritable() && $db->isDirWritable())
		echo $params->getLink(array('view'=>'vacuum'), $lang['vac'], ($view=="vacuum" ? 'tab_pressed': 'tab')  );

	if($directory!==false && is_writable($directory))
	{

		echo $params->getLink(array('view'=>'rename'), $lang['db_rename'], ($view=="rename" ? 'tab_pressed': 'tab')  );

		echo $params->getLink(array('view'=>'delete'), "<span>".$lang['db_del']."</span>", ($view=="delete" ? 'tab_pressed delete_db': 'tab delete_db')  );
	}
}

echo "<div style='clear:both;'></div>";
echo "<div id='main'>";

//- HTML: 确认面板
//如果用户执行了某些操作, 显示结果消息
if(isset($_GET['message']) && isset($_SESSION[COOKIENAME.'messages'][$_GET['message']]))
{
	echo "<div class='confirm'>";
	echo $_SESSION[COOKIENAME.'messages'][$_GET['message']];
	echo "</div><br />";
	unset($_SESSION[COOKIENAME.'messages'][$_GET['message']]);
}


//- 根据 $_GET['action'] 分派有输出的操作
if(isset($_GET['action']) && !isset($_GET['confirm']))
{
	switch($_GET['action'])
	{
	//- 表操作

		//- 创建表 (=table_create)
		case "table_create":
			$query = "SELECT name FROM sqlite_master WHERE type='table' AND name=".$db->quote($_GET['tablename']);
			$results = $db->selectArray($query);
			if(sizeof($results)>0)
				$exists = true;
			else
				$exists = false;
			echo "<h2>".$lang['create_tbl'].": '".htmlencode($_GET['tablename'])."'</h2>";
			if($_GET['tablefields']=="" || intval($_GET['tablefields'])<=0)
				echo $lang['specify_fields'];
			else if($_GET['tablename']=="")
				echo $lang['specify_tbl'];
			else if($exists)
				echo $lang['tbl_exists'];
			else
			{
				$num = intval($_GET['tablefields']);
				$name = $_GET['tablename'];
				echo $params->getForm(array('action'=>'table_create', 'confirm'=>'1'));
				echo "<input type='hidden' name='tablename' value='".htmlencode($name)."'/>";
				echo "<input type='hidden' name='rows' value='".$num."'/>";
				echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
				echo "<tr>";
				$headings = array($lang['fld'], $lang['type'], $lang['prim_key']);
				if($db->getType() != "SQLiteDatabase") $headings[] = $lang['autoincrement'];
				$headings[] = $lang['not_null'];
				$headings[] = $lang['def_val'];
				for($k=0; $k<count($headings); $k++)
					echo "<td class='tdheader'>" . $headings[$k] . "</td>";
				echo "</tr>";

				for($i=0; $i<$num; $i++)
				{
					$tdWithClass = "<td class='td" . ($i%2 ? "1" : "2") . "'>";
					echo "<tr>";
					echo $tdWithClass;
					echo "<input type='text' name='".$i."_field' style='width:200px;'/>";
					echo "</td>";
					echo $tdWithClass;
					echo "<select name='".$i."_type' id='i".$i."_type' onchange='toggleAutoincrement(".$i.");'>";
					foreach ($sqlite_datatypes as $t) {
						echo "<option value='".htmlencode($t)."'>".htmlencode($t)."</option>";
					}
					echo "</select>";
					echo "</td>";
					echo $tdWithClass;
					echo "<label><input type='checkbox' name='".$i."_primarykey' id='i".$i."_primarykey' onclick='toggleNull(".$i."); toggleAutoincrement(".$i.");'/> ".$lang['yes']."</label>";
					echo "</td>";
					if($db->getType() != "SQLiteDatabase")
					{
						echo $tdWithClass;
						echo "<label><input type='checkbox' name='".$i."_autoincrement' id='i".$i."_autoincrement'/> ".$lang['yes']."</label>";
						echo "</td>";
					}
					echo $tdWithClass;
					echo "<label><input type='checkbox' name='".$i."_notnull' id='i".$i."_notnull'/> ".$lang['yes']."</label>";
					echo "</td>";
					echo $tdWithClass;
					echo "<select name='".$i."_defaultoption' id='i".$i."_defaultoption' onchange=\"if(this.value!='defined' && this.value!='expr') document.getElementById('i".$i."_defaultvalue').value='';\">";
					echo "<option value='none'>".$lang['none']."</option><option value='defined'>".$lang['as_defined'].":</option><option>NULL</option><option>CURRENT_TIME</option><option>CURRENT_DATE</option><option>CURRENT_TIMESTAMP</option><option value='expr'>".$lang['expression'].":</option>";
					echo "</select>";
					echo "<input type='text' name='".$i."_defaultvalue' id='i".$i."_defaultvalue' style='width:100px;' onchange=\"if(document.getElementById('i".$i."_defaultoption').value!='expr') document.getElementById('i".$i."_defaultoption').value='defined';\"/>";
					echo "</td>";
					echo "</tr>";
				}
				echo "<tr>";
				echo "<td class='tdheader' style='text-align:right;' colspan='6'>";
				echo "<input type='submit' value='".$lang['create']."' class='btn'/> ";
				echo $params->getLink(array(), $lang['cancel']);
				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "</form>";
				if($db->getType() != "SQLiteDatabase") echo "<script type='text/javascript'>window.onload=initAutoincrement;</script>";
			}
			break;

		//- 对表执行 SQL 查询 (=table_sql)
		case "table_sql":
			if(isset($_POST['query']) && $_POST['query']!="")
			{
				$delimiter = $_POST['delimiter'];
				$queryStr = $_POST['queryval'];
				//如有必要, 把查询保存到历史记录
				if($maxSavedQueries!=0 && $maxSavedQueries!=false)
				{
					if(!isset($_SESSION[COOKIENAME.'query_history']))
						$_SESSION[COOKIENAME.'query_history'] = array();
					$_SESSION[COOKIENAME.'query_history'][md5(strtolower($queryStr))] = $queryStr;
					if(sizeof($_SESSION[COOKIENAME.'query_history']) > $maxSavedQueries)
						array_shift($_SESSION[COOKIENAME.'query_history']);
				}
				$query = explode_sql($delimiter, $queryStr); //根据分隔符把查询字符串拆成单个查询

				for($i=0; $i<sizeof($query); $i++) //遍历按分隔符拆分出的查询
				{
					if(str_replace(" ", "", str_replace("\n", "", str_replace("\r", "", $query[$i])))!="") //确保此查询不是空字符串
					{
						$queryTimer = new MicroTimer();
						$table_result = $db->query($query[$i]);

						echo "<div class='confirm'>";
						echo "<b>".htmlencode($query[$i])."</b>";
						if($table_result === NULL || $table_result === false)
						{
							echo "<br /><b>".$lang['err'].": ".htmlencode($db->getError())."</b></div>";
						}
						echo "</div><br/>";
						if($row = $db->fetch($table_result, 'num'))
						{
							for($j=0; $j<sizeof($row);$j++)
								$headers[$j] = $db->getColumnName($table_result,$j);
							echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
							echo "<tr>";
							for($j=0; $j<sizeof($headers); $j++)
							{
								echo "<td class='tdheader'>";
								echo htmlencode($headers[$j]);
								echo "</td>";
							}
							echo "</tr>";
							$rowCount = 0;
							for(; $rowCount==0 || $row = $db->fetch($table_result, 'num'); $rowCount++)
							{
								$tdWithClass = "<td class='td".($rowCount%2 ? "1" : "2")."'>";
								echo "<tr>";
								for($z=0; $z<sizeof($headers); $z++)
								{
									echo $tdWithClass;
									if($row[$z]==="")
										echo "&nbsp;";
									elseif($row[$z]===NULL)
										echo "<i class='null'>NULL</i>";
									else
										echo htmlencode(subString($row[$z]));
									echo "</td>";
								}
								echo "</tr>";
							}
							$queryTimer->stop();
							echo "</table><br/><br/>";


							if($table_result !== NULL && $table_result !== false)
							{
								echo "<div class='confirm' style='margin-bottom: 2em'>";
								if($rowCount>0 || $db->getAffectedRows()==0)
								{
									printf($lang['show_rows'], $rowCount);
								}
								if($db->getAffectedRows()>0 || $rowCount==0)
								{
									echo $db->getAffectedRows()." ".$lang['rows_aff']." ";
								}
								printf($lang['query_time'], $queryTimer);
								echo "</div>";
							}


						}
					}
				}
			}
			else
			{
				$delimiter = ";";
				$queryStr = "SELECT * FROM ".$db->quote_id($target_table)." WHERE 1";
			}

			echo "<fieldset>";
			echo "<legend><b>".sprintf($lang['run_sql'],htmlencode($db->getName()))."</b></legend>";
			echo $params->getForm(array('action'=>'table_sql'));
			if(isset($_SESSION[COOKIENAME.'query_history']) && sizeof($_SESSION[COOKIENAME.'query_history'])>0)
			{
				echo "<b>".$lang['recent_queries']."</b><ul>";
				foreach($_SESSION[COOKIENAME.'query_history'] as $key => $value)
					echo "<li><a onclick='sqleditorSetValue(this.textContent); return false;' href='#'>".htmlencode($value)."</a></li>";
				echo "</ul><br/><br/>";
			}
			echo "<div style='float:left; width:70%;'>";
			echo "<textarea style='width:97%; height:300px;' name='queryval' id='queryval' cols='50' rows='8'>".htmlencode($queryStr)."</textarea>";
			echo "<script>sqleditor(document.getElementById('queryval'),".json_encode($db->getTableDefinitions()).",'".htmlencode($target_table)."');</script>";
			echo "</div>";
			echo "<div style='float:left; width:28%; padding-left:10px;'>";
			echo $lang['fields']."<br/>";
			echo "<select multiple='multiple' style='width:100%;' id='fieldcontainer'>";
			$tableInfo = $db->getTableInfo($target_table);
			for($i=0; $i<sizeof($tableInfo); $i++)
			{
				echo "<option value='".htmlencode($tableInfo[$i][1])."'>".htmlencode($tableInfo[$i][1])."</option>";
			}
			echo "</select>";
			echo "<input type='button' value='&lt;&lt;' onclick='moveFields();' class='btn'/>";
			echo "</div>";
			echo "<div style='clear:both;'></div>";
			echo $lang['delimit']." <input type='text' name='delimiter' value='".htmlencode($delimiter)."' style='width:50px;'/> ";
			echo "<input type='submit' name='query' value='".$lang['go']."' class='btn'/>";
			echo "</form>";
			echo "</fieldset>";
			break;

		//- 清空表 (=table_empty)
		case "table_empty":
			echo $params->getForm(array('action'=>'table_empty','confirm'=>'1'));
			echo "<div class='confirm'>";
			echo sprintf($lang['ques_empty'], htmlencode($target_table))."<br/><br/>";
			echo "<input type='checkbox' name='vacuum' checked='checked'/> ".$lang['vac_on_empty']."<br/><br/>";
			echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
			echo $params->getLink(array('table'=>null), $lang['cancel']);
			echo "</div>";
			break;

		//- 删除表 (=table_drop)
		case "table_drop":
			echo $params->getForm(array('action'=>'table_drop','confirm'=>'1'));
			echo "<div class='confirm'>";
			echo sprintf($lang['ques_drop'], htmlencode($target_table))."<br/><br/>";
			echo "<input type='checkbox' name='vacuum' checked='checked'/> ".$lang['vac_on_empty']."<br/><br/>";
			echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
			echo $params->getLink(array('table'=>null), $lang['cancel']);
			echo "</div>";
			break;

		//- 删除视图 (=view_drop)
		case "view_drop":
			echo $params->getForm(array('action'=>'view_drop','confirm'=>'1'));
			echo "<input type='hidden' name='viewname' value='".htmlencode($target_table)."'/>";
			echo "<div class='confirm'>";
			echo sprintf($lang['ques_drop_view'], htmlencode($target_table))."<br/><br/>";
			echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
			echo $params->getLink(array('table'=>null), $lang['cancel']);
			echo "</div>";
			break;

		//- 导出表 (=table_export)
		case "table_export":
			echo $params->getForm();
			echo "<fieldset style='float:left; width:260px; margin-right:20px;'><legend><b>".$lang['export']."</b></legend>";
			echo "<input type='hidden' value='".htmlencode($target_table)."' name='single_table'/>";
			echo "<label><input type='radio' name='export_type' checked='checked' value='sql' onclick='toggleExports(\"sql\");'/> ".$lang['sql']."</label>";
			echo "<br/><label><input type='radio' name='export_type' value='csv' onclick='toggleExports(\"csv\");'/> ".$lang['csv']."</label>";
			echo "</fieldset>";

			echo "<fieldset style='float:left; max-width:350px;' id='exportoptions_sql'><legend><b>".$lang['options']."</b></legend>";
			echo "<label><input type='checkbox' checked='checked' name='structure'/> ".$lang['export_struct']."</label> ".helpLink($lang['help5'])."<br/>";
			echo "<label><input type='checkbox' checked='checked' name='data'/> ".$lang['export_data']."</label> ".helpLink($lang['help6'])."<br/>";
			echo "<label><input type='checkbox' name='drop'/> ".$lang['add_drop']."</label> ".helpLink($lang['help7'])."<br/>";
			echo "<label><input type='checkbox' checked='checked' name='transaction'/> ".$lang['add_transact']."</label> ".helpLink($lang['help8'])."<br/>";
			echo "<label><input type='checkbox' checked='checked' name='comments'/> ".$lang['comments']."</label> ".helpLink($lang['help9'])."<br/>";
			echo "</fieldset>";

			echo "<fieldset style='float:left; max-width:350px; display:none;' id='exportoptions_csv'><legend><b>".$lang['options']."</b></legend>";
			echo "<div style='float:left;'>".$lang['fld_terminated']."</div>";
			echo "<input type='text' value=';' name='export_csv_fieldsterminated' style='float:right;'/>";
			echo "<div style='clear:both;'></div>";
			echo "<div style='float:left;'>".$lang['fld_enclosed']."</div>";
			echo "<input type='text' value='\"' name='export_csv_fieldsenclosed' style='float:right;'/>";
			echo "<div style='clear:both;'></div>";
			echo "<div style='float:left;'>".$lang['fld_escaped']."</div>";
			echo "<input type='text' value='\' name='export_csv_fieldsescaped' style='float:right;'/>";
			echo "<div style='clear:both;'></div>";
			echo "<div style='float:left;'>".$lang['rep_null']."</div>";
			echo "<input type='text' value='NULL' name='export_csv_replacenull' style='float:right;'/>";
			echo "<div style='clear:both;'></div>";
			echo "<label><input type='checkbox' name='export_csv_crlf'/> ".$lang['rem_crlf']."</label><br/>";
			echo "<label><input type='checkbox' checked='checked' name='export_csv_fieldnames'/> ".$lang['put_fld']."</label>";
			echo "</fieldset>";

			echo "<div style='clear:both;'></div>";
			echo "<br/><br/>";
			echo "<fieldset><legend><b>".$lang['save_as']."</b></legend>";
			$file = pathinfo($db->getPath());
			$name = $file['filename'];
			echo "<input type='text' name='filename' value='".htmlencode($name)."_".htmlencode($target_table)."_".date("Y-m-d").".dump' style='width:400px;'/> <input type='submit' name='export' value='".$lang['export']."' class='btn'/>";
			echo "</fieldset>";
			echo "</form>";
			echo "<div class='confirm' style='margin-top: 2em'>".sprintf($lang['backup_hint'],
				$params->getLink(array('download' => $currentDB['path'], 'token' => $_SESSION[COOKIENAME.'token']), $lang["backup_hint_linktext"], '', $lang['backup']))."</div>";
			break;

		//- 导入表 (=table_import)
		case "table_import":
			if(isset($_POST['import']))
			{
				echo "<div class='confirm'>";
				if($importSuccess===true)
					echo $lang['import_suc'];
				else
					echo $lang['err'].': '.htmlencode($importSuccess);
				echo "</div><br/>";
			}
			echo $params->getForm(array('action' => 'table_import'), 'post', true);
			echo "<fieldset style='float:left; width:260px; margin-right:20px;'><legend><b>".$lang['import_into']." ".htmlencode($target_table)."</b></legend>";
			echo "<label><input type='radio' name='import_type' checked='checked' value='sql' onclick='toggleImports(\"sql\");'/> ".$lang['sql']."</label>";
			echo "<br/><label><input type='radio' name='import_type' value='csv' onclick='toggleImports(\"csv\");'/> ".$lang['csv']."</label>";
			echo "</fieldset>";

			echo "<fieldset style='float:left; max-width:350px;' id='importoptions_sql'><legend><b>".$lang['options']."</b></legend>";
			echo $lang['no_opt'];
			echo "</fieldset>";

			echo "<fieldset style='float:left; max-width:350px; display:none;' id='importoptions_csv'><legend><b>".$lang['options']."</b></legend>";
			echo "<input type='hidden' value='".htmlencode($target_table)."' name='single_table'/>";
			echo "<div style='float:left;'>".$lang['fld_terminated']."</div>";
			echo "<input type='text' value=';' name='import_csv_fieldsterminated' style='float:right;'/>";
			echo "<div style='clear:both;'>";
			echo "<div style='float:left;'>".$lang['fld_enclosed']."</div>";
			echo "<input type='text' value='\"' name='import_csv_fieldsenclosed' style='float:right;'/>";
			echo "<div style='clear:both;'>";
			echo "<div style='float:left;'>".$lang['fld_escaped']."</div>";
			echo "<input type='text' value='\' name='import_csv_fieldsescaped' style='float:right;'/>";
			echo "<div style='clear:both;'>";
			echo "<div style='float:left;'>".$lang['rep_null']."</div>";
			echo "<input type='text' value='NULL' name='import_csv_replacenull' style='float:right;'/>";
			echo "<div style='clear:both;'>";
			echo "<label><input type='checkbox' checked='checked' name='import_csv_fieldnames'/> ".$lang['fld_names']."</label>";
			echo "</fieldset>";

			echo "<div style='clear:both;'></div>";
			echo "<br/><br/>";

			echo "<fieldset><legend><b>".$lang['import_f']."</b></legend>";
			echo "<em>".$lang['max_file_size'].": ".number_format(fileUploadMaxSize()/1024/1024)." MiB</em> ".helpLink($lang['help11'])."<br />";
			echo "<input type='file' value='".$lang['choose_f']."' name='file' style='background-color:transparent; border-style:none; margin:0; padding:0' onchange='checkFileSize(this)'/>";
			echo "<input type='submit' value='".$lang['import']."' name='import' class='btn'/>";
			echo "</fieldset>";
			break;

		//- 重命名表 (=table_rename)
		case "table_rename":
			echo $params->getForm(array('action'=>'table_rename', 'confirm'=>'1'));
			printf($lang['rename_tbl'], htmlencode($target_table));
			echo " <input type='text' name='newname' value='".htmlencode($target_table)."' style='width:200px;'/> <input type='submit' value='".$lang['rename']."' name='rename' class='btn'/>";
			echo "</form>";
			break;

		//- 搜索表 (=table_search)
		case "table_search":
			if(!isset($_GET['search']))
			{
				$tableInfo = $db->getTableInfo($target_table);

				echo $params->getForm(array('action'=>'table_search', 'confirm'=>'1'));

				echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
				echo "<tr>";
				echo "<td class='tdheader'>".$lang['fld']."</td>";
				echo "<td class='tdheader'>".$lang['type']."</td>";
				echo "<td class='tdheader'>".$lang['operator']."</td>";
				echo "<td class='tdheader'>".$lang['val']."</td>";
				echo "</tr>";

				for($i=0; $i<sizeof($tableInfo); $i++)
				{
					$field = $tableInfo[$i][1];
					$type = $tableInfo[$i]['type'];
					$typeAffinity = get_type_affinity($type);
					$tdWithClass = "<td class='td".($i%2 ? "1" : "2")."'>";
					$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";
					if(isset($_GET['oldSearch']) && isset($_SESSION[COOKIENAME.'search'][$_GET['oldSearch']]['values'][$field]))
						$value = implode($_SESSION[COOKIENAME.'search'][$_GET['oldSearch']]['values'][$field], ",");
					else
						$value = '';
					if(isset($_GET['oldSearch']) && isset($_SESSION[COOKIENAME.'search'][$_GET['oldSearch']]['operators'][$field]))
						$operator = $_SESSION[COOKIENAME.'search'][$_GET['oldSearch']]['operators'][$field];
					elseif($typeAffinity=="TEXT" || $typeAffinity=="NONE")
						$operator = 'LIKE';
					else
						$operator = '=';

					echo "<tr>";
					echo $tdWithClassLeft;
					echo htmlencode($field);
					echo "</td>";
					echo $tdWithClassLeft;
					echo htmlencode($type);
					echo "</td>";
					echo $tdWithClassLeft;
					echo "<select name='field_".$i."_operator' onchange='checkLike(\"field_".$i."_value\", this.options[this.selectedIndex].value); '>";

					$operators = array('=', '>', '>=', '<', '<=', "= ''", "!= ''", '!=', 'LIKE', 'LIKE%','NOT LIKE', 'IN', 'NOT IN', 'IS NULL', 'IS NOT NULL');
					$operatorsDisplay = array('LIKE%' => 'LIKE %...%', 'IN'=>'IN (..., ...)', 'NOT IN'=>'NOT IN (..., ...)');
					$operatorsNumbersOnly = array('>', '>=', '<', '<=');
					$operatorsTextOnly = array("= ''", "!= ''");
					foreach($operators as $op)
					{
						if($typeAffinity!="INTEGER" && $typeAffinity!="REAL" && $typeAffinity!="NUMERIC" && in_array($op, $operatorsNumbersOnly))
							continue;
						if($typeAffinity!="TEXT" && $typeAffinity!="NONE" && in_array($op, $operatorsTextOnly))
							continue;
						$display = (isset($operatorsDisplay[$op]) ? $operatorsDisplay[$op] : $op);
						echo "<option value='".htmlencode($op)."'".($operator==$op?" selected='selected'":'').">".htmlencode($display)."</option>";
					}
					echo "</select>";
					echo "</td>";
					echo $tdWithClassLeft;
					if($typeAffinity=="INTEGER" || $typeAffinity=="REAL" || $typeAffinity=="NUMERIC")
						echo "<input type='text' id='field_".$i."_value' name='field_".$i."_value' value='".htmlencode($value)."'/>";
					else
						echo "<textarea id='field_".$i."_value' name='field_".$i."_value' rows='1' cols='60'>".htmlencode($value)."</textarea>";
					echo "</td>";
					echo "</tr>";
				}
				echo "<tr>";
				echo "<td class='tdheader' style='text-align:right;' colspan='4'>";
				echo "<input type='submit' value='".$lang['srch']."' class='btn'/>";
				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "</form>";

				break;
			}
			elseif(isset($_SESSION[COOKIENAME.'search'][$_GET['search']]))
			{
				$params->search = $_GET['search'];
				$search = $_SESSION[COOKIENAME.'search'][$_GET['search']];
				// 注意: 我们这里不 break!! 我们现在只是做与 row_view 操作相同的事
			}

	//- 行操作

		//- 查看行 (=row_view)
		case "row_view":
			if(!isset($_GET['startRow']))
				$_GET['startRow'] = 0;

			if(isset($_SESSION[COOKIENAME.'currentTable']) && $_SESSION[COOKIENAME.'currentTable']!=$target_table)
			{
				unset($_SESSION[COOKIENAME.'sortRows']);
				unset($_SESSION[COOKIENAME.'orderRows']);
			}
			if(isset($_GET['viewtype']))
			{
				$_SESSION[COOKIENAME.'viewtype'] = $_GET['viewtype'];
			}

			//- 执行查询
			if(!isset($_GET['sort']))
				$_GET['sort'] = NULL;
			if(!isset($_GET['order']))
				$_GET['order'] = NULL;

			$numRows = $params->numRows;
			$startRow = $_GET['startRow'];
			if(isset($_GET['sort']))
			{
				$_SESSION[COOKIENAME.'sortRows'] = $_GET['sort'];
				$_SESSION[COOKIENAME.'currentTable'] = $target_table;
			}
			if(isset($_GET['order']))
			{
				$_SESSION[COOKIENAME.'orderRows'] = $_GET['order'];
				$_SESSION[COOKIENAME.'currentTable'] = $target_table;
			}
			$query = "SELECT * ";
			// 把主键列放在最后选择 (如果没有主键则用 ROWID)。
			// 这将用于标识行, 例如编辑/删除行时
			$primary_key = $db->getPrimaryKey($target_table);
			foreach($primary_key as $pk)
			{
				$query.= ', '.$db->quote_id($pk);
				$query.= ', typeof('.$db->quote_id($pk).')';
			}
			$query .= " FROM ".$db->quote_id($target_table);
			$queryDisp = "SELECT * FROM ".$db->quote_id($target_table);
			$queryCount = "SELECT COUNT(*) AS count FROM ".$db->quote_id($target_table);
			$queryAdd = "";
			if(isset($search) && isset($search['where']))
			{
				$queryAdd = $search['where'];
				$queryCount .= $search['where'];
			}
			if(isset($_SESSION[COOKIENAME.'sortRows']))
				$queryAdd .= " ORDER BY ".$db->quote_id($_SESSION[COOKIENAME.'sortRows']);
			if(isset($_SESSION[COOKIENAME.'orderRows']))
				$queryAdd .= " ".$_SESSION[COOKIENAME.'orderRows'];
			$queryAdd .= " LIMIT ".$startRow.", ".$numRows;
			$query .= $queryAdd;
			$queryDisp .= $queryAdd;

			$resultRows = $db->select($queryCount);
			$totalRows = $resultRows['count'];
			$shownRows = min($resultRows['count']-$startRow, $numRows);

			//- HTML: 分页按钮
			$lastPage = intval($totalRows / $params->numRows);
			$remainder = intval($totalRows % $params->numRows);
			if($remainder==0)
				$remainder = $params->numRows;

			echo "<div style=''>";
			//上一页按钮
			if($_GET['startRow']>0)
			{
				echo "<div style='float:left;'>";
				echo $params->getForm(array('action'=>$_GET['action']),'get');
				echo "<input type='hidden' name='startRow' value='0'/>";
				echo "<input type='submit' value='&larr;&larr;' class='btn'/> ";
				echo "</form>";
				echo "</div>";
				echo "<div style='float:left; overflow:hidden; margin-right:20px;'>";
				echo $params->getForm(array('action'=>$_GET['action']),'get');
				echo "<input type='hidden' name='startRow' value='".max(0,intval($_GET['startRow']-$params->numRows))."'/>";
				echo "<input type='submit' value='&larr;' class='btn'/> ";
				echo "</form>";
				echo "</div>";
			}

			//显示一些数字按钮
			echo "<div style='float:left;'>";
			echo $params->getForm(array('action'=>$_GET['action'], 'numRows'=>null),'get');
			echo "<input type='submit' value='".$lang['show']." : ' name='show' class='btn'/> ";
			echo "<input type='text' name='numRows' style='width:50px;' value='".$params->numRows."'/> ";
			echo $lang['rows_records'];

			if(intval($_GET['startRow']+$params->numRows) < $totalRows)
				echo "<input type='text' name='startRow' style='width:90px;' value='".intval($_GET['startRow']+$params->numRows)."'/>";
			else
				echo "<input type='text' name='startRow' style='width:90px;' value='0'/> ";
			echo $lang['as_a'];
			echo " <select name='viewtype'>";
			if(!isset($_SESSION[COOKIENAME.'viewtype']) || $_SESSION[COOKIENAME.'viewtype']=="table")
			{
				echo "<option value='table' selected='selected'>".$lang['tbl']."</option>";
				echo "<option value='chart'>".$lang['chart']."</option>";
			}
			else
			{
				echo "<option value='table'>".$lang['tbl']."</option>";
				echo "<option value='chart' selected='selected'>".$lang['chart']."</option>";
			}
			echo "</select>";
			echo "</form>";
			echo "</div>";

			//下一页按钮
			if(intval($_GET['startRow']+$params->numRows)<$totalRows)
			{
				echo "<div style='float:left; margin-left:20px; '>";
				echo $params->getForm(array('action'=>$_GET['action']),'get');
				echo "<input type='hidden' name='startRow' value='".intval($_GET['startRow']+$params->numRows)."'/>";
				echo "<input type='submit' value='&rarr;' class='btn'/> ";
				echo "</form>";
				echo "</div>";
				echo "<div style='float:left; '>";
				echo $params->getForm(array('action'=>$_GET['action']),'get');
				echo "<input type='hidden' name='startRow' value='".intval($totalRows-$remainder)."'/>";
				echo "<input type='submit' value='&rarr;&rarr;' class='btn'/> ";
				echo "</form>";
				echo "</div>";
			}
			echo "<div style='clear:both;'></div>";
			echo "</div>";


			//- 显示结果
			if($shownRows>0)
			{
				$queryTimer = new MicroTimer();
				$table_result = $db->query($query);
				$queryTimer->stop();


				echo "<br/><div class='confirm'>";
				echo "<b>".$lang['showing_rows']." ".$startRow." - ".($startRow + $shownRows-1).", ".$lang['total'].": ".$totalRows." ";
				printf($lang['query_time'], $queryTimer);
				echo "</b><br/>";
				echo "<span style='font-size:11px;'>".htmlencode($queryDisp)."</span>";
				echo "</div><br/>";

				if($target_table_type == 'view')
				{
					echo sprintf($lang['readonly_tbl'], htmlencode($target_table))." <a href='https://en.wikipedia.org/wiki/View_(SQL)' target='_blank'>https://en.wikipedia.org/wiki/View_(SQL)</a>";
					echo "<br/><br/>";
				}

				$tableInfo = $db->getTableInfo($target_table);
				$pkFirstCol = sizeof($tableInfo)+1;
				//- 表视图
				if(!isset($_SESSION[COOKIENAME.'viewtype']) || $_SESSION[COOKIENAME.'viewtype']=="table")
				{
					echo $params->getForm(array('action'=>'row_editordelete'), 'post', false, 'checkForm');
					echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
					echo "<tr>";
					echo "<td colspan='3' class='tdheader' style='text-align:center'>";
					echo "<a href='".$params->getURL(array('action'=>$_GET['action'], 'fulltexts'=>($params->fulltexts?0:1) ))."' title='".$lang[($params->fulltexts?'no_full_texts':'full_texts')]."'>";
					echo "<b>&".($params->fulltexts?'r':'l')."arr;</b>&nbsp;T&nbsp;<b>&".($params->fulltexts?'l':'r')."arr;</b></a>";
					echo "</td>";

					for($i=0; $i<sizeof($tableInfo); $i++)
					{
						echo "<td class='tdheader'>";
						if(isset($_SESSION[COOKIENAME.'sortRows']))
							$orderTag = ($_SESSION[COOKIENAME.'sortRows']==$tableInfo[$i]['name'] && $_SESSION[COOKIENAME.'orderRows']=="ASC") ? "DESC" : "ASC";
						else
							$orderTag = "ASC";
						echo $params->getLink(array('action'=>$_GET['action'], 'sort'=>$tableInfo[$i]['name'], 'order'=>$orderTag ), htmlencode($tableInfo[$i]['name']));
						if(isset($_SESSION[COOKIENAME.'sortRows']) && $_SESSION[COOKIENAME.'sortRows']==$tableInfo[$i]['name'])
							echo (($_SESSION[COOKIENAME.'orderRows']=="ASC") ? " <b>&uarr;</b>" : " <b>&darr;</b>");
						echo "</td>";
					}
					echo "</tr>";

					for($i=0; $row = $db->fetch($table_result, 'num'); $i++)
					{
						// -g-> 因为执行的是 "SELECT *, PK_1, typeof(PK_1), PK2, typeof(PK_2), ... FROM ...", 所以 $pk 始终是数组中每一行的最后几列
						$pk_arr = array();
						for($col = $pkFirstCol; array_key_exists($col, $row); $col=$col+2)
						{
							// $col 中是类型, $col-1 中是值
							if($row[$col]=='integer' || $row[$col]=='real')
								// 按 int 或 float 进行 json 编码, 而不是按字符串
								$pk_arr[] = $row[$col-1]+0;
							else
								// 按 json 字符串编码
								$pk_arr[] = $row[$col-1];
						}
						$pk = json_encode($pk_arr);
						$tdWithClass = "<td class='td".($i%2 ? "1" : "2")."'>";
						$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";
						echo "<tr>";
						if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
						{
							echo $tdWithClass;
							echo "<input type='checkbox' name='check[]' value='".htmlencode($pk)."' id='check_".htmlencode($i)."'/>";
							echo "</td>";
							echo $tdWithClass;
							// -g-> 这里我们需要把主键作为编辑和删除的链接参数。
							echo $params->getLink(array('action'=>'row_editordelete', 'pk'=>$pk, 'type'=>'edit'),"<span>".$lang['edit']."</span>",'edit', $lang['edit']);
							echo "</td>";
							echo $tdWithClass;
							echo $params->getLink(array('action'=>'row_editordelete', 'pk'=>$pk, 'type'=>'delete'),"<span>".$lang['del']."</span>",'delete', $lang['del']);
							echo "</td>";
						} else {
							echo "<td class='td".($i%2 ? "1" : "2")."' colspan='3'></td>";
						}
						for($j=0; $j<sizeof($tableInfo); $j++)
						{
							$typeAffinity = get_type_affinity($tableInfo[$j]['type']);
							if($typeAffinity=="INTEGER" || $typeAffinity=="REAL" || $typeAffinity=="NUMERIC")
								echo $tdWithClass;
							else
								echo $tdWithClassLeft;
							if($row[$j]==="")
								echo "&nbsp;";
							elseif($row[$j]===NULL)
								echo "<i class='null'>NULL</i>";
							elseif(preg_match('/^BLOB/i', $tableInfo[$j]['type']))
							{
								echo "<div style='float:left; text-align: left; padding-right:2em'>";
								echo $params->getLink(array('action'=>'row_get_blob', 'confirm'=>1, 'pk'=>$pk, 'column'=>$tableInfo[$j]['name'], 'download_blob'=>1),$lang["download"]).' | ';
								echo $params->getLink(array('action'=>'row_get_blob', 'confirm'=>1, 'pk'=>$pk, 'column'=>$tableInfo[$j]['name'], 'download_blob'=>0),$lang["open_in_browser"],'','','_blank');
								echo "</div><div style='float:right; text-align: right'>";
								echo 'Size: '.number_format(strlen($row[$j])).' Bytes';
								echo "</div>";
							}
							elseif(isset($search))
								echo markSearchWords(subString($row[$j]),$tableInfo[$j]['name'], $search);
							else
								echo htmlencode(subString($row[$j]));
							echo "</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
					if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
					{
						echo "<a onclick='checkAll()'>".$lang['chk_all']."</a> / <a onclick='uncheckAll()'>".$lang['unchk_all']."</a> <i>".$lang['with_sel'].":</i> ";
						echo "<select name='type'>";
						echo "<option value='edit'>".$lang['edit']."</option>";
						echo "<option value='delete'>".$lang['del']."</option>";
						echo "</select> ";
						echo "<input type='submit' value='".$lang['go']."' name='massGo' class='btn'/>";
					}
					echo "</form>";
				}
				else
				//- 图表视图
				{
					if(!isset($_SESSION[COOKIENAME.$target_table.'chartlabels']))
					{
						// 未设置标签列。尝试选择一个文本列作为标签列。
						for($i=0; $i<sizeof($tableInfo); $i++)
						{
							if(get_type_affinity($tableInfo[$i]['type'])=='TEXT')
							{
								$_SESSION[COOKIENAME.$target_table.'chartlabels'] = $i;
								break;
							}
						}
					}
					if(!isset($_SESSION[COOKIENAME.$target_table.'chartlabels']))
						// 没找到文本列, 使用第一列
						$_SESSION[COOKIENAME.$target_table.'chartlabels'] = 0;

					if(!isset($_SESSION[COOKIENAME.$target_table.'chartvalues']))
					{
						// 未设置数值列。如果可能, 选择第一个数值列。
						// 如果不行, 选择第一个不是标签列的列。

						$potential_value_column = null;
						for($i=0; $i<sizeof($tableInfo); $i++)
						{
							if($potential_value_column===null && $i != $_SESSION[COOKIENAME.$target_table.'chartlabels'])
								// 第一个不是标签列的列 (任意类型)
								$potential_value_column = $i;
							// 检查该列是否为数值类型
							$typeAffinity = get_type_affinity($tableInfo[$i]['type']);
							if($typeAffinity=='INTEGER' || $typeAffinity=='REAL' || $typeAffinity=='NUMERIC')
							{
								// 这一列被定义为数值列, 因此优先将它而不是 $potential_value_column 作为数值列
								$_SESSION[COOKIENAME.$target_table.'chartvalues'] = $i;
								break;
							}
						}
						if(!isset($_SESSION[COOKIENAME.$target_table.'chartvalues']))
						{
							// 我们没有找到数值列
							if($potential_value_column!==null)
								// 使用 $potential_value_column, 即不是标签列的第二列
								$_SESSION[COOKIENAME.$target_table.'chartvalues'] = $potential_value_column;
							else
								// 没希望了, 只有 1 列
								$_SESSION[COOKIENAME.$target_table.'chartvalues'] = 0;
						}
					}

					if(!isset($_SESSION[COOKIENAME.'charttype']))
						$_SESSION[COOKIENAME.'charttype'] = 'bar';

					if(isset($_POST['chartsettings']))
					{
						$_SESSION[COOKIENAME.'charttype'] = $_POST['charttype'];
						$_SESSION[COOKIENAME.$target_table.'chartlabels'] = $_POST['chartlabels'];
						$_SESSION[COOKIENAME.$target_table.'chartvalues'] = $_POST['chartvalues'];
					}
					//- 图表 javascript 代码
					?>
					<script type='text/javascript' src='https://www.google.com/jsapi'></script>
					<script type='text/javascript'>
					google.load('visualization', '1.0', {'packages':['corechart']});
					google.setOnLoadCallback(drawChart);
					function drawChart()
					{
						var data = new google.visualization.DataTable();
						data.addColumn('string', '<?php echo $tableInfo[$_SESSION[COOKIENAME.$target_table.'chartlabels']]['name']; ?>');
						data.addColumn('number', '<?php echo $tableInfo[$_SESSION[COOKIENAME.$target_table.'chartvalues']]['name']; ?>');
						data.addRows([
						<?php
						for($i=0; $row = $db->fetch($table_result); $i++)
						{
							$label = str_replace("'", "", htmlencode($row[$_SESSION[COOKIENAME.$target_table.'chartlabels']]));
							$value = htmlencode($row[$_SESSION[COOKIENAME.$target_table.'chartvalues']]);

							if($value==NULL || $value=="")
								$value = 0;

							echo "['".$label."', ".$value."]";
							if($i<$totalRows-1)
								echo ",";
						}
						$height = ($totalRows+1) * 30;
						if($height>1000)
							$height = 1000;
						else if($height<300)
							$height = 300;
						if($_SESSION[COOKIENAME.'charttype']=="pie")
							$height = 800;
						?>
						]);
						var chartWidth = document.getElementById("main_column").offsetWidth - document.getElementById("chartsettingsbox").offsetWidth - 100;
						if(chartWidth>1000)
							chartWidth = 1000;

						var options =
						{
							'width':chartWidth,
							'height':<?php echo $height; ?>,
							'title':'<?php echo $tableInfo[$_SESSION[COOKIENAME.$target_table.'chartlabels']]['name']." vs ".$tableInfo[$_SESSION[COOKIENAME.$target_table.'chartvalues']]['name']; ?>'
						};
						<?php
						if($_SESSION[COOKIENAME.'charttype']=="bar")
							echo "var chart = new google.visualization.BarChart(document.getElementById('chart_div'));";
						else if($_SESSION[COOKIENAME.'charttype']=="pie")
							echo "var chart = new google.visualization.PieChart(document.getElementById('chart_div'));";
						else
							echo "var chart = new google.visualization.LineChart(document.getElementById('chart_div'));";
						?>
						chart.draw(data, options);
					}
					</script>
					<div id="chart_div" style="float:left;"><?php echo $lang['no_chart']; ?></div>
					<?php
					echo "<fieldset style='float:right; text-align:center;' id='chartsettingsbox'><legend><b>Chart Settings</b></legend>";
					echo $params->getForm(array('action'=>$_GET['action']));
					echo $lang['chart_type'].": <select name='charttype'>";
					echo "<option value='bar'";
					if($_SESSION[COOKIENAME.'charttype']=="bar")
						echo " selected='selected'";
					echo ">".$lang['chart_bar']."</option>";
					echo "<option value='pie'";
					if($_SESSION[COOKIENAME.'charttype']=="pie")
						echo " selected='selected'";
					echo ">".$lang['chart_pie']."</option>";
					echo "<option value='line'";
					if($_SESSION[COOKIENAME.'charttype']=="line")
						echo " selected='selected'";
					echo ">".$lang['chart_line']."</option>";
					echo "</select>";
					echo "<br/><br/>";
					echo $lang['lbl'].": <select name='chartlabels'>";
					for($i=0; $i<sizeof($tableInfo); $i++)
					{
						if(isset($_SESSION[COOKIENAME.$target_table.'chartlabels']) && $_SESSION[COOKIENAME.$target_table.'chartlabels']==$i)
							echo "<option value='".$i."' selected='selected'>".htmlencode($tableInfo[$i]['name'])."</option>";
						else
							echo "<option value='".$i."'>".htmlencode($tableInfo[$i]['name'])."</option>";
					}
					echo "</select>";
					echo "<br/><br/>";
					echo $lang['val'].": <select name='chartvalues'>";
					for($i=0; $i<sizeof($tableInfo); $i++)
					{
						if(isset($_SESSION[COOKIENAME.$target_table.'chartvalues']) && $_SESSION[COOKIENAME.$target_table.'chartvalues']==$i)
							echo "<option value='".$i."' selected='selected'>".htmlencode($tableInfo[$i]['name'])."</option>";
						else
							echo "<option value='".$i."'>".htmlencode($tableInfo[$i]['name'])."</option>";
					}
					echo "</select>";
					echo "<br/><br/>";
					echo "<input type='submit' name='chartsettings' value='".$lang['update']."' class='btn'/>";
					echo "</form>";
					echo "</fieldset>";
					echo "<div style='clear:both;'></div>";
					//图表视图结束
				}
			}
			else //没有行 - 不做任何事
			{
				echo "<br/><div class='confirm'>";
				if(isset($search) || $totalRows>0)
					echo $lang['no_rows']."<br/><br/>";
				elseif($target_table_type == 'table')
					echo $lang['empty_tbl']." ".$params->getLink(array('action'=>'row_create'), $lang['click']) ." ".$lang['insert_rows'].'<br/><br/>';
				echo "<span style='font-size:11px;'>".htmlencode($queryDisp)."</span>";
				echo "</div><br/>";
			}

			if(isset($search))
				echo "<br/><br/>".$params->getLink(array('action'=>'table_search','search'=>null,'oldSearch' => (isset($_GET['search'])?$_GET['search']:null)), $lang['srch_again']);

			break;

		//- 创建新行 (=row_create)
		case "row_create":
			echo $params->getForm(array('action'=>'row_create'), 'get');
			echo $lang['restart_insert'];
			echo " <select name='newRows'>";
			for($i=1; $i<=40; $i++)
			{
				if(isset($_GET['newRows']) && $_GET['newRows']==$i)
					echo "<option value='".$i."' selected='selected'>".$i."</option>";
				else
					echo "<option value='".$i."'>".$i."</option>";
			}
			echo "</select> ";
			echo $lang['rows'];
			echo " <input type='submit' value='".$lang['go']."' class='btn'/>";
			echo "</form>";
			echo "<br/>";
			echo $params->getForm(array('action'=>'row_create','confirm'=>'1'), 'post', true);
			$tableInfo = $db->getTableInfo($target_table);
			if(isset($_GET['newRows']))
				$num = $_GET['newRows'];
			else
				$num = 1;
			echo "<input type='hidden' name='newRows' value='".$num."'/>";
			for($j=0; $j<$num; $j++)
			{
				if($j>0)
					echo "<label><input type='checkbox' value='ignore' name='".$j.":ignore' id='row_".$j."_ignore' checked='checked'/> ".$lang['ignore']."</label><br/>";
				echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
				echo "<tr>";
				echo "<td class='tdheader'>".$lang['fld']."</td>";
				echo "<td class='tdheader'>".$lang['type']."</td>";
				echo "<td class='tdheader'>".$lang['func']."</td>";
				echo "<td class='tdheader'>Null</td>";
				echo "<td class='tdheader'>".$lang['val']."</td>";
				echo "</tr>";

				for($i=0; $i<sizeof($tableInfo); $i++)
				{
					$field = $tableInfo[$i]['name'];
					$type = strtoupper($tableInfo[$i]['type']);
					$typeAffinity = get_type_affinity($type);
					if($tableInfo[$i]['dflt_value'] === "NULL")
						$value = NULL;
					else
						$value = htmlencode(trim(trim((string) $tableInfo[$i]['dflt_value']), "'"));
					$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";
					echo "<tr>";
					echo $tdWithClassLeft;
					echo htmlencode($field);
					echo "</td>";
					echo $tdWithClassLeft;
					echo htmlencode($type);
					echo "</td>";
					echo $tdWithClassLeft;
					echo "<select name='function_".$i."[]' onchange='notNull(\"row_".$j."_field_".$i."_null\");'>";
					echo "<option value=''>&nbsp;</option>";
					foreach (array_merge($sqlite_functions, $custom_functions) as $f) {
						echo "<option value='".htmlencode($f)."'>".htmlencode($f)."</option>";
					}
					echo "</select>";
					echo "</td>";
					echo $tdWithClassLeft;
					if($tableInfo[$i]['notnull']==0)
					{
						if($value===NULL)
							echo "<input type='checkbox' name='".$i."_null[]' id='row_".$j."_field_".$i."_null' checked='checked' onclick='disableText(this, \"row_".$j."_field_".$i."_value\");'/>";
						else
							echo "<input type='checkbox' name='".$i."_null[]' id='row_".$j."_field_".$i."_null' onclick='disableText(this, \"row_".$j."_field_".$i."_value\");'/>";
					}
					echo "</td>";
					echo $tdWithClassLeft;

					if($typeAffinity=="INTEGER" || $typeAffinity=="REAL" || $typeAffinity=="NUMERIC")
						echo "<input type='text' id='row_".$j."_field_".$i."_value' name='".$j.":".$i."' value='".$value."' onblur='changeIgnore(this, \"row_".$j."_ignore\");' onclick='notNull(\"row_".$j."_field_".$i."_null\");'/>";
					elseif(preg_match('/^BLOB/', $type))
						echo "<input type='file' id='row_".$j."_field_".$i."_value' name='".$j.":".$i."' onblur='changeIgnore(this, \"row_".$j."_ignore\");' onclick='notNull(\"row_".$j."_field_".$i."_null\");'/>";
					else
						echo "<textarea id='row_".$j."_field_".$i."_value' name='".$j.":".$i."' rows='5' cols='60' onclick='notNull(\"row_".$j."_field_".$i."_null\");' onblur='changeIgnore(this, \"row_".$j."_ignore\");'>".$value."</textarea>";
					echo "</td>";
					echo "</tr>";
				}
				echo "<tr>";
				echo "<td class='tdheader' style='text-align:right;' colspan='5'>";
				echo "<input type='submit' value='".$lang['insert']."' class='btn'/>";
				echo "</td>";
				echo "</tr>";
				echo "</table><br/>";
			}
			echo "</form>";
			break;

		//- 编辑或删除行 (=row_editordelete)
		case "row_editordelete":
			if(isset($_POST['check']))
				$pks = $_POST['check'];
			else if(isset($_GET['pk']))
				$pks = array($_GET['pk']);
			else $pks[0] = "";
			$str = implode(', ', $pks);
			if($str=="") //没有选中任何内容, 显示错误
			{
				echo "<div class='confirm'>";
				echo $lang['err'].": ".$lang['no_sel'];
				echo "</div>";
				echo "<br/><br/>".$params->getLink(array('action'=>'row_view'),$lang['return']);
			}
			else
			{
				if((isset($_POST['type']) && $_POST['type']=="edit") || (isset($_GET['type']) && $_GET['type']=="edit")) //编辑
				{
					echo $params->getForm(array('action'=>'row_edit', 'confirm'=>'1', 'pk'=>json_encode($pks)),'post',true);
					$tableInfo = $db->getTableInfo($target_table);
					$primary_key = $db->getPrimaryKey($target_table);

					for($j=0; $j<sizeof($pks); $j++)
					{
						$query = "SELECT * FROM ".$db->quote_id($target_table)." WHERE " . $db->wherePK($target_table, json_decode($pks[$j]));
						$result1 = $db->select($query, 'num');

						echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
						echo "<tr>";
						echo "<td class='tdheader'>".$lang['fld']."</td>";
						echo "<td class='tdheader'>".$lang['type']."</td>";
						echo "<td class='tdheader'>".$lang['func']."</td>";
						echo "<td class='tdheader'>Null</td>";
						echo "<td class='tdheader'>".$lang['val']."</td>";
						echo "</tr>";

						for($i=0; $i<sizeof($tableInfo); $i++)
						{
							$field = $tableInfo[$i]['name'];
							$type = strtoupper($tableInfo[$i]['type']);
							$typeAffinity = get_type_affinity($type);
							$value = $result1[$i];
							$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";
							echo "<tr>";
							echo $tdWithClassLeft;
							echo htmlencode($field);
							echo "</td>";
							echo $tdWithClassLeft;
							echo htmlencode($type);
							echo "</td>";
							echo $tdWithClassLeft;
							echo "<select name='function_".$i."[]' onchange='notNull(\"row_".$j."_field_".$i."_null\");'>";
							echo "<option value=''></option>";
							foreach (array_merge($sqlite_functions, $custom_functions) as $f) {
								echo "<option value='".htmlencode($f)."'>".htmlencode($f)."</option>";
							}
							echo "</select>";
							echo "</td>";
							echo $tdWithClassLeft;
							if($tableInfo[$i]['notnull']==0)
							{
								if($value===NULL)
									echo "<input type='checkbox' name='".$i."_null[]' id='row_".$j."_field_".$i."_null' checked='checked' onclick='disableText(this, \"row_".$j."_field_".$i."_value\");'/>";
								else
									echo "<input type='checkbox' name='".$i."_null[]' id='row_".$j."_field_".$i."_null' onclick='disableText(this, \"row_".$j."_field_".$i."_value\");'/>";
							}
							echo "</td>";
							echo $tdWithClassLeft;
							if($typeAffinity=="INTEGER" || $typeAffinity=="REAL" || $typeAffinity=="NUMERIC")
								echo "<input type='text' id='row_".$j."_field_".$i."_value' name='".$i."[]' value='".htmlencode($value)."' onblur='changeIgnore(this, \"".$j."\", \"row_".$j."_field_".$i."_null\")' />";
							elseif(preg_match('/^BLOB/', $type))
							{
								if($value!==NULL)
								{
									echo "<input type='radio' name='row_".$j."_field_".$i."_blob_use' value='old' checked='checked'>";
									echo $params->getLink(array('action'=>'row_get_blob', 'confirm'=>1, 'pk'=>$pks[$j], 'column'=>$field, 'download_blob'=>1),$lang["download"]).' | ';
									echo $params->getLink(array('action'=>'row_get_blob', 'confirm'=>1, 'pk'=>$pks[$j], 'column'=>$field, 'download_blob'=>0),$lang["open_in_browser"],'','','_blank').'<br/>';
									echo "<input type='radio' name='row_".$j."_field_".$i."_blob_use' value='new' id='row_".$j."_field_".$i."_blob_new'>";
								}
								echo "<input type='file' id='row_".$j."_field_".$i."_value' name='".$j.":".$i."'
									onblur='changeIgnore(this, \"row_".$j."_ignore\");'
									onchange='document.getElementById(\"row_".$j."_field_".$i."_blob_new\").checked=true;'
									onclick='notNull(\"row_".$j."_field_".$i."_null\");'
									".($value===NULL?" disabled='disabled'":"")."/>";
							}
							else
								echo "<textarea id='row_".$j."_field_".$i."_value' name='".$i."[]' rows='1' cols='60' class='".htmlencode($field)."_textarea' onblur='changeIgnore(this, \"".$j."\", \"row_".$j."_field_".$i."_null\")'>".htmlencode($value)."</textarea>";
							echo "</td>";
							echo "</tr>";
						}
						echo "<tr>";
						echo "<td class='tdheader' style='text-align:right;' colspan='5'>";
						// 注意: '保存更改' 按钮必须放在代码最前面, 这样用回车键提交表单时才会使用它 (issue #215)
						echo "<input type='submit' value='".$lang['save_ch']."' class='btn'/> ";
						echo "<input type='submit' name='new_row' value='".$lang['new_insert']."' class='btn'/> ";
						echo $params->getLink(array('action'=>'row_view'), $lang['cancel']);
						echo "</td>";
						echo "</tr>";
						echo "</table>";
						echo "<br/>";
					}
					echo "</form>";
				}
				else //删除
				{
					echo $params->getForm(array('action'=>'row_delete', 'confirm'=>'1', 'pk'=>json_encode($pks)));
					echo "<div class='confirm'>";
					printf($lang['ques_del_rows'], htmlencode($str), htmlencode($target_table));
					echo "<br/><br/>";
					echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
					echo $params->getLink(array('action'=>'row_view'), $lang['cancel']);
					echo "</div>";
				}
			}
			break;

	//- 列操作

		//- 查看表结构 (=column_view)
		case "column_view":
			$tableInfo = $db->getTableInfo($target_table);

			echo $params->getForm(array('action'=>'column_confirm'), 'get', false, 'checkForm');
			echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
			echo "<tr>";
			if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
				echo "<td colspan='3'></td>";
			echo "<td class='tdheader'>".$lang['col']." #</td>";
			echo "<td class='tdheader'>".$lang['fld']."</td>";
			echo "<td class='tdheader'>".$lang['type']."</td>";
			echo "<td class='tdheader'>".$lang['not_null']."</td>";
			echo "<td class='tdheader'>".$lang['def_val']."</td>";
			echo "<td class='tdheader'>".$lang['prim_key']."</td>";
			echo "</tr>";

			$noPrimaryKey = true;

			for($i=0; $i<sizeof($tableInfo); $i++)
			{
				$colVal = $tableInfo[$i][0];
				$fieldVal = $tableInfo[$i][1];
				$typeVal = $tableInfo[$i]['type'];
				$notnullVal = $tableInfo[$i][3];
				$defaultVal = $tableInfo[$i][4];
				$primarykeyVal = $tableInfo[$i][5];

				if(intval($notnullVal)!=0)
					$notnullVal = $lang['yes'];
				else
					$notnullVal = $lang['no'];
				if(intval($primarykeyVal)!=0)
				{
					$primarykeyVal = $lang['yes'];
					$noPrimaryKey = false;
				}
				else
					$primarykeyVal = $lang['no'];

				$tdWithClass = "<td class='td".($i%2 ? "1" : "2")."'>";
				$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";
				echo "<tr>";
				if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
				{
					echo $tdWithClass;
					echo "<input type='checkbox' name='check[]' value='".htmlencode($fieldVal)."' id='check_".$i."'/>";
					echo "</td>";
					echo $tdWithClass;
					echo $params->getLink(array('action'=>'column_edit', 'pk'=>$fieldVal),"<span>".$lang['edit']."</span>",'edit', $lang['edit']);
					echo "</td>";
					echo $tdWithClass;
					echo $params->getLink(array('action'=>'column_confirm', 'action2'=>'column_delete', 'pk'=>$fieldVal),"<span>".$lang['del']."</span>",'delete', $lang['del']);
					echo "</td>";
				}
				echo $tdWithClass;
				echo htmlencode($colVal);
				echo "</td>";
				echo $tdWithClassLeft;
				echo htmlencode($fieldVal);
				echo "</td>";
				echo $tdWithClassLeft;
				echo htmlencode($typeVal);
				echo "</td>";
				echo $tdWithClassLeft;
				echo htmlencode($notnullVal);
				echo "</td>";
				echo $tdWithClassLeft;
				if($defaultVal===NULL)
					echo "<i class='null'>".$lang['none']."</i>";
				elseif($defaultVal==="NULL")
					echo "<i class='null'>NULL</i>";
				else
					echo htmlencode($defaultVal);
				echo "</td>";
				echo $tdWithClassLeft;
				echo htmlencode($primarykeyVal);
				echo "</td>";
				echo "</tr>";
			}

			echo "</table>";
			if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
			{
				echo "<a onclick='checkAll()'>".$lang['chk_all']."</a> / <a onclick='uncheckAll()'>".$lang['unchk_all']."</a> <i>".$lang['with_sel'].":</i> ";
				echo "<select name='action2'>";
				//echo "<option value='edit'>".$lang['edit']."</option>";
				echo "<option value='column_delete'>".$lang['del']."</option>";
				if($noPrimaryKey)
					echo "<option value='primarykey_add'>".$lang['prim_key']."</option>";
				echo "</select> ";
				echo "<input type='submit' value='".$lang['go']."' name='massGo' class='btn'/>";
			}
			echo "</form>";
			if($target_table_type == 'table' && $db->isWritable() && $db->isDirWritable())
			{
				echo "<br/>";
				echo $params->getForm(array('action'=>'column_create'), 'get');
				echo $lang['add']." <input type='text' name='tablefields' style='width:30px;' value='1'/> ".$lang['tbl_end']." <input type='submit' value='".$lang['go']."' name='addfields' class='btn'/>";
				echo "</form>";
			}

			$query = "SELECT sql FROM sqlite_master WHERE name=".$db->quote($target_table);
			$master = $db->selectArray($query);

			echo "<br/>";
			echo "<br/>";
			echo "<div class='confirm'>";
			echo "<b>".$lang['query_used_'.$target_table_type]."</b><br/>";
			echo "<span style='font-size:11px;'>".htmlencode($master[0]['sql'])."</span>";
			echo "</div>";
			echo "<br/>";
			if($target_table_type != 'view')
			{
				echo "<br/><hr/><br/>";
				$query = "PRAGMA index_list(".$db->quote_id($target_table).")";
				$result = $db->selectArray($query);
				if(sizeof($result)>0)
				{
					echo "<h2>".$lang['indexes'].":</h2>";
					echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
					echo "<tr>";
					echo "<td colspan='1'>";
					echo "</td>";
					echo "<td class='tdheader'>".$lang['name']."</td>";
					echo "<td class='tdheader'>".$lang['unique']."</td>";
					echo "<td class='tdheader'>".$lang['seq_no']."</td>";
					echo "<td class='tdheader'>".$lang['col']." #</td>";
					echo "<td class='tdheader'>".$lang['fld']."</td>";
					echo "</tr>";
					for($i=0; $i<sizeof($result); $i++)
					{
						if($result[$i]['unique']==0)
							$unique = $lang['no'];
						else
							$unique = $lang['yes'];

						$query = "PRAGMA index_info(".$db->quote_id($result[$i]['name']).")";
						$info = $db->selectArray($query);
						$span = sizeof($info);

						$tdWithClass = "<td class='td".($i%2 ? "1" : "2")."'>";
						$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";
						$tdWithClassSpan = "<td class='td".($i%2 ? "1" : "2")."' rowspan='".$span."'>";
						$tdWithClassLeftSpan = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;' rowspan='".$span."'>";
						echo "<tr>";
						echo $tdWithClassSpan;
						echo $params->getLink(array('action'=>'index_delete', 'pk'=>$result[$i]['name']), "<span>".$lang['del']."</span>", 'delete', $lang['del']);
						echo "</td>";
						echo $tdWithClassLeftSpan;
						echo $result[$i]['name'];
						echo "</td>";
						echo $tdWithClassLeftSpan;
						echo $unique;
						echo "</td>";
						for($j=0; $j<$span; $j++)
						{
							if($j!=0)
								echo "<tr>";
							echo $tdWithClassLeft;
							echo htmlencode($info[$j]['seqno']);
							echo "</td>";
							echo $tdWithClassLeft;
							echo htmlencode($info[$j]['cid']);
							echo "</td>";
							echo $tdWithClassLeft;
							echo htmlencode($info[$j]['name']);
							echo "</td>";
							echo "</tr>";
						}
					}
					echo "</table><br/><br/>";
				}

				$query = "SELECT * FROM sqlite_master WHERE type='trigger' AND tbl_name=".$db->quote($target_table)." ORDER BY name";
				$result = $db->selectArray($query);
				//print_r($result);
				if(sizeof($result)>0)
				{
					echo "<h2>".$lang['triggers'].":</h2>";
					echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
					echo "<tr>";
					echo "<td colspan='1'>";
					echo "</td>";
					echo "<td class='tdheader'>".$lang['name']."</td>";
					echo "<td class='tdheader'>".$lang['sql']."</td>";
					echo "</tr>";
					for($i=0; $i<sizeof($result); $i++)
					{
						$tdWithClass = "<td class='td".($i%2 ? "1" : "2")."'>";
						echo "<tr>";
						echo $tdWithClass;
						echo $params->getLink(array('action'=>'trigger_delete', 'pk'=>$result[$i]['name']), "<span>".$lang['del']."</span>", 'delete', $lang['del']);
						echo "</td>";
						echo $tdWithClass;
						echo htmlencode($result[$i]['name']);
						echo "</td>";
						echo $tdWithClass;
						echo htmlencode($result[$i]['sql']);
						echo "</td>";
					}
					echo "</table><br/><br/>";
				}

				if($db->isWritable() && $db->isDirWritable())
				{
					echo $params->getForm(array('action'=>'index_create'),'get');
					echo "<br/><div class='tdheader'>";
					echo $lang['create_index2']." <input type='text' name='numcolumns' style='width:30px;' value='1'/> ".$lang['cols']." <input type='submit' value='".$lang['go']."' name='addindex' class='btn'/>";
					echo "</div>";
					echo "</form>";
	
					echo $params->getForm(array('action'=>'trigger_create'),'get');
					echo "<br/><div class='tdheader'>";
					echo $lang['create_trigger2']." <input type='submit' value='".$lang['go']."' name='addindex' class='btn'/>";
					echo "</div>";
					echo "</form>";
				}
			}
			break;

		//- 创建列 (=column_create)
		case "column_create":
			echo "<h2>".sprintf($lang['new_fld'],htmlencode($_GET['table']))."</h2>";
			if($_GET['tablefields']=="" || intval($_GET['tablefields'])<=0)
				echo $lang['specify_fields'];
			else if($_GET['table']=="")
				echo $lang['specify_tbl'];
			else
			{
				$num = intval($_GET['tablefields']);
				$name = $_GET['table'];
				echo $params->getForm(array('action'=>'column_create', 'confirm'=>'1'));
				echo "<input type='hidden' name='rows' value='".$num."'/>";
				echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
				echo "<tr>";
				$headings = array($lang["fld"], $lang["type"], $lang["prim_key"]);
				if($db->getType() != "SQLiteDatabase") $headings[] = $lang["autoincrement"];
				$headings[] = $lang["not_null"];
				$headings[] = $lang["def_val"];

				for($k=0; $k<count($headings); $k++)
					echo "<td class='tdheader'>" . $headings[$k] . "</td>";
				echo "</tr>";

				for($i=0; $i<$num; $i++)
				{
					$tdWithClass = "<td class='td" . ($i%2 ? "1" : "2") . "'>";
					echo "<tr>";
					echo $tdWithClass;
					echo "<input type='text' name='".$i."_field' style='width:200px;'/>";
					echo "</td>";
					echo $tdWithClass;
					echo "<select name='".$i."_type' id='i".$i."_type' onchange='toggleAutoincrement(".$i.");'>";
					foreach ($sqlite_datatypes as $t) {
						echo "<option value='".htmlencode($t)."'>".htmlencode($t)."</option>";
					}
					echo "</select>";
					echo "</td>";
					echo $tdWithClass;
					echo "<label><input type='checkbox' name='".$i."_primarykey'/> ".$lang['yes']."</label>";
					echo "</td>";
					if($db->getType() != "SQLiteDatabase")
					{
						echo $tdWithClass;
						echo "<label><input type='checkbox' name='".$i."_autoincrement' id='i".$i."_autoincrement'/> ".$lang['yes']."</label>";
						echo "</td>";
					}
					echo $tdWithClass;
					echo "<label><input type='checkbox' name='".$i."_notnull'/> ".$lang['yes']."</label>";
					echo "</td>";
					echo $tdWithClass;
					echo "<select name='".$i."_defaultoption' id='i".$i."_defaultoption' onchange=\"if(this.value!='defined' && this.value!='expr') document.getElementById('i".$i."_defaultvalue').value='';\">";
					echo "<option value='none'>".$lang['none']."</option><option value='defined'>".$lang['as_defined'].":</option><option>NULL</option><option>CURRENT_TIME</option><option>CURRENT_DATE</option><option>CURRENT_TIMESTAMP</option><option value='expr'>".$lang['expression'].":</option>";
					echo "</select>";
					echo "<input type='text' name='".$i."_defaultvalue' id='i".$i."_defaultvalue' style='width:100px;' onchange=\"if(document.getElementById('i".$i."_defaultoption').value!='expr') document.getElementById('i".$i."_defaultoption').value='defined';\"/>";
					echo "</td>";
					echo "</tr>";
				}
				echo "<tr>";
				echo "<td class='tdheader' style='text-align:right;' colspan='6'>";
				echo "<input type='submit' value='".$lang['add_flds']."' class='btn'/> ";
				echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
				echo "</td>";
				echo "</tr>";
				echo "</table>";
				echo "</form>";
			}
			break;

		//- 删除列 (=column_confirm)
		case "column_confirm":
			if(isset($_GET['check']))
				$pks = $_GET['check'];
			elseif(isset($_GET['pk']))
				$pks = array($_GET['pk']);
			else $pks = array();

			if(sizeof($pks)==0) //没有选中任何内容, 显示错误
			{
				echo "<div class='confirm'>";
				echo $lang['err'].": ".$lang['no_sel'];
				echo "</div>";
				echo "<br/><br/>";
				echo $params->getLink(array('action'=>'column_view'), $lang['return']);
			}
			else
			{
				$str = $pks[0];
				$pkVal = $pks[0];
				for($i=1; $i<sizeof($pks); $i++)
				{
					$str .= ", ".$pks[$i];
					$pkVal .= ":".$pks[$i];
				}
				echo $params->getForm(array('action'=>$_GET['action2'], 'confirm'=>'1', 'pk'=>$pkVal));
				echo "<div class='confirm'>";
				printf($lang['ques_'.$_GET['action2']], htmlencode($str), htmlencode($target_table));
				echo "<br/><br/>";
				echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
				echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
				echo "</div>";
			}
			break;

		//- 编辑列 (=column_edit)
		case "column_edit":
			echo "<h2>".sprintf($lang['edit_col'], htmlencode($_GET['pk']))." ".$lang['on_tbl']." '".htmlencode($target_table)."'</h2>";
			echo $lang['sqlite_limit']."<br/><br/>";
			if(!isset($_GET['pk']))
				echo $lang['specify_col'];
			else if (!$target_table)
				echo $lang['specify_tbl'];
			else
			{
				$tableInfo = $db->getTableInfo($target_table);

				for($i=0; $i<sizeof($tableInfo); $i++)
				{
					if($tableInfo[$i][1]==$_GET['pk'])
					{
						$colVal = $tableInfo[$i][0];
						$fieldVal = $tableInfo[$i][1];
						$typeVal = $tableInfo[$i]['type'];
						$notnullVal = $tableInfo[$i][3];
						$defaultVal = $tableInfo[$i][4];
						$primarykeyVal = $tableInfo[$i][5];
						break;
					}
				}

				if(!isset($fieldVal))
				{
					echo "<div class='confirm'>".$lang['err'].": ".sprintf($lang['col_inexistent'], htmlencode($_GET['pk']))."</div>";
				}
				else
				{
					$name = $target_table;
					echo $params->getForm(array('action'=>'column_edit', 'confirm'=>'1'));
					echo "<input type='hidden' name='oldvalue' value='".htmlencode($_GET['pk'])."'/>";
					echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
					echo "<tr>";
					//$headings = array("Field", "Type", "Primary Key", "Autoincrement", "Not NULL", "Default Value");
					$headings = array($lang["fld"], $lang["type"]);
					for($k=0; $k<count($headings); $k++)
						echo "<td class='tdheader'>".$headings[$k]."</td>";
					echo "</tr>";

					$i = 0;
					$tdWithClass = "<td class='td" . ($i%2 ? "1" : "2") . "'>";
					echo "<tr>";
					echo $tdWithClass;
					echo "<input type='text' name='".$i."_field' style='width:200px;' value='".htmlencode($fieldVal)."'/>";
					echo "</td>";
					echo $tdWithClass;
					echo "<select name='".$i."_type' id='i".$i."_type' onchange='toggleAutoincrement(".$i.");'>";
					if(!in_array($typeVal, $sqlite_datatypes))
						echo "<option value='".htmlencode($typeVal)."' selected='selected'>".htmlencode($typeVal)."</option>";
					foreach ($sqlite_datatypes as $t) {
						if($t==$typeVal)
							echo "<option value='".htmlencode($t)."' selected='selected'>".htmlencode($t)."</option>";
						else
							echo "<option value='".htmlencode($t)."'>".htmlencode($t)."</option>";
					}
					echo "</select>";
					echo "</td>";
					/*
					echo $tdWithClass;
					if($primarykeyVal)
						echo "<input type='checkbox' name='".$i."_primarykey' checked='checked'/> Yes";
					else
						echo "<input type='checkbox' name='".$i."_primarykey'/> Yes";
					echo "</td>";
					echo $tdWithClass;
					if(1==2)
						echo "<input type='checkbox' name='".$i."_autoincrement' id='".$i."_autoincrement' checked='checked'/> Yes";
					else
						echo "<input type='checkbox' name='".$i."_autoincrement' id='".$i."_autoincrement'/> Yes";
					echo "</td>";
					echo $tdWithClass;
					if($notnullVal)
						echo "<input type='checkbox' name='".$i."_notnull' checked='checked'/> Yes";
					else
						echo "<input type='checkbox' name='".$i."_notnull'/> Yes";
					echo "</td>";
					echo $tdWithClass;
					echo "<input type='text' name='".$i."_defaultvalue' value='".$defaultVal."' style='width:100px;'/>";
					echo "</td>";
					*/
					echo "</tr>";

					echo "<tr>";
					echo "<td class='tdheader' style='text-align:right;' colspan='6'>";
					echo "<input type='submit' value='".$lang['save_ch']."' class='btn'/> ";
					echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
					echo "</td>";
					echo "</tr>";
					echo "</table>";
					echo "</form>";
				}
			}
			break;

		//- 删除索引 (=index_delete)
		case "index_delete":
			echo $params->getForm(array('action'=>'index_delete', 'pk'=>$_GET['pk'], 'confirm'=>'1'));
			echo "<div class='confirm'>";
			echo sprintf($lang['ques_del_index'], htmlencode($_GET['pk']))."<br/><br/>";
			echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
			echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
			echo "</div>";
			echo "</form>";
			break;

		//- 删除触发器 (=trigger_delete)
		case "trigger_delete":
			echo $params->getForm(array('action'=>'trigger_delete', 'pk'=>$_GET['pk'], 'confirm'=>'1'));
			echo "<div class='confirm'>";
			echo sprintf($lang['ques_del_trigger'], htmlencode($_GET['pk']))."<br/><br/>";
			echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
			echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
			echo "</div>";
			echo "</form>";
			break;

		//- 创建触发器 (=trigger_create)
		case "trigger_create":
			echo "<h2>".$lang['create_trigger']." '".htmlencode($_GET['table'])."'</h2>";
			if($_GET['table']=="")
				echo $lang['specify_tbl'];
			else
			{
				echo $params->getForm(array('action'=>'trigger_create', 'confirm'=>'1'));
				echo $lang['trigger_name'].": <input type='text' name='trigger_name'/><br/><br/>";
				echo "<fieldset><legend>".$lang['db_event']."</legend>";
				echo $lang['before']."/".$lang['after'].": ";
				echo "<select name='beforeafter'>";
				echo "<option value=''></option>";
				echo "<option value='BEFORE'>".$lang['before']."</option>";
				echo "<option value='AFTER'>".$lang['after']."</option>";
				echo "<option value='INSTEAD OF'>".$lang['instead']."</option>";
				echo "</select>";
				echo "<br/><br/>";
				echo $lang['event'].": ";
				echo "<select name='event'>";
				echo "<option value='DELETE'>".$lang['del']."</option>";
				echo "<option value='INSERT'>".$lang['insert']."</option>";
				echo "<option value='UPDATE'>".$lang['update']."</option>";
				echo "</select>";
				echo "</fieldset><br/><br/>";
				echo "<fieldset><legend>".$lang['trigger_act']."</legend>";
				echo "<label><input type='checkbox' name='foreachrow'/> ".$lang['each_row']."</label><br/><br/>";
				echo $lang['when_exp'].":<br/>";
				echo "<textarea name='whenexpression' style='width:500px; height:100px;' rows='8' cols='50'></textarea>";
				echo "<br/><br/>";
				echo $lang['trigger_step'].":<br/>";
				echo "<textarea name='triggersteps' style='width:500px; height:100px;' rows='8' cols='50'></textarea>";
				echo "</fieldset><br/><br/>";
				echo "<input type='submit' value='".$lang['create_trigger2']."' class='btn'/> ";
				echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
				echo "</form>";
			}
			break;

		//- 创建索引 (=index_create)
		case "index_create":
			echo "<h2>".$lang['create_index']." '".htmlencode($_GET['table'])."'</h2>";
			if($_GET['numcolumns']=="" || intval($_GET['numcolumns'])<=0)
				echo $lang['specify_fields'];
			else if($_GET['table']=="")
				echo $lang['specify_tbl'];
			else
			{
				echo $params->getForm(array('action'=>'index_create', 'confirm'=>'1'));
				$num = intval($_GET['numcolumns']);
				$tableInfo = $db->getTableInfo($_GET['table']);
				echo "<fieldset><legend>".$lang['define_index']."</legend>";
				echo "<label for='index_name'>".$lang['index_name'].":</label> <input type='text' name='name' id='index_name'/><br/>";
				echo "<label for='index_duplicate'>".$lang['dup_val'].":</label>";
				echo "<select name='duplicate' id='index_duplicate'>";
				echo "<option value='yes'>".$lang['allow']."</option>";
				echo "<option value='no'>".$lang['not_allow']."</option>";
				echo "</select><br/>";
				if(version_compare($db->getSQLiteVersion(),'3.8.0')>=0)
					echo "<label for='index_where'>WHERE:</label> <input type='text' name='where' id='index_where'/> ".helpLink($lang['help10']);
				echo "</fieldset>";
				echo "<br/>";
				echo "<fieldset><legend>".$lang['define_in_col']."</legend>";
				for($i=0; $i<$num; $i++)
				{
					echo "<select name='".$i."_field'>";
					echo "<option value=''>--".$lang['ignore']."--</option>";
					for($j=0; $j<sizeof($tableInfo); $j++)
						echo "<option value='".htmlencode($tableInfo[$j][1])."'>".htmlencode($tableInfo[$j][1])."</option>";
					echo "</select> ";
					echo "<select name='".$i."_order'>";
					echo "<option value=''></option>";
					echo "<option value=' ASC'>".$lang['asc']."</option>";
					echo "<option value=' DESC'>".$lang['desc']."</option>";
					echo "</select><br/>";
				}
				echo "</fieldset>";
				echo "<br/><br/>";
				echo "<input type='hidden' name='num' value='".$num."'/>";
				echo "<input type='submit' value='".$lang['create_index1']."' class='btn'/> ";
				echo $params->getLink(array('action'=>'column_view'), $lang['cancel']);
				echo "</form>";
			}
			break;
	}
	echo "</div>";
}

//- HMTL: 数据库的视图
if(!$target_table && !isset($_GET['confirm']) && (!isset($_GET['action']) || (isset($_GET['action']) && $_GET['action']!="table_create"))) //缺少这些字段意味着我们正在查看数据库主页
{
  //- 根据 $view 分派 (实际上是一系列 if-else)

	if($view=="structure")
	{
		//- 数据库结构, 显示所有表 (=structure)

		if($db->isWritable() && !$db->isDirWritable())
		{
			echo "<div class='confirm' style='margin:10px 0'>";
			echo $lang['attention'].': '.$lang['directory_not_writable'];
			echo "</div><br/>";
		}
		elseif(!$db->isWritable())
		{
			echo "<div class='confirm' style='margin:10px 0;'>";
			echo $lang['attention'].': '.$lang['database_not_writable'];
			echo "</div><br/>";
		}

		if ($auth->isPasswordDefault())
		{
			echo "<div class='confirm' style='margin:20px 0px;'>";
			echo sprintf($lang['warn_passwd'],(is_readable('phpliteadmin.config.php')?'phpliteadmin.config.php':basename(__FILE__)))."<br />".$lang['warn0'];
			echo "</div>";
		}

		echo "<b>".$lang['db_name']."</b>: ".htmlencode($db->getName())."<br/>";
		echo "<b>".$lang['db_path']."</b>: ".htmlencode($db->getPath())."<br/>";
		echo "<b>".$lang['db_size']."</b>: ".number_format($db->getSize())." KiB<br/>";
		echo "<b>".$lang['db_mod']."</b>: ".$db->getDate()."<br/>";
		echo "<b>".$lang['sqlite_v']."</b>: ".$db->getSQLiteVersion()."<br/>";
		echo "<b>".$lang['sqlite_ext']."</b> ".helpLink($lang['help1']).": ".$db->getType()."<br/>";
		echo "<b>".$lang['php_v']."</b>: ".phpversion()."<br/>";
		echo "<b>".PROJECT." ".$lang["ver"]."</b>: ".VERSION;
		echo " <a href='".PROJECT_URL."' target='_blank' id='oldVersion' style='display: none;' class='warning'>".$lang['new_version']."</a><br/><br/>";
		echo "<script type='text/javascript'>checkVersion('".VERSION."','".VERSION_CHECK_URL."');</script>";

		if(isset($_GET['sort']) && ($_GET['sort']=='type' || $_GET['sort']=='name'))
			$_SESSION[COOKIENAME.'sortTables'] = $_GET['sort'];
		if(isset($_GET['order']) && ($_GET['order']=='ASC' || $_GET['order']=='DESC'))
			$_SESSION[COOKIENAME.'orderTables'] = $_GET['order'];

		if(!isset($_SESSION[COOKIENAME.'sortTables']))
			$_SESSION[COOKIENAME.'sortTables'] = 'name';

		if(!isset($_SESSION[COOKIENAME.'orderTables']))
			$_SESSION[COOKIENAME.'orderTables'] = 'ASC';

		$tables = $db->getTables(true, false, $_SESSION[COOKIENAME.'sortTables'], $_SESSION[COOKIENAME.'orderTables']);

		if(sizeof($tables)==0)
			echo $lang['no_tbl']."<br/><br/>";
		else
		{
			echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
			echo "<tr>";

			echo "<td class='tdheader'>";
			if(isset($_SESSION[COOKIENAME.'sortTables']))
				$orderTag = ($_SESSION[COOKIENAME.'sortTables']=="type" && $_SESSION[COOKIENAME.'orderTables']=="ASC") ? "DESC" : "ASC";
			else
				$orderTag = "ASC";
			echo $params->getLink(array('sort'=>'type', 'order'=>$orderTag), $lang['type']);
			echo helpLink($lang['help3']);
			if(isset($_SESSION[COOKIENAME.'sortTables']) && $_SESSION[COOKIENAME.'sortTables']=="type")
				echo (($_SESSION[COOKIENAME.'orderTables']=="ASC") ? " <b>&uarr;</b>" : " <b>&darr;</b>");
			echo "</td>";

			echo "<td class='tdheader'>";
			if(isset($_SESSION[COOKIENAME.'sortTables']))
				$orderTag = ($_SESSION[COOKIENAME.'sortTables']=="name" && $_SESSION[COOKIENAME.'orderTables']=="ASC") ? "DESC" : "ASC";
			else
				$orderTag = "ASC";
			echo $params->getLink(array('sort'=>'name', 'order'=>$orderTag), $lang['name']);
			if(isset($_SESSION[COOKIENAME.'sortTables']) && $_SESSION[COOKIENAME.'sortTables']=="name")
				echo (($_SESSION[COOKIENAME.'orderTables']=="ASC") ? " <b>&uarr;</b>" : " <b>&darr;</b>");
			echo "</td>";

			echo "<td class='tdheader' colspan='10'>".$lang['act']."</td>";
			echo "<td class='tdheader'>".$lang['rec']."</td>";
			echo "</tr>";

			$totalRecords = 0;
			$skippedTables = false;
			foreach($tables as $tableName => $tableType)
			{
				$records = $db->numRows($tableName, (!isset($_GET['forceCount'])));
				if($records == '?')
				{
					$skippedTables = true;
					$records = $params->getLink(array('forceCount'=>'1'), '?');
				}
				else
					$totalRecords += $records;
				$tdWithClass = "<td class='td".($i%2 ? "1" : "2")."'>";
				$tdWithClassLeft = "<td class='td".($i%2 ? "1" : "2")."' style='text-align:left;'>";

				echo "<tr>";
				echo $tdWithClassLeft;
				echo ($tableType=="table"? $lang['tbl'] : $lang['view']);
				echo "</td>";
				echo $tdWithClassLeft;
				echo $params->getLink(array('table'=>$tableName, 'action'=>'row_view'), htmlencode($tableName));
				echo "</td>";
				echo $tdWithClass;
				echo $params->getLink(array('table'=>$tableName, 'action'=>'row_view'), $lang['browse']);
				echo "</td>";
				echo $tdWithClass;
				echo $params->getLink(array('table'=>$tableName, 'action'=>'column_view'), $lang['struct']);
				echo "</td>";
				echo $tdWithClass;
				echo $params->getLink(array('table'=>$tableName, 'action'=>'table_sql'), $lang['sql']);
				echo "</td>";
				echo $tdWithClass;
				echo $params->getLink(array('table'=>$tableName, 'action'=>'table_search'), $lang['srch']);
				echo "</td>";
				echo $tdWithClass;
				if($tableType=="table" && $db->isWritable() && $db->isDirWritable())
					echo $params->getLink(array('table'=>$tableName, 'action'=>'row_create'), $lang['insert']);
				else
					echo $lang['insert'];
				echo "</td>";
				echo $tdWithClass;
				echo $params->getLink(array('table'=>$tableName, 'action'=>'table_export'), $lang['export']);
				echo "</td>";
				echo $tdWithClass;
				if($tableType=="table" && $db->isWritable() && $db->isDirWritable())
					echo $params->getLink(array('table'=>$tableName, 'action'=>'table_import'), $lang['import']);
				else
					echo $lang['import'];
				echo "</td>";
				echo $tdWithClass;
				if($db->isWritable() && $db->isDirWritable())
					echo $params->getLink(array('table'=>$tableName, 'action'=>'table_rename'), $lang['rename']);
				else
					echo $lang['rename'];
				echo "</td>";
				echo $tdWithClass;
				if($tableType=="table" && $db->isWritable() && $db->isDirWritable())
					echo $params->getLink(array('table'=>$tableName, 'action'=>'table_empty'), $lang['empty'], 'empty');
				else
					echo $lang['empty'];
				echo "</td>";
				echo $tdWithClass;
				if($db->isWritable() && $db->isDirWritable())
					echo $params->getLink(array('table'=>$tableName, 'action'=>'table_drop'), $lang['drop'], 'drop');
				else
					echo $lang['drop'];
				echo "</td>";
				echo $tdWithClass;
				echo $records;
				echo "</td>";
				echo "</tr>";
			}
			echo "<tr>";
			echo "<td class='tdheader' colspan='12'>".sizeof($tables)." ".$lang['total']."</td>";
			echo "<td class='tdheader' colspan='1' style='text-align:right;'>".$totalRecords.($skippedTables?" ".$params->getLink(array('forceCount'=>'1'),'+ ?'):"")."</td>";
			echo "</tr>";
			echo "</table>";
			echo "<br/>";
			if($skippedTables)
				echo "<div class='confirm' style='margin-bottom:20px;'>".sprintf($lang["counting_skipped"],"<a href='".$params->getURL(array('forceCount'=>'1'))."'>","</a>")."</div>";
		}
		if($db->isWritable() && $db->isDirWritable())
		{
			echo "<fieldset>";
			echo "<legend><b>".$lang['create_tbl_db']." '".htmlencode($db->getName())."'</b></legend>";
			echo $params->getForm(array('action'=>'table_create'), 'get');
			echo $lang['name'].": <input type='text' name='tablename' style='width:200px;'/> ";
			echo $lang['fld_num'].": <input type='text' name='tablefields' style='width:90px;'/> ";
			echo "<input type='submit' name='createtable' value='".$lang['go']."' class='btn'/>";
			echo "</form>";
			echo "</fieldset>";
			echo "<br/>";
			echo "<fieldset>";
			echo "<legend><b>".$lang['create_view']." '".htmlencode($db->getName())."'</b></legend>";
			echo $params->getForm(array('action'=>'view_create', 'confirm'=>'1'));
			echo $lang['name'].": <input type='text' name='viewname' style='width:200px;'/> ";
			echo $lang['sel_state']." ".helpLink($lang['help4']).": <input type='text' name='select' style='width:400px;'/> ";
			echo "<input type='submit' name='createtable' value='".$lang['go']."' class='btn'/>";
			echo "</form>";
			echo "</fieldset>";
		}
	}
	else if($view=="sql")
	{
		//- 数据库 SQL 编辑器 (=sql)
		if(isset($_POST['query']) && $_POST['query']!="")
		{
			$delimiter = $_POST['delimiter'];
			$queryStr = $_POST['queryval'];
			//如有必要, 把查询保存到历史记录
			if($maxSavedQueries!=0 && $maxSavedQueries!=false)
			{
				if(!isset($_SESSION[COOKIENAME.'query_history']))
					$_SESSION[COOKIENAME.'query_history'] = array();
				$_SESSION[COOKIENAME.'query_history'][md5(strtolower($queryStr))] = $queryStr;
				if(sizeof($_SESSION[COOKIENAME.'query_history']) > $maxSavedQueries)
					array_shift($_SESSION[COOKIENAME.'query_history']);
			}
			$query = explode_sql($delimiter, $queryStr); //根据分隔符把查询字符串拆成单个查询

			for($i=0; $i<sizeof($query); $i++) //遍历按分隔符拆分出的查询
			{
				if(str_replace(" ", "", str_replace("\n", "", str_replace("\r", "", $query[$i])))!="") //确保此查询不是空字符串
				{
					$queryTimer = new MicroTimer();
					$table_result = $db->query($query[$i]);

					echo "<div class='confirm'>";
					echo "<b>".htmlencode($query[$i])."</b>";
					if($table_result === NULL || $table_result === false)
					{
						echo "<br /><b>".$lang['err'].": ".htmlencode($db->getError())."</b></div>";
					}
					echo "</div><br/>";
					if($row = $db->fetch($table_result, 'num'))
					{
						for($j=0; $j<sizeof($row);$j++)
							$headers[$j] = $db->getColumnName($table_result,$j);
						echo "<table border='0' cellpadding='2' cellspacing='1' class='viewTable'>";
						echo "<tr>";
						for($j=0; $j<sizeof($headers); $j++)
						{
							echo "<td class='tdheader'>";
							echo htmlencode($headers[$j]);
							echo "</td>";
						}
						echo "</tr>";
						$rowCount = 0;
						for(; $rowCount==0 || $row = $db->fetch($table_result, 'num'); $rowCount++)
						{
							$tdWithClass = "<td class='td".($rowCount%2 ? "1" : "2")."'>";
							echo "<tr>";
							for($z=0; $z<sizeof($headers); $z++)
							{
								echo $tdWithClass;
								if($row[$z]==="")
									echo "&nbsp;";
								elseif($row[$z]===NULL)
									echo "<i class='null'>NULL</i>";
								else
									echo htmlencode(subString($row[$z]));
								echo "</td>";
							}
							echo "</tr>";
						}
						$queryTimer->stop();
						echo "</table><br/><br/>";


						if($table_result !== NULL && $table_result !== false)
						{
							echo "<div class='confirm' style='margin-bottom: 2em'>";
							if($rowCount>0 || $db->getAffectedRows()==0)
							{
								printf($lang['show_rows'], $rowCount);
							}
							if($db->getAffectedRows()>0 || $rowCount==0)
							{
								echo $db->getAffectedRows()." ".$lang['rows_aff']." ";
							}
							printf($lang['query_time'], $queryTimer);
							echo "</div>";
						}


					}
				}
			}
		}
		else
		{
			$delimiter = ";";
			$queryStr = "";
		}

		echo "<fieldset>";
		echo "<legend><b>".sprintf($lang['run_sql'],htmlencode($db->getName()))."</b></legend>";
		echo $params->getForm(array('view'=>'sql'));
		if(isset($_SESSION[COOKIENAME.'query_history']) && sizeof($_SESSION[COOKIENAME.'query_history'])>0)
		{
			echo "<b>".$lang['recent_queries']."</b><ul>";
			foreach($_SESSION[COOKIENAME.'query_history'] as $key => $value)
			{
				echo "<li><a onclick='sqleditorSetValue(this.textContent); return false;' href='#'>".htmlencode($value)."</a></li>";
			}
			echo "</ul><br/><br/>";
		}
		echo "<textarea style='width:100%; height:300px;' name='queryval' id='queryval' cols='50' rows='8'>".htmlencode($queryStr)."</textarea>";
		echo "<script>sqleditor(document.getElementById('queryval'),".json_encode($db->getTableDefinitions()).", null);</script>";
		echo $lang['delimit']." <input type='text' name='delimiter' value='".htmlencode($delimiter)."' style='width:50px;'/> ";
		echo "<input type='submit' name='query' value='".$lang['go']."' class='btn'/>";
		echo "</form>";
		echo "</fieldset>";
	}
	else if($view=="vacuum")
	{
		//- VACUUM 数据库确认 (=vacuum)
		if(isset($_POST['vacuum']))
		{
			$query = "VACUUM";
			$db->query($query);
			echo "<div class='confirm'>";
			printf($lang['db_vac'], htmlencode($db->getName()));
			echo "</div><br/>";
		}
		echo $params->getForm(array('view'=>'vacuum'));
		printf($lang['vac_desc'],htmlencode($db->getName()));
		echo "<br/><br/>";
		echo "<input type='submit' value='".$lang['vac']."' name='vacuum' class='btn'/>";
		echo "</form>";
	}
	else if($view=="export")
	{
		//- 导出视图 (=export)
		echo $params->getForm(array('view'=>'export'));
		echo "<fieldset style='float:left; width:260px; margin-right:20px;'><legend><b>".$lang['export']."</b></legend>";
		echo "<select multiple='multiple' size='10' style='width:240px;' name='tables[]'>";
		$tables = $db->getTables(true, false);
		foreach($tables as $tableName => $tableType)
		{
			echo "<option value='".htmlencode($tableName)."' selected='selected'>".htmlencode($tableName)."</option>";
		}
		echo "</select>";
		echo "<br/><br/>";
		echo "<label><input type='radio' name='export_type' checked='checked' value='sql' onclick='toggleExports(\"sql\");'/> ".$lang['sql']."</label>";
		echo "<br/><label><input type='radio' name='export_type' value='csv' onclick='toggleExports(\"csv\");'/> ".$lang['csv']."</label>";
		echo "</fieldset>";

		echo "<fieldset style='float:left; max-width:350px;' id='exportoptions_sql'><legend><b>".$lang['options']."</b></legend>";
		echo "<label><input type='checkbox' checked='checked' name='structure'/> ".$lang['export_struct']."</label> ".helpLink($lang['help5'])."<br/>";
		echo "<label><input type='checkbox' checked='checked' name='data'/> ".$lang['export_data']."</label> ".helpLink($lang['help6'])."<br/>";
		echo "<label><input type='checkbox' name='drop'/> ".$lang['add_drop']."</label> ".helpLink($lang['help7'])."<br/>";
		echo "<label><input type='checkbox' checked='checked' name='transaction'/> ".$lang['add_transact']."</label> ".helpLink($lang['help8'])."<br/>";
		echo "<label><input type='checkbox' checked='checked' name='comments'/> ".$lang['comments']."</label> ".helpLink($lang['help9'])."<br/>";
		echo "</fieldset>";

		echo "<fieldset style='float:left; max-width:350px; display:none;' id='exportoptions_csv'><legend><b>".$lang['options']."</b></legend>";
		echo "<div style='float:left;'>".$lang['fld_terminated']."</div>";
		echo "<input type='text' value=';' name='export_csv_fieldsterminated' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['fld_enclosed']."</div>";
		echo "<input type='text' value='\"' name='export_csv_fieldsenclosed' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['fld_escaped']."</div>";
		echo "<input type='text' value='\' name='export_csv_fieldsescaped' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['rep_null']."</div>";
		echo "<input type='text' value='NULL' name='export_csv_replacenull' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<label><input type='checkbox' name='export_csv_crlf'/> ".$lang['rem_crlf']."</label><br/>";
		echo "<label><input type='checkbox' checked='checked' name='export_csv_fieldnames'/> ".$lang['put_fld']."</label>";
		echo "</fieldset>";

		echo "<div style='clear:both;'></div>";
		echo "<br/><br/>";
		echo "<fieldset><legend><b>".$lang['save_as']."</b></legend>";
		$file = pathinfo($db->getPath());
		$name = $file['filename'];
		echo "<input type='text' name='filename' value='".htmlencode($name)."_".date("Y-m-d").".dump' style='width:400px;'/> <input type='submit' name='export' value='".$lang['export']."' class='btn'/>";
		echo "</fieldset>";
		echo "</form>";
		echo "<div class='confirm' style='margin-top: 2em'>".sprintf($lang['backup_hint'],
			$params->getLink(array('download'=>$currentDB['path'], 'token'=>$_SESSION[COOKIENAME.'token']), $lang["backup_hint_linktext"], '', $lang['backup'])
			)."</div>";
	}
	else if($view=="import")
	{
		//- 导入视图 (=import)
		if(isset($_POST['import']))
		{
			echo "<div class='confirm'>";
			if($importSuccess===true)
				echo $lang['import_suc'];
			else
				echo $importSuccess;
			echo "</div><br/>";
		}

		echo $params->getForm(array('view'=>'import'), 'post', true);
		echo "<fieldset style='float:left; width:260px; margin-right:20px;'><legend><b>".$lang['import']."</b></legend>";
		echo "<label><input type='radio' name='import_type' checked='checked' value='sql' onclick='toggleImports(\"sql\");'/> ".$lang['sql']."</label>";
		echo "<br/><label><input type='radio' name='import_type' value='csv' onclick='toggleImports(\"csv\");'/> ".$lang['csv']."</label>";
		echo "</fieldset>";

		echo "<fieldset style='float:left; max-width:350px;' id='importoptions_sql'><legend><b>".$lang['options']."</b></legend>";
		echo $lang['no_opt'];
		echo "</fieldset>";

		echo "<fieldset style='float:left; max-width:350px; display:none;' id='importoptions_csv'><legend><b>".$lang['options']."</b></legend>";
		echo "<div style='float:left;'>".$lang['csv_tbl']."</div>";
		echo "<select name='single_table' style='float:right;'>";
		$tables = $db->getTables(true, false);
		echo "<option value=''>(".$lang['create_tbl'].")</option>";
		foreach($tables as  $tableName => $tableType)
		{
			echo "<option value='".htmlencode($tableName)."'>".htmlencode($tableName)."</option>";
		}
		echo "</select>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['fld_terminated']."</div>";
		echo "<input type='text' value=';' name='import_csv_fieldsterminated' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['fld_enclosed']."</div>";
		echo "<input type='text' value='\"' name='import_csv_fieldsenclosed' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['fld_escaped']."</div>";
		echo "<input type='text' value='\' name='import_csv_fieldsescaped' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<div style='float:left;'>".$lang['null_represent']."</div>";
		echo "<input type='text' value='NULL' name='import_csv_replacenull' style='float:right;'/>";
		echo "<div style='clear:both;'>";
		echo "<label><input type='checkbox' checked='checked' name='import_csv_fieldnames'/> ".$lang['fld_names']."</label>";
		echo "</fieldset>";

		echo "<div style='clear:both;'></div>";
		echo "<br/><br/>";

		echo "<fieldset><legend><b>".$lang['import_f']."</b></legend>";
		echo "<em>".$lang['max_file_size'].": ".number_format(fileUploadMaxSize()/1024/1024)." MiB</em> ".helpLink($lang['help11'])."<br />";
		echo "<input type='file' value='".$lang['choose_f']."' name='file' style='background-color:transparent; border-style:none; margin:0; padding:0' onchange='checkFileSize(this)'/>";
		echo "<input type='submit' value='".$lang['import']."' name='import' class='btn'/>";
		echo "</fieldset>";
	}
	else if($view=="rename")
	{
		//- 重命名数据库确认 (=rename)
		echo $params->getForm(array('view'=>'rename', 'database_rename'=>'1'));
		echo "<input type='hidden' name='oldname' value='".htmlencode($db->getPath())."'/>";
		echo $lang['db_rename']." '".htmlencode($db->getPath())."' ".$lang['to']." <input type='text' name='newname' style='width:200px;' value='".htmlencode($db->getPath())."'/> <input type='submit' value='".$lang['rename']."' name='rename' class='btn'/>";
		echo "</form>";
	}
	else if($view=="delete")
	{
		//- 删除数据库确认 (=delete)
		echo $params->getForm(array('database_delete'=>'1'));
		echo "<div class='confirm'>";
		echo sprintf($lang['ques_del_db'],htmlencode($db->getPath()))."<br/><br/>";
		echo "<input name='database_delete' value='".htmlencode($db->getPath())."' type='hidden'/>";
		echo "<input type='submit' value='".$lang['confirm']."' class='btn'/> ";
		echo $params->getLink(array(), $lang['cancel']);
		echo "</div>";
		echo "</form>";
	}

	echo "</div>";
}
echo "</div>";

//- HTML: 页脚
echo "<br/>";
echo "<span style='font-size:11px;'>".$lang['powered']." <a href='".PROJECT_URL."' target='_blank' style='font-size:11px;'>".PROJECT."</a> | ";
echo $lang['free_software']." <a href='".DONATE_URL."' target='_blank' style='font-size:11px;'>".$lang['please_donate']."</a> | ";
printf($lang['page_gen'], $pageTimer);
echo "</span>";
echo "</td></tr></table>";
$db->close(); //关闭数据库
echo "</body>";
echo "</html>";

//- 主代码结束

// 授权类
// 维护用户的登录状态和应用的安全性
//

class Authorization
{
	private $authorized;
	private $login_failed;
	private $system_password_encrypted;

	public function __construct()
	{
		// 首先, 确保已生成 CSRF token
		$this->generateToken();
		// 其次, 检查可能的 CSRF 攻击。为了保护登录, 这一步在检查登录之前进行
		$this->checkToken();
		
		// 盐和密码加密可能是多余的防护, 但这样做只是
		// 为了非常安全
		if(!isset($_SESSION[COOKIENAME.'_salt']) && !isset($_COOKIE[COOKIENAME.'_salt']))
		{
			// 如果此会话还没有 cookie, 则为它创建一个随机盐
			$_SESSION[COOKIENAME.'_salt'] = self::generateSalt(22);
		}
		else if(!isset($_SESSION[COOKIENAME.'_salt']) && isset($_COOKIE[COOKIENAME.'_salt']))
		{
			// 会话不存在, 但 cookie 存在, 所以从 cookie 中取
			$_SESSION[COOKIENAME.'_salt'] = $_COOKIE[COOKIENAME.'_salt'];
		}

		// 用于校验的加盐并加密后的密码
		$this->system_password_encrypted = md5(SYSTEMPASSWORD."_".$_SESSION[COOKIENAME.'_salt']);

		$this->authorized =
			// 没有密码
			SYSTEMPASSWORD == ''
			// 会话中存储了正确的密码
			|| isset($_SESSION[COOKIENAME.'password']) && hash_equals($_SESSION[COOKIENAME.'password'], $this->system_password_encrypted) 
			// cookie 中存储了正确的密码
			|| isset($_COOKIE[COOKIENAME]) && isset($_COOKIE[COOKIENAME.'_salt']) && hash_equals(md5(SYSTEMPASSWORD."_".$_COOKIE[COOKIENAME.'_salt']), $_COOKIE[COOKIENAME]);
	}

	public function attemptGrant($password, $remember)
	{
		$hashed_password = crypt(SYSTEMPASSWORD, '$2a$07$'.self::generateSalt(22).'$');
		if (hash_equals($hashed_password, crypt($password, $hashed_password))) {
			if ($remember) {
				// 用户希望被记住, 所以设置一个 cookie
				$expire = time()+60*60*24*30; //将过期时间设为从现在起 1 个月
				setcookie(COOKIENAME, $this->system_password_encrypted, $expire, '/', '', false, true);
				setcookie(COOKIENAME."_salt", $_SESSION[COOKIENAME.'_salt'], $expire, '/', '', false, true);
			} else {
				// 用户不希望被记住, 所以销毁所有可能的 cookie
				setcookie(COOKIENAME, "", time()-86400, '/', '', false, true);
				setcookie(COOKIENAME."_salt", "", time()-86400, '/', '', false, true);
				unset($_COOKIE[COOKIENAME]);
				unset($_COOKIE[COOKIENAME.'_salt']);
			}

			$_SESSION[COOKIENAME.'password'] = $this->system_password_encrypted;
			$this->authorized = true;
			return true;
		}

		$this->login_failed = true;
		return false;
	}

	public function revoke()
	{
		//销毁所有内容 - cookie 和会话变量
		setcookie(COOKIENAME, "", time()-86400, '/', '', false, true);
		setcookie(COOKIENAME."_salt", "", time()-86400, '/', '', false, true);
		unset($_COOKIE[COOKIENAME]);
		unset($_COOKIE[COOKIENAME.'_salt']);
		session_unset();
		session_destroy();
		$this->authorized = false;
		// 启动新会话并为登录表单生成新的 CSRF token
		session_start();
		$this->generateToken();
	}

	public function isAuthorized()
	{
		return $this->authorized;      
	}

	public function isFailedLogin()
	{
		return $this->login_failed;
	}

	public function isPasswordDefault()
	{
		return SYSTEMPASSWORD == 'admin';
	}

	private static function generateSalt($saltSize)
	{
		$set = 'ABCDEFGHiJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
		$setLast = strlen($set) - 1;
		$salt = '';
		while ($saltSize-- > 0) {
			$salt .= $set[mt_rand(0, $setLast)];
		}
		return $salt;
	}
	
	private function generateToken()
	{
		// 生成 CSRF token
		if (empty($_SESSION[COOKIENAME.'token']))
		{
			if (function_exists('random_bytes')) // 在 PHP 7.0 中引入
			{
				$_SESSION[COOKIENAME.'token'] = bin2hex(random_bytes(32));
			}
			elseif (function_exists('openssl_random_pseudo_bytes')) // 在 PHP 5.3.0 中引入
			{
				$_SESSION[COOKIENAME.'token'] = bin2hex(openssl_random_pseudo_bytes(32));
			}
			else
			{
				// 针对 PHP 5.2.x - 一旦不再支持 5.2.x, 就可以删除此分支
				$_SESSION[COOKIENAME.'token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
			}
		}
	}
	
	private function checkToken()
	{
		// 检查 CSRF token
		if($_SERVER['REQUEST_METHOD'] === 'POST' || isset($_GET['download'])) // 所有 POST 表单都需要 token! 下载也同样受保护
		{
			if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']))
				$check_token=$_POST['token'];
			elseif($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['token']))
				$check_token=$_GET['token'];
			
			if (!isset($check_token))
			{
				die("CSRF token missing");
			}
			elseif(!hash_equals($_SESSION[COOKIENAME.'token'], $check_token))
			{
				die("CSRF token is wrong - please try to login again");
			}
		}
	}

}
// 数据库类
// 通用数据库抽象类, 用于管理与数据库的交互, 无需关心 SQLite 与 PHP 版本的差异
//
class Database
{
	protected $db; //对 DB 对象的引用
	protected $type; //处理 SQLite 的 PHP 扩展
	protected $data;
	protected $lastResult;
	protected $alterError;
	protected $debugOutput ='';

	public function __construct($data)
	{
		global $lang, $params;
		$this->data = $data;
		try
		{
			if(!file_exists($this->data["path"]) && !is_writable(dirname($this->data["path"]))) //如果数据库不存在, 请确保其所在目录可写
			{
				echo "<div class='confirm' style='margin:20px;'>";
				printf($lang['db_not_writeable'], htmlencode($this->data["path"]), htmlencode(dirname($this->data["path"])));
				echo $params->getForm();
				echo "<input type='submit' value='Log Out' name='".$lang['logout']."' class='btn'/>";
				echo "</form>";
				echo "</div><br/>";
				exit();
			}

			$ver = $this->getVersion();

			switch(true)
			{
				case ((!isset($data['type']) || $data['type']!=2) && (FORCETYPE=="PDO" || (FORCETYPE==false && class_exists("PDO") && in_array("sqlite", PDO::getAvailableDrivers()) && ($ver==-1 || $ver==3)))):
					$this->db = new PDO("sqlite:".$this->data['path']);
					if($this->db!=NULL)
					{
						$this->type = "PDO";
						break;
					}
				case ((!isset($data['type']) || $data['type']!=2) && (FORCETYPE=="SQLite3" || (FORCETYPE==false && class_exists("SQLite3") && ($ver==-1 || $ver==3)))):
					$this->db = new SQLite3($this->data['path']);
					if($this->db!=NULL)
					{
						$this->type = "SQLite3";
						break;
					}
				case (FORCETYPE=="SQLiteDatabase" || (FORCETYPE==false && class_exists("SQLiteDatabase") && ($ver==-1 || $ver==2))):
					$this->db = new SQLiteDatabase($this->data['path']);
					if($this->db!=NULL)
					{
						$this->type = "SQLiteDatabase";
						break;
					}
				default:
					$this->showError();
					exit();
			}
			$this->query("PRAGMA foreign_keys = ON");
		}
		catch(Exception $e)
		{
			$this->showError();
			exit();
		}
	}

	public function registerUserFunction($ids)
	{
		// 以防传入的是单个 function id
		if (is_string($ids))
			$ids = array($ids);

		if ($this->type == 'PDO') {
			foreach ($ids as $id) {
				$this->db->sqliteCreateFunction($id, $id, -1);
			}
		} else { // 类型为 Sqlite3 或 SQLiteDatabase
			foreach ($ids as $id) {
				$this->db->createFunction($id, $id, -1);
			}
		}
	}
	
	public function getError($complete_msg = false)
	{
		global $lang, $debug;
		$error = "unknown";
		
		if($this->alterError!='')
		{
			$error = $this->alterError;
			$this->alterError = "";
		}
		else if($this->type=="PDO")
		{
			$e = $this->db->errorInfo();
			$error = $e[2];
		}
		else if($this->type=="SQLite3")
		{
			$error = $this->db->lastErrorMsg();
		}
		else
		{
			$error = sqlite_error_string($this->db->lastError());
		}
		
		if($complete_msg)
		{
			$error = $lang['err'].": ".htmlencode($error);
			// 约束失败时不要建议报告 bug
			if(strpos($error, 'constraint failed')===false)
				$error.="<br/>".$lang['bug_report'].' '.PROJECT_BUGTRACKER_LINK;
		}

		if($debug)
			$error .= $this->getDebugOutput();
		
		return $error;
	}

	function getDebugOutput()
	{
		return ($this->debugOutput != "" ? "<hr /><strong>DEBUG:</strong><br />".$this->debugOutput : $this->debugOutput);
	}
	
	public function showError()
	{
		global $lang;
		$classPDO = class_exists("PDO");
		$classSQLite3 = class_exists("SQLite3");
		$classSQLiteDatabase = class_exists("SQLiteDatabase");
		if($classPDO)	// PDO 存在, 检查是否缺少 PDO 的 SQLite 驱动
			$PDOSqliteDriver = (in_array("sqlite", PDO::getAvailableDrivers() ));
		else
			$PDOSqliteDriver = false;
		echo "<div class='confirm' style='margin:20px;'>";
		printf($lang['db_setup'], $this->getPath());
		echo ".<br/><br/><i>".$lang['chk_ext']."...<br/><br/>";
		echo "<b>PDO</b>: ".($classPDO ? $lang['installed'] : $lang['not_installed'])."<br/>";
		echo "<b>PDO SQLite Driver</b>: ".($PDOSqliteDriver ? $lang['installed'] : $lang['not_installed'])."<br/>";
		echo "<b>SQLite3</b>: ".($classSQLite3 ? $lang['installed'] : $lang['not_installed'])."<br/>";
		echo "<b>SQLiteDatabase</b>: ".($classSQLiteDatabase ? $lang['installed'] : $lang['not_installed'])."<br/>";
		echo "<br/>...".$lang['done'].".</i><br/><br/>";
		if(!$classPDO && !$classSQLite3 && !$classSQLiteDatabase)
			printf($lang['sqlite_ext_support'], PROJECT);
		else
		{
			if(!$PDOSqliteDriver && !$classSQLite3 && $this->getVersion()==3)
				printf($lang['sqlite_v_error'], 3, PROJECT, 2);
			else if(!$classSQLiteDatabase && $this->getVersion()==2)
				printf($lang['sqlite_v_error'], 2, PROJECT, 3);
			else
				echo $lang['report_issue'].' '.PROJECT_BUGTRACKER_LINK.'.';
		}
		echo "<p>See ".PROJECT_INSTALL_LINK." for help.</p>";
		
		$this->print_db_list();

		echo "</div>";
	}
	
	// 输出数据库列表
	public function print_db_list()
	{
		global $databases, $lang, $params, $currentDB;
		echo "<fieldset style='margin:15px;' class='databaseList'><legend><b>".$lang['db_ch']."</b></legend>";
		if(sizeof($databases)<10) //如果数据库不多, 就直接以链接列表显示, 而不是下拉菜单
		{
			$i=0;
			foreach($databases as $database)
			{
				$i++;
				$name = $database['name'];
				if(mb_strlen($name)>25)
					$name = "...".mb_substr($name, mb_strlen($name)-22, 22); 
				echo '[' . ($database['readable'] ? 'r':' ' ) . ($database['writable'] && $database['writable_dir'] ? 'w':' ' ) . ']&nbsp;';
				
				echo $params->getLink(array('database'=>$database['path'], 'table'=>null), htmlencode($name), ($database == $currentDB? 'active_db': '') );
				echo "&nbsp;&nbsp;";
				echo $params->getLink(array('download'=>$database['path'], 'table'=>null, 'token'=>$_SESSION[COOKIENAME.'token']), '[&darr;]', '', $lang['backup']);
				
				if($i<sizeof($databases))
					echo "<br/>";
			}
		}
		else //数据库很多 - 显示下拉菜单
		{
			echo $params->getForm(array('table'=>null), 'get');
			echo "<select name='database' onchange='this.form.submit()'>";
			foreach($databases as $database)
			{
				$perms_string = htmlencode('[' . ($database['readable'] ? 'r':' ' ) . ($database['writable'] && $database['writable_dir'] ? 'w':' ' ) . '] ');
				if($database == $currentDB)
					echo "<option value='".htmlencode($database['path'])."' selected='selected'>".$perms_string.htmlencode($database['name'])."</option>";
				else
					echo "<option value='".htmlencode($database['path'])."'>".$perms_string.htmlencode($database['name'])."</option>";
			}
			echo "</select>";
			echo "<noscript><input type='submit' value='".$lang['go']."' class='btn'></noscript>";
			echo "</form>";
		}
		echo "</fieldset>";	
	}

	public function __destruct()
	{
		if($this->db)
			$this->close();
	}

	//获取 SQLite 实际使用的 PHP 扩展
	public function getType()
	{
		return $this->type;
	}
	
	// 获取 SQLite 库的版本
	public function getSQLiteVersion()
	{
		$queryVersion = $this->select("SELECT sqlite_version() AS sqlite_version");
		return $queryVersion['sqlite_version'];
	}

	//获取数据库名称
	public function getName()
	{
		return $this->data["name"];
	}

	//获取数据库文件名
	public function getPath()
	{
		return $this->data["path"];
	}

	//数据库文件是否可写?
	public function isWritable()
	{
		return $this->data["writable"];
	}

	//数据库文件夹是否可写?
	public function isDirWritable()
	{
		return $this->data["writable_dir"];
	}

	//获取数据库的版本
	public function getVersion()
	{
		if(file_exists($this->data['path'])) //在获取内容之前确保文件存在
		{
			$content = strtolower(file_get_contents($this->data['path'], false, null, 0, 40)); //获取数据库文件的前 40 个字符
			$p = strpos($content, "** this file contains an sqlite 2"); //这段文本位于每个 SQLite2 数据库的开头
			if($p!==false) //找到该文本 - 这是版本 2
				return 2;
			else
				return 3;
		}
		else //返回 -1 表示它不存在, 需要创建
		{
			return -1;
		}
	}

	//获取数据库大小 (单位 KiB)
	public function getSize()
	{
		return round(filesize($this->data["path"])*0.0009765625, 1);
	}

	//获取数据库的最后修改时间
	public function getDate()
	{
		global $lang;
		return date($lang['date_format'], filemtime($this->data['path']));
	}

	//获取上次查询受影响的行数
	public function getAffectedRows()
	{
		if($this->type=="PDO")
			if(!is_object($this->lastResult))
				// 如果这是 alter table 语句, 则没有 lastResult 对象
				return 0;
			else
				return $this->lastResult->rowCount();
		else if($this->type=="SQLite3")
			return $this->db->changes();
		else if($this->type=="SQLiteDatabase")
			return $this->db->changes();
	}

	public function getTypeOfTable($table)
	{
		$result = $this->select("SELECT `type` FROM `sqlite_master` WHERE `name`=" . $this->quote($table), 'assoc');
		return $result['type'];
	}
	
	public function getTableInfo($table)
	{
		return $this->selectArray("PRAGMA table_info(".$this->quote_id($table).")");
	}
	
	// 以如下形式返回表列表 (可选包含视图)
	// array( Tablename => tableType ), 其中 tableType 为 'view' 或 'table'
	public function getTables($alsoViews=true, $alsoInternal=false, $orderBy='name', $orderDirection='ASC')
	{
		$query = "SELECT name, type FROM sqlite_master " 
			. "WHERE (type='table'".($alsoViews?" OR type='view'":"").") "
			. "AND name!='' ".($alsoInternal? "":" AND name NOT LIKE 'sqlite_%' ")
			. "ORDER BY ".$this->quote_id($orderBy)." ".$orderDirection;
		$result = $this->selectArray($query);
		$list = array();
		for($i=0; $i<sizeof($result); $i++)
		{
			$list[$result[$i]['name']] = $result[$i]['type'];
		}
		return $list;
	}
	
	// 以如下形式返回所有表及其列的数组
	// array( tablename => array(columName) )
	public function getTableDefinitions()
	{
		$tables = $this->getTables(true, true);
		$result = array();
		foreach ($tables as $tableName => $tableType)
		{
			$tableInfo = $this->getTableInfo($tableName);
			$columns = array();
			foreach($tableInfo as $column)
				$columns[] = $column['name'];
			$result[$tableName] = $columns;
		}
		return $result;
	}
	
	public function close()
	{
		if($this->type=="PDO")
			$this->db = NULL;
		else if($this->type=="SQLite3")
			$this->db->close();
		else if($this->type=="SQLiteDatabase")
			$this->db = NULL;
	}

	public function beginTransaction()
	{
		$this->query("BEGIN");
	}

	public function commitTransaction()
	{
		$this->query("COMMIT");
	}

	public function rollbackTransaction()
	{
		$this->query("ROLLBACK");
	}

	//通用查询封装
	//出错时返回 false, 成功时返回查询结果
	public function query($query, $ignoreAlterCase=false)
	{
		global $debug;
		if(strtolower(substr(ltrim($query),0,5))=='alter' && $ignoreAlterCase==false) //此查询是 ALTER 查询 - 调用相应的函数
		{
			preg_match("/^\s*ALTER\s+TABLE\s+\"((?:[^\"]|\"\")+)\"\s+(.*)$/i",$query,$matches);
			if(!isset($matches[1]) || !isset($matches[2]))
			{
				if($debug) echo "<span title='".htmlencode($query)."' onclick='this.innerHTML=\"".htmlencode(str_replace('"','\"',$query))."\"' style='cursor:pointer'>SQL?</span><br />";
				return false;
			}
			$tablename = str_replace('""','"',$matches[1]);
			$alterdefs = $matches[2];
			if($debug) echo "ALTER TABLE QUERY=(".htmlencode($query)."), tablename=($tablename), alterdefs=($alterdefs)<br />";
			$result = $this->alterTable($tablename, $alterdefs);
		}
		else //此查询正常 - 按常规处理
		{
			$result = $this->db->query($query);
			if($debug) echo "<span title='".htmlencode($query)."' onclick='this.innerHTML=\"".htmlencode(str_replace('"','\"',$query))."\"' style='cursor:pointer'>SQL?</span><br />";
		}
		if($result===false)
			return false;
		$this->lastResult = $result;
		return $result;
	}

	//INSERT 的封装, 返回插入行的 ID
	public function insert($query)
	{
		$result = $this->query($query);
		if($this->type=="PDO")
			return $this->db->lastInsertId();
		else if($this->type=="SQLite3")
			return $this->db->lastInsertRowID();
		else if($this->type=="SQLiteDatabase")
			return $this->db->lastInsertRowid();
	}

	//为 SELECT 返回数组
	public function select($query, $mode="both")
	{
		$result = $this->query($query);
		if(!$result) //确保结果有效
			return NULL;
		if($this->type=="PDO")
		{
			if($mode=="assoc")
				$mode = PDO::FETCH_ASSOC;
			else if($mode=="num")
				$mode = PDO::FETCH_NUM;
			else
				$mode = PDO::FETCH_BOTH;
			$ret = $result->fetch($mode);
			$result->closeCursor();
			return $ret;
		}
		else if($this->type=="SQLite3")
		{
			if($mode=="assoc")
				$mode = SQLITE3_ASSOC;
			else if($mode=="num")
				$mode = SQLITE3_NUM;
			else
				$mode = SQLITE3_BOTH;
			$ret = $result->fetchArray($mode);
			$result->finalize();
			return $ret;
		}
		else if($this->type=="SQLiteDatabase")
		{
			if($mode=="assoc")
				$mode = SQLITE_ASSOC;
			else if($mode=="num")
				$mode = SQLITE_NUM;
			else
				$mode = SQLITE_BOTH;
			return $result->fetch($mode);
		}
	}

	//执行 SELECT 后返回由数组组成的数组
	public function selectArray($query, $mode="both")
	{
		$result = $this->query($query);
		//确保结果有效
		if($result=== false || $result===NULL) 
			return NULL;		// 错误
		if(!is_object($result)) // 未返回任何行
			return array();
		if($this->type=="PDO")
		{
			if($mode=="assoc")
				$mode = PDO::FETCH_ASSOC;
			else if($mode=="num")
				$mode = PDO::FETCH_NUM;
			else
				$mode = PDO::FETCH_BOTH;
			$ret = $result->fetchAll($mode);
			$result->closeCursor();
			return $ret;
		}
		else if($this->type=="SQLite3")
		{
			if($mode=="assoc")
				$mode = SQLITE3_ASSOC;
			else if($mode=="num")
				$mode = SQLITE3_NUM;
			else
				$mode = SQLITE3_BOTH;
			$arr = array();
			$i = 0;
			while($res = $result->fetchArray($mode))
			{
				$arr[$i] = $res;
				$i++;
			}
			$result->finalize();
			return $arr;
		}
		else if($this->type=="SQLiteDatabase")
		{
			if($mode=="assoc")
				$mode = SQLITE_ASSOC;
			else if($mode=="num")
				$mode = SQLITE_NUM;
			else
				$mode = SQLITE_BOTH;
			return $result->fetchAll($mode);
		}
	}
	
	//返回 $result 中下一行的数组
	public function fetch($result, $mode="both")
	{
		//确保结果有效
		if($result=== false || $result===NULL) 
			return NULL;		// 错误
		if(!is_object($result)) // 未返回任何行
			return array();
		if($this->type=="PDO")
		{
			if($mode=="assoc")
				$mode = PDO::FETCH_ASSOC;
			else if($mode=="num")
				$mode = PDO::FETCH_NUM;
			else
				$mode = PDO::FETCH_BOTH;
			return $result->fetch($mode);
		}
		else if($this->type=="SQLite3")
		{
			if($mode=="assoc")
				$mode = SQLITE3_ASSOC;
			else if($mode=="num")
				$mode = SQLITE3_NUM;
			else
				$mode = SQLITE3_BOTH;
			return $result->fetchArray($mode);
		}
		else if($this->type=="SQLiteDatabase")
		{
			if($mode=="assoc")
				$mode = SQLITE_ASSOC;
			else if($mode=="num")
				$mode = SQLITE_NUM;
			else
				$mode = SQLITE_BOTH;
			return $result->fetch($mode);
		}
	}
	
	public function getColumnName($result, $colNum)
	{
		//确保结果有效
		if($result=== false || $result===NULL || !is_object($result)) 
			return "";		// 错误或未返回任何行
		if($this->type=="PDO")
		{
			$meta = $result->getColumnMeta($colNum);
			return $meta['name'];
		}
		else if($this->type=="SQLite3")
		{
			return $result->columnName($colNum);
		}
		else if($this->type=="SQLiteDatabase")
		{
			return $result->fieldName($colNum);
		}
	}

	
	// SQlite 支持多种给名称加引号的方式:
	// 单引号、双引号、反引号和方括号。
	// 由于 sqlite 对此并不严格, 我们在这里也需要灵活处理。
	// 此函数生成一个匹配上述任一可能性的正则。
	private function sqlite_surroundings_preg($name,$preg_quote=true,$notAllowedCharsIfNone="'\"",$notAllowedName=false)
	{
		if($name=="*" || $name=="+")
		{
			if($notAllowedName!==false && $preg_quote)
				$notAllowedName = preg_quote($notAllowedName,"/");
			// 使用占有量词以节省内存
			// (PCRE 从 8.13 开始有一个 bug, 在 PCRE 8.36 中修复
			// 这就是我们不能使用占有量词的原因 - 见 issue #310)。
			if(version_compare(strstr(constant('PCRE_VERSION'), ' ', true), '8.36', '>=') ||
				version_compare(strstr(constant('PCRE_VERSION'), ' ', true), '8.12', '<='))
				$posessive='+';
			else
				$posessive='';
			
			$nameSingle   = ($notAllowedName!==false?"(?!".$notAllowedName."')":"")."(?:[^']$name+|'')$name".$posessive;
			$nameDouble   = ($notAllowedName!==false?"(?!".$notAllowedName."\")":"")."(?:[^\"]$name+|\"\")$name".$posessive;
			$nameBacktick = ($notAllowedName!==false?"(?!".$notAllowedName."`)":"")."(?:[^`]$name+|``)$name".$posessive;
			$nameSquare   = ($notAllowedName!==false?"(?!".$notAllowedName."\])":"")."(?:[^\]]$name+|\]\])$name".$posessive;
			$nameNo = ($notAllowedName!==false?"(?!".$notAllowedName."\s)":"")."[^".$notAllowedCharsIfNone."]$name";
		}
		else
		{
			if($preg_quote) $name = preg_quote($name,"/");
			
			$nameSingle = str_replace("'","''",$name);
			$nameDouble = str_replace('"','""',$name);
			$nameBacktick = str_replace('`','``',$name);
			$nameSquare = str_replace(']',']]',$name);
			$nameNo = $name;
		}
		
		$preg =	"(?:'".$nameSingle."'|".   // 用单引号包围或完全不加引号 (对于值/新名称来说是正确的 SQL)
				$nameNo."|".               // 不加引号 (如果不包含保留字、空格或某些特殊字符, 则是正确的 SQL)
				"\"".$nameDouble."\"|".    // 用双引号包围 (对于标识符来说是正确的 SQL)
				"`".$nameBacktick."`|".    // 用反引号包围 (MySQL 风格)
				"\[".$nameSquare."\])";    // 用方括号包围 (MS Access/SQL server 风格)
		return $preg;
	}
	
	// 以字符串形式返回最后一次 PREG 错误, 如果未发生错误则返回 ''
	private function getPregError()
	{
		$error = preg_last_error();
		switch ($error)
		{
			case PREG_NO_ERROR: return 'No error';
			case PREG_INTERNAL_ERROR: return 'There is an internal error!';
			case PREG_BACKTRACK_LIMIT_ERROR: return 'Backtrack limit was exhausted!';
			case PREG_RECURSION_LIMIT_ERROR: return 'Recursion limit was exhausted!';
			case PREG_BAD_UTF8_ERROR: return 'Bad UTF8 error!';
			// PREG_BAD_UTF8_OFFSET_ERROR 在 PHP 5.3.0 中引入, 而 PLA 尚未要求该版本, 所以暂时使用它的值 5 代替
			case 5: return 'Bad UTF8 offset error!'; 
			default: return 'Unknown Error';
		} 
	}
	
	// 查询中遇到 alter table 语句时调用的函数
	// 经许可借用自 http://code.jenseng.com/db/ 的代码
	// 此代码已由 Christopher Kramer 完整调试/重写
	public function alterTable($table, $alterdefs)
	{
		global $debug, $lang;
		$this->alterError="";
		$errormsg = sprintf($lang['alter_failed'],htmlencode($table)).' - ';
		if($debug) $this->debugOutput .= "ALTER TABLE: table=($table), alterdefs=($alterdefs), PCRE version=(".PCRE_VERSION.")<hr /><br />";
		if($alterdefs != '')
		{
			$recreateQueries = array();
			$resultArr = $this->selectArray("SELECT sql,name,type FROM sqlite_master WHERE tbl_name = ".$this->quote($table));
			if(sizeof($resultArr)<1)
			{
				$this->alterError = $errormsg . sprintf($lang['tbl_inexistent'], htmlencode($table));
				if($debug) $this->debugOutput .= "ERROR: unknown table<hr /><br />";
				return false;
			}
			for($i=0; $i<sizeof($resultArr); $i++)
			{
				$row = $resultArr[$i];
				if($row['type'] != 'table' && $row['type'] != 'view')
				{
					if($row['sql']!='')
					{
						// 保存触发器和索引的 CREATE 语句, 以便稍后重建它们
						$recreateQueries[] = $row;
						if($debug) $this->debugOutput .= "recreate=(".$row['sql'].";)<br />";
					}
				}
				elseif($row['type']=='view')  // 重命名视图的变通方法
				{
					$origsql = $row['sql'];
					$preg_remove_create_view = "/^\s*+CREATE\s++VIEW\s++".$this->sqlite_surroundings_preg($table)."\s*+(AS\s++SELECT\s++.*+)$/is";
					$origsql_no_create = preg_replace($preg_remove_create_view, '$1', $origsql, 1);
					if($debug) $this->debugOutput .= "origsql=($origsql)<br />preg_remove_create_table=($preg_remove_create_view)<br />";
					preg_match("/RENAME\s++TO\s++(?:\"((?:[^\"]|\"\")+)\"|'((?:[^']|'')+)')/is", $alterdefs, $matches);
					if(isset($matches[1]) && $matches[1]!='')
						$newname = $matches[1];
					elseif(isset($matches[2]) && $matches[2]!='')
						$newname = $matches[2];
					else
					{
						$this->alterError = $errormsg . ' could not detect new view name. It needs to be in single or double quotes.';
						if($debug) $this->debugOutput .= "ERROR: could not detect new view name<hr />";
						return false;	
					}
					$dropoldSQL = 'DROP VIEW '.$this->quote_id($table);
					$createnewSQL = 'CREATE VIEW '.$this->quote_id($newname).' '.$origsql_no_create;
					$alter_transaction = 'BEGIN; ' . $dropoldSQL .'; '. $createnewSQL . '; ' . 'COMMIT;';
					if($debug) $this->debugOutput .= $alter_transaction;
					return $this->multiQuery($alter_transaction); 
				}
				else
				{
					// ALTER 该表
					$tmpname = 't'.time();
					$origsql = $row['sql'];
					$preg_remove_create_table = "/^\s*+CREATE\s++TABLE\s++".$this->sqlite_surroundings_preg($table)."\s*+(\(.*+)$/is";
					$origsql_no_create = preg_replace($preg_remove_create_table, '$1', $origsql, 1);
					if($debug) $this->debugOutput .= "origsql=($origsql)<br />preg_remove_create_table=($preg_remove_create_table)<br />";
					if($origsql_no_create == $origsql)
					{
						$this->alterError = $errormsg . $lang['alter_tbl_name_not_replacable'];
						if($debug) $this->debugOutput .= "ERROR: could not get rid of CREATE TABLE<hr />";
						return false;
					}
					$createtemptableSQL = "CREATE TABLE ".$this->quote($tmpname)." ".$origsql_no_create;
					if($debug) $this->debugOutput .= "createtemptableSQL=($createtemptableSQL)<br />";
					$createindexsql = array();
					$preg_alter_part = "/(?:DROP(?! PRIMARY KEY)|ADD(?! PRIMARY KEY)|CHANGE|RENAME TO|ADD PRIMARY KEY|DROP PRIMARY KEY)" // ALTER 命令
						."(?:"
							."\s+\(".$this->sqlite_surroundings_preg("+",false,"\"'\[`)")."+\)"	// 括号中的内容 (针对 ADD PRIMARY KEY 的情况)
						."|"																	// 或者
							."\s+".$this->sqlite_surroundings_preg("+",false,",'\"\[`")			// 列名及类似内容
						.")*/i";
					if($debug)
						$this->debugOutput .= "preg_alter_part=(".$preg_alter_part.")<br />";
					preg_match_all($preg_alter_part,$alterdefs,$matches);
					$defs = $matches[0];
					
					$result_oldcols = $this->getTableInfo($table);
					$newcols = array();
					$coltypes = array();
					$primarykey = array();
					foreach($result_oldcols as $column_info)
					{
						$newcols[$column_info['name']] = $column_info['name'];
						$coltypes[$column_info['name']] = $column_info['type'];
						if($column_info['pk'])
							$primarykey[] = $column_info['name'];
					}
					$newcolumns = '';
					$oldcolumns = '';
					foreach ($newcols as $key => $val)
					{
						$newcolumns .= ($newcolumns?', ':'').$this->quote_id($val);
						$oldcolumns .= ($oldcolumns?', ':'').$this->quote_id($key);
					}
					$copytotempsql = 'INSERT INTO '.$this->quote_id($tmpname).'('.$newcolumns.') SELECT '.$oldcolumns.' FROM '.$this->quote_id($table);
					$dropoldsql = 'DROP TABLE '.$this->quote_id($table);
					$createtesttableSQL = $createtemptableSQL;
					if(count($defs)<1)
					{
						$this->alterError = $errormsg . $lang['alter_no_def'];
						if($debug) $this->debugOutput .= "ERROR: defs&lt;1<hr /><br />";
						return false;
					}
					foreach($defs as $def)
					{
						if($debug) $this->debugOutput .= "<hr />def=$def<br />";
						$preg_parse_def =
							"/^(DROP(?! PRIMARY KEY)|ADD(?! PRIMARY KEY)|CHANGE|RENAME TO|ADD PRIMARY KEY|DROP PRIMARY KEY)" // $matches[1]: 命令
							."(?:"												// 它要么是
								."(?:\s+\((.+)\)\s*$)"							// 括号中的任何内容 (用于 ADD PRIMARY KEY)
																				// 那么 $matches[2] 就是括号中的内容
							."|"												// 或者:
								."(?:\s+\"((?:[^\"]|\"\")+)\"|\s+'((?:[^']|'')+)')"// (第一个) 列名, 用单引号或双引号
																				// 如果是 RENAME TO, 则是新的表名
																				// 如果是双引号, $matches[3] 将是不带引号的列名/表名
																				// 如果是单引号, $matches[4] 将是不带引号的列名/表名
								."("											// $matches[5]: 列名之后的内容
									."(?:\s+'((?:[^']|'')+)')?"					// $matches[6] (可选): 第二个用单引号包围的列名
																				//		(匹配结果不包含引号)
									."\s*"
									."((?:[A-Z]+\s*)+(?:\(\s*[+-]?\s*[0-9]+(?:\s*,\s*[+-]?\s*[0-9]+)?\s*\))?)?\s*"	// $matches[7] (可选): 类型名
									.".*".
								")"
								."?\s*$"
							.")?\s*$/i"; // 如果是 DROP PRIMARY KEY, 命令之后没有内容
						if($debug) $this->debugOutput .= "preg_parse_def=$preg_parse_def<br />";
						$parse_def = preg_match($preg_parse_def,$def,$matches);
						if($parse_def===false)
						{
							$this->alterError = $errormsg . $lang['alter_parse_failed'];
							if($debug) $this->debugOutput .= "ERROR: !parse_def<hr /><br />";
							return false;
						}
						if(!isset($matches[1]))
						{
							$this->alterError = $errormsg . $lang['alter_action_not_recognized'];
							if($debug) $this->debugOutput .= "ERROR: !isset(matches[1])<hr /><br />";
							return false;
						}
						$action = strtolower($matches[1]);
						if(($action == 'add' || $action == 'rename to') && isset($matches[4]) && $matches[4]!='')	
							$column = str_replace("''","'",$matches[4]);		// 用 '' 包围
						elseif($action == 'add primary key' && isset($matches[2]) && $matches[2]!='')
							$column = $matches[2];	
						elseif($action == 'drop primary key')
							$column = '';	// DROP PRIMARY KEY 没有列定义
						elseif(isset($matches[3]) && $matches[3]!='')
							$column = str_replace('""','"',$matches[3]);		// 用 "" 包围
						else
							$column = '';

						$column_escaped = str_replace("'","''",$column);

						if($debug) $this->debugOutput .= "action=($action), column=($column), column_escaped=($column_escaped)<br />";

						/* we build a regex that devides the CREATE TABLE statement parts:
						  Part example                            Group  Explanation
						  1. CREATE TABLE t... (                  $1
						  2. 'col1' ..., 'col2' ..., 'colN' ...,  $3     (with col1-colN being columns that are not changed and listed before the col to change)
						  3. 'colX' ...,                                 (with colX being the column to change/drop)
						  4. 'colX+1' ..., ..., 'colK')           $5     (with colX+1-colK being columns after the column to change/drop)
						*/
						$preg_create_table = "\s*+(CREATE\s++TABLE\s++".preg_quote($this->quote($tmpname),"/")."\s*+\()";   // 这是组 $1 (保持不变)
						$preg_column_definiton = "\s*+".$this->sqlite_surroundings_preg("+",true," '\"\[`,",$column)."(?:\s*+".$this->sqlite_surroundings_preg("*",false,"'\",`\[ ").")++";		// 捕获完整的列定义, 即使它是
														// 'column' TEXT NOT NULL DEFAULT 'we have a comma, here and a double ''quote!'
														// 此定义不匹配列名为 $column 的列
						if($debug) $this->debugOutput .= "preg_column_definition=(".$preg_column_definiton.")<br />";
						$preg_columns_before =  // 被修改/删除的列之前的列 (保留)
							"(?:".
								"(".			// 组 $2。保持这一组不变!
									"(?:".
										"$preg_column_definiton,\s*+".		// 列定义 + 逗号
									")*".								// 这里可能有任意数量的此类列
									$preg_column_definiton.				// 最后一列的定义
								")".			// 组 $2 结束
								",\s*+"			// 要修改的列之前最后一列的最后一个逗号。不要保留它!
							.")?";    // 前面可能没有任何列
						if($debug) $this->debugOutput .= "preg_columns_before=(".$preg_columns_before.")<br />";
						$preg_columns_after = "(,\s*(.+))?"; // 要删除的列之后的列。这是组 $3 (删除) 或 $4 (修改) (保留!)
												// 我们可以用 $6 而不是 $5 来移除逗号, 但那样可能就完全没有逗号了。
												// 保留它会带来问题: 如果我们删除第一列, 所以我们在另一个正则中修复该情况。
						$table_new = $table;
	
						switch($action)
						{
							case 'add':
								if($column=='')
								{
									$this->alterError = $errormsg . ' (add) - '. $lang['alter_no_add_col'];
									return false;
								}
								$new_col_definition = "'$column_escaped' ".(isset($matches[5])?$matches[5]:'');
								$preg_pattern_add = "/^".$preg_create_table.   // CREATE TABLE 语句 ($1)
									"((?:(?!,\s*(?:PRIMARY\s+KEY\s*\(|CONSTRAINT\s|UNIQUE\s*\(|CHECK\s*\(|FOREIGN\s+KEY\s*\()).)*)". // 列定义 ($2)
									"(.*)\\)\s*$/si"; // 表约束, 如 PRIMARY KEY(a,b) ($3), 以及右括号
								// 在 CREATE TABLE 语句中追加列定义
								$newSQL = preg_replace($preg_pattern_add, '$1$2, '.strtr($new_col_definition, array('\\' => '\\\\', '$' => '\$')).' $3', $createtesttableSQL).')';
								$preg_error = $this->getPregError();
								if($debug)
								{
									$this->debugOutput .= $createtesttableSQL."<hr /><br />";
									$this->debugOutput .= $newSQL."<hr /><br />";
									$this->debugOutput .= $preg_pattern_add."<hr /><br />";
								}
								if($newSQL==$createtesttableSQL) // 模式未匹配, 所以添加列未成功
									{
									$this->alterError = $errormsg . ' (add) - '.$lang['alter_pattern_mismatch'].'. PREG ERROR: '.$preg_error;
									return false;
									}
								$createtesttableSQL = $newSQL;
								break;
							case 'change':
								var_dump($matches);
								if(!isset($matches[6]))
								{
									$this->alterError = $errormsg . ' (change) - '.$lang['alter_col_not_recognized'];
									return false;
								}
								$new_col_name = $matches[6];
								if(!isset($matches[7]))
									$new_col_type = '';
								else
									$new_col_type = $matches[7];
								$new_col_definition = "'$new_col_name' $new_col_type";
								$preg_column_to_change = "\s*".$this->sqlite_surroundings_preg($column)."(?:\s+".preg_quote($coltypes[$column]).")?(\s+(?:".$this->sqlite_surroundings_preg("*",false,",'\"`\[").")+)?";
												// 替换这一部分 (我们想修改此列)
												// 组 $3 包含列约束 (保留!)。名称和数据类型会被替换。
								$preg_pattern_change = "/^".$preg_create_table.$preg_columns_before.$preg_column_to_change.$preg_columns_after."\s*\\)\s*$/s";

								// 替换 CREATE TABLE 语句中的列定义
								$newSQL = preg_replace($preg_pattern_change, '$1$2,'.strtr($new_col_definition, array('\\' => '\\\\', '$' => '\$')).'$3$4)', $createtesttableSQL);
								$preg_error = $this->getPregError();
								// 如果修改的是第一列, 则去掉开头的逗号
								// 也许有人能把它放进第一个正则中 (大概是用前瞻)。
								$newSQL = preg_replace("/^\s*(CREATE\s+TABLE\s+".preg_quote($this->quote($tmpname),"/")."\s+\(),\s*/",'$1',$newSQL);
								if($debug)
								{
									$this->debugOutput .= "preg_column_to_change=(".$preg_column_to_change.")<hr /><br />";
									$this->debugOutput .= $createtesttableSQL."<hr /><br />";
									$this->debugOutput .= $newSQL."<hr /><br />";

									$this->debugOutput .= $preg_pattern_change."<hr /><br />";
								}
								if($newSQL==$createtesttableSQL || $newSQL=="") // 模式未匹配, 所以删除列未成功
								{
									$this->alterError = $errormsg . ' (change) - '.$lang['alter_pattern_mismatch'].'. PREG ERROR: '.$preg_error;
									return false;
								}
								$createtesttableSQL = $newSQL;
								$newcols[$column] = str_replace("''","'",$new_col_name);
								break;
							case 'drop':
								$preg_column_to_drop = "\s*".$this->sqlite_surroundings_preg($column)."\s+(?:".$this->sqlite_surroundings_preg("*",false,",'\"\[`").")+";      // 删除这一部分 (我们想删除此列)
								$preg_pattern_drop = "/^".$preg_create_table.$preg_columns_before.$preg_column_to_drop.$preg_columns_after."\s*\\)\s*$/s";

								// 从 CREATE TABLE 语句中移除该列
								$newSQL = preg_replace($preg_pattern_drop, '$1$2$3)', $createtesttableSQL);
								$preg_error = $this->getPregError();
								// 如果删除的是第一列, 则去掉开头的逗号
								// 也许有人能把它放进第一个正则中 (大概是用前瞻)。
								$newSQL = preg_replace("/^\s*(CREATE\s+TABLE\s+".preg_quote($this->quote($tmpname),"/")."\s+\(),\s*/",'$1',$newSQL);
								if($debug)
								{
									$this->debugOutput .= $createtesttableSQL."<hr /><br />";
									$this->debugOutput .= $newSQL."<hr /><br />";
									$this->debugOutput .= $preg_pattern_drop."<hr /><br />";
								}
								if($newSQL==$createtesttableSQL || $newSQL=="") // 模式未匹配, 所以删除列未成功
								{
									$this->alterError = $errormsg . ' (drop) - '.$lang['alter_pattern_mismatch'].'. PREG ERROR: '.$preg_error;
									return false;
								}
								$createtesttableSQL = $newSQL;
								unset($newcols[$column]);
								break;
							case 'rename to':
								// 完全不修改列定义
								$newSQL = $createtesttableSQL;
								// 只修改表名
								$table_new = $column;
								break;
							case 'add primary key':
								// 我们想为 $column 中存储的列添加主键
								$newSQL = preg_replace("/\)\s*$/", ", PRIMARY KEY (".$column.") )", $createtesttableSQL);
								$createtesttableSQL = $newSQL;
								break;
							case 'drop primary key':
								// 我们想删除主键
								if($debug) $this->debugOutput .= "DROP";
								if(sizeof($primarykey)==1)
								{
									// 如果不是复合主键, 可能是一个列约束 -> 尝试移除
									$column = $primarykey[0];
									if($debug) $this->debugOutput .= "<br>Trying to drop column constraint for column $column <br>";
									/*
									TODO: This does not work yet:
									CREATE TABLE 't12' ('t1' INTEGER CONSTRAINT "bla" NOT NULL CONSTRAINT 'pk' PRIMARY KEY ); ALTER TABLE "t12" DROP PRIMARY KEY
									This does:                                  !   !
									CREATE TABLE 't12' ('t1' INTEGER CONSTRAINT  bla  NOT NULL CONSTRAINT 'pk' PRIMARY KEY ); ALTER TABLE "t12" DROP PRIMARY KEY
									*/
									$preg_column_to_change = "(\s*".$this->sqlite_surroundings_preg($column).")". // 列 ($3)
										"(?:".		// 可选的类型和列约束
											"(\s+(?:".$this->sqlite_surroundings_preg("(?:[^PC,'\"`\[]|P(?!RIMARY\s+KEY)|".
											"C(?!ONSTRAINT\s+".$this->sqlite_surroundings_preg("+",false," ,'\"\[`")."\s+PRIMARY\s+KEY))",false,",'\"`\[").")*)". // PRIMARY KEY 之前的列约束 ($3)
												// 主键约束 (移除它!):
												"(?:CONSTRAINT\s+".$this->sqlite_surroundings_preg("+",false," ,'\"\[`")."\s+)?".
												"PRIMARY\s+KEY".
												"(?:\s+(?:ASC|DESC))?".
												"(?:\s+ON\s+CONFLICT\s+(?:ROLLBACK|ABORT|FAIL|IGNORE|REPLACE))?".
												"(?:\s+AUTOINCREMENT)?".
											"((?:".$this->sqlite_surroundings_preg("*",false,",'\"`\[").")*)". // PRIMARY KEY 之后的列约束 ($4)
										")";
													// 替换这一部分 (我们想修改此列)
													// 组 $3 (列)、$4 (前面的约束) 和 $5 (后面的约束) 包含要保留的部分
									$preg_pattern_change = "/^".$preg_create_table.$preg_columns_before.$preg_column_to_change.$preg_columns_after."\s*\\)\s*$/si";
		
									// 替换 CREATE TABLE 语句中的列定义
									$newSQL = preg_replace($preg_pattern_change, '$1$2,$3$4$5$6)', $createtesttableSQL);
									// 如果修改的是第一列, 则去掉开头的逗号
									// 也许有人能把它放进第一个正则中 (大概是用前瞻)。
									$newSQL = preg_replace("/^\s*(CREATE\s+TABLE\s+".preg_quote($this->quote($tmpname),"/")."\s+\(),\s*/",'$1',$newSQL);
									if($debug)
									{
										$this->debugOutput .= "preg_column_to_change=(".$preg_column_to_change.")<hr /><br />";
										$this->debugOutput .= $createtesttableSQL."<hr /><br />";
										$this->debugOutput .= $newSQL."<hr /><br />";
	
										$this->debugOutput .= $preg_pattern_change."<hr /><br />";
									}
									if($newSQL!=$createtesttableSQL && $newSQL!="") // 模式匹配成功, 主键约束已移除 :)
									{
										$createtesttableSQL = $newSQL;
										if($debug) $this->debugOutput .= "<br>SUCCEEDED<br>";
									}
									else
									{
										if($debug) $this->debugOutput .= "NO LUCK";
										// TODO: 尝试移除表约束
										return false;
									}
									$createtesttableSQL = $newSQL;
								} else
									// TODO: 尝试移除表约束
									return false;
								
								break;
							default:
								if($debug) $this->debugOutput .= 'ERROR: unknown alter operation!<hr /><br />';
								$this->alterError = $errormsg . $lang['alter_unknown_operation'];
								return false;
						}
					}
					$droptempsql = 'DROP TABLE '.$this->quote_id($tmpname);

					$createnewtableSQL = "CREATE TABLE ".$this->quote($table_new)." ".preg_replace("/^\s*CREATE\s+TABLE\s+'?".str_replace("'","''",preg_quote($tmpname,"/"))."'?\s+(.*)$/is", '$1', $createtesttableSQL, 1);

					$newcolumns = '';
					$oldcolumns = '';
					foreach ($newcols as $key => $val)
					{
						$newcolumns .= ($newcolumns?', ':'').$this->quote_id($val);
						$oldcolumns .= ($oldcolumns?', ':'').$this->quote_id($key);
					}
					$copytonewsql = 'INSERT INTO '.$this->quote_id($table_new).'('.$newcolumns.') SELECT '.$oldcolumns.' FROM '.$this->quote_id($tmpname);
				}
			}
			$alter_transaction  = 'BEGIN; ';
			$alter_transaction .= $createtemptableSQL.'; ';  //创建临时表
			$alter_transaction .= $copytotempsql.'; ';       //复制到表
			$alter_transaction .= $dropoldsql.'; ';          //删除旧表
			$alter_transaction .= $createnewtableSQL.'; ';   //重建原表
			$alter_transaction .= $copytonewsql.'; ';        //复制回原表
			$alter_transaction .= $droptempsql.'; ';         //删除临时表

			$preg_index="/^\s*(CREATE\s+(?:UNIQUE\s+)?INDEX\s+(?:".$this->sqlite_surroundings_preg("+",false," '\"\[`")."\s*)*ON\s+)(".$this->sqlite_surroundings_preg($table).")(\s*\((?:".$this->sqlite_surroundings_preg("+",false," '\"\[`")."\s*)*\)\s*)\s*$/i";				
			foreach($recreateQueries as $recreate_query)
			{
				if($recreate_query['type']=='index')
				{
					// 这是一个索引。我们需要确保该索引不在我们要删除的列上。如果是, 我们也要删除该索引。
					$indexInfos = $this->selectArray('PRAGMA index_info('.$this->quote_id($recreate_query['name']).')');
					foreach($indexInfos as $indexInfo)
					{
						if(!isset($newcols[$indexInfo['name']]))
						{
							if($debug) $this->debugOutput .= 'Not recreating the following index: <hr /><br />'.htmlencode($recreate_query['sql']).'<hr /><br />'; 
							// 索引位于被删除的列上。跳过重建。
							continue 2;
						}
					}
				}
				// TODO: 如果我们重命名了某个列上有索引的列, 需要用调整后的列名重建该索引。
				
				// 重建触发器 / 索引
				if($table == $table_new)
				{
					// 我们没有 RENAME TO, 所以可以像原始的一样重建索引/触发器
					$alter_transaction .= $recreate_query['sql'].';';
				} else
				{
					// 我们有 RENAME TO, 所以需要在触发器和索引的 CREATE-SQL 中替换表名
					switch ($recreate_query['type'])
					{
						case 'index':
							$recreate_queryIndex = preg_replace($preg_index, '$1'.$this->quote_id(strtr($table_new, array('\\' => '\\\\', '$' => '\$'))).'$3 ', $recreate_query['sql']);
							if($recreate_queryIndex!=$recreate_query['sql'] && $recreate_queryIndex != NULL)
								$alter_transaction .= $recreate_queryIndex.';';
							else
							{
								// CREATE INDEX 正则未匹配。这通常不应发生
								if($debug) $this->debugOutput .= 'ERROR: CREATE INDEX regex did not match!?<hr /><br />';
								// 还是尝试按原样重建索引 (很可能会失败)
								$alter_transaction .= $recreate_query['sql'].';';
							}
							break;
							
						case 'trigger':
							// TODO: 实现
							$alter_transaction .= $recreate_query['sql'].';';
							break;
						default:
							if($debug) $this->debugOutput .= 'ERROR: Unknown type '.htmlencode($recreate_query['type']).'<hr /><br />';
							$alter_transaction .= $recreate_query['sql'].';';
					}
				}
			}
			$alter_transaction .= 'COMMIT;';
			if($debug) $this->debugOutput .= $alter_transaction;
			return $this->multiQuery($alter_transaction);
		}
	}

	//执行多个查询
	//成功时返回 true, 否则返回 false。用 getError() 获取错误。
	public function multiQuery($query)
	{
		if($this->type=="PDO")
			$success = $this->db->exec($query);
		else if($this->type=="SQLite3")
			$success = $this->db->exec($query);
		else
			$success = $this->db->queryExec($query, $error);
		return $success;
	}

	
	// 检查表是否有主键
	public function hasPrimaryKey($table)
	{
		$table_info = $this->getTableInfo($table);
		foreach($table_info as $row_id => $row_data)
		{
			if($row_data['pk'])
			{
				return true;
			}
		 
		}
		return false;
	}
	
	// 返回可用于唯一寻址行的列数组。
	// 对于有 rowid 列的表, 这始终是 array('rowid')
	// 对于没有 rowid 的表, 这是主键列的数组。
	public function getPrimaryKey($table)
	{
		$primary_key = array();
		// 检查此表是否有 rowid
		$getRowID = $this->select('SELECT ROWID FROM '.$this->quote_id($table).' LIMIT 0,1');
		if(isset($getRowID[0]))
			// 有, 所以我们优先用 rowid 寻址行
			return array('rowid');
		else
		{
			// 该表没有 rowid, 所以使用主键
			$table_info = $this->getTableInfo($table);
			if(is_array($table_info))
			{
				foreach($table_info as $row_id => $row_data)
				{
					if($row_data['pk'])
						$primary_key[] = $row_data['name'];
				}
			}
		}
		return $primary_key;
	}
	
	// 根据给定的键 $pk (一个值数组) 选择一行
	// 用于可寻址行的列 (rowid 或主键)
	public function wherePK($table, $pk)
	{
		$where = "";
		$primary_key = $this->getPrimaryKey($table);
		foreach($primary_key as $pk_index => $column)
		{
			if($where!="")
				$where .= " AND ";
			$where .= $this->quote_id($column) . ' = ';
			if(is_int($pk[$pk_index]) || is_float($pk[$pk_index]))
				$where .= $pk[$pk_index];
			else
				$where .= $this->quote($pk[$pk_index]);
		}
		return $where;
	}

	//获取表中的行数
	public function numRows($table, $dontTakeLong = false)
	{
		// 因为在没有主键的超大表上 Count(*) 可能很慢,
		// 如果设置了 $dontTakeLong 且大小 > 2MB, 则仅在有主键时才 count()
		if(!$dontTakeLong || $this->getSize() <= 2000 || $this->hasPrimaryKey($table))
		{
			$result = $this->select("SELECT Count(*) FROM ".$this->quote_id($table));
			return $result[0];
		} else
		{
			return '?';
		}
	}

	//正确转义要注入 SQL 查询的字符串
	public function quote($value)
	{
		if($this->type=="PDO")
		{
			// PDO 的 quote() 会转义并加上引号
			return $this->db->quote($value);
		}
		else if($this->type=="SQLite3")
		{
			return "'".$this->db->escapeString($value)."'";
		}
		else
		{
			return "'".sqlite_escape_string($value)."'";
		}
	}

	//正确转义要注入 SQL 查询的标识符 (列 / 表 / 触发器 / 索引名)
	public function quote_id($value)
	{
		// 双引号需要写两遍来转义
		$value = str_replace('"','""',(string) $value);
		return '"'.$value.'"';
	}


	//导入 sql
	//成功时返回 true, 否则返回错误消息
	public function import_sql($query)
	{
		$import = $this->multiQuery($query);
		if(!$import)
			return $this->getError();
		else
			return true;
	}
	
	public function prepareQuery($query)
	{
		if($this->type=='PDO' || $this->type=='SQLite3')
			return $this->db->prepare($query);
		else
		{
			// 这里我们遇到麻烦, SQLiteDatabase 无法预处理语句。
			// 我们需要尽可能模拟预处理
			# todo: implement this
			return null;
		}
	}
	
	public function bindValue($handle, $parameter, $value, $type)
	{
		if($this->type=='SQLite3')
		{
			$types = array(
				'bool'=>SQLITE3_INTEGER,
				'int'=>SQLITE3_INTEGER,
				'float'=>SQLITE3_FLOAT,
				'text'=>SQLITE3_TEXT,
				'blob'=>SQLITE3_BLOB,
				'null'=>SQLITE3_NULL);
			if(!isset($types[$type]))
				$type = 'text';
			// 没有 SQLITE_BOOL, 所以检查值并确保它是 0/1
			if($type=='bool')
			{
				if($value===1 || $value===true)
					$value=1;
				elseif($value===0 || $value===false)
					$value=0;
				else
					return false;
			}
			return $handle->bindValue($parameter, $value, $types[$type]);
		}
		if($this->type=='PDO')
		{
			$types = array(
				'bool'=>PDO::PARAM_BOOL,
				'int'=>PDO::PARAM_INT,
				'float'=>PDO::PARAM_STR,
				'text'=>PDO::PARAM_STR,
				'blob'=>PDO::PARAM_LOB,
				'null'=>PDO::PARAM_NULL);
			if(!isset($types[$type]))
				$type = 'text';
			// 没有 PDO::PARAM_FLOAT, 所以我们自己检查
			if($type=='float')
			{
				if(is_numeric($value))
					$value = (float) $value;
				else
					return false;
			}
			return $handle->bindValue($parameter, $value, $types[$type]);
		}
		else
			# todo: workaround
			return false;

	}
	
	public function executePrepared($handle, $fetchResult=false)
	{
		if($this->type=='PDO')
		{
			$ok=$handle->execute();
			if($fetchResult && $ok)
			{
				$res = $handle->fetchAll();
				$handle->closeCursor();
				return $res;
			}
			else
			{
				if($ok)
					$handle->closeCursor();
				return $ok;
			}
		}
		elseif($this->type=='SQLite3')
		{
			$resultset=$handle->execute();
			if($fetchResult && $resultset!==false)
			{
				$res = $resultset->fetchArray();
				$resultset->finalize();
				return $res;
			}
			else
			{
				if($resultset!==false)
					$resultset->finalize();
				if($resultset===false)
					return false;
				else
					return true;
			}
		}
		else
		{
			#todo.
			return false;
		}
	}
	
	//导入 csv
	//成功时返回 true, 否则返回错误消息
	public function import_csv($filename, $table, $field_terminate, $field_enclosed, $field_escaped, $null, $fields_in_first_row)
	{
		@set_time_limit(-1);
		$csv_handle = fopen($filename,'r');
		$csv_insert = "BEGIN;\n";
		$csv_number_of_rows = 0;
		// PHP 要求定义包围符, 但如果未使用也没问题
		if($field_enclosed=="") $field_enclosed='"';
		// PHP 要求定义转义符
		if($field_escaped=="") $field_escaped='\\';
		// 支持制表符分隔符
		if($field_terminate=='\t') $field_terminate = "\t";
		while($csv_handle!==false && !feof($csv_handle))
		{
			$csv_data = fgetcsv($csv_handle, 0, $field_terminate, $field_enclosed, $field_escaped); 
			if(is_array($csv_data) && ($csv_data[0] != NULL || count($csv_data)>1))
			{
				$csv_number_of_rows++;
				if($csv_number_of_rows==1)
				{
					if($this->getTypeOfTable($table)!="table")
					{
						// 首先, 创建新表
						$csv_insert .="CREATE TABLE ".$this->quote($table)." (";
						$number_of_cols = count($csv_data);
						foreach($csv_data as $csv_col => $csv_cell)
						{
							if($fields_in_first_row)
								$csv_insert .= $this->quote($csv_cell);
							else
								$csv_insert.= $this->quote("col{$csv_col}");
							if($csv_col < $number_of_cols-1)
								$csv_insert .= ", ";
						}
						$csv_insert .=");";
						
					} else {
						$number_of_cols = count($this->getTableInfo($table));
					}
					if($fields_in_first_row)
						continue;
				} 
				$csv_insert .= "INSERT INTO ".$this->quote_id($table)." VALUES (";
				for($csv_col = 0; $csv_col < $number_of_cols; $csv_col++)
				{
					if(isset($csv_data[$csv_col]))
						$csv_cell = $csv_data[$csv_col];
					else
						$csv_cell = $null;
					if($csv_cell == $null)
						$csv_insert .= "NULL";
					else
						$csv_insert.= $this->quote($csv_cell);
					if($csv_col < $number_of_cols-1)
						$csv_insert .= ",";
				}
				$csv_insert .= ");\n";
				
				if($csv_number_of_rows % 5000 == 0)
				{
					$csv_insert .= "COMMIT;\nBEGIN;\n";
				}
			}
		}
		if($csv_handle === false)
			return "Error reading CSV file";
		else
		{
			$csv_insert .= "COMMIT;";
			fclose($csv_handle);
			$import = $this->multiQuery($csv_insert);
			if(!$import)
				return $this->getError();
			else
				return true;
		}
	}
	
	//导出 csv
	public function export_csv($tables, $field_terminate, $field_enclosed, $field_escaped, $null, $crlf, $fields_in_first_row)
	{
		@set_time_limit(-1);
		// 如果 _client_ 的操作系统是 windows, 我们使用 \r\n, 否则使用 \n
		$crlf = (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Win')!==false ? "\r\n" : "\n");

		$query = "SELECT * FROM sqlite_master WHERE type='table' or type='view' ORDER BY type DESC";
		$result = $this->selectArray($query);
		for($i=0; $i<sizeof($result); $i++)
		{
			$valid = false;
			for($j=0; $j<sizeof($tables); $j++)
			{
				if($result[$i]['tbl_name']==$tables[$j])
					$valid = true;
			}
			if($valid)
			{
				$temp = $this->getTableInfo($result[$i]['tbl_name']);
				$cols = array();
				for($z=0; $z<sizeof($temp); $z++)
					$cols[$z] = $temp[$z][1];
				if($fields_in_first_row)
				{
					for($z=0; $z<sizeof($cols); $z++)
					{
						echo $field_enclosed.$cols[$z].$field_enclosed;
						// 不要终止最后一列!
						if($z < sizeof($cols)-1)
							echo $field_terminate;
					}
					echo $crlf;
				}
				$query = "SELECT * FROM ".$this->quote_id($result[$i]['tbl_name']);
				$table_result = $this->query($query);
				$firstRow=true;
				while($row = $this->fetch($table_result, "assoc"))
				{
					if(!$firstRow)
						echo $crlf;
					else
						$firstRow=false;

					for($y=0; $y<sizeof($cols); $y++)
					{
						$cell = $row[$cols[$y]];
						if($crlf)
						{
							$cell = str_replace("\n","", $cell);
							$cell = str_replace("\r","", $cell);
						}
						$cell = str_replace($field_terminate,$field_escaped.$field_terminate,$cell);
						$cell = str_replace($field_enclosed,$field_escaped.$field_enclosed,$cell);
						// 不要包围 NULL
						if($cell == NULL)
							echo $null;  
						else
							echo $field_enclosed.$cell.$field_enclosed;
						// 不要终止最后一列!
						if($y < sizeof($cols)-1)
							echo $field_terminate;
					}
				}
				if($i<sizeof($result)-1)
					echo $crlf;
			}
		}
	}
	
	//导出 sql
	public function export_sql($tables, $drop, $structure, $data, $transaction, $comments)
	{
		global $lang;
		@set_time_limit(-1);
		// 如果 _client_ 的操作系统是 windows, 我们使用 \r\n, 否则使用 \n
		$crlf = (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'Win')!==false ? "\r\n" : "\n");
		
		if($comments)
		{
			echo "----".$crlf;
			echo "-- ".PROJECT." ".$lang['db_dump']." (".PROJECT_URL.")".$crlf;
			echo "-- ".PROJECT." ".$lang['ver'].": ".VERSION.$crlf;
			echo "-- ".$lang['exported'].": ".date($lang['date_format']).$crlf;
			echo "-- ".$lang['db_f'].": ".$this->getPath().$crlf;
			echo "----".$crlf;
		}
		$query = "SELECT * FROM sqlite_master WHERE type='table' OR type='index' OR type='view' OR type='trigger' ORDER BY type='trigger', type='index', type='view', type='table'";
		$result = $this->selectArray($query);

		if($transaction)
			echo "BEGIN TRANSACTION;".$crlf;

		//遍历每个表
		for($i=0; $i<sizeof($result); $i++)
		{
			$valid = false;
			for($j=0; $j<sizeof($tables); $j++)
			{
				if($result[$i]['tbl_name']==$tables[$j])
					$valid = true;
			}
			if($valid)
			{
				if($drop)
				{
					if($comments)
					{
						echo "\r\n----".$crlf;
						echo "-- ".$lang['drop']." ".$result[$i]['type']." ".$lang['for']." ".$result[$i]['name'].$crlf;
						echo "----".$crlf;
					}
					echo "DROP ".strtoupper($result[$i]['type'])." IF EXISTS ".$this->quote_id($result[$i]['name']).";".$crlf;
				}
				if($structure)
				{
					if($comments)
					{
						echo "\r\n----".$crlf;
						if($result[$i]['type']=="table" || $result[$i]['type']=="view")
							echo "-- ".ucfirst($result[$i]['type'])." ".$lang['struct_for']." ".$result[$i]['tbl_name'].$crlf;
						else // 索引或触发器
							echo "-- ".$lang['struct_for']." ".$result[$i]['type']." ".$result[$i]['name']." ".$lang['on_tbl']." ".$result[$i]['tbl_name'].$crlf;
						echo "----".$crlf;
					}
					echo $result[$i]['sql'].";".$crlf;
				}
				if($data && $result[$i]['type']=="table")
				{
					$query = "SELECT * FROM ".$this->quote_id($result[$i]['tbl_name']);
					$table_result = $this->query($query, "assoc");

					if($comments)
					{
						$numRows = $this->numRows($result[$i]['tbl_name']);
						echo "\r\n----".$crlf;
						echo "-- ".$lang['data_dump']." ".$result[$i]['tbl_name'].", ".sprintf($lang['total_rows'], $numRows).$crlf;
						echo "----".$crlf;
					}
					$temp = $this->getTableInfo($result[$i]['tbl_name']);
					$cols = array();
					$cols_quoted = array();
					for($z=0; $z<sizeof($temp); $z++)
					{
						$cols[$z] = $temp[$z][1];
						$cols_quoted[$z] = $this->quote_id($temp[$z][1]);
					}
					while($row = $this->fetch($table_result))
					{
						$vals = array();
						for($y=0; $y<sizeof($cols); $y++)
						{
							if($row[$cols[$y]] === NULL)
								$vals[$cols[$y]] = 'NULL';
							else
								$vals[$cols[$y]] = $this->quote($row[$cols[$y]]);
						}
						echo "INSERT INTO ".$this->quote_id($result[$i]['tbl_name'])." (".implode(",", $cols_quoted).") VALUES (".implode(",", $vals).");".$crlf;
					}
				}
			}
		}
		if($transaction)
			echo "COMMIT;".$crlf;
	}
}
class GetParameters
{
	private $_fields;

	public function __construct(array $defaults = array())
	{
		$this->_fields = $defaults;
	}

	public function __set($key, $value)
	{
		$this->_fields[$key] = $value;
	}

	public function __isset($key)
	{
		return isset($this->_fields[$key]);
	}

	public function __unset($key)
	{
		unset($this->_fields[$key]);
	}

	public function __get($key)
	{
		return $this->_fields[$key];
	}

	public function getURL(array $assoc = array(), $html = true, $prefix='?')
	{
		$arg_sep = ($html?'&amp;':'&');
		return $prefix . http_build_query(array_merge($this->_fields, $assoc), '', $arg_sep);
	}

	public function getLink(array $assoc = array(), $content = '[ link ]', $class = '', $title = '', $target='')
	{
		return '<a href="' . $this->getURL($assoc) . '"'
			. ($class  != '' ? ' class="'  . $class .  '"' : '')
			. ($title  != '' ? ' title="'  . $title .  '"' : '')
			. ($target != '' ? ' target="' . $target . '"' : '')
			. '>' . $content . '</a>';
	}

	public function getForm(array $assoc = array(), $method = 'post', $upload = false, $name = '', $csrf = true)
	{
		$hidden = '';
		if($method == 'get')
		{
			$url = '';
			foreach(array_merge($this->_fields, $assoc) as $key => $value)
			{
				if(!is_null($value))
					$hidden .= '<input type="hidden" name="'.htmlencode($key).'" value="'.htmlencode($value).'" /> ';
			}
		}
		else 
			$url = $this->getURL($assoc);
		
		if($csrf && $method == 'post')
			$hidden .= '<input type="hidden" name="token" value="'.$_SESSION[COOKIENAME.'token'].'" />';
		
		return "<form action='". $url ."' method='" . $method . "'" .
			($name!=''? " name='". $name ."'" : '') .
			($upload? " enctype='multipart/form-data'" : '') . ">" .
			$hidden;
	}
	
	public function redirect(array $assoc = array(), $message="")
	{
		if($message!="")
		{
			$_SESSION[COOKIENAME.'messages'][md5($message)] = $message;
			$url = $this->getURL(array_merge($assoc, array('message'=>md5($message))), false);
		}
		else
			$url = $this->getURL($assoc, false);
		
		$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http'); 
		
		header("Location: ".$protocol."://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].$url, true, 302);
		exit;
	}
}
//	MicroTimer 类已上移到文件开头(第 475 行附近), 此处不再重复定义
//	类 Resources (issue #157)
//	输出辅助文件, 如 css 和 javascript
//	数据以 gzip 压缩 (gzencode) 并编码 (base64_encode) 后存储
//
class Resources {

	// 将其设为包含 getInternalResource 的文件;
	// 当前在拆分模式下未使用; 对于打包后的 PLA, 设为 __FILE__。
	public static $embedding_file = __FILE__;

	private static $_resources = array(
		'css' => array(
			'mime' => 'text/css',
			'data' => 'resources/phpliteadmin.css',
		),
		'javascript' => array(
			'mime' => 'text/javascript',
			'data' => 'resources/phpliteadmin.js',
		),
		'favicon' => array(
			'mime' => 'image/x-icon',
			'data' => 'resources/favicon.ico',
			'base64' => 'true',
		),
	);

	// 输出指定的资源 (如果在此类中定义)。
	// 调用此函数后, 主脚本不应再有任何输出。
	public static function output($resource)
	{
		if (isset(self::$_resources[$resource])) {
			$res =& self::$_resources[$resource];

			if (function_exists('getInternalResource') && $data = getInternalResource($res['data'])) {
				$filename = self::$embedding_file;
			} else {
				$filename = $res['data'];
			}

			// 使用最后修改时间作为 etag; etag 必须加引号
			$etag = '"' . filemtime($filename) . '"';

			// 检查头部是否有匹配的 etag; 如果 etag 未变化, 则使用缓存版本
			if (isset($_SERVER['HTTP_IF_NONE_MATCH']) && $_SERVER['HTTP_IF_NONE_MATCH'] == $etag) {
				header('HTTP/1.0 304 Not Modified');
				return;
			}

			header('Etag: ' . $etag);

			// 缓存文件最多 30 天
			header('Cache-control: max-age=2592000');

			// 输出资源
			header('Content-type: ' . $res['mime']);

			if (isset($data)) {
				if (isset($res['base64'])) {
					echo base64_decode($data);
				} else {
					echo $data;
				}
			} else {
				readfile($filename);
			}
		}
	}

}


// 返回内部资源中的数据, 仅在单文件模式下可用
function getInternalResource($res) {
	$resources = array('resources/phpliteadmin.css'=>array(0=>0,1=>4059,),'resources/phpliteadmin.js'=>array(0=>4059,1=>4542,),'resources/favicon.ico'=>array(0=>8601,1=>1448,),);

	if (isset($resources[$res]) && $f = fopen(__FILE__, 'r')) {
		fseek($f, __COMPILER_HALT_OFFSET__ + $resources[$res][0]);
		$data = fread($f, $resources[$res][1]);
		fclose($f);
		return $data;
	}
	return false;  
}

// 资源内嵌在下面, 请勿编辑!
__halt_compiler() ?>body{margin:0px;padding:0px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#000;background-color:#e0ebf6;overflow:auto}.body_tbl td{padding:9px 2px 9px 9px}.left_td{width:100px}a{color:#03F;text-decoration:none;cursor:pointer}a:hover{color:#06F}hr{height:1px;border:0;color:#bbb;background-color:#bbb;width:100%}h1{margin:0px;padding:5px;font-size:24px;background-color:#f3cece;text-align:center;color:#000;border-top-left-radius:5px;border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px}#headerlinks{text-align:center;margin-bottom:10px;padding:5px 15px;border-color:#03F;border-width:1px;border-style:solid;border-left-style:none;border-right-style:none;font-size:12px;background-color:#e0ebf6;font-weight:bold}h1 #version{color:#000;font-size:16px}h1 #logo{color:#000}h2{margin:0px;padding:0px;font-size:14px;margin-bottom:20px}input,select,textarea,.CodeMirror{font-family:Arial,Helvetica,sans-serif;background-color:#eaeaea;color:#03F;border-color:#03F;border-style:solid;border-width:1px;margin:5px;border-radius:5px;-moz-border-radius:5px;padding:3px}input.btn{cursor:pointer}input.btn:hover{background-color:#ccc}fieldset label{min-width:200px;display:block;float:left}fieldset{padding:15px;border-color:#03F;border-width:1px;border-style:solid;border-radius:5px;-moz-border-radius:5px;background-color:#f9f9f9}#container{padding:10px}#leftNav{min-width:250px;padding:0px;border-color:#03F;border-width:1px;border-style:solid;background-color:#FFF;padding-bottom:15px;border-radius:5px;-moz-border-radius:5px}.databaseList select{max-width:200px}.viewTable tr td{padding:1px}#loginBox{width:500px;margin-left:auto;margin-right:auto;margin-top:50px;border-color:#03F;border-width:1px;border-style:solid;background-color:#FFF;border-radius:5px;-moz-border-radius:5px}#main{border-color:#03F;border-width:1px;border-style:solid;padding:15px;background-color:#FFF;border-bottom-left-radius:5px;border-bottom-right-radius:5px;border-top-right-radius:5px;-moz-border-radius-bottomleft:5px;-moz-border-radius-bottomright:5px;-moz-border-radius-topright:5px}.td1{background-color:#f9e3e3;text-align:right;font-size:12px;padding-left:10px;padding-right:10px}.td2{background-color:#f3cece;text-align:right;font-size:12px;padding-left:10px;padding-right:10px}.tdheader{border-color:#03F;border-width:1px;border-style:solid;font-weight:bold;font-size:12px;padding-left:10px;padding-right:10px;background-color:#e0ebf6;border-radius:5px;-moz-border-radius:5px}.confirm{border-color:#03F;border-width:1px;border-style:dashed;padding:15px;background-color:#e0ebf6}.tab{display:block;padding:5px;padding-right:8px;padding-left:8px;border-color:#03F;border-width:1px;border-style:solid;margin-right:5px;float:left;border-bottom-style:none;position:relative;top:1px;padding-bottom:4px;background-color:#eaeaea;border-top-left-radius:5px;border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px}.tab_pressed{display:block;padding:5px;padding-right:8px;padding-left:8px;border-color:#03F;border-width:1px;border-style:solid;margin-right:5px;float:left;border-bottom-style:none;position:relative;top:1px;background-color:#FFF;cursor:default;border-top-left-radius:5px;border-top-right-radius:5px;-moz-border-radius-topleft:5px;-moz-border-radius-topright:5px}.helpq{font-size:11px;font-weight:normal}#help_container{padding:0px;font-size:12px;margin-left:auto;margin-right:auto;background-color:#fff}.help_outer{background-color:#FFF;padding:0px;height:300px;position:relative}.help_list{padding:10px;height:auto}.headd{font-size:14px;font-weight:bold;display:block;padding:10px;background-color:#e0ebf6;border-color:#03F;border-width:1px;border-style:solid;border-left-style:none;border-right-style:none}.help_inner{padding:10px}.help_top{display:block;position:absolute;right:10px;bottom:10px}.warning,.delete,.empty,.drop,.delete_db{color:red}.sidebar_table{font-size:11px}.active_table,.active_db{text-decoration:underline}.null{color:#888}.found{background:#FF0;text-decoration:none}
function initAutoincrement()
{var i=0;while(document.getElementById('i'+i+'_autoincrement')!=undefined)
{document.getElementById('i'+i+'_autoincrement').disabled=true;i++;}}
function toggleAutoincrement(i)
{var type=document.getElementById('i'+i+'_type');var primarykey=document.getElementById('i'+i+'_primarykey');var autoincrement=document.getElementById('i'+i+'_autoincrement');if(!autoincrement)return false;if(type.value=='INTEGER'&&primarykey.checked)
autoincrement.disabled=false;else
{autoincrement.disabled=true;autoincrement.checked=false;}}
function toggleNull(i)
{var pk=document.getElementById('i'+i+'_primarykey');var notnull=document.getElementById('i'+i+'_notnull');if(pk.checked)
{notnull.disabled=true;notnull.checked=true;}
else
{notnull.disabled=false;}}
function checkAll(field)
{var i=0;while(document.getElementById('check_'+i)!=undefined)
{document.getElementById('check_'+i).checked=true;i++;}}
function uncheckAll(field)
{var i=0;while(document.getElementById('check_'+i)!=undefined)
{document.getElementById('check_'+i).checked=false;i++;}}
function changeIgnore(area,e,u)
{if(area.value!="")
{if(document.getElementById(e)!=undefined)
document.getElementById(e).checked=false;if(document.getElementById(u)!=undefined)
document.getElementById(u).checked=false;}}
function moveFields()
{var fields=document.getElementById("fieldcontainer");var selected=[];for(var i=0;i<fields.options.length;i++)
if(fields.options[i].selected)
selected.push(fields.options[i].value);for(var i=0;i<selected.length;i++)
{var val='"'+selected[i].replace(/"/g,'""')+'"';if(i<selected.length-1)
val+=', ';sqleditorInsertValue(val);}}
function notNull(checker)
{document.getElementById(checker).checked=false;}
function disableText(checker,textie)
{if(checker.checked)
{document.getElementById(textie).value="";document.getElementById(textie).disabled=true;}
else
{document.getElementById(textie).disabled=false;}}
function toggleExports(val)
{document.getElementById("exportoptions_sql").style.display="none";document.getElementById("exportoptions_csv").style.display="none";document.getElementById("exportoptions_"+val).style.display="block";}
function toggleImports(val)
{document.getElementById("importoptions_sql").style.display="none";document.getElementById("importoptions_csv").style.display="none";document.getElementById("importoptions_"+val).style.display="block";}
function openHelp(section)
{PopupCenter('?help=1#'+section,"Help Section");}
var helpsec=false;function PopupCenter(pageURL,title)
{helpsec=window.open(pageURL,title,"toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=400,height=300");}
function checkLike(srchField,selOpt)
{if(selOpt=="LIKE%"){var textArea=document.getElementById(srchField);textArea.value="%"+textArea.value+"%";}}
function createCORSRequest(method,url)
{var xhr=new XMLHttpRequest();if("withCredentials"in xhr)
{xhr.open(method,url,true);}
else if(typeof XDomainRequest!="undefined")
{xhr=new XDomainRequest();xhr.open(method,url);}
else
{xhr=null;}
return xhr;}
function checkVersion(installed,url)
{var xhr=createCORSRequest('GET',url);if(!xhr)
return false;xhr.onload=function()
{if(xhr.responseText.split("\n").indexOf(installed)==-1)
{document.getElementById('oldVersion').style.display='inline';}};xhr.send();}
var codeEditor;function sqleditor(textarea,tableDefinitions,tableDefault)
{codeEditor=CodeMirror.fromTextArea(textarea,{lineNumbers:true,matchBrackets:true,indentUnit:4,lineWrapping:true,mode:"text/x-sqlite",extraKeys:{"Ctrl-Space":"autocomplete"},hint:CodeMirror.hint.sql,hintOptions:{completeSingle:false,completeOnSingleClick:true,defaultTable:tableDefault,tables:tableDefinitions}});codeEditor.on("inputRead",codemirrorAutocompleteOnInputRead);}
function sqleditorSetValue(text)
{codeEditor.doc.setValue(text);}
function sqleditorInsertValue(text)
{codeEditor.doc.replaceRange(text,codeEditor.doc.getCursor("from"),codeEditor.doc.getCursor("to"));}
function codemirrorAutocompleteOnInputRead(instance){if(instance.state.completionActive){return;}
var cur=instance.getCursor();var token=instance.getTokenAt(cur);var string='';if(token.string.match(/^[.`"\w@]\w*$/))
{string=token.string;}
if(string.length>0){CodeMirror.commands.autocomplete(instance);}}
function checkFileSize(input)
{if(input.files&&input.files.length==1)
{if(input.files[0].size>fileUploadMaxSize)
{alert(fileUploadMaxSizeErrorMsg+": "+(fileUploadMaxSize/1024/1024)+" MiB");return false;}}
return true;}AAABAAEAEBAAAAEAIAAoBAAAFgAAACgAAAAQAAAAIAAAAAEAIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwoKZQAAABMAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABEMDJMAAAAdAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAASDg7BAAAASAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAETDw9CCQkJ1QUFBb4AAABjAAAAAQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADgsLVgAAAO8YExP/AAAA7QAAALEAAAARAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABQNDUsAAADJGBMT/xgTE/8AAAD/AAAAuAAAAA8AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAZERE8DQoKwhgTE/8QDQ2sGBMT/xgTE/8AAAA/AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAwICHkAAAD/EQwMzQAAAMIAAAD/AAAA7gAAAGEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAOCwtWAAAA8RgTE/8IBQW1AAAA/wAAAP8AAADlAAAAHQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA0KCsEAAAD/EQ8PzAAAAMkAAAD/AAAA/wAAAHoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABDAAAA/xgTE/8TDw/FAAAA8gAAAP8AAADqAAAAJgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAgAAALUAAAD/GBMT/wAAALkAAAD/AAAA/wAAAIkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAfAAAA4wAAAP8GBgbFAAAA2QAAAP8AAADGAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAF4AAAD5AAAA/RgTE/8AAAD/AAAA0AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQQAAAOIAAAD/AAAA/wAAAHYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAjAAAArgAAAG4AAAAAAAAAAAAAAAAAAAAA
