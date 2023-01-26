<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_projects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('detail', 250)->nullable();
            $table->unsignedBigInteger('company_product_id');
            $table->foreign('company_product_id')
                ->references('id')->on('company_products')
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
        Schema::dropIfExists('company_projects');
    }
}
