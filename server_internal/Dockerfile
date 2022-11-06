FROM alpine:3.14
WORKDIR /test
RUN apk add lighttpd
COPY lighttpd.conf /test/lighttpd.conf
COPY index.html /var/www/servers/www.example.org/pages/index.html

CMD lighttpd -tt -f lighttpd.conf && lighttpd -D -f lighttpd.conf 
EXPOSE 3000