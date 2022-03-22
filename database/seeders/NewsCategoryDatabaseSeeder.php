<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Modules\News\Entities\Category;

class NewsCategoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['गृहपृष्ठ', 'न्यायालय अप्डेट', 'विचार', 'कानुन सम्वाद', 'कानुन कलेज', 'ऐन / फैसला व्याख्या', 'व्यक्तित्व विशेष', 'संस्मरण', 'पुस्तक समीक्षा','	ल फर्म'];
        $slug = ['गृहपृष्ठ', 'न्यायालय_अप्डेट', 'विचार', 'कानुन_सम्वाद', 'कानुन_कलेज', 'ऐन-फैसला-व्याख्या', 'व्यक्तित्व-विशेष', 'संस्मरण', 'पुस्तक-समीक्षा','	ल-फर्म'];
        Model::unguard();
        foreach ($titles as $key => $title)
            Category::create(
                ['title' => $title,
                    'slug' => $slug[$key],
                    'user_id' => 1,
                    'order' => $key
                ]);
    }
}
//  'title',
//        'slug',
//        'user_id',
//        'order'
//न्यायालय अप्डेट
//विचार
//कानुन सम्वाद
//कानुन कलेज
//ऐन / फैसला व्याख्या
//व्यक्तित्व विशेष
//संस्मरण
//पुस्तक समीक्षा
