<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    public  $product;
    public function index()
    {
        $data['products']=Product::paginate(10);
        return view('admin.products.index',$data);
    }
    public function create()
    {
        $data['product']=new Product;
        return view('admin.products.create',$data);
    }

    public function edit(Product $product)
    {
        $data['product']=$product;
        return view('admin.products.create',$data);

    }

    public function update(Product $product)
    {
        $product->jina=request("jina");
        $product->maelezo=request("maelezo");
        $product->bei=request("bei");
        if (request()->hasFile('picha'))
        {
            //delete the existing picture
            Storage::delete($product->picha??'');
            //save uploaded picture
            $product->picha=request('picha')->store('picha');

            //overwrite image path
        }
        $product->save();

        return redirect('/admin/products');
    }

    public function store()
    {
        $product=new Product();
        $product->jina=request()->jina;
        $product->maelezo=request()->maelezo;
        $product->bei=request()->bei;
        if (request()->hasFile('picha'))
        {
            $product->picha=request('picha')->store('picha');
        }

        $product->save();

        return redirect("admin/products");
        //return request()->all();
    }
    public function destroy(Product $product)
    {
        Storage::delete($product->picha??'');
        $product->delete();
        return redirect('/admin/products');

    }
}
