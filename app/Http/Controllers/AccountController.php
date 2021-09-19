<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Foundation\Validation\ValidatesRequests;

class AccountController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $this->validate($request,[
            'document_number' => ['required', 'unique:accounts', 'max:255']
        ]);
        $data = $request->request->all();
        $account = Account::create($data);
        return response()->json($account);
    }

    public function show($id)
    {
        $account = Account::findOrFail($id);
        return response()->json($account);
    }
}
