<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view('adminpages.admin');
    }
    public function addCategory(){
        return view('adminpages.category.addCategory');  
    }
    public function editCategory(){
        return view('adminpages.category.editCategory');  
    }
    public function allCategory(){
        return view('adminpages.category.allCategory');  
    }
    public function allOrder(){
        return view('adminpages.order.allOrder');  
    }
    public function editOrder(){
        return view('adminpages.order.editOrder');  
    }
    public function settingsForm(){
        return view('adminpages.settings.form');  
    }
    public function editProduct(){
        return view('adminpages.product.editProduct');  
    }
    public function allProduct(){
        return view('adminpages.product.allProduct');  
    }
    public function addProduct(){
        return view('adminpages.product.addProduct');  
    }
}
