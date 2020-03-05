# Laravel Development Environment
***
This is a full development environment built around Docker for the Laravel framework.  This package contains setup files to run an apache web server, mysql database server and a full installation of Laravel (check version tag for details).  The image includes a phpMyAdmin GUI database manager for convenience.

To run, you require [Docker Desktop](https://www.docker.com/products/docker-desktop) (macOS and windows with Hyper-V) or [Docker Toolbox](https://docs.docker.com/toolbox/toolbox_install_windows/) (windows without Hyper-V running) already installed.

## Setting up

- Clone this repository

- Rename your folder to anything you want

- Create your `.docker.env` and `.env` files. To do this, Copy and rename the `*.env.example` examples included in the package.  This may be easier done from the command line as these files are considered hidden by the OS.  In macOS/Bash use `cp .docker.env.example .docker/.docker.env && cp .env.example .env`.  In Windows command prompt use `copy .docker.env.example .docker\.docker.env` and `copy .env.example .env`.  The `.docker.env` file has some variables necessary to enable XDEBUG in php.  You **_ONLY_** need this if you intend to use an IDE such as PHPStorm to develop your application.  In particular, pay attention to the "Remote Host" variable.  This IP must point to your computer's IP.

- Check the `docker-compose.yml` file and make sure that the port mappings are compatible with your setup, in particular, port 8080 should be free, otherwise, adjust as necessary. This will be the port for the Apache web server of your development environment.

- **_OPTIONAL_** - if you are running Docker via Docker Toolbox, make sure you have started the docker virtual machine (the Quick Start Icon) and take note of the IP address for your docker machine.  You will need this later.

- In your terminal or command line, run `docker-compose up --build -d` and wait until the development environment is fully built.

- To run a terminal on the Docker environemnt use `docker-compose exec app bash`.  This is an interactive terminal running on your Docker container.

- You now need to set up the app key.  Run `docker-compose exec app bash` if you haven't done so and in the new prompt run `php artisan key:generate`.  Use `exit` to go back to your machine's prompt.

- To shutdown the environment use `docker-compose down -v`.  This will shutdown the container and disconnect any volumes (shared folders). You may use `docker-compose up -d` to bring it up again.  If you have made modifications to the Dockerfile in `.docker/Dockerfile` you may need to rebuild the image for these changes to take effect.  run `docker-compose up -d --build` instead.

### Using the environment

- Point your browser to your configured IP address (localhost if you are using Docker Desktop, or the IP address you jotted down before for the docker virtual machine if you are running Docker Toolbox) using the port in `docker-compose.yml` and you should see the Laravel welcome screen, for example:
`localhost:8080`.  Your database should be reachable at the same IP in port `13306` from any database manager you wish to use.

- **_IMPORTANT_**: Delete the `.git` folder in this repository to unlink this instance from GitLab BEFORE you try to put your project under version control.  You can then follow the instructions in Gitlab to add an existing project under version control when you create a new project.

- You now have a development environment of your own. Don't forget to use version control!

- Finally, remember if you need to run some commands in the Docker machine, for example `php artisan migrate`, you can get to the interactive bash prompt by using `docker-compose exec app bash`.  Use `exit` to leave this interactive bash session.

### Database

- The database server is accessible through port `13306`.  Check the details in the `docker-comopse.yml` file for configured `root` User and second user credentials.

#### phpMyAdmin

- You can use the following default details to connect to the database from phpMyAdmin:  
    - server: `db`
    - username: `root`
    - password: as specified in `docker-compose.yml`

### If you have any questions or comments with regards to this project, please email [g.trombino@ulster.ac.uk](mailto:g.trombino@ulster.ac.uk)

*****

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
