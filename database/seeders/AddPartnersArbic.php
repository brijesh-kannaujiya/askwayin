<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AddPartnersArbic extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = Partner::all();
        $translationFile = resource_path("lang/1688299864oqIjFrT6.json");
        $translations = json_decode(File::get($translationFile), true);
        $languageTranslations = $translations;
        foreach ($datas as $key => $data) {
            $name_arbic = isset($languageTranslations[$data->brand_name]) ? $languageTranslations[$data->brand_name] : $data->title;
            $update = Partner::find($data->id);
            $update->brand_name_arbic = $name_arbic;
            $update->save();
        }
    }
}
