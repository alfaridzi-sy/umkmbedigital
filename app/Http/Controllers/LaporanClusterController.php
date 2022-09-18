<?php

namespace App\Http\Controllers;

use App\Models\Cluster;

class LaporanClusterController extends Controller
{
    public function cluster(){
        $cluster = Cluster::all();
        return view('admin.laporancluster', ["cluster" => $cluster]);
    }
}