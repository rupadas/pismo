<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\OperationType;

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
        $data['amount'] = - abs($data['amount']);
        $operationType = OperationType::findOrFail($data['operation_type_id']);
        if(!is_null($operationType) && $operationType->description == OperationType::CREDIT_VOUCHER) {
            $data['amount'] = abs($data['amount']);
        }
        var_dump($data);
        $transaction = Transaction::create($data);
        return response()->json($transaction);
    }
}
