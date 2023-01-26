<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProjectIncomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_project_incomes', function (Blueprint $table) {
            $table->id();
            $table->date('income_date');
            $table->string('note', 250)->nullable();
            $table->double('amount')->default(0);
            $table->unsignedBigInteger('company_project_id');
            $table->foreign('company_project_id')
                ->references('id')->on('company_projects')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_project_incomes');
    }
}
