# YouTube Description Fetcher (Laravel)

A small Laravel app to fetch YouTube video descriptions using the YouTube Data API and store them in the database.

## Setup
1. Clone repo:
   ```bash
   git clone https://github.com/RohitChavan10/YTVideoFetch.git
2.Install dependencies:

composer install
npm install && npm run build

3.Copy .env.example → .env, add your YOUTUBE_API_KEY, and run:

php artisan key:generate
php artisan migrate

4.Start server:

php artisan serve
