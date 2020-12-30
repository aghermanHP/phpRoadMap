PROJECT_NAME=phpRoadmapProject

build:
	@if [ ! -f docker/php-fpm/php-ini-overrides.ini ];\
	then \
		cp docker/php-fpm/php-ini-overrides.ini.dist docker/dev/php-fpm/php-ini-overrides.ini; \
	fi;

	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} build
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} up -d

build-no-cache:
	@if [ ! -f docker/php-fpm/php-ini-overrides.ini ];\
	then \
		cp docker/php-fpm/php-ini-overrides.ini.dist docker/php-fpm/php-ini-overrides.ini; \
	fi;

	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} build --no-cache
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} up -d

up:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} up -d

ps:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} ps

stop:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} stop

start:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} start

restart:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} restart

down:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} down

php:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} exec php-fpm bash

nginx:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} exec backend_api_nginx sh

db:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} exec backend_api_db sh

logs-php:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} logs -f backend_api_php

run-tests:
	docker-compose -f docker/docker-compose.yml -p ${PROJECT_NAME} exec backend_api_php_test bash -c "bin/phpunit -c phpunit.xml.dist --stop-on-failure"

