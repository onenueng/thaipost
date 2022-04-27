<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema; 
use App\Models\Province;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('code');
            $table->string('namethai',125)->unique();
            $table->string('nameeng',125)->unique();
            $table->timestamps();
        });

        Province::create(['code' => 10, 'namethai' => 'กรุงเทพมหานคร','nameeng' =>'Bangkok']);
        Province::create(['code' => 61, 'namethai' => 'อุทัยธานี','nameeng' =>'Uthai Thani']);
        Province::create(['code' => 31, 'namethai' => 'บุรีรัมย์','nameeng' =>'Buri Ram']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
    }
};
