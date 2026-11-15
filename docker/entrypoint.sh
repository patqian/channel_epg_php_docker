#!/bin/sh
set -e

APP_DIR=/var/www/html
DATA_DIR=/data
SEED_DIR=/opt/app-seed

mkdir -p "$DATA_DIR"

# 首次启动时用镜像内置的数据库和配置初始化
if [ ! -f "$DATA_DIR/channel_epg.db" ]; then
    cp "$SEED_DIR/channel_epg.db" "$DATA_DIR/channel_epg.db"
    echo "[entrypoint] 已从镜像初始化 channel_epg.db"
fi

if [ ! -f "$DATA_DIR/live.json" ]; then
    cp "$SEED_DIR/live.json" "$DATA_DIR/live.json"
    echo "[entrypoint] 已从镜像初始化 live.json"
fi

# SQLite 需要目录和文件都可写
chown -R www-data:www-data "$DATA_DIR"
chmod 664 "$DATA_DIR/channel_epg.db" "$DATA_DIR/live.json" 2>/dev/null || true

# 程序目录里的同名文件指向持久化目录，重建容器不丢数据
ln -sfn "$DATA_DIR/channel_epg.db" "$APP_DIR/channel_epg.db"
ln -sfn "$DATA_DIR/live.json" "$APP_DIR/live.json"

if [ ! -f "$APP_DIR/app.env" ]; then
    echo "[entrypoint] 未挂载 app.env，将使用代码内默认密码，建议 -v \$(pwd)/app.env:/var/www/html/app.env:ro"
fi

exec "$@"
