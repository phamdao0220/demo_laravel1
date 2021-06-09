<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequets;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories=DB::table('categories')->paginate(3);
        return view('back_end.category.list',compact('categories'));
    }

    public function add()
    {
        return view('back_end.category.add');
    }

    public function store(CategoryRequets $request)
    {
        $this->categoryService->store($request);
        return redirect()->route('list.category');
    }


    public function edit($id)
    {
        $category = $this->categoryService->getById($id);
        return view('back_end.category.edit', compact('category'));
    }

    public function update( Request $request)
    {
        $this->categoryService->update($request);
        return redirect()->route('list.category');
    }

    public function delete($id)
    {
        $this->categoryService->delete($id);
        return redirect()->route('list.category');
    }
    public function search(Request $request){
        $categories=Category::where('name','like','%'.$request->search.'%')
            ->orWhere('product','like','%'.$request->search.'%')
            ->paginate(3) ;
        return view('back_end.category.list',compact('categories'));
    }
}
