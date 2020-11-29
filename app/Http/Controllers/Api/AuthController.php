<?php


namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Member;


class AuthController extends Controller
{
    public function login()
    {
        $member = Member::query()->find(1);
        $token = auth()->guard('api')->login($member);
        return $this->respondWithToken($token);
    }

    /**
     *  Get the token array structure.
     * @param $token
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return json(2000,'登录成功',[
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
