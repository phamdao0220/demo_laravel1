<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-06-03
 * Time: 22:29
 */

namespace App\Http\Repositories;


use App\Models\Book;

class BookRepository extends Repository
{

    function getAll()
    {

        return Book::all();

    }
    function getInstance()
    {

        return new Book();
    }

    function store($book)
    {
        $book->save();
    }

    function findById($id)
    {
        return Book::findOrFail($id);
    }

    function update($book)
    {
        $book->update();
    }
}
