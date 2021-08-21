Para instalação serão necessários atender alguns dos requisitos mínimos:
* Composer 2.0
* PHP >= 7.3 *`(ideal 7.4 ou superior)`*
* Saber utilizar o terminal

Seguindo as instruções passso-a-passo abaixo iniciará o app:

* Clonar este repositório:
```shell
git clone https://github.com/ministracao-aulas/como-fazer-importacao-de-planilha-do-excel-ou-csv-.git
```

* Acessar a pasta do projeto:
```shell
cd como-fazer-importacao-de-planilha-do-excel-ou-csv-
```

* Instalação das dependêcias do composer
```shell
composer install
```

* Gere um arquivo CSV
```shell
php gera_csv_fake.php
```

* Leia arquivo CSV com o PHP
```shell
php index.php
```


### Usamos

- [Composer](getcomposer.org)
- PHP 7.4
- [spatie/simple-excel](https://github.com/spatie/simple-excel)