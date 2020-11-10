<?php

namespace App\Http\Controllers;
use App\Models\Book;

class BooksController extends Controller{
public function index()
{
  return Book::all();
}
public function denganID($id)
    {
        $books = Book::find($id);

        if ($books) {
            return response()->json([
                'message'   => 'show Books by ID',
                'data'      => $books
            ], 200);
        } else {
            return response()->json([
                'message'   => 'Books not Found',
            ], 404);
        }
    }
}
