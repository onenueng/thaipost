<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\District;
use App\Models\Subdistrict;

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
            $table->string('namethai',125)->unique();
            $table->string('nameeng',125)->unique();
            $table->string('postcode',5)->index();
            $table->foreignId('district_id')->constrained();
            $table->timestamps();
        });

        $br = District::where('code', 1004)->first();
        Subdistrict::create(['code' =>100402, 'namethai' => 'แขวงสีลม','nameeng' =>'Khwaeng Si Lom', 'postcode' =>'10500',  'district_id' => $br->id]);
        Subdistrict::create(['code' =>100403, 'namethai' => 'แขวงสุริยวงศ์','nameeng' =>'Khwaeng Suriyawong', 'postcode' =>'10500', 'district_id' => $br->id]);

        $kl = District::where('code',1018)->first();
        Subdistrict::create(['code' =>101802, 'namethai' => 'แขวงคลองสาน','nameeng' =>'Khwaeng Khlong San','postcode' =>'10600', 'district_id' => $kl->id]);
        Subdistrict::create(['code' =>101803, 'namethai' => 'แขวงบางลำภูล่าง','nameeng' =>'Khwaeng Bang Lamphu Lang', 'postcode' =>'10600','district_id' => $kl->id]);

        $nk = District::where('code',6105)->first();
        Subdistrict::create(['code' =>610501, 'namethai' => 'หนองขาหย่าง','nameeng' =>'Nong Khayang', 'postcode' =>'61130', 'district_id' => $nk->id]);
        Subdistrict::create(['code' =>610502, 'namethai' => 'หนองไผ่','nameeng' =>'Nong Phai', 'postcode' =>'61130', 'district_id' => $nk->id]);

        $ba = District::where('code',6106)->first();
        Subdistrict::create(['code' =>610601, 'namethai' => 'บ้านไร่','nameeng' =>'Ban Rai', 'postcode' =>'61140', 'district_id' => $ba->id]);
        Subdistrict::create(['code' =>610602, 'namethai' => 'ทัพหลวง','nameeng' =>'Thap Luang', 'postcode' =>'61140', 'district_id' => $ba->id]);

        $bur = District::where('code',3101)->first();
        Subdistrict::create(['code' =>310112, 'namethai' => 'พระครู','nameeng' =>'Phra Khru', 'postcode' =>'31000', 'district_id' => $bur->id]);
        Subdistrict::create(['code' =>310119, 'namethai' => 'บัวทอง','nameeng' =>'Bua Thong',  'postcode' =>'31000','district_id' => $bur->id]);

        $lp = District::where('code',3110)->first();
        Subdistrict::create(['code' =>311001, 'namethai' => 'ลำปลายมาศ','nameeng' =>'Lam Plai Mat', 'postcode' =>'31130',  'district_id' => $lp->id]);
        Subdistrict::create(['code' =>311003, 'namethai' => 'แสลงพัน','nameeng' =>'Salaeng Phan',  'postcode' =>'31130', 'district_id' => $lp->id]);
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
