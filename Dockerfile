FROM php:8.1-apache

# Cài extension nếu cần
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ source vào thư mục gốc của Apache
COPY . /var/www/html/

# Mở port 80
EXPOSE 80
