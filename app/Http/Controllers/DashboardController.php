<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cluster;
use App\Models\Consumer;
use App\Models\Product;
use App\Models\Order;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $cluster    = Cluster::count();
        $consumer   = Consumer::count();
        $product    = Product::count();
        $order      = Order::count();
        return view('admin.index', ["clusters" => $cluster, "consumers" => $consumer, "products" => $product, "orders" => $order]);
    }
}
