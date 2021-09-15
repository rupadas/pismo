<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->request->all();
        $transaction = Transaction::create($data);
        return response()->json($transaction);
    }
}
