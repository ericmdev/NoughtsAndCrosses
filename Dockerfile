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
