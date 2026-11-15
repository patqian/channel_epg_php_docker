FROM php:8.2-apache

ENV TZ=Asia/Shanghai

# 安装本项目需要的 PHP 扩展（openssl、fileinfo 已内置）
RUN apt-get update \
 && apt-get install -y --no-install-recommends \
      libcurl4-openssl-dev \
      libonig-dev \
      libzip-dev \
      libxml2-dev \
 && docker-php-ext-install -j"$(nproc)" curl pdo_sqlite sqlite3 mbstring zip soap gettext \
 && rm -rf /var/lib/apt/lists/*

# PHP 运行参数与 Apache 安全配置
COPY docker/php.ini /usr/local/etc/php/conf.d/zz-app.ini
COPY docker/apache-security.conf /etc/apache2/conf-available/app-security.conf
RUN a2enconf app-security && a2enmod rewrite headers

# 启动脚本：把数据库和配置放到持久化目录 /data
COPY docker/entrypoint.sh /usr/local/bin/app-entrypoint
RUN chmod +x /usr/local/bin/app-entrypoint

WORKDIR /var/www/html
COPY . /var/www/html

# 清理构建文件，并把初始数据库/配置另存为种子，供首次启动复制
RUN rm -rf /var/www/html/docker /var/www/html/Dockerfile /var/www/html/.dockerignore \
 && mkdir -p /opt/app-seed \
 && cp /var/www/html/channel_epg.db /opt/app-seed/channel_epg.db \
 && cp /var/www/html/live.json /opt/app-seed/live.json \
 && chown -R www-data:www-data /var/www/html

VOLUME ["/data"]
EXPOSE 80

ENTRYPOINT ["app-entrypoint"]
CMD ["apache2-foreground"]
