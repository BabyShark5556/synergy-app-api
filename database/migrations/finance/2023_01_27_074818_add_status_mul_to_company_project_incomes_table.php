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
        Schema::table('company_project_incomes', function (Blueprint $table) {
            $table->string('status')->after('amount')->default('income');
            $table->integer('mul')->after('amount')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_project_incomes', function (Blueprint $table) {
            //
        });
    }
};
