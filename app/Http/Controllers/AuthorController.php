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
        $author['authors']=Author::paginate(5);
        $authors = $this->authorService->getAll();
        return view('back_end.author.list',$author, compact('authors'));
    }

    public function add()
    {
        return view('back_end.author.add');
    }

    public function store(AuthorRequest $request)
    {
        toastr()->success('du lieu them thanh cong');
        $this->authorService->store($request);
        return redirect()->route('list.author');
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
}
