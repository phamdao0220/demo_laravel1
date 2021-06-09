<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-05-04
 * Time: 09:40
 */

namespace App\Http\Services;


use App\Http\Repositories\AuthorRepository;
use http\Env\Request;

class AuthorService extends BaseService
{
    protected $authorRepo;

        public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepo = $authorRepository;
    }

        function getAll()
        {
            return $this->authorRepo->getAll();
        }

        function store($request)
        {
            $author = $this->authorRepo->getInstance();
            $author->fill($request->all());
            toastr()->success('dữ liệu thêm thành công ');
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('authors', 'public');
                $author->img = $path;

            }
            $this->authorRepo->store($author);
        }

        function getById($id)
        {
            return $this->authorRepo->findById($id);
        }

        function update($request)
        {
            $author = $this->authorRepo->findById($request->id);
            $author->fill($request->all());
            toastr()->success('dữ liệu sửa thành công ');
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('authors', 'public');
                $author->img = $path;

            }
            $this->authorRepo->update($author);
        }

        function delete($id)
        {
            $auth = $this->authorRepo->findById($id);
            toastr()->warning('dữ liệu xoá thành công ');
            $auth->delete();
    }
}
