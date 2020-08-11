<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    protected $table = 'books';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'isbn',
        'authors',
        'country',
        'number_of_pages',
        'publisher',
        'release_date'
    ];

}
