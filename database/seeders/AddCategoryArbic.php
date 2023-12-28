<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class AddCategoryArbic extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function run()
    {
        $datas = Category::all();
        $translationFile = resource_path("lang/1688299864oqIjFrT6.json");
        $translations = json_decode(File::get($translationFile), true);
        $languageTranslations = $translations;
        foreach ($datas as $key => $data) {
            $name_arbic = isset($languageTranslations[$data->title]) ? $languageTranslations[$data->title] : $data->title;
            $update = Category::find($data->id);
            $update->title_arbic = $name_arbic;
            $update->save();
        }
    }
}
