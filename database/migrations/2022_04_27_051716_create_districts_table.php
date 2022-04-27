<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Province;
use App\Models\District;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('code');
            $table->string('namethai',125)->unique();
            $table->string('nameeng',125)->unique();
            $table->foreignID('province_id')->constrained();

            $table->timestamps();
        });

        $bk = Province::where('code',10)->first();
        District::create(['code' => 1004, 'namethai' => 'บางรัก','nameeng' =>'Bang Rak', 'province_id' => $bk->id]);
        District::create(['code' => 1018, 'namethai' => 'คลองสาน','nameeng' =>'Klong San', 'province_id' => $bk->id]);

        $ut = Province::where('code',61)->first(); 
        District::create(['code' => 6105, 'namethai' => 'อำเภอหนองขาหย่าง','nameeng' =>'Amphoe Nong Khayang', 'province_id' => $ut->id]);
        District::create(['code' => 6106, 'namethai' => 'อำเภอบ้านไร่','nameeng' =>'Amphoe Ban Rai', 'province_id' => $ut->id]);

        $bu = Province::where('code',31)->first();
        District::create(['code' => 3101, 'namethai' => 'อำเภอเมืองบุรีรัมย์','nameeng' =>'Amphoe Mueang Buri Ram', 'province_id' => $bu->id]);
        District::create(['code' => 3110, 'namethai' => 'อำเภอลำปลายมาศ','nameeng' =>'Amphoe Lam Plai Mat', 'province_id' => $bu->id]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('districts');
    }
};
