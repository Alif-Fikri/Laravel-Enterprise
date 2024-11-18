<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;


class ProductController extends Controller
{
    public function ViewProduct()
    {
        $product = Product::all();
        return view('product',['product'=>$product]);
    }
    public function CreateProduct(Request $request){
        $imageName = null;
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time(). '_'. $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName);
        }
        Product::create([
            'nama_produk'=> $request->nama_produk,
            'deskripsi'=> $request->deskripsi,
            'harga'=> $request->harga,
            'jumlah_produk'=> $request->jumlah_produk,
            'image' => $imageName
        ]);
        return redirect('/product');
    }
    public function ViewAddProduct(){
        return view('addproduct');
    }
    public function DeleteProduct($kode_produk){
        Product::where('kode_produk', $kode_produk)->delete();

        return redirect('/product');
    }

    public function ViewEditProduct($kode_produk){
        $ubahproduk = Product::where('kode_produk', $kode_produk)->first();
        return view('editproduct', compact('ubahproduk'));
    }

    public function UpdateProduct(Request $request, $kode_produk){
        $imageName = null;
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time(). '_'. $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName);
        }
        Product::where('kode_produk', $kode_produk)->update([
            'nama_produk'=> $request->nama_produk,
            'deskripsi'=> $request->deskripsi,
            'harga'=> $request->harga,
            'jumlah_produk'=> $request->jumlah_produk,
            'image'=> $imageName
        ]);
        return redirect('/product');
    }
}
