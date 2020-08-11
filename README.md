# laravel-rest-API
<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## External book API from (Ice and Fire Data)

Query the Ice And Fire API and use the data received to respond with precisely the following JSON if there are results:

* **URL**
    `http://127.0.0.1:8000/api/external-books`
* **Method**
    `GET`
* **URL Params**
    `name=[string]`
* **Data Params**
    None
* **Success Response:**
    * **Code:** 200 <br />
    * **Content:** 
                ```{
                        "status_code": 200,
                        "status": "success",
                        "data": {
                            "data": [
                                {
                                    "name": "A Game of Thrones",
                                    "isbn": "978-0553103540",
                                    "authors": [
                                        "George R. R. Martin"
                                    ],
                                    "number_of_pages": 694,
                                    "publisher": "Bantam Books",
                                    "country": "United States",
                                    "release_date": "1996-08-01T00:00:00"
                                },
                                {
                                    "name": "A Clash of Kings",
                                    "isbn": "978-0553108033",
                                    "authors": [
                                        "George R. R. Martin"
                                    ],
                                    "number_of_pages": 768,
                                    "publisher": "Bantam Books",
                                    "country": "United States",
                                    "release_date": "1999-02-02T00:00:00"
                                }
                            ]
                        }
                    }```

## Tools Used

- **PHP 7.3(https://vehikl.com/)**
- **Laravel 7(https://tighten.co)**
- **Mysql 8.0(https://kirschbaumdevelopment.com)**

## Development Libraries

- **guzzlehttp/guzzle ^7.0 (https://vehikl.com/)**
- **league/fractal ^0.19.2 (https://tighten.co)**


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


