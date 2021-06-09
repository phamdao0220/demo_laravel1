<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-06-03
 * Time: 22:28
 */

namespace App\Http\Services;


use App\Http\Repositories\BookRepository;

class BookService extends BaseService
{
    protected $bookRepo;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepo = $bookRepository;
    }

    function getAll()
    {
        return $this->bookRepo->getAll();
    }

    function store($request)
    {
        $book = $this->bookRepo->getInstance();
        $book->fill($request->all());
        toastr()->success('dữ liệu thêm thành công ');
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('books', 'public');
            $book->img = $path;

        }
        $this->bookRepo->store($book);
    }

    function getById($id)
    {
        return $this->bookRepo->findById($id);
    }

    function update($request)
    {
        $book = $this->bookRepo->findById($request->id);
        $book->fill($request->all());
        toastr()->success('dữ liệu sửa thành công ');
        if ($request->hasFile('img')) {
            $path = $request->file('img')->store('books', 'public');
            $book->img = $path;

        }
        $this->bookRepo->update($book);
    }

    function delete($id)
    {
        $book = $this->bookRepo->findById($id);
        toastr()->success('dữ liệu xoá thành công ');
        $book->delete();
    }
}
