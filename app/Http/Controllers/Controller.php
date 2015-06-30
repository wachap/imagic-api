<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $resource;
    protected $repository;

    /**
     *	Search the specified resource.
     */
    public function find (Route $route)
    {
        $id             = $route->getParameter('id');
        $this->resource = $this->repository->find($id);

        if (!$this->resource)
        {
            return response()->json([], 404);
        }
    }
}
