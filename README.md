# WeatLoc

## About WeatLoc

WeatLoc is a weather application with elegant interface. We believe weather applications must be enjoyable and fun to use.

## Contributing

Thank you for considering contributing to the Weather App! Just create a pull request after you have tested your code, and leave it to me to merge your change.

## Security Vulnerabilities

If you discover a security vulnerability within WeatLoc, please send an e-mail to [Muhammad Mwinchande](mailto:ammwinchande@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Weather App is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## API Used in Development

The API used for getting weather information is: [OpenWeather](https://openweathermap.org/api)

## Usage

To run the appliation do the following:

- composer install
- php -r "copy('.env.example', '.env');"
- Copy the following to .env
    `BASE_WEATHER_API_URL=http://api.openweathermap.org/data/2.5/`
    `OPENWEATHER_API_KEY=YOUR_API_KEY`
- php artisan key:generate
- npm install
