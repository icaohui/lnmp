FROM redis:4.0.9

MAINTAINER caohui <772071248@qq.com>

RUN mkdir -p /usr/local/etc/redis

COPY config/redis.conf /usr/local/etc/redis/redis.conf

VOLUME /data

EXPOSE 6379

CMD ["redis-server", "/usr/local/etc/redis/redis.conf"]