<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Skate;
use App\Http\Controllers\Controller;

class Front extends Controller {

    var $brands;
    var $categories;
    var $skates;
    var $description;

    public function __construct() {
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->skates = Skate::all(array('id','name','price'));
    }

    public function index() {
        return view('home', array('page' => 'home'));
    }

    public function products() {
        return view('products', array('description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->skates));
    }

    public function product_details($id) {
        $product = Product::find($id);
        return view('product_details', array('product' => $product, 'title' => $product->name,'description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_categories($name) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('title' => 'Welcome','description' => '','page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function blog() {
        return view('blog', array('page' => 'blog'));
    }

    public function blog_post($id) {
        return view('blog_post', array('page' => 'blog'));
    }

    public function contact_us() {
        return view('contact_us', array('page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('page' => 'home'));
    }

    public function logout() {
        return view('login', array('page' => 'home'));
    }

    public function cart() {
        return view('cart', array('page' => 'home'));
    }

    public function checkout() {
        return view('checkout', array('page' => 'home'));
    }

    public function search($query) {
        return view('products', array('page' => 'products'));
    }

}