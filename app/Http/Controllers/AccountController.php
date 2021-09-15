<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public function store(Request $request)
    {
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
