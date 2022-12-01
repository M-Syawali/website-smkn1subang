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
        Schema::create('dataguru', function (Blueprint $table) {
            $table->id();
            $table->string('nip',25)->unique();
            $table->string('namaguru',25);
            $table->string('jk',25);
            $table->string('mapel',25);
            $table->string('walikelas',25);
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
        Schema::dropIfExists('pesertadidik');
    }
};
