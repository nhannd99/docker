<?php
namespace App\Http\Controllers;

class AuthApiController extends Controller {

    /**
     * user Login
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(){
        return response()->json([], 200);
    }

    /**
     * User Register
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(){
        return response()->json([], 200);
    }

    /**
     * User forgot password
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgotPassword(){
        return response()->json([], 200);
    }

    /**
     * User reset password
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function resetPassword(){
        return response()->json([], 200);
    }


}
