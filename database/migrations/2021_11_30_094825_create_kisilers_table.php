<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKisilersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kisilers', function (Blueprint $table) {
          $table->id();
         $table->string('name');
         $table->string('surname');
         $table->string('phone');
         $table->string('email')->unique();
         $table->string('sehirid');
         $table->string('selflink');
         //$table->timestamp('email_verified_at')->nullable();
         //$table->string('password');
         //$table->rememberToken();
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
        Schema::dropIfExists('kisilers');
    }
}
