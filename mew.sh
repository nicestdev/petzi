#!/bin/bash

for arg in "$@"; do
    if [[ $arg =~ "-f" ]]; then
        php artisan migrate:fresh --seed
        break
    fi
done

#test

php artisan ide-helper:generate
php artisan ide-helper:model -R -W
vendor/bin/pint