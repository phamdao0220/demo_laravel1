<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthorRequest;
use App\Http\Services\AuthorService;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function index()
    {
        $authors = $this->authorService->getAll();
        return view('back_end.author.list',compact('authors'));
    }

    public function add()
    {
        return view('back_end.author.add');
    }

    public function store(AuthorRequest $request)
    {
        $this->authorService->store($request);
//        toastr()->success('du lieu them thanh cong');
        return redirect()->route('list.author')->with('message','Data added Successfully');

    }


    public function edit($id)
    {
        $auth = $this->authorService->getById($id);
        return view('back_end.author.edit', compact('auth'));
    }

    public function update(Request $request)
    {
        $this->authorService->update($request);
        return redirect()->route('list.author');
    }

    public function delete($id)
    {
        $this->authorService->delete($id);
        return redirect()->route('list.author');
    }
    public function search(Request $request){
        $authors=Author::where('name','like','%'.$request->search.'%')
        ->orWhere('product',$request->search)
        ->get();
        return view('back_end.author.list',compact('authors'));
    }
}
