``composer diagnose``

``composer show --tree``

Для повторной генерации файла vendor/autoload.php (флаг --no-interaction ничего не спрашивать(CI/CD)):

``composer dump-autoload --no-interaction`` 

``composer clear-cache``

"The "https://getcomposer.org/version" file could not be downloaded: failed to open stream: Operation timed out" ->
``sudo sh -c "echo 'precedence ::ffff:0:0/96 100' >> /etc/gai.conf"``

"Unable to write keys.dev.pub to: /home/user/.composer"
``sudo su``


``composer update --dry-run --profile --verbose`` посмотреть, пройдет ли установка новых зависимостей успешно
If has error:  "file could not be downloaded (HTTP/1.1 502 Bad Gateway)" -> export HTTP_PROXY_REQUEST_FULLURI=false
``composer self-update``

For production environment:
``composer install -o``
_____________________________________________________________________

``composer require --dev barryvdh/laravel-ide-helper``

``php artisan ide-helper:generate``

_____________________________________________________________________