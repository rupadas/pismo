<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('document_number');
            $table->timestamps();
        });
        Schema::create('operation_types', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->timestamps();
        });
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('account_id');
            $table->integer('operation_type_id');
            $table->decimal('amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
        Schema::dropIfExists('operation_types');
        Schema::dropIfExists('transactions');
    }
}
