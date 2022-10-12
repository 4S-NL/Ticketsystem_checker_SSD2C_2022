<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1 align="center"> Ticketsystem </h1>

## Benodigdheden
* PHP > 8.1
* Node > 16

## Ticketsystem opstarten vanaf deze repo:

- Clone de repo lokaal (via jouw gewenste manier) naar jouw ontwikkelomgeving (c:/laragon/www)
- Open het project in VS Code en open je terminal
- Maak een database aan voor het project
- Voer in de terminal in:        composer install
- voer in de terminal in:        copy .env.example .env (je kopieert zo het env example bestand naar je eigen .env bestand
- voer in je .env de gewenste databasegegevens is
- voer in de terminal in:        php artisan key:generate
- voer in de terminal in:        npm install
- voer in de terminal in:        php artisan migrate
- Start de website via <naamfolder>.test of 
- Start de website via de terminal: php artisan serve en bezoek de website van http://localhost:8000

