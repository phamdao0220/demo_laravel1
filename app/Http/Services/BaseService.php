<?php
/**
 * Created by PhpStorm.
 * User: lananh
 * Date: 2021-05-04
 * Time: 09:41
 */

namespace App\Http\Services;


class BaseService
{
    function updateLoadFile($request, $key, $nameFolder)
    {
        return $request->file($key)->store($nameFolder, 'public');
    }
}
