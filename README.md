# IPTV频道和EPG管理系统

## 项目概述

这是一个基于 PHP 和 SQLite 的 IPTV 频道与 EPG（电子节目指南）管理系统，用于向多种客户端提供直播源和节目单数据。系统支持多套频道表按访客 IP 段或 token 自动分流，并附带 M3U 转 SQL 工具、数据库后台、文件管理器和环境检测页面。

## 项目结构

```
├── channel.php          # 数据库管理后台 (phpLiteAdmin 1.9.8.2, 中文界面, 已适配 PHP 8.2)
├── channel_epg.db       # SQLite 数据库文件
├── app_config.php       # app.env 配置加载器
├── app.env              # 运行时配置 (后台密码、文件管理器账号、EPG 抓取源)
├── epg.php              # EPG 数据接口, 支持 DIYP/SPTV/XMLTV 三种格式
├── img.php              # Bing 每日图片获取工具
├── index.html           # 系统入口页面
├── info.php             # PHP 环境检测页面
├── l2list.php           # 直播源转换工具 (M3U ⇄ SQL)
├── live.json            # 频道表映射配置 (token / IP 网段 → 表名)
├── live.php             # 直播频道接口, 支持 txt/json/m3u/tvbox
├── myfile.php           # 在线文件管理器 (SuExplorer)
├── xml2db.php           # EPG 数据抓取和入库工具
├── Dockerfile           # Docker 镜像构建文件
├── docker-compose.yml   # Docker Compose 部署配置
├── docker/              # Docker 配置 (php.ini / Apache 安全规则 / 启动脚本)
├── .github/workflows/   # GitHub Actions 自动构建并推送镜像
└── 版本说明.txt          # 项目版本历史
```

## 主要功能

### 1. 直播频道接口 (live.php)

按参数返回不同格式的直播源：

- **TXT**：默认格式，适用于 DIYP 等应用
- **JSON**：`t=json`
- **M3U**：`t=m3u`
- **TVBOX**：`t=tvbox`

其他能力：

- **多套频道表分流**：优先按 `token` 参数匹配 `live.json` 中的 `token` 映射，其次按访客 IP 前两段匹配 `ipsubnet`，都不命中时使用默认表 `list`。
- **URL 去重/合并**：`m=1` 仅去重，`m=2`（默认）去重并以 `#` 合并多条线路。
- **M3U 保真导出**：`t=m3u` 会按 `list` 表的 `isdel` 字段排序，逐条还原 `tvg-id`、`tvg-name`、`tvg-logo`、`group-title`、`catchup`、`catchup-source`，并用 `blank_after` 补回原文件中的空行，因此可以做到与源播放列表逐行一致。
- **EPG 表头动态生成**：`#EXTM3U x-tvg-url="..."` 不再写死域名，而是根据当前访问地址生成 `协议://主机/脚本目录/epg.php`。用 `http://127.0.0.1/live.php` 访问就输出 `http://127.0.0.1/epg.php`，用域名访问就输出域名，部署到子目录也能自动适配。
- **调试模式**：加 `debug=1` 时不发送下载响应头，直接在页面上输出内容。

### 2. EPG 数据接口 (epg.php)

- **DIYP JSON**：`?ch=频道名&date=日期`（不传 `channel` 参数时）
- **SPTV JSON**：`?channel=频道名&date=日期`
- **IPTV XMLTV**：`?ch=xml`

其他说明：

- 不带参数时默认频道为 `CCTV1`，该频道名必须存在于 `epg_channel` 表中。
- 数据库查询已改为参数绑定，频道名/日期不再直接拼接进 SQL。
- 支持 memcached 缓存（`$iscache`），默认关闭。
- 调试模式：`?debug=1`。

### 3. EPG 数据自动更新 (xml2db.php)

- 从 `$xmlurl` 数组配置的一个或多个地址抓取 XML/XML.GZ 节目单
- 支持 gzip 压缩和 https
- 按 `$deletetoday` 先删除当天数据再写入，避免重复
- 按 `$deleteoffset` 清理历史数据
- 临时表 `tmp_epg_channel` / `tmp_epg_programme` 入库后按 `$empty_tmp` 决定是否清空

### 4. 数据库管理后台

项目内含 phpLiteAdmin：

- `channel.php`（1.9.8.2）：已做 PHP 8.2 兼容修复，内置中文词条，注释也已中文化。

支持密码认证、表结构管理、数据增删改查、SQL 导入导出、CSV 导入导出等。

### 5. 直播源转换工具 (l2list.php)

网页版 M3U 与 SQL 互转工具：

- 输入可以是网址或本地 M3U 文件
- 输出可选：生成 M3U、生成 SQL、去重、合并、不处理
- 生成 M3U 时保留全部属性（`tvg-id`、`tvg-name`、`tvg-logo`、`group-title`、`catchup`、`catchup-source`）
- 生成 SQL 时默认表名 `list`，也可自行输入表名；表名只允许字母、数字、下划线，输入非法字符时下方红字提示且不输出结果
- 生成的 SQL 显式写出 9 个列名并转义单引号，可直接导入数据库
- M3U 表头的 `x-tvg-url`：非合并/不处理模式下优先使用源文件自带的值，合并与去重模式下按当前访问地址动态生成

### 6. PHP 环境检测 (info.php)

显示服务器信息、检查 Curl/SQLite3 等扩展是否可用、提供 phpinfo() 入口、显示服务器互联网 IP。

### 7. 在线文件管理器 (myfile.php)

基于 SuExplorer：文件上传下载、在线编辑、目录创建/删除/重命名、压缩解压，带用户认证。

### 8. Bing 每日图片 (img.php)

自动从 Bing 获取每日图片并缓存到本地目录，支持随机返回和 https。

## 数据库结构

| 表名 | 用途 |
| --- | --- |
| `list` | 直播频道表，`live.php` 的数据源，默认表名 |
| `access_log` | 访问日志（`ip_address`、`access_time`、`url`），写入开关默认关闭 |
| `epg_channel` | 频道名与 EPG 频道 ID 的对应关系 |
| `epg_programme` | 节目单，主键 `(channel, sdate, sstart)` |
| `tmp_epg_channel` / `tmp_epg_programme` | EPG 入库临时表 |

`list` 表字段：

| 字段 | 说明 |
| --- | --- |
| `item` | 分组名，对应 `group-title` |
| `title` | 频道名，对应 `tvg-name` 和 `,` 后的显示名 |
| `epg` | EPG 频道 ID，对应 `tvg-id` |
| `url` | 播放地址，多条线路用 `#` 分隔 |
| `isdel` | 兼作可见性与排序：`> 0` 才输出，值越大越靠前（`ORDER BY isdel`） |
| `logo` | 台标，对应 `tvg-logo` |
| `catchup` | 回看模式，对应 `catchup` |
| `catchup_source` | 回看地址模板，对应 `catchup-source` |
| `blank_after` | 非空时在该频道后输出一个空行，用于还原源文件排版 |

主键为 `(item, title, url)`。

## 接口用法

### 直播源

| 地址 | 说明 |
| --- | --- |
| `http://服务器/live.php` | TXT（默认） |
| `http://服务器/live.php?t=json` | JSON |
| `http://服务器/live.php?t=m3u` | M3U |
| `http://服务器/live.php?t=tvbox` | TVBOX 接口 JSON |
| `http://服务器/live.php?token=xxx` | 用 token 指定频道表 |
| `http://服务器/live.php?t=m3u&token=xxx` | 组合使用 |
| `http://服务器/live.php?t=m3u&m=1` | 仅去重，不合并线路 |

### 节目单

| 地址 | 说明 |
| --- | --- |
| `http://服务器/epg.php?ch=频道名&date=2026-11-15` | DIYP JSON |
| `http://服务器/epg.php?channel=频道名&date=2026-11-15` | SPTV JSON |
| `http://服务器/epg.php?ch=xml` | XMLTV |

### 数据更新

- 手动：浏览器访问 `xml2db.php`
- 自动：用计划任务定期访问，例如 Linux `crontab` 或 Windows 计划任务

## 配置说明

| 文件 | 变量 | 作用 |
| --- | --- | --- |
| `live.php` | `$isw` | 是否写 `access_log`，默认 `false`，避免与 xml2db 抢占写锁 |
| `live.json` | `token` / `ipsubnet` | token 或 IP 前两段 → 表名 |
| `epg.php` | `$iscache`、`$cachehour` | memcached 缓存开关与时长 |
| `xml2db.php` | `$xmlurl` | EPG 数据源地址数组，可被 `app.env` 的 `APP_XML_URLS` 覆盖 |
| `xml2db.php` | `$deletetoday` | 更新前是否删除当天数据 |
| `xml2db.php` | `$deleteoffset` | 清理几天前的数据（负数） |
| `xml2db.php` | `$save_all` | 1 保存全量；0 只保存 `list` 中出现的频道 |
| `xml2db.php` | `$empty_tmp` | 入库后是否清空临时表 |
| `xml2db.php` | `$inserttype` | `replace` 或 `ignore` |
| `channel.php` | `$password` | 后台密码，可被 `APP_ADMIN_PASSWORD` 覆盖 |
| `channel.php` | `$directory`、`$databases` | 扫描目录或手动列出数据库 |
| `myfile.php` | `$config['users']` | 文件管理器账号与密码，可被 `APP_MYFILE_USER` / `APP_MYFILE_PASSWORD` 覆盖 |

密码类配置建议统一放在 `app.env`，无论 Docker 还是传统部署都能直接改，不必动源码。

## Docker 部署

镜像基于 `php:8.2-apache`，已内置 `sqlite3`、`pdo_sqlite`、`curl`、`openssl`、`mbstring`、`zip`、`soap`、`gettext`，单容器即可运行。

### 0. 安装 Docker（已安装可跳过）

| 平台 | 安装方式 |
| --- | --- |
| Windows 10/11 | 安装 [Docker Desktop](https://www.docker.com/products/docker-desktop/)，安装前需启用 WSL2 |
| macOS | 安装 [Docker Desktop](https://www.docker.com/products/docker-desktop/) |
| Ubuntu / Debian | `curl -fsSL https://get.docker.com -o get-docker.sh` 后执行 `sh get-docker.sh` |
| 群晖 DSM 7.2+ | 套件中心安装 Container Manager，图形界面中「注册表」搜索镜像 |
| 威联通 QTS | App Center 安装 Container Station，图形界面拉取镜像 |

Windows 启用 WSL2（管理员 PowerShell，执行后重启）：

```powershell
wsl --install
```

BIOS/固件需开启虚拟化（Intel VT-x / AMD-V）。安装完成后确认：

```bash
docker version
docker compose version
```

> 不装 Docker 也可以按「方式二：传统 PHP 环境」直接部署，功能完全一致。

### 1. 准备配置文件

在宿主机准备 `app.env`（内容见下文「运行配置」），与执行命令处于同一目录。

### 2. 启动容器

```bash
docker run -d --name channel-epg \
  -p 8080:80 \
  -v epg-data:/data \
  -v $(pwd)/app.env:/var/www/html/app.env:ro \
  patqian1980/channel-epg:latest
```

PowerShell 写法：

```powershell
docker run -d --name channel-epg -p 8080:80 -v epg-data:/data -v ${PWD}/app.env:/var/www/html/app.env:ro patqian1980/channel-epg:latest
```

也可以使用仓库内的 `docker-compose.yml`：

```bash
docker compose up -d
```

首次启动会把镜像内的 `channel_epg.db`、`live.json` 复制到 `/data` 卷，之后始终使用卷内数据；删除、重建或升级容器都不会丢数据。

### 3. 访问地址

| 地址 | 说明 |
| --- | --- |
| `http://服务器:8080/live.php` | 直播源 TXT |
| `http://服务器:8080/live.php?t=m3u` | M3U |
| `http://服务器:8080/live.php?t=json` | JSON |
| `http://服务器:8080/epg.php?ch=CCTV1&date=2026-11-16` | 节目单 |
| `http://服务器:8080/channel.php` | 数据库后台 |

### 4. 运行配置（app.env）

| 变量 | 默认值 | 作用 |
| --- | --- | --- |
| `APP_ADMIN_PASSWORD` | `admin` | `channel.php` 后台密码 |
| `APP_MYFILE_USER` | `admin` | `myfile.php` 用户名 |
| `APP_MYFILE_PASSWORD` | `admin123` | `myfile.php` 密码 |
| `APP_XML_URLS` | 内置 3 个源 | `xml2db.php` 抓取的节目单地址，多个用英文逗号分隔 |

读取优先级：**环境变量 > app.env > 代码默认值**。

- 修改 `app.env` 后刷新页面即生效，无需重启容器
- 用 `-e APP_ADMIN_PASSWORD=xxx` 传环境变量时，需要 `docker restart channel-epg`
- `app.env` 已被 `.gitignore` 和 `.dockerignore` 排除，不会进入仓库和镜像

### 5. 定时更新节目单

在宿主机用计划任务定时访问：

```bash
0 * * * * curl -s http://127.0.0.1:8080/xml2db.php >/dev/null
```

### 6. 备份与升级

```bash
docker cp channel-epg:/data/channel_epg.db ./channel_epg.db.bak
docker compose pull
docker compose up -d
```

### 7. 自行构建与发布

```bash
docker build -t patqian1980/channel-epg:latest .
docker push patqian1980/channel-epg:latest
```

仓库已包含 `.github/workflows/docker-publish.yml`，推送到 GitHub 后会自动构建 `linux/amd64` 与 `linux/arm64` 镜像并推送 Docker Hub，需要在仓库 Secrets 中配置：

| Secret | 值 |
| --- | --- |
| `DOCKERHUB_USERNAME` | Docker Hub 用户名 |
| `DOCKERHUB_TOKEN` | Docker Hub Access Token（Read & Write） |

## 系统要求

- PHP 8.x（已在 PHP 8.2 下实测通过；旧代码也可运行于 7.4）
- 使用 Docker 时无需本机安装 PHP，镜像已内置全部依赖
- 必需扩展：`sqlite3`、`pdo_sqlite`、`curl`、`openssl`
- 可选扩展：`mbstring`、`memcached`
- 写入权限：项目目录（SQLite 需要在同目录创建临时文件和 `channel_epg.db`）
- 上传大 SQL 文件时需调高 `upload_max_filesize` 和 `post_max_size`

## 安装和初始化

### 方式一：Docker（推荐）

1. 参考「Docker 部署」启动容器
2. 打开 `http://服务器:8080/channel.php`，用 `app.env` 中配置的密码登录
3. 在 `list` 表录入频道，或通过 `l2list.php` 导入 M3U
4. 设置计划任务定时访问 `xml2db.php` 同步节目单

### 方式二：传统 PHP 环境

1. 将全部文件部署到 Web 根目录或子目录
2. 确认 Web 进程对项目目录有写权限
3. 把 `app.env` 放在项目根目录，按需修改后台密码、文件管理器账号和 EPG 源（留空则使用代码内默认值）
4. 访问 `xml2db.php` 初始化数据库（自动创建 `channel_epg.db` 及全部表）
5. 按需修改 `live.json` 的 token/IP 映射，或直接在 `list` 表录入频道
6. 访问 `info.php` 确认扩展齐全

## 版本历史

### 2026-11-16 Docker 化与配置外置

1. 新增 `Dockerfile`、`docker-compose.yml`、`docker/`，单容器部署，内置 sqlite3、curl、mbstring、zip 等扩展
2. 新增 `app.env` 运行时配置：后台密码、文件管理器账号、EPG 抓取源均可外部修改，刷新页面即生效
3. 新增 `.github/workflows/docker-publish.yml`，自动构建 amd64/arm64 镜像并推送 Docker Hub
4. 数据库与配置持久化到 `/data` 卷，Apache 层禁止直接下载 `.db`、`live.json` 等文件

### 2026-11-15 分支维护更新
1. `live.php` 的 M3U 表头 EPG 地址改为按当前访问地址动态生成，不再写死域名
2. `live.php` 的 M3U 生成按 `list` 表字段逐条还原，补齐 `tvg-logo`、`catchup`、`catchup-source` 和空行排版
3. `live.php` 默认关闭 `access_log` 写入，避免播放器高频请求与 `xml2db.php` 抢 SQLite 写锁
4. 修复 `t=json` 输出被 `var_dump` 污染、`json_encode` 选项误用 `+` 的问题
5. `epg.php` 的 SQL 全部改为参数绑定；默认频道由 `CCTV1` 改为 `CCTV1综合高清`
6. `l2list.php` 生成的 SQL 补齐 9 列、显式列名并转义单引号；新增自定义表名及合法性校验；修复“不处理”和调试模式下不显示输出框的问题；M3U 输出保留全部属性，表头地址动态生成
7. 新增并汉化 `phpLiteAdmin 1.9.8.2` 后台（现文件名 `channel.php`）：修复 PHP 8.2 兼容问题（`MicroTimer` 声明顺序、`get_magic_quotes_gpc`、`each()`、`null` 传参、未定义变量等），552 条注释及 278 条界面词条全部中文化
8. `channel.php` 增加上传超限提示、`multiQuery` 异常兜底、避免导入时事务嵌套

### 2026-01-10
1. 修复 `xml2db.php` 数据处理逻辑
2. 修复 `epg.php` 数据查询和时间处理逻辑
3. 优化 `epg.php` 的 XML 格式输出，自动修正节目顺序

### 2026-01-06
1. 优化 `xml2db.php` 数据处理逻辑，每日时间处理改进

### 2024-02-26
1. 优化 `xml2db.php` 数据处理逻辑，添加数据源排序和节目去重

### 2024-01-14
1. 合并 m3u.php、json.php、live.php、tvbox.php 为单一文件 `live.php`
2. 支持通过参数控制输出格式

### 2024-01-11
1. 优化 `channel.php` 的 SQL 语句处理逻辑
2. 优化 `epg.php` 的 XML 格式输出
3. 优化 m3u.php 和 `live.php` 的数据处理逻辑

### 2024-01-02
1. 修复 `channel.php`，支持 PHP 5.4、7.4 和 8.0

### 2023-12-22
1. 优化 `epg.php`，添加调试日志开关

### 2023-12-21
1. 修复 `epg.php` 的内容处理逻辑

### 2023-12-19
1. 优化 `epg.php`，添加 UTF-8 编码支持

### 2023-12-17
1. 优化 m3u.php 接口，支持 list 频道参数

### 2023-12-12
1. 更新 `myfile.php`，支持 PHP 7.4

### 2023-12-10
1. 优化 `epg.php` 性能，默认使用 memcache 缓存

### 2023-12-09
1. 优化 `xml2db`，支持 gzip 和 https
2. 优化 `epg.php`，默认返回 CCTV1 节目单
3. 优化 tvbox.php，支持 TVBOX 客户端接口

### 2023-12-08
1. 优化 `xml2db`，支持多个 xml 源
2. 优化 `epg_channel` 表设计

### 2023-12-07
1. 优化 `epg.php`，根据参数返回对应 EPG 数据

### 2023-12-04
1. 系统初始版本，支持 PHP 5.x 和 7.x

## 注意事项

1. **SQLite 写锁**：`live.php` 和 `epg.php` 的访问日志写入默认关闭。若同时开启，播放器高频请求时会与 `xml2db.php` 冲突并报 `database is locked`。建议只在调试时打开。
2. **及时更新节目单**：用计划任务定期访问 `xml2db.php`，否则节目单会过期。
3. **务必修改默认密码**：`channel.php`、`myfile.php` 都有独立密码。
4. **后台入口建议改名**：`channel.php`  是通用后台文件名，容易被扫描，建议改成不易猜的名字。
5. **定期备份** `channel_epg.db`。
6. `app.env` 为明文配置，已被 `.gitignore` 与 `.dockerignore` 排除，请勿提交到公开仓库。
7. Docker 部署只挂载 `/data` 与 `app.env`，不要把宿主机目录覆盖到 `/var/www/html`，否则会盖住启动脚本生成的软链接。

## 支持的客户端

DIYP、TVBOX、SPTV、Kodi、APTV、TV+

## 数据源推荐

```
https://epg.51zmt.top:8000/e.xml
https://epg.erw.cc/e.xml
https://epg.112114.xyz/pp.xml
https://epg.erw.cc/all.xml
```

也可使用自建源，支持 `.xml` 与 `.xml.gz`

## 许可证

本项目采用 MIT 许可证。其中 `channel.php`、 源自 phpLiteAdmin，遵循其 GPLv3 许可。

---
**分支作者**：patqian
**原作者**：aming.ou
**最后更新**：2026-11-15
