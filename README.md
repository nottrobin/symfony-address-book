Symfony Address Book app
========================

An address book app based off the [symfony standard](https://github.com/symfony/symfony-standard) project.

Check out a live demo at:
[robinaddressbook.cloudcontrolled.com](http://robinaddressbook.cloudcontrolled.com/)

Run the app locally
---

### Short version

After cloning the project, install the dependencies using composer. It will also prompt you to enter your database settings:

``` bash
$ composer install
```

Setup the database schema from the doctrine configuration:

``` bash
$ php app/console doctrine:schema:update --force
```

Run the PHP testing server:

``` bash
$ php app/console server:run
```

And voila, you should be able to run the app on [localhost:8000](http://localhost:8000).

### Complete guides

If you're having trouble with anything above, you could try reading:

- My [blog post about getting Symfony2 running on Ubuntu](http://robinwinslow.co.uk/2013/05/31/installing-symfony-2-by-creating-a-github-fork/)
- The [official Symfony2 quick start guide](http://symfony.com/doc/current/quick_tour/the_big_picture.html)
