FROM linuxconfig/lemp-php7
MAINTAINER Rafael <helladarion@gmail.com>

RUN mkdir -p /data
VOLUME ["/data"]

# Copy your application source into the image
COPY application/ /data/

WORKDIR /var/www
EXPOSE 80
CMD ["apache2ctl", "-D", "FOREGROUND"]
