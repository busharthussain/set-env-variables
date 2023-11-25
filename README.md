# set:env variable Command

Set a .env file variable from the command line.

### Docs

-   [Installation](#installation)
-   [Usage](#usage)


### Install package

Add the package in your composer.json by executing the command.

```bash
composer require bushart/set-env-variables
```

### Usage

When running the env:set Artisan command, provide both a key and value as two arguments.
```
$ php artisan env:set app_name Example
# Environment variable with key 'APP_NAME' has been changed from 'Laravel' to 'Example'
```

You can set values with spaces by wrapping them in quotes.

```
$ php artisan env:set app_name "Example App"
# Environment variable with key 'APP_NAME' has been changed from 'Laravel' to '"Example App"'
```
The command will also create new environment variables if an existing one does not exist.

```
$ php artisan env:set bash=code
# Environment variable with key 'BASH' has been set to 'code'
```

The command will handle invalid inputs and provide meaningful error messages.

```
$ php artisan env:set @ss_n@w Laravel
# Invalid environment key. Only use letters and underscores
```
### Additional Notes
The env:set command is designed to enhance your environment variable management. Have fun CRUDding! :-)
