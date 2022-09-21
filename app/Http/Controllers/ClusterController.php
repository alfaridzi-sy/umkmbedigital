<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClusterRequest;
use App\Http\Requests\UpdateClusterRequest;
use App\Models\Cluster;

class ClusterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cluster = Cluster::all();
        return view('admin.cluster', ["cluster" => $cluster]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clustercreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClusterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClusterRequest $request)
    {
        $new_id = Cluster::orderByDesc('id_cluster')->first();

        if(!isset($new_id->id_cluster)){
            $new_id = sprintf('%04d',1);
        }
        else{
            $new_id = sprintf('%04d',$new_id->id_cluster);
        }
        Cluster::create($request->all() + ['id_admin' => 1]);
        return redirect('/cluster');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function show(Cluster $cluster)
    {
        $cluster = Cluster::find($cluster);
        return view('admin.clusterdetail', ["clusters" => $cluster]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClusterRequest  $request
     * @param  \App\Models\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
     public function edit(UpdateClusterRequest $request , $cluster)
    {
        $cluster = Cluster::where('id_cluster',$cluster)->first();
        $cluster->update($request->all());
        return redirect('/cluster');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function update($cluster)
    {
        $cluster = Cluster::where('id_cluster', $cluster)->first();
        return view('admin.clusterupdate', ['cluster'=>$cluster]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cluster  $cluster
     * @return \Illuminate\Http\Response
     */
    public function destroy($cluster)
    {
        Cluster::where('id_cluster',$cluster)->delete();
        return redirect('/cluster');
    }
}
