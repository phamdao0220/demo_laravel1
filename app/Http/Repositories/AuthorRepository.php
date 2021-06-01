<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-05-04
 * Time: 09:40
 */

namespace App\Http\Repositories;

use  App\Models\Author;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthorRepository extends Repository
{
    function getAll()
    {
        $authors=DB::table('authors')->paginate(5);
        return view('back_end.author.list',compact('authors'));
//        return Author::orderBy('id', 'DESC')->paginate(10);
    }

    function index()
    {
        return Author::all();
    }

    function getInstance()
    {

        return new Author();
    }

    function store($author)
    {
        $author->save();
    }

    function findById($id)
    {
        return Author::findOrFail($id);
    }

    function update($author)
    {
        $author->update();
    }
}
