Symfony Address Book app
========================

An address book app based off the [symfony standard](https://github.com/symfony/symfony-standard) project.

Check out a live demo at:
[robinaddressbook.cloudcontrolled.com](http://robinaddressbook.cloudcontrolled.com/)

Run the app locally
---

### Short version

After cloning the project, install composer dependencies:

``` bash
$ composer install
```

run the PHP testing server:

``` bash
$ php app/console server:run
```

navigate to [localhost:8000/config.php](http://localhost:8000/config.php) to configure your database.

and then setup the database from the doctrine configs:

``` bash
$ php app/console doctrine:schema:update --force
```

And voila, you should be able to run the app on [localhost:8000](http://localhost:8000).

### Longer version

If you're having trouble with anything above, you could try reading:

- My [blog post about getting Symfony2 running](http://robinwinslow.co.uk/2013/05/31/installing-symfony-2-by-creating-a-github-fork/)
- The [official Symfony2 quick start guide](http://symfony.com/doc/current/quick_tour/the_big_picture.html)
