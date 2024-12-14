<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_names[] = '';
        $category_names[1] = '文芸';
        $category_names[2] = '教養';
        $category_names[3] = '人文';
        $category_names[4] = '教育';
        $category_names[5] = '社会';
        $category_names[6] = '法律';
        $category_names[7] = '経済';
        $category_names[8] = '経営';
        $category_names[9] = 'ビジネス';
        $category_names[10] = '就職・資格';
        $category_names[11] = '理学';
        $category_names[12] = '工学';
        $category_names[13] = 'コンピュータ';
        $category_names[14] = '医学';
        $category_names[15] = '看護学';
        $category_names[16] = '薬学';
        $category_names[17] = '芸術';
        $category_names[18] = '語学';
        $category_names[19] = '辞典';
        $category_names[20] = '児童';
        $category_names[21] = '趣味・生活';
        $category_names[22] = 'くらし・料理';
        $category_names[23] = '地図・ガイド';
        $category_names[24] = '文庫';
        $category_names[25] = 'コミック';
        $category_names[26] = 'ゲーム攻略本';
        $category_names[27] = 'エンターテイメント';

        foreach ($category_names as $key => $val) {
            Category::create([
                'category_name' => $val,
                'display_order' => $key,
            ]);
        }
    }
}