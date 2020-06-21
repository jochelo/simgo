<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUfvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ufvs', function (Blueprint $table) {
            $table->id('idufv');
            $table->date('ufv_fecha')->unique();
            $table->float('ufv_valor',6,5);
            $table->float('dolar_valor',6,2);
            $table->float('euro_valor',6,2);

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
        Schema::dropIfExists('ufvs');
    }
}
