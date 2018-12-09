FROM nginx:latest

MAINTAINER caohui <772071248@qq.com>

COPY config/nginx.conf /etc/nginx/nginx.conf

COPY config/conf.d/* /etc/nginx/conf.d/

EXPOSE 80

EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]

