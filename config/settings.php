<?php
$credits=array('name'=>"Credits","symbol"=>'C','default_credit_price'=>1);

return [
    'defaults' => [
        'app_name' => 'PB Centralina',
        'app_logo' => '',
        'app_favicon' => '',
        'company_name' => 'PB Centralina',
        'company_email' => 'info@pbcentralina.com',
        'company_phone' => '6976225655',
        'company_address' => 'Efesou 14, Nafplio, Greece',
        'company_zip_code' => '21100',
        'company_city' => 'Nafplio',
        'company_state' => 'Greece',
        'email-configs'=>'',
        'paypal-configs'=>'{"mode":"sandbox","client_id":"ASbMXG_hTZVgeGHudRpgtelXgowjBendgo1JNohlhas7xucMwadEF4m3VkgMn_h8qNpdWudPPPwfuJe0","client_secret":"any","app_id":"any"}',
        'work-time-table'=>'',
        'credit-configs'=>json_encode($credits),
    ],
];
