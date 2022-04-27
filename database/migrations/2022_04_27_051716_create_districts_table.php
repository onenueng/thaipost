<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
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
            $table->string('namethai',125);
            $table->string('nameeng',125);
            $table->timestamps();
        });

        District::create(['code' => 1004, 'namethai' => 'บางรัก','nameeng' =>'Bang Rak']);
        District::create(['code' => 1018, 'namethai' => 'คลองสาน','nameeng' =>'Klong San']);
        District::create(['code' => 6105, 'namethai' => 'อำเภอหนองขาหย่าง','nameeng' =>'Amphoe Nong Khayang']);
        District::create(['code' => 6106, 'namethai' => 'อำเภอบ้านไร่','nameeng' =>'Amphoe Ban Rai']);
        District::create(['code' => 3101, 'namethai' => 'อำเภอเมืองบุรีรัมย์','nameeng' =>'Amphoe Mueang Buri Ram']);
        District::create(['code' => 3110, 'namethai' => 'อำเภอลำปลายมาศ','nameeng' =>'Amphoe Lam Plai Mat']);
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
