FROM php:7.2-apache
RUN docker-php-ext-install mysqli
# RUN init_db.sh 
FROM alpine:latest  
RUN apk add --no-cache mysql-client 