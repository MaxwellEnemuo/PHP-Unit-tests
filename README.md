# Simple tests with PHP Unit

The PHP Unit Testing framework.

## Installation

Clone the the repository.

Using the package manager [composer](https://getcomposer.org), cd into your project folder and run this command in your perferred terminal.

```bash
composer install
```
This will install PHP Unit and autoload the classes contained in the classes folder.

## Usage

Take a look at the format.php class and carry out test for the other methods. You can make it better to test multiple instances.

We'll be autoloading our classes using ``` classmap ``` just to keep things simple. Run composer install after that.

Run the line below in your preferred terminal to see the result:
```bash
 ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests/FormatTest 
 ```

 If you're going to add to the classes folder, remember to run the code below to include it in the autoload.php file.

```bash
composer dump-autoload or composer dumpautoload
```

## Info

Read the [PHP Unit Docs](https://phpunit.readthedocs.io/en/7.4/). You get to see the full capability of the testing framework and all the available ``` assertions ```.

I hope beginners finds this helpful.



