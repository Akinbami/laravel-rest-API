<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\BookModel;

class AuthorModel extends Model
{
    protected $table = 'authors';
    public $timestamps = false;
    protected $fillable = [
        'name'
    ];
    public function books()
    {
        return $this->belongsToMany(BookModel::class);
    }
}
