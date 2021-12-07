<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smartphone;
use App\Models\Noutbook;
use App\Models\Monoblok;
use App\Models\Naushniki;

class ProductsController extends Controller
{
    public function listProducts() {
        $smartphones = Smartphone::all();
        return view('site.products', ['smartphones' => $smartphones]);
    }

    public function productNoutbooks() {
        $noutbooks = Noutbook::all();
        return view('site.product_noutbooks', ['noutbooks' => $noutbooks]);
    }

    public function productMonobloks() {
        $monobloks = Monoblok::all();
        return view('site.product_monobloks', ['monobloks' => $monobloks]);
    }

    public function productNaushniki() {
        $naushniki = Naushniki::all();
        return view('site.product_naushniki', ['naushniki' => $naushniki]);
    }
}
