<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cluster;
use App\Models\Product;

class CustomerController extends Controller
{
    public function index(){
        $product = Product::limit(3)->get();
        $cluster  = Cluster::limit(3)->get();
        return view('customer.index', ["products" => $product, "clusters" => $cluster]);
    }

    public function product(){
        $product = Product::all();
        return view('customer.product', ["products" => $product]);
    }

    public function contact(){
        return view('customer.contact');
    }
}
