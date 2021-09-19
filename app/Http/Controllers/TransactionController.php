<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Foundation\Validation\ValidatesRequests;

class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $this->validate($request,[
            'account_id' => ['required'],
            'operation_type_id' => ['required'],
            'amount' => ['required']
        ]);
        $data = $request->request->all();
        $transaction = Transaction::create($data);
        return response()->json($transaction);
    }
}
