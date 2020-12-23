<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            "default_local"           => "ar",
            "default_time_zone"       => "Afirca/Cairo",
            "reviews_enable"          => true,
            "auto_aprove_reviews"     => true,
            "supported_currencies"    => ['USD','LE','SAR'],
            "default_currency"        => 'USD' ,
            "store_email"             => 'admin@ecommerce.com' ,
            "search_engine"           => 'mysql' ,
            "local_shipping_cost"     => 0 ,
            "outer_shipping_cost"     => 0 ,
            "free_shipping_cost"      => 0 ,
            "translatable"            => [
                   'store_name'              =>  "Minesy store",
                   'free_shipping_label'     =>  "Free shipping",
                   'local_shipping_label'    =>  "Local store",
                   'outer_shipping_label'    =>  "Outer store",
            ] ,

        ]);
    }
}
