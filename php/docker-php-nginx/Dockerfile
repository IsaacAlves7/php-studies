FROM nginx

ADD . /usr/share/nginx/html
RUN rm -f /usr/share/nginx/html/index.html && \
   apt-get install php-mysql
