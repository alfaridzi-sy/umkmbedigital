<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
Use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Cluster;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',["products"=> $product]);
    }

    // public function data()
    // {
    //     $produk = Produk::leftJoin('category', 'category.id_kategori', 'product.id_kategori')
    //         ->select('product.*', 'jenis_produk')
    //         ->orderBy('id_produk', 'asc')
    //         ->get();

    //     return datatables()
    //         ->of($product)
    //         ->addIndexColumn()
    //         ->addColumn('select_all', function ($product) {
    //             return '
    //                 <input type="checkbox" name="id_produk[]" value="'. $produk->id_produk .'">
    //             ';
    //         })
    //         ->addColumn('id_produk', function ($produk) {
    //             return '<span class="label label-success">'. $produk->kode_produk .'</span>';
    //         })
    //         ->addColumn('harga', function ($produk) {
    //             return format_uang($produk->harga);
    //         })
    //         ->addColumn('stok', function ($produk) {
    //             return format_uang($produk->stok);
    //         })
    //         ->addColumn('aksi', function ($produk) {
    //             return '
    //             <div class="btn-group">
    //                 <button type="button" onclick="editForm(`'. route('produk.update', $produk->id_produk) .'`)" class="btn btn-xs btn-info btn-flat"><i class="fa fa-pencil"></i></button>
    //                 <button type="button" onclick="deleteData(`'. route('produk.destroy', $produk->id_produk) .'`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash"></i></button>
    //             </div>
    //             ';
    //         })
    //         ->rawColumns(['aksi', 'id_produk', 'select_all'])
    //         ->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $cluster  = Cluster::all();
        return view('admin.product.create', ["categories" => $category, "clusters" => $cluster]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        if ($request->file('foto')) {
            $foto = $request->foto->getClientOriginalName();
            $request->foto->storeAs('product', $foto, 'public');
            $product->update(['foto' => $foto]);
        }
        
        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $id_produk)
    {
        //$product = Product::find($id_produk);
        // return view('admin.product.index',["products" => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id_produk)
    {
        $category = Category::all();
        $cluster  = Cluster::all();
        $product = Product::find($id_produk);
        return view('admin.product.update', ["products" => $product, "categories" => $category, "clusters" => $cluster]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_produk)
    {
        $product = Product::find($id_produk);
        $product->update($request->all());
        if ($request->hasFile('foto')) {
            $filename = $request->foto->getClientOriginalName();
            $request->foto->storeAs('product', $filename, 'public');
            $product->update(['foto' => $filename]);
        }
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_produk)
    {
        Product::destroy($id_produk);
        return redirect('product');
    }
}
