<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-05-24
 * Time: 15:13
 */

namespace App\Http\Repositories;


use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryRepository extends Repository
{
    public function getAll()
    {
        $category=DB::table('categories')->paginate(5);
        return view('back_end.author.list',compact('category'));
    }

    function index()
    {
        return Category::all();
    }

    function getInstance()
    {
        return new Category();
    }

    function store($category)
    {
        $category->save();
    }

    function findById($id)
    {
        return Category::findOrFail($id);
    }

    function update($category)
    {
        $category->update();
    }
}
