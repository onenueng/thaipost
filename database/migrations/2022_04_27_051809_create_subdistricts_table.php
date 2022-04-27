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
        Schema::create('subdistricts', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('code');
            $table->string('namethai',125);
            $table->string('nameeng',125);
            $table->timestamps();
        });

        Subdistrict::create(['code' =>100402 , 'namethai' => 'แขวงสีลม','nameeng' =>'Khwaeng Si Lom']);
        Subdistrict::create(['code' =>100403 , 'namethai' => 'แขวงสุริยวงศ์','nameeng' =>'Khwaeng Suriyawong']);
        Subdistrict::create(['code' =>101802 , 'namethai' => 'แขวงคลองสาน','nameeng' =>'Khwaeng Khlong San']);
        Subdistrict::create(['code' =>101803 , 'namethai' => 'แขวงบางลำภูล่าง','nameeng' =>'Khwaeng Bang Lamphu Lang']);
        Subdistrict::create(['code' =>610501 , 'namethai' => 'หนองขาหย่าง','nameeng' =>'Nong Khayang']);
        Subdistrict::create(['code' =>610502 , 'namethai' => 'หนองไผ่','nameeng' =>'Nong Phai']);
        Subdistrict::create(['code' =>610601 , 'namethai' => 'บ้านไร่','nameeng' =>'Ban Rai']);
        Subdistrict::create(['code' =>610602 , 'namethai' => 'ทัพหลวง','nameeng' =>'Thap Luang']);
        Subdistrict::create(['code' =>310112, 'namethai' => 'พระครู','nameeng' =>'Phra Khru']);
        Subdistrict::create(['code' =>310119, 'namethai' => 'บัวทอง','nameeng' =>'Bua Thong']);
        Subdistrict::create(['code' =>311001, 'namethai' => 'ลำปลายมาศ','nameeng' =>'Lam Plai Mat']);
        Subdistrict::create(['code' =>311003, 'namethai' => 'แสลงพัน','nameeng' =>'Salaeng Phan']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subdistricts');
    }
};
