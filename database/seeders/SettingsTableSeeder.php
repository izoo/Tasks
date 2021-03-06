<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Config;
use App\Models\Setting;

class SettingsTableSeeder extends Seeder
{

    /**
     * @var array
     */
    protected $settings = [
        [
            'key' => 'site_name',
            'value' => 'E-Commerce Application',
        ],
        [
            'key' => 'site_title',
            'value' => 'E-commerce',
        ],
        [
            'key' => 'default_email_address',
            'value' => 'admin@admin.com'
        ],
        [
            'key' => 'currency_code',
            'value' => 'Kshs'
        ],
        [
            'key' => 'currency_symbol',
            'value' => '$',
        ],
        [
            'key' => 'site_logo',
            'value' => '',
        ],
        [
            'key' => 'site_favicon',
            'value' => '',
        ],
        [
            'key' => 'footer_copyright_text',
            'value' => '',
        ],
        [
            'key' => 'seo_meta_title',
            'value' => '',
        ],
        [
            'key' => 'seo_meta_description',
            'value' => '',
        ],
        [
            'key' => 'social_facebook',
            'value' => '',
        ],
        [
            'key' => 'social_twitter',
            'value' => '',
        ],
        [
            'key' => 'social_instagram',
            'value' => '',
        ],
        [
            'key' => 'social_linkedin',
        ],
        [
            'key'                       =>  'google_analytics',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'facebook_pixels',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'stripe_secret_key',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_payment_method',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_client_id',
            'value'                     =>  '',
        ],
        [
            'key'                       =>  'paypal_secret_id',
            'value'                     =>  '',
        ],

       
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        foreach($this->settings as $index => $setting)
        $result = Setting::create($setting);
        if(!$result)
        {
            $this->command->info("Insert failed at record $index .");
            return;
        }
        $this->command->info('Inserted'  . count($this->settings) . 'records');
    }

    /**
     * @param $key
     */
    public static function get($key)
    {
        $setting = new self();
        $entry = $setting->where('key',$key)->first();
        if(!$entry)
        {
            return ;
        }
        return $entry->value;
    }
    
    /**
     *@param $key
     *@param null $value
     *@return bool
     */
    public static function set($key,$value=null)
    {
        $setting = new self();
        $entry = $setting->where('key',$key)->firstOrFail();
        $entry->value = $value;
        $entry->saveOrFail();
        Config::set('key',$value);
        if(Config::get($key) == $value)
        {
            return true;
        }
        return false;
    }
}
