<?php

namespace App\Http\Controllers;
use App\Models\Customer; // Add this line to import the Todo model
use Illuminate\Http\Request;

class Customers extends Controller
{
    public function index(){
        $customers = Customer::all();
        return response()->json(['data'=>$customers]);
    }
}
