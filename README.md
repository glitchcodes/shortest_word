# Shortest Word Detector

This PHP application aims to detect the shortest word in a sentence

## How to run
Install the dependencies first `composer install`

The application is available in two modes: CLI and Web

This application has been tested with PHP 8.4

### Web
To open the application in a browser, you can open the file `src/web.php` in your choice of browser

### CLI
Run this command in your terminal that supports PHP CLI

`php src/cli.php -s "example string" -c`

Arguments
- -s or --string = A string you want to check
- -c or --clean = Trims the string of the following punctuation marks (.,;!?); No value required


## Tests
To run tests, run the following command.

```bash
  ./vendor/bin/phpunit tests
```