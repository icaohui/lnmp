FROM mysql:5.7

MAINTAINER caohui <772071248@qq.com>

RUN chown -R mysql:root /var/lib/mysql/

COPY config/mysql.cnf /etc/mysql/conf.d/mysql.cnf

COPY config/mysqldump.cnf /etc/mysql/conf.d/mysqldump.cnf

EXPOSE 3306

CMD ["mysqld"]
