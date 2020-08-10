<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Model\BookModel;
use Validator;


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
        $response = [
            "status_code"=>200,
            "status"=>"success",
            "data"=>$books
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
        $rules = [
            'name' => 'required',
            'isbn' => 'required',
            'country' => 'required',
            'number_of_pages' => 'required',
            'publisher' => 'required',
            'release_date' => 'required'
        ];

        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        try {
            $book = BookModel::create($request->all());
            $response = [
                "status_code"=>201,
                "status"=>"success",
                "data"=>[
                    "book"=>$book
                    ]
            ];
            return response()->json($response, 201);
        }catch (QueryException $e) {
            $response = [
                "status_code"=>201,
                "status"=>"fail",
                "data"=>[]
            ];
            return response()->json($e, 201);
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
            $response = [
                "status_code"=>200,
                "status"=>"success",
                "data"=> $book
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
            $response = [
                "status_code"=>200,
                "status"=>"success",
                "message"=> sprintf("The book %s was updated successfully",$book->name),
                "data"=> $book
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
