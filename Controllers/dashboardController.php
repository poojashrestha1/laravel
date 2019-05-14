<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class dashboardController extends Controller
{
    public function index()
    {
        return view("back.dashboard");
    }
    //Checks the login 
    //if there is no login then it will redirect for login
    public function __construct()
    {
        $this->middleware('auth');
    }
}