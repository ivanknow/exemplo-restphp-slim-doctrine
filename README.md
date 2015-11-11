# exemplo-restphp-slim-doctrine
Exemplo de uma API Rest escrita em PHP utilizando Coposer para gerenciar pacotes, Slim para fazer o Rest e doctrine para fazer o ORM

linha de comando

fonte sobre composer
https://getcomposer.org/doc/01-basic-usage.md



1 - composer require slim/slim
para adicionar a dependencia do slim

2 - composer require doctrine/orm

3 - php vendor/doctrine/orm/bin/doctrine.php orm:schema-tool:create 
para regerar tabelas

lembrar de criar cli-config.php na raiz:
http://doctrine-orm.readthedocs.org/projects/doctrine-orm/en/latest/tutorials/getting-started.html

