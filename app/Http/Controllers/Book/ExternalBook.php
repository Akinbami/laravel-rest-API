<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;


class ExternalBook extends Controller
{
    
    public function getAllBooks(Request $request){
        $bookName = $request->name;
        if(is_null($bookName)){
            $external_api_response = Http::get('https://www.anapioficeandfire.com/api/books');
        }else{
            $url = sprintf("https://www.anapioficeandfire.com/api/books?name=%s",$bookName);
            $external_api_response = Http::get($url);
        }

        // suppressing fields
        $res = $external_api_response->json();

        $fractal = new Manager();
        $resource = new Collection($res, function(array $res) {
            return [
                'name' => $res['name'],
                'isbn' => $res['isbn'],
                'authors' => $res['authors'],
                'number_of_pages' => $res['numberOfPages'],
                'publisher' => $res['publisher'],
                'country' => $res['country'],
                'release_date' => $res['released']
            ];
        });

        $new_data = $fractal->createData($resource);

        $response = [
            "status_code"=>200,
            "status"=>"success",
            "data"=>$new_data
        ];
        
        return response()->json($response, 200); 
    }
}
