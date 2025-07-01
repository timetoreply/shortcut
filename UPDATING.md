# Steps to update the OpenAPI specification and regenerate the PHP client library

1) Download the latest OpenAPI specification from [the Shortcut API documentation or repository](https://developer.shortcut.com/api/rest/v3/shortcut.openapi.json). Save it as `shortcut.openapi.json`. Their documentation can be found [here](https://developer.shortcut.com/api/rest/v3#Swagger-OpenAPI-file)

2) Ensure you have the OpenAPI Generator CLI installed. Documentation can be found [here](https://openapi-generator.tech/).

3) Run the generator:

```sh
openapi-generator-cli generate \
-i shortcut.openapi.json \
-g php \
-c config.json \
--git-repo-id shortcut \
--git-user-id timetoreply
```

4) Update the installation instructions in the `README.md` file if necessary. The installation command should look like this:

````markdown
### Installation

The library can be installed via Composer:

```sh
composer require timetoreply/shortcut
```
````

5) Ensure you are happy with the generated code, then push the changes.
