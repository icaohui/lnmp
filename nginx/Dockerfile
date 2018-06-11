FROM nginx:latest

MAINTAINER caohui <772071248@qq.com>

COPY config/nginx.conf /etc/nginx/nginx.conf

COPY config/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]

