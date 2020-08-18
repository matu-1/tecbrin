<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    public function login2(Request $request){
      $this->validateLogin($request);
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'estado'=>1, 'tipo' => 'administrativo'])){
          return redirect()->route('home');
      }
      if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'estado'=>1,'tipo'=>'otro'])){
          return redirect()->route('home');
      }
      return back()->withErrors(['email'=>trans('auth.failed')])  ///muestra el error
                  ->withInput(request(['email']));   ///obtiene el valor old

    }

    protected function validateLogin(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected $redirectTo = '/home';
    // protected $redirectTo = RouteServiceProvider::HOME;

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
