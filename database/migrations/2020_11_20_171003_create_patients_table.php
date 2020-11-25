<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pname');
            $table->string('pemail')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('pphone');
            $table->string('paddress');
            $table->string('pbday');
            $table->string('poccupation');
            $table->string('pblood');
            $table->string('palmedicine');
            $table->string('pgender');
            $table->string('pstatus');
            
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
        Schema::dropIfExists('patients');
    }
}
