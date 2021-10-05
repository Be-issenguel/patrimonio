<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateBancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bancos', function (Blueprint $table) {
            $table->id();
            $table->string('designacao');
            $table->timestamps();
        });

        DB::table('bancos')->insert([
            ['designacao' => 'BFA', 'created_at' => now(), 'updated_at' => now()],
            ['designacao' => 'BAI', 'created_at' => now(), 'updated_at' => now()],
            ['designacao' => 'ECONÔMICO', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bancos');
    }
}
