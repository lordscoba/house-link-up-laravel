<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payments;

class AdminPayments extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

        public function index()
    {

        // $properties = Properties::all();
        $payments = Payments::paginate(5);

        return view('admin.payments.index', [
            'payments' => $payments,
        ]);
    }
}