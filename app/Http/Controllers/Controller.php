<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Routing\Route;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

abstract class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    protected $resource;
    protected $repository;

    /**
     *  Busca y declara el resource
     */
    public function find (Route $route)
    {
        $id             = $route->getParameter('id');
        $this->resource = $this->repository->find($id);

        if (!$this->resource)
        {
            if (Request::ajax()) {
                return response()->json([], 404);
            }
            throw new NotFoundHttpException;
        }
    }
}
