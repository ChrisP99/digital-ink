FROM kalec/php-laravel-env:latest

LABEL maintainer="Kalegos"

#Add the project
ADD . /srv/app

WORKDIR /srv/app

RUN chown -R www-data:www-data /srv/app

RUN  composer check-platform-reqs \
	&& composer install \
	--no-interaction \
	--no-plugins \
	--no-scripts \
	--prefer-dist \
	&& npm install \
	&& npm install gulp
