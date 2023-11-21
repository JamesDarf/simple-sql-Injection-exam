# 우분투 버전
FROM ubuntu:latest

# 상호작용 방지 -> input 넘어가는 구간 방지
ARG DEBIAN_FRONTEND=noninteractive

# 패키지 설치
RUN apt-get update -y; \
    apt-get upgrade -y; \
    apt-get install apache2 -y; \
    apt-get install php -y; \
    apt-get install php-mysql -y;

# 재부팅 -> 시작할때, start함.
RUN service apache2 restart

# Expose port 80 for Apache
EXPOSE 80

# Set the default command to run Apache in the foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]