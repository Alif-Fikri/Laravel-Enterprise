<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;


class ProdukController extends Controller
{
    public function ViewProduk()
    {
        $produk = Produk::all();
        return view('product',['produk'=>$produk]);
    }
    public function CreateProduk(Request $request){
        $imageName = null;
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time(). '_'. $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName);
        }
        Produk::create([
            'nama_produk'=> $request->nama_produk,
            'deskripsi'=> $request->deskripsi,
            'harga'=> $request->harga,
            'jumlah_produk'=> $request->jumlah_produk,
            'image' => $imageName
        ]);
        return redirect('/produk');
    }
    public function ViewAddProduk(){
        return view('addproduct');
    }
    public function DeleteProduk($kode_produk){
        Produk::where('kode_produk', $kode_produk)->delete();

        return redirect('/produk');
    }

    public function ViewEditProduk($kode_produk){
        $ubahproduk = Produk::where('kode_produk', $kode_produk)->first();
        return view('editproduct', compact('ubahproduk'));
    }

    public function UpdateProduk(Request $request, $kode_produk){
        $imageName = null;
        if($request->hasFile('image')){
            $imageFile = $request->file('image');
            $imageName = time(). '_'. $imageFile->getClientOriginalName();
            $imageFile->storeAs('public/images', $imageName);
        }
        Produk::where('kode_produk', $kode_produk)->update([
            'nama_produk'=> $request->nama_produk,
            'deskripsi'=> $request->deskripsi,
            'harga'=> $request->harga,
            'jumlah_produk'=> $request->jumlah_produk,
            'image'=> $imageName
        ]);
        return redirect('/produk');
    }
    public function ViewLaporan(){
        $products = Produk::all();
        return view('Laporan', ['products'=>$products]);
    }
    public function print(){
        $products = Produk::all();
        $pdf = Pdf::loadView('report', compact('products'));
        return $pdf->stream('laporan-produk.pdf');
    }
}
