<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Repositories\User\UserRepositoryInterface;

class RegisterController extends Controller
{
    protected $user_repository;

    public function __construct(UserRepositoryInterface $user_repository){
        $this->user_repository = $user_repository;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RegisterRequest $request)
    {
        $this->user_repository->registUser($request);
        return view('login');
    }
}
