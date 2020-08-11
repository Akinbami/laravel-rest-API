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

* **URL** <br />
    `http://127.0.0.1:8000/api/external-books`
* **Method**
    `GET`
* **URL Params** <br />
    `name=[string]`
* **Data Params** <br />
    `None`
* **Success Response:**
    * **Code:** 200 <br />
    * **Content:** <br />
                ```json
                    {
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
                    }
                ```
## Database Model
- **BookModel**

- **PHP 7.3(https://www.php.net/downloads)**
- **Laravel 7(https://laravel.com/docs/7.x/installation)**
- **Mysql 8.0(https://www.mysql.com/downloads/)**

## Tools Used

- **PHP 7.3(https://www.php.net/downloads)**
- **Laravel 7(https://laravel.com/docs/7.x/installation)**
- **Mysql 8.0(https://www.mysql.com/downloads/)**

## Development Libraries

- **guzzlehttp/guzzle ^7.0 (https://laravel.com/docs/7.x/http-client)**
- **league/fractal ^0.19.2 (https://fractal.thephpleague.com/simple-example)**

