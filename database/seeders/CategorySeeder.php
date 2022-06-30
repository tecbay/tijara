<?php

namespace Database\Seeders;

use App\Actions\CreateCategoryAction;
use App\Domain\Manufacturing\DataTransferObjects\CategoryDTO;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{


    protected $categories = [
        "Arts & Crafts"            => ['description' => ''],
        "Automotive"               => ['description' => ''],
        "Baby"                     => ['description' => ''],
        "Beauty & Personal Care"   => ['description' => ''],
        "Books"                    => ['description' => ''],
        "Boys' Fashion"            => ['description' => ''],
        "Computers"                => ['description' => ''],
        "Deals"                    => ['description' => ''],
        "Digital Music"            => ['description' => ''],
        "Electronics"              => [
            'description' => '',
            'children'    => [
                "Accessories"                     => ['description' => ''],
                "Camera Photo"                    => ['description' => ''],
                "Car Vehicle Electronics"         => ['description' => ''],
                "Cell Phones Accessories"         => ['description' => ''],
                "Computers Accessories"           => ['description' => ''],
                "GPS Navigation"                  => ['description' => ''],
                "Portable Audio Video"            => ['description' => ''],
                "Security Surveillance"           => ['description' => ''],
                "Television Video"                => ['description' => ''],
                "Video Game Consoles Accessories" => ['description' => ''],
                "eBook Readers Accessories"       => ['description' => ''],
            ],
        ],
        "Girls' Fashion"           => ['description' => ''],
        "Health & Household"       => ['description' => ''],
        "Home & Kitchen"           => ['description' => ''],
        "Industrial & Scientific"  => ['description' => ''],
        "Kindle Store"             => ['description' => ''],
        "Luggage"                  => ['description' => ''],
        "Men's Fashion"            => ['description' => ''],
        "Movies & TV"              => ['description' => ''],
        "Music, CDs & Vinyl"       => ['description' => ''],
        "Pet Supplies"             => ['description' => ''],
        "Prime Video"              => ['description' => ''],
        "Software"                 => ['description' => ''],
        "Sports & Outdoors"        => ['description' => ''],
        "Tools & Home Improvement" => ['description' => ''],
        "Toys & Games"             => ['description' => ''],
        "Video Games"              => ['description' => ''],
        "Women's Fashion"          => ['description' => ''],
    ];

    public function run()
    {

        foreach ($this->categories as $category => $info) {
            $parent = (new CreateCategoryAction(new CategoryDTO($category, $info['description'], null)))();
            if (isset($info['children'])) {
                foreach ($info['children'] as $category => $info) {
                    (new CreateCategoryAction(new CategoryDTO($category, $info['description'], $parent->uuid)))();
                }
            }
        }
    }


}
