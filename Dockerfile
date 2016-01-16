# Debian: NGINX + PHP-FPM (PHP-FANN)
#
# VERSION 0.0.1

# Pull the base image.
FROM debian:jessie

# Set the author.
MAINTAINER NoughtsAndCrosses

# Set environment variables.
ENV FILES docker/files/
ENV NGINX_VERSION 1.9.9-1~jessie

# Add nginx repository.
RUN apt-key adv --keyserver hkp://pgp.mit.edu:80 --recv-keys 573BFD6B3D8FBC641079A6ABABF5BD827BD9BF62
RUN echo "deb http://nginx.org/packages/mainline/debian/ jessie nginx" >> /etc/apt/sources.list

# Install OpenSSL, CA-Certificates, NGINX:
# 
# 	- openssl
# 	- ca-certificates
# 	- nginx
RUN apt-get update && \
    apt-get install -y openssl ca-certificates nginx=${NGINX_VERSION}

# Remove default configuration files.
RUN rm -rf /etc/nginx/nginx.conf
RUN rm -rf /etc/nginx/conf.d/*

# Add managed nginx configuration files.
ADD ${FILES}/etc/nginx/nginx.conf /etc/nginx/
ADD ${FILES}/etc/nginx/conf.d/noughtsandcrosses-app.conf /etc/nginx/conf.d/
ADD ${FILES}/etc/nginx/fastcgi_params /etc/nginx/
ADD ${FILES}/etc/nginx/conf.d/php-upstream.conf /etc/nginx/conf.d/upstream.conf

# Remove default directories.
RUN rm -rf /var/www/*
RUN rm -rf /srv/www/*

# Install Wget, Git, Nano:
#
# 	- wget
# 	- git
# 	- nano
RUN apt-get update && \
    apt-get install -y wget git nano
