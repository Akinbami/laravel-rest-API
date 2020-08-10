<?php

namespace App\Transformers;

use App\Model\BookModel;
use League\Fractal\TransformerAbstract;

class BookTransformer extends TransformerAbstract
{
    public function transform(BookModel $book)
    {
        return [
            'name' => $book->name,
            'isbn' => $book->isbn,
            'authors' => $book->authors,
            'number_of_pages' => $book->number_of_pages,
            'publisher' => $book->publisher,
            'country' => $book->country,
            'release_date' => $book->release_date
        ];
    }
}