PHP Example Project
===================

> An example setup for Invoke projects that use CI/CD tools

In this repo, you can see some examples for projects that will be used under our CI/CD tools.

The setup showcases the following PHP tasks:

* Linting (via PHPStan)
* Code Sniffing
* Testing
* Code Coverage

Using the code from the `composer.json`, these tasks will run after each `composer install` or `composer update` making it ideal for the CI/CD tools which will run those commands to prepare the project for movement to staging.

### Linting

If phpstan is being painful, then feel free to use the `lint.sh` script. It is used in the following way:

```
sh ./lint.sh {path,glob,*.pattern}
```

### Git Hooks

This project also includes a git hook for making sure the composer scripts run before a commit is made and would be difficult to undo.

To install the hooks, run:

```
mv hooks/pre-commit .git/hooks/pre-commit
chmod +x .git/hooks/pre-commit
```

This moves the script to the git directory for hooks, then changes the premissions of the file to allow execution on your local machine.

### Other Script Snippets

Laravel:

```
"sniff": "./vendor/bin/phpcs -n --standard=PSR2 --extensions=php --colors app/ resources/views/ tests/",
"lint": "./vendor/bin/phpstan analyse -l 2 {app,resources/views,tests}/**.php",
```

WordPress:

**Be sure to remove PHPStan when using WordPress**. Since WordPress does not support PSR4, nothing is autoloaded and it is like all functions are missing...

```
"sniff": "./vendor/bin/phpcs -n --standard=PSR2 --extensions=php --colors wp-content/themes/{YOUR_THEME_NAME}/ tests/",
"lint": "sh ./lint.sh {wp-config.php,wp-content/themes/{YOUR_THEME_NAME}/**.php}",
```
