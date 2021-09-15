<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\OperationType;


class OperationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OperationType::create([
            'description' => 'Normal Purchase'
        ]);

        OperationType::create([
            'description' => 'Purchase with installments'
        ]);

        OperationType::create([
            'description' => 'Withdrawal'
        ]);
        OperationType::create([
            'description' => 'Credit Voucher'
        ]);
    }
}
