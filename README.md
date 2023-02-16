# Blogr
[![Bootstrap][Bootstrap.com]][Bootstrap-url] [![Laravel][Laravel.com]][Laravel-url]  
A small personal blogging platform, built on Laravel 10 and Bootstrap 5. Currently work in progress. Plan is to expand and perfect it over time.

## Progress:
- [x] Building posts
- [x] Linking posts to users
- [x] Basic Authentication
- [ ] Registration
- [ ] Homepage
- [ ] Pagination
- [ ] Search
- [ ] Associate posts with certain tags
- [ ] Last.fm or Spotify link
- [ ] Looks 'n feel
- [ ] Switchable dark mode

## Installation
1. Install composer packages

        composer install

2. Copy the example env file and make the required configuration changes in the .env file

        cp .env.example .env

3. Generate a new application key

        php artisan key:generate

4. Run migration
   
        php artisan migrate

5. Start the local development server

        php artisan serve

You can now access the server at http://localhost:8000

[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
