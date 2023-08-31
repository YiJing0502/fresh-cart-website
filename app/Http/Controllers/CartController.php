<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CartController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function cartAdd()
    {
        return view('freshCart.cartAdd');
    }
    public function cartEdit()
    {
        return view('freshCart.cartEdit');
    }
    public function cartProductList()
    {
        return view('freshCart.cartProductList');
    }

}
