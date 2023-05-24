<?php

namespace App\Http\Controllers\Admin;


use App\Models\Subscribe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Exports\Subscribers_Export;
use Maatwebsite\Excel\Facades\Excel;



class SubscribeController extends Controller
{
    public function index()
    {
        $subscribers = Subscribe::orderBy('id','asc')->get();
        return view('admin.subscribers.index',compact('subscribers'));
    }

    public function excel()
    {
        return Excel::download(new Subscribers_Export, 'subscribers.xlsx');
    }

}
