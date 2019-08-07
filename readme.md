``composer show --installed`` 

``composer update --dry-run --profile --verbose`` посмотреть, пройдет ли установка новых зависимостей успешно
If has error:  "file could not be downloaded (HTTP/1.1 502 Bad Gateway)" -> export HTTP_PROXY_REQUEST_FULLURI=false
``composer self-update``


``composer require --dev barryvdh/laravel-ide-helper``

``php artisan ide-helper:generate``