# README.md

**Requirements :**
- **Apache or nginx**
- **PHP5 must be also installed**

https://blockchain.rkweb.fr

### Procedure

- Clone the git repository.
- Install dependancies into your system
- Install libraries with composer (read composer.json)
- Copy config.template.php to config.php.
- Replace values config.php to associate him with your blockchain account.

```sh
$ git clone https://github.com/AlienGFX/blockchain-dashboard.git
$ apt-get update
$ apt-get install php5-mcrypt php5-gmp php5-curl php5-gd
$ php composer.phar install
$ cp api/config.template.php api/config.php
$ vi api/config.php
```

***set values :***

```
$apiKey = 'my_api_key';
$pin = 'my_pin';
```

This library requires the mCrypt, GMP, and cURL and gd extensions to work.

### Packages for debian 8 :
- php5-mcrypt
- php5-gmp
- php5-curl
- php5-gd

### Dependancies :
- block_io-php/block_io-php v1.1.3
- endroid/qrcode v1.9


### More informations :
* [Simple PHP API BlockIO] - https://block.io/api/simple/php
* [Docs BlockIO] - https://block.io/docs

### Todos

 - Add a real authentication
 - Add function into dashboard/config/globals.php file and use it for any pages of dashboard
 - Insert php to order.php page
 - Write test and build the projet with jenkins
 - Improve the code

License
----

GPL v3

[![rkweb.fr](https://rkweb.fr/fr/images/avatar.png)](https://rkweb.fr)
