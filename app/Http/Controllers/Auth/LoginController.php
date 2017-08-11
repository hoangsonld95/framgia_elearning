<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
//        Admin::create(['full_name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('12345678'), 'active' => true, 'avatar' => 'admin.jpg']);
        $input = $request->all();
        $email = $input['email'];
        $password = $input['password'];
        $admin = Admin::where('email', $email)
            ->where('active', 1)->first();
        if($admin && Hash::check($password, $admin['password'])) {
            return redirect('admin/homepage');
        }
        if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
            return view('home')->with('login_status', 'You are logined.');
        } else
            return redirect()->back()->with('login_status', 'Email or Password missing.');
    }
}
