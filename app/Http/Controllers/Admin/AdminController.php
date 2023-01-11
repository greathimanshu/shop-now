<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller{

    public function __construct()
    {
    }
    
    public function dashboard(Request $request)
    {
        return view('merchant.dashboard');
    }

    public function login(Request $request)
    {
        
        $data = [];

        if ($request->isMethod('post')) {
            
            $checkUser = User::webLogin($request->all());

            if (!isset($checkUser['user'])) {
                $message = $checkUser['message'];

                return redirect()->route('login')->with('error', $message);
            }
            
            if (!(Auth::user()->hasRole('merchant'))) {
                return redirect()->route('login')->with('error', "Invalid credentials");
            }

            return redirect()->route('merchant-dashboard');
        }

        return view('merchant.login')->with(compact('data'));
    }

    public function logout(Request $request)
    {   
        Auth::logout();
        return redirect('/');
    }

    
    public function register(Request $request)
    {

        return view('merchant.register');
    }

    public function store(Request $request)
    {

        $request->validate([
            'fullname' => 'required|max:100|string',
            'email' => 'email|required|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
        ]);
        
        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->assignRole('merchant');
        
        return redirect()->route('login');
        
    }

}