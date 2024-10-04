<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Product;

class SellerController extends Controller
{
    //one to one
    function list(){
        return Seller::find(1)->ProductData;
    }

    // one to many

    function manyRel(){
        return Seller::find(1)->ProductMany;
    }

    //many to one
    function manyToOne(){
        return Product::with('seller')->get();
    }

}
