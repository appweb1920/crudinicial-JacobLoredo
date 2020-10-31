<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
   

    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;
    public function redirectTo(Type $var = null){


        $user=Auth::user();
        if(\is_null($user->Tipo_Usuario))
            $redirectTo='/home';
        else if($user->Tipo_Usuario==1)
            $redirectTo='/';
        else if($user->Tipo_Usuario==2)
             $redirectTo='/';
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
