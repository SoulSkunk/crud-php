# CRUD

- include https://www.php.net/manual/fr/function.include.php
- require https://www.php.net/manual/fr/function.require.php
- PDO https://php.net/manual/en/pdostatement.execute.php
- PDOException https://www.php.net/manual/fr/class.pdoexception
- <<<EOT https://www.php.net/manual/fr/language.types.string.php#language.types.string.syntax.nowdoc
- `$_POST` https://www.php.net/manual/fr/reserved.variables.post
- isset https://www.php.net/manual/fr/function.isset
- empty https://www.php.net/manual/fr/function.empty.php
- NULL https://www.php.net/manual/fr/language.types.null.php
- ```php
  <?=
  ```
- ```php
    <?php if ($msg): ?>
    <?php endif; ?>
  ```
- ````php
  foreach ($produits as $categorie) :
    $categorie['id']
    <?php endforeach; ?>```
  ````
- `$_FILES` https://www.php.net/manual/fr/reserved.variables.files
- https://php.net/manual/en/function.move-uploaded-file.php
- $pdo->prepare('INSERT INTO `produits`(`id`,`nom`, `image`, `description`, `prix`, `categorie_id`) VALUES (?,?,?,?,?,?)');
  https://www.php.net/manual/fr/pdo.prepare

  https://www.cloudflare.com/fr-fr/learning/security/threats/sql-injection/

  ![Injection SQL](https://www.cloudflare.com/img/learning/security/threats/sql-injection-attack/sql-injection-infographic.png)

## Steps

1. composer require twig/twig
2. clean functions.php
3. import autoload in functions.php
4.

```php
$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/':
        echo 'index';
        // require __DIR__ . '/views/index.php';
        break;
    case '':
        echo 'index';
        // require __DIR__ . '/views/index.php';
        break;
    case '/about':
        // require __DIR__ . '/views/about.php';
        break;
    default:
        http_response_code(404);
        // require __DIR__ . '/views/404.php';
        break;
}

```

.htpasswd

.htaccess

```
AuthUserFile /path/to/.htpasswd
AuthType Basic
AuthName "My restricted Area"
Require valid-user
```

https://www.scriptol.fr/wordpress/redirection.php

https://alexcican.com/post/how-to-remove-php-html-htm-extensions-with-htaccess/
https://www.taniarascia.com/the-simplest-php-router/

https://www.htaccessredirect.net/
https://www.web2generators.com/apache-tools/htpasswd-generator

```

```
