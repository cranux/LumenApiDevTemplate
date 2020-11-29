<?php


namespace App\Http\Controllers\AdminApi;


use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\UsersRepository;
use App\Validators\UsersValidator;

class UserController extends Controller
{
    /**
     * @var
     */
    protected $repository;
    /**
     * @var
     */
    protected $validator;

    public function __construct(UsersRepository $usersRepository, UsersValidator $usersValidator)
    {
        $this->repository = $usersRepository;
        $this->validator = $usersValidator;
    }
    public function list()
    {
//        auth()->guard('adminApi')->user()
        $data = $this->repository->all();
        dd($data);
    }
}
