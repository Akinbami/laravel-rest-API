
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

## Local book API from (Mysql Database)

Simple CRUD (Create, Read, Update, Delete) API with a local database
# CREATE

Create Book

* **URL** <br />
    `http://127.0.0.1:8000/api/v1/books`
* **Method**
    `POST`
* **URL Params** <br />
    `name=[string]`  **Required:**
    `isbn=[string]`  **Required:**
    `country=[string]`  **Required:**
    `number_of_pages=[number]`  **Required:**
    `publisher=[string]`  **Required:**
    `release_date=[number]`  **Required:**
    `authors=[string]`  **Required:**

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
                            "name": "shopping5",
                            "isbn": "567289",
                            "authors": [
                                "akinyemi"
                            ],
                            "number_of_pages": "20",
                            "publisher": "samuel",
                            "country": "nigeria",
                            "release_date": "256738"
                        }
                    ]
                }
            }
                ```

# READ

Get all books

* **URL** <br />
    `http://127.0.0.1:8000/api/v1/books`
* **Method**
    `GET`
* **URL Params** <br />
    `None`
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
                            "name": "sport",
                            "isbn": "567289",
                            "authors": [
                                "akinyemi"
                            ],
                            "number_of_pages": 20,
                            "publisher": "samuel",
                            "country": "nigeria",
                            "release_date": "256738"
                        },
                        {
                            "name": "educational",
                            "isbn": "567289",
                            "authors": [
                                "akinyemi"
                            ],
                            "number_of_pages": 20,
                            "publisher": "samuel",
                            "country": "nigeria",
                            "release_date": "256738"
                        }
                    ]
                }
            }
        ```

Get book by ID

* **URL** <br />
    `http://127.0.0.1:8000/api/v1/books/{id}`
* **Method**
    `GET`
* **URL Params** <br />
    `None`
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
                        "name": "educational",
                        "isbn": "567289",
                        "authors": [
                            "akinyemi"
                        ],
                        "number_of_pages": 20,
                        "publisher": "samuel",
                        "country": "nigeria",
                        "release_date": "256738"
                    }
                ]
            }
        }
    ```

Update Book

* **URL** <br />
    `http://127.0.0.1:8000/api/v1/books/3?name=housing`
* **Method**
    `PUT`
* **URL Params** <br />
    `name=[string]`
    `isbn=[string]`
    `country=[string]`
    `number_of_pages=[number]`
    `publisher=[string]`
    `release_date=[number]`
    `authors=[string]`

* **Data Params** <br />
    `None`
* **Success Response:**
    * **Code:** 200 <br />
    * **Content:** <br />
    ```json
        {
            "status_code": 200,
            "status": "success",
            "message": "The book housing was updated successfully",
            "data": {
                "data": [
                    {
                        "name": "housing",
                        "isbn": "567289",
                        "authors": [
                            "akinyemi"
                        ],
                        "number_of_pages": 20,
                        "publisher": "samuel",
                        "country": "nigeria",
                        "release_date": "256738"
                    }
                ]
            }
        }
    ```

Delete Book

* **URL** <br />
    `http://127.0.0.1:8000/api/v1/books/3?name=housing`
* **Method**
    `DELETE`
* **URL Params** <br />
    `None`
* **Data Params** <br />
    `None`
* **Success Response:**
    * **Code:** 200 <br />
    * **Content:** <br />
    ```json
        {
            "status_code": 204,
            "status": "success",
            "message": "The book educational was deleted successfully",
            "data": []
        }
    ```

## Database Model
- **BookModel**

## Tools Used

- **PHP 7.3(https://www.php.net/downloads)**
- **Laravel 7(https://laravel.com/docs/7.x/installation)**
- **Mysql 8.0(https://www.mysql.com/downloads/)**

## Development Libraries

- **guzzlehttp/guzzle ^7.0 (https://laravel.com/docs/7.x/http-client)**
- **league/fractal ^0.19.2 (https://fractal.thephpleague.com/simple-example)**

## application terminal commands
create database with the name book_api in mysql server and run the following commands to start the application

- **php artisan migrate**
`create database migration`
- **php artisan test**
`run test with phpunit`
- **php artisan serve**
`start application`
