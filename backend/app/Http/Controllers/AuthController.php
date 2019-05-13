<?php

namespace App\Http\Controllers;

use App\Http\Requests\SignUpUserRequest;
use App\Services\User\UserService;

class AuthController extends Controller
{
    /** @var UserService $userService */
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function signUp(SignUpUserRequest $request)
    {
       try {
           $this->userService->createUser([
               'email' => $request->get('email'),
               'password' => bcrypt($request->get('password'))
           ]);

           return response()->json([
               'status' => true,
               'message' => "Congrats! you are successfully registered"
           ], 200);

       } catch(\Exception $e) {
           return response()->json([
               'status' => false,
               'message' => "Oooops! something wrong happen"
           ], 402);
       }
    }
}