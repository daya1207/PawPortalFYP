<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('hosting_applications', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone');
        $table->integer('number_of_cats')->nullable();
        $table->string('email')->nullable();
        $table->string('breed')->nullable();
        $table->text('additional_info')->nullable();
        $table->date('start_date')->nullable();
        $table->date('end_date')->nullable();
        $table->timestamps();
    });
}
};
