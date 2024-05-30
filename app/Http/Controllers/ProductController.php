<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->get();
        $total = Product::count();
        return view('admin.product.home', compact(['products', 'total']));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function save(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'city' => 'required',
            'postbox' => 'required',
            'officeaddress' => 'required',
            'phone' => 'required',
        ]);
        $data = Product::create($validation);
        if ($data) {
            session()->flash('success', 'Product Add Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin.products/create'));
        }
    }
    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('admin.product.update', compact('products'));
    }

    public function delete($id)
    {
        $products = Product::findOrFail($id)->delete();
        if ($products) {
            session()->flash('success', 'Product Deleted Successfully');
            return redirect(route('admin/products/'));
        } else {
            session()->flash('error', 'Product Not Delete successfully');
            return redirect(route('admin/products/'));
        }
    }

    public function update(Request $request, $id)
    {
        $products = Product::findOrFail($id);
        $name = $request->name;
        $email = $request->email;
        $address = $request->address;
        $city = $request->city;
        $postbox = $request->bostbox;
        $officeaddress = $request->officeaddress;
        $phone = $request->phone;



        $products->name = $name;
        $products->email = $email;
        $products->address = $address;
        $products->city = $city;
        $products->postbox = $postbox;
        $products->officeaddress = $officeaddress;
        $products->phone = $phone;
        $data = $products->save();
        if ($data) {
            session()->flash('success', 'Product Update Successfully');
            return redirect(route('admin/products'));
        } else {
            session()->flash('error', 'Some problem occure');
            return redirect(route('admin/products/update'));
        }
    }
}



