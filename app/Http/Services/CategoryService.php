<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-05-24
 * Time: 15:13
 */

namespace App\Http\Services;


use App\Http\Repositories\CategoryRepository;
use http\Env\Request;

class CategoryService extends BaseService
{
    protected $categoryRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    function getAll()
    {
        return $this->categoryRepo->getAll();
    }

    function index()
    {
        return $this->categoryRepo->index();
    }

    function store($request)
    {
        $categories = $this->categoryRepo->getInstance();
        $categories->name = $request->name;
        $categories->product = $request->product;
        $this->categoryRepo->store($categories);
    }

    function getById($id)
    {
        return $this->categoryRepo->findById($id);
    }

    function update($request)
    {
        $category = $this->categoryRepo->findById($request->id);
        $category->name= $request->name;
        $category->product=$request->product;
        return $this->categoryRepo->update($category);
    }

    function delete($id)
    {
        $categories = $this->categoryRepo->findById($id);
        $categories->delete();
    }
}
