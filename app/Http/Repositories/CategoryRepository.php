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
