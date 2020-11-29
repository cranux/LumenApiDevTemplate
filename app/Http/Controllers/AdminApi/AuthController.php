<?php


namespace App\Http\Controllers\AdminApi;


use App\Http\Controllers\Controller;
use App\Models\Users;

class AuthController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $user = Users::query()->find(1);
        $token = auth()->guard('adminApi')->login($user);
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
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
