<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupportResource;
use App\Repository\SupportRepository;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    protected $repository;

    public function __construct(SupportRepository $repository) {
        $this->repository = $repository;
    }   

    public function index(Request $request) {
        $supports = $this->repository->getSupports($request->all());

        return SupportResource::collection($supports);
    }
}