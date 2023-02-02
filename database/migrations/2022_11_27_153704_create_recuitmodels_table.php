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
        Schema::create('recuitmodels', function (Blueprint $table) {
            $table->bigIncrements('recuit_id');
            $table->string('rcuit_name',100)->nullable();
            $table->string('rcuit_fathername',100)->nullable();
            $table->string('rcuit_mothername',100)->nullable();
            $table->string('rcuit_remarks',100)->nullable();
            $table->string('bscyear',100)->nullable();
            $table->string('bsccgpa',100)->nullable();
            $table->string('sscyear',100)->nullable();
            $table->string('ssccgpa',100)->nullable();
            $table->string('hscyear',100)->nullable();
            $table->string('hsccgpa',100)->nullable();
            $table->string('mscyear',100)->nullable();
            $table->string('msccgpa',100)->nullable();
            $table->string(' address',200)->nullable();
            $table->string(' email',100)->nullable();
            $table->string(' phone',100)->nullable();
            $table->string(' experience',100)->nullable();
            $table->string('rcuit_slug',75)->nullable();

            $table->integer('role_status')->default(1);
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
        Schema::dropIfExists('recuitmodels');
    }
};
