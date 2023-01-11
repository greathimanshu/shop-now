<?php
namespace App\Http\Controllers\Merchant;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class MerChantController extends Controller{

    public function __construct()
    {
    }
    
    public function dashboard(Request $request)
    {
        return view('merchant.dashboard');
    }


}