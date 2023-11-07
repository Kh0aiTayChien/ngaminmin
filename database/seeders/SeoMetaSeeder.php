<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoMetaSeeder extends Seeder
{
    public function run()
    {
        DB::table('seo_metas')->insert([
            'title' => 'NgaMinMin',
            'description' => 'Xây dựng độc lập, tự chủ để nâng tầm chất lượng cuộc sống dù bạn là ai, ở đâu hay đội tuổi nào',
            'canonical_url' => 'https://ngaminmin.vn',
            'og_description' => 'Xây dựng độc lập, tự chủ để nâng tầm chất lượng cuộc sống dù bạn là ai, ở đâu hay đội tuổi nào.',
            'og_title' => 'NgaMinMin',
            'og_url' => 'https://ngaminmin.vn',
            'og_type' => 'blog',
            'og_image' => 'https://ngaminmin.vn/images/nga-min/sec3/34.jpg',
            'twitter_title' => 'MinMinCare',
            'twitter_site' => '',
            'jsonld_description' => 'Hàng đầu Việt Nam về sản phẩm ngũ cốc dinh dưỡng và sức khỏe cho gia đình Việt.',
            'jsonld_image' => 'https://ngaminmin.vn/images/nga-min/sec3/34.jpg'
        ]);
    }
}
