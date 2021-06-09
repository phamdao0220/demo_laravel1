<?php

namespace App\Http\Controllers;

use App\Http\Services\AuthorService;
use App\Http\Services\BookService;
use App\Http\Services\CategoryService;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    protected $bookService;
    protected $authorService;
    protected $categoryService;

    public function __construct(BookService $bookService , AuthorService $authorService ,CategoryService $categoryService)
    {
        $this->bookService = $bookService;
        $this->authorService = $authorService;
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $books = DB::table('books')->paginate(5);
        $authors = $this->authorService->getAll();
        $categorys = $this->categoryService->getAll();
        return view('back_end.book.list',compact('books','authors','categorys'));
    }

    public function add()
    {
        $authors = $this->authorService->getAll();
        $categorys = $this->categoryService->getAll();
        return view('back_end.book.add',compact('authors','categorys'));
    }

    public function store(Request $request)
    {
        $this->bookService->store($request);
        return redirect()->route('list.book');

    }


    public function edit($id)
    {
        $books = $this->bookService->getById($id);
        $authors = $this->authorService->getAll();
        $categorys = $this->categoryService->getAll();
        return view('back_end.book.edit', compact('books','authors','categorys'));
    }

    public function update(Request $request)
    {
        $this->bookService->update($request);
        return redirect()->route('list.book');
    }

    public function delete($id)
    {
        $this->bookService->delete($id);
        return redirect()->route('list.book');
    }
    public function search(Request $request){
        $books=Book::where('name','like','%'.$request->search.'%')
            ->paginate(3) ;
        return view('back_end.book.list',compact('books'));
    }
}
