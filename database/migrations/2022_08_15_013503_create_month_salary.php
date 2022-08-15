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
        Schema::create('month_salary', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('month')->nullable();
            $table->bigInteger('employee_id')->nullable();
            $table->double('basic_salary', 15, 3)->nullable();
            $table->double('salary_allowance', 15, 3)->nullable();
            $table->double('gross_pay', 15, 3)->nullable();
            $table->double('epf', 15, 3)->nullable();
            $table->double('net_salary', 15, 3)->nullable();
            $table->bigInteger('add_by')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('month_salary');
    }
};
