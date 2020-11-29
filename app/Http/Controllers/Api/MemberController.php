<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\MemberRepository;
use App\Validators\MemberValidator;

class MemberController extends Controller
{
    /**
     * @var
     */
    protected $repository;
    /**
     * @var
     */
    protected $validator;

    public function __construct(MemberRepository $memberRepository, MemberValidator $memberValidator)
    {
        $this->repository = $memberRepository;
        $this->validator = $memberValidator;
    }
    public function list()
    {
//        auth()->guard('api')->user()
        $data = $this->repository->paginate(10);
        return json(2000,'获取成功', $data);
    }
}
