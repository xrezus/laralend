<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    public function index(OrderRequest $request)
    {
//        dd();

        Mail::to("example@gmail.com")->send(new OrderShipped($request->all()));

    }
}
