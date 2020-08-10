<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\AuthorModel;

class BookModel extends Model
{
    protected $table = 'books';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'isbn',
        'country',
        'number_of_pages',
        'publisher',
        'release_date'
    ];

    public function authors()
    {
        return $this->belongsToMany(AuthorModel::class);
    }
}
