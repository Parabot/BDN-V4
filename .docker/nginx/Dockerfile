FROM alpine:3.8

MAINTAINER Edin Turjacanin <edin@intercube.io>

RUN apk add --update nginx
RUN rm -rf /var/cache/apk/* && rm -rf /tmp/*

ADD nginx.conf /etc/nginx/
ADD symfony.conf /etc/nginx/conf.d/
RUN rm -rf /etc/nginx/conf.d/default.conf

RUN echo "upstream php-upstream { server php:9001; }" > /etc/nginx/conf.d/upstream.conf

RUN adduser -D -g '' -G www-data www-data

RUN chown -R www-data.www-data /var/tmp/nginx

CMD ["nginx"]

EXPOSE 80
EXPOSE 443
