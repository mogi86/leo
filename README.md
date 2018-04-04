# git clone
- git clone https://github.com/mogi86/leo.git
- cd leo

# docer-compose up
- [host]
 - cd /dir/leo
 - docker-compose up -d

# laravel setup
- [host]
 - docker exec -it leo_web /bin/bash
- [guest]
 - cd /var/www/leo
 - cp .env.docker .env
 - composer install
 - php artisan key:generate
 - php artisan cache:clear

# laravel migrate
- php artisan migrate
