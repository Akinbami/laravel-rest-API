<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Model\BookModel;
use App\Transformers\BookTransformer;

use Validator;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = BookModel::get();
        $fractal = new Manager();
        $resource = new Collection($books, new BookTransformer);

        $new_data = $fractal->createData($resource);
        $response = [
            "status_code"=>200,
            "status"=>"success",
            "data"=>$new_data
        ];
        
        return response()->json($response, 200); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // creating input rules
        $rules = [
            'name' => 'required',
            'isbn' => 'required',
            'authors' => 'required',
            'country' => 'required',
            'number_of_pages' => 'required',
            'publisher' => 'required',
            'release_date' => 'required'
        ];

        // validating inputs
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        // creating book record
        try {
            $book = BookModel::create($request->all());
            $fractal = new Manager();
            $resource = new Item($book, new BookTransformer);

            $new_data = $fractal->createData($resource);
            $response = [
                "status_code"=>200,
                "status"=>"success",
                "data"=>$new_data
            ];
           
            return response()->json($response, 201);
        }catch (QueryException $e) {
            $response = [
                "status_code"=>400,
                "status"=>"fail",
                "data"=>[]
            ];
            return response()->json($e, 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = BookModel::find($id);
        if(is_null($book)){
            $response = [
                "status_code"=>404,
                "status"=>"fail",
                "data"=> []
            ];
            return response()->json($response, 404);
        }else{
            $fractal = new Manager();
            $resource = new Item($book, new BookTransformer);

            $new_data = $fractal->createData($resource);
            $response = [
                "status_code"=>200,
                "status"=>"success",
                "data"=>$new_data
            ];
            
            return response()->json($response, 200); 
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = BookModel::find($id);
        if(is_null($book)){
            $response = [
                "status_code"=>404,
                "status"=>"fail",
                "data"=> []
            ];
            return response()->json($response, 404);
        }else{
            $book->update($request->all());
            $fractal = new Manager();
            $resource = new Item($book, new BookTransformer);

            $new_data = $fractal->createData($resource);

            $response = [
                "status_code"=>200,
                "status"=>"success",
                "message"=> sprintf("The book %s was updated successfully",$book->name),
                "data"=> $new_data
            ];
            return response()->json($response, 200); 
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = BookModel::find($id);
        if(is_null($book)){
            $response = [
                "status_code"=>404,
                "status"=>"fail",
                "data"=> []
            ];
            return response()->json($response, 404);
        }else{
            $message = sprintf("The book %s was deleted successfully",$book->name);
            $book->delete();
            $response = [
                "status_code"=>204,
                "status"=>"success",
                "message"=> $message,
                "data"=> []
            ];
            return response()->json($response, 200);
        }
    }
}
