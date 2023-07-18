<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invest_transaction', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date');
            $table->decimal('fund_size',10,2);
            $table->foreignId('visit_id')->nullable();
            $table->foreignId('account_id')->nullable();
            $table->foreignId('invest_id')->nullable();
            
            $table->softDeletes();
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
        Schema::dropIfExists('invest_transaction');
    }
};
