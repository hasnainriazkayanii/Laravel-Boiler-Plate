<?php


return [

    'menu' => [
        'home' => 'Home',
        'dashboard' =>  'Dashboard',
        'vehicle_catalogue' => 'Vehicle Catalogue',
        'vehicle_types' => 'Vehicle Types',
        'users' => 'Users',
        'manufacturers' => 'Manufacturers',
        'vehicle_manufacturers' => 'Vehicle Manufacturers',
        'vehicle_models' => 'Vehicle Models',
        'vehicle_engines' => 'Vehicle Engines',
        'item'=>'Items',
        'items' => 'Services',
        'items_list'=>'Tunning Services',
        'item_prices'=>'Tunning Services Price',
        'tunning_items'=>'Tunning Services',
        'tunning_items_price'=>'Tunning Services Price',
        'administration' => 'Administration',
        'roles' => 'Roles',
        'system_settings' => 'System Settings',
        'profile'=>"Profile",
        'packages'=>'Packages',
        'work_time_table'=>'Work Time Table',
        'settings'=>'Settings',
        'paypal_settings'=>'Paypal Settings',
        'credit_settings'=>'Credit Settings',
        'general_settings'=>'General Settings',
        'email_settings'=>'Email Settings',
        'manage_users'=>"Manage Users",
        'manage_roles'=>'Manage Roles',
        'manage_settings'=>'Manage Settings',
        'list'=>'List',
        'email_configuration'=>"Email Configuration",
        'paypal_configuration'=>'Paypal Configuration',
        'credit_configuration'=>'Credit Configuration',
        'profile'=>'Profile',
        'customers' => 'Customer',
        'ecu_type'=>"Ecu Type",
        'orders' => 'Orders',
        'transcations' => 'Transactions',
        'email_templates' => 'Email Templates',
        'transactions' => 'Transactions',
        'tickets'=>'Tickets',
        'payment_details'=>'Payment Details',
        'order_details'=>'Order Details',
        'items_category'=>'Service Category',
        'blog_category'=>'Blog Categories',
        'blog'=>'Blog',
        'blog_post'=>'Blog Post',
        'posts'=>'Posts',

    ],

    'forms'=>[
        'labels'=>[
            'vehicle_types'=>[
                'type_name'=>'Type Name',
            ],
            'manufacturers'=>[
                'name'=>'Name',
                'vehicle_type'=>'Vehicle Type'
            ],
            'vechile_models'=>[
                'name'=>'Name',
                'manufacturer'=>'Manufacturer',
                'model_engines'=>'Vehicle Engines'
            ],
            'vechile_engines'=>[
                'name'=>'Name',
                'engine_number'=>'Engine Number',
                'engine_type'=>'Engine Type',
            ],
            'packages'=>[
                'name'=>'Name',
                'credits'=>'Credits',
                'cost_per_credit'=>'Cost Per Credit',
            ],
            'tunning_items'=>[
                'name'=>'Name',
                'note'=>'Note',
                'description'=>'Description',
                'cat_name'=>'Category',
            ],
            'tunning_items_prices'=>[
                'item'=>'Item',
                'model'=>'Model',
                'engine'=>'Engine',
                'cost'=>'Cost',
                'ecu_type' => 'Ecu type'
            ],
            'users'=>[
                'name'=>'Name',
                'role'=>'Role',
                'email'=>'Email',
            ],
            'roles'=>[
                'name'=>'Name',
            ],
            'general_settings'=>[
                'company_name'=>'Company Name',
                'company_email'=>'Company Email',
                'company_phone'=>'Company Phone',
                'company_city'=>'Company City',
                'company_state'=>'Company State',
                'zip_code'=>'Zip Code',
                'company_address'=>'Company Address'
            ],
            'email_settings'=>[
                'mailer'=>"Mailer",
                'smtp_host'=>'SMTP Host',
                'port'=>'Port',
                'user_name'=>'User Name',
                'password'=>'Password',
                'encryption'=>'Encryption',
                'sender_name'=>'Sender Name',
                'sender_email'=>"Sender Email",
            ],
            'paypal_settings'=>[
                'mode'=>"Mode",
                'client_id'=>'Client ID',
                'client_secret'=>'Client Secret',
                'app_id'=>'App ID',
            ],
            'credit_settings'=>[
                'rate'=>"Rate",
                'name'=>'Name',
                'symbol'=>'Symbol',
            ],
            'time_table'=>[
                'monday'=>'Monday',
                'tuesday'=>'Tuesday',
                'wednesday'=>'Wednesday',
                'thursday'=>'Thursday',
                'friday'=>'Friday',
                'saturday'=>'Saturday',
                'sunday'=>"Sunday",
                'from'=>'from',
                'to'=>'To',
                'not_working'=>'Not Working',

            ],
            'profile'=>[
                'full_name'=>'Full Name',
                'email'=>"Email",
                'password'=>'Password'
            ],
            'ecu_type'=>[
                'name'=>"Name",
                'number'=>'Ecu Number',
                'model'=>"Model",
                "engine"=>"Engine",
            ],
            'orders'=>[
                'modified_file'=>'Modified file',
            ],
            'items_category'=>[
                'name'=>"Name",
            ],
            'blog_category'=>[
                'name'=>"Name",
                'slug'=>'slug',
            ],
            'blog'=>[
                'title'=>"Title",
                'category'=>'Category',
                'status'=>'Status',
                'content'=>'Content',
                'feature_image'=>'Feature Image',
            ],

        ],
        'titles'=>[
            'vehicle_types'=>[
                'new_vehicle_type'=>'Add New Vehicle Type',
                'edit_vehicle_type'=>'Edit Vehicle Type',
            ],
            'manufacturers'=>[
                'new_manufacturer'=>'Add New Manufacturer',
                'edit_manufacturer'=>'Edit Manufacturer',
            ],
            'vechile_models'=>[
                'new_model'=>'Add New Model',
                'edit_model'=>'Edit Model',
            ],
            'vechile_engines'=>[
                'new_engine'=>'Add New Engine',
                'edit_engine'=>'Edit Engine',
            ],
            'packages'=>[
                'new_package'=>'New Package',
                'edit_package'=>'Edit Package',
            ],
            'tunning_items'=>[
                'new_tunning_items'=>'New Tunning Service',
                'edit_tunning_items'=>'Edit Tunning Service',
            ],
            'tunning_items_prices'=>[
                'new_tunning_items_price'=>'New Tunning Service Price',
                'edit_tunning_items_price'=>'Edit Tunning Service Price',
            ],
            'users'=>[
                'add_new_user'=>'Add New User',
                'edit_user'=>'Edit User',
            ],
            'email_settings'=>[
                'email_configuration'=>"Email Configuration",
            ],
            'paypal_settings'=>[
                'paypal_configuration'=>'Paypal Configuration',
            ],
            'time_table'=>[
                'work_time_table'=>'Work Time Table'
            ],
            'profile'=>[
                'user_profile'=>'User Profile'
            ],
            'ecu_type'=>[
                'add_new'=>"Add New Ecu Type",
                'edit_ecu'=>'Edit Ecu Type',
            ],
            'order'=>[
                'new'=>'New Order',
                'order_details' => 'Orders details'
            ],
            'customer' =>[
                'customer_details'=>'Customer Details',

            ],
            'items_category'=>[
                'add'=>"Add New",
                'edit'=>'Edit'
            ],
            'blog_category'=>[
                'new'=>"Add New Blog Category",
                'edit'=>'Edit New Blog Category',
            ]


        ]
    ],
    'datatables'=>[
        'action'=>'action',
        'reference_number'=>'Reference Number',
        'name'=>'Name',
        'vehicle_types'=>[
        ],
        'manufacturers'=>[
            'vehicle_type'=>'Vehicle Type'
        ],
        'vechile_models'=>[
            'manufacturered_by'=>'Manufactured By',
        ],
        'vechile_engines'=>[
            'engine_number'=>'Engine Number',
            'engine_type'=>'Engine Type',
        ],
        'packages'=>[
            'credits'=>'Credits',
            'rate'=>"Rate",
            'total_cost'=>"Total Cost",
        ],
        'tunning_items'=>[
            'note'=>'Note',
            'description'=>'Description',
            'cat_name'=>'Category',
        ],
        'tunning_items_prices'=>[
            'item'=>'Item',
            'model'=>'Model',
            'engine'=>'Engine',
            'cost'=>'Cost',
            'ecu_type'=>"Ecu Type",
        ],
        'users'=>[
            'role'=>'Role',
            'email'=>'Email',
        ],
        'roles'=>[
            'role_name'=>"Role Name",
            'role_type'=>"Role Type",
        ],
        'customers'=>[
            'first_name'=>'First name',
            'last_name' => 'Last name',
            'email'     => 'Email',
            'password'  => 'Password',
            'city'      =>'City',
            'phone_number'=>'Phone Number'
        ],
        'orders'=>[
            'transaction_id'=>'Transaction_id',
            'priority' => 'Priority',
            'amount'     => 'Amount',
            'status'  => 'Status',
            'tunning_file'=>'Tunning file',
            'customer_id'=>'customer_id',
            'customer' => 'Customer',
            'created_at'=>'Created_at',
            'ref_no'=>'Reference Number',
        ],
        'tickets' =>[
            'start_date'=>'Start Date',
            'description'=>'Description',
            'tickets' => 'Tickets'
        ],
        'ecu_type'=>[
            'model'=>'Model',
            'engine'=>"Engine",
            'number'=>"Ecu Number",

        ],
        'blog_category'=>[
            'slug'=>"Slug",
        ],
        'blog'=>[
            'title'=>"Title",
            'category'=>'Category',
            'status'=>'Status',
            'created_date'=>'Create Date',
            'image'=>'Feature Image',
        ],
    ],
    'tables' => [
        'order_details' =>[
            'save_changes' => 'Save Changes',
            'customer_name' => 'Customer Name',
            'reference_number'=>'Reference Number',
            'order_details'=>'Order Details',
            'status'=>'Status',
            'original_file'=>'Original File',
            'order_date'=>"Order Date",
            'credits'=>'Credits',
            'vehicle_type'=>'Vehicle Type',
            'engine_power'=>'Engine Power',
            'gear_box_type'=>'Gear Box Type',
            'car_year'=>"Car Year",
            'checksum_correction'=>'Checksum Correction',
            'order_service'=>'Order Service',
            'service'=>"Service",
            'cost'=>"Cost",
            'transcation_id'=>'Transcation ID',
            'date'=>"Date",
            'order_description'=>'Order Description',
            'order_transcation'=>'Order Transcation',
            'vin'=>'Vin',
            'amount'=>'Amount',
            'priority'=>'Priority',
            'checksumm_correction'=>'Checksumm Correction',
            'reading_method'=>'Reading Method',
            'vehicle'=>'Vehicle',
            'description'=>'Description',
            'model'=>'Model',
            'engine'=>'Engine',
            'ecu_type'=>'Ecu Type',
            'manufacturer'=>'Manufacturer',
            'engine'=>'Engine',
            'item' => 'Item ',
            'payment_method'=>'Payment Method',
             'order'=>'Order',
            'transactions' =>[
                'transaction_ID' => 'Transaction ID',
                'amount' => ' amount',
                'type' => 'Type',
                'created_at' => 'Created  At',
                'no_credits'=>'Total Credits'
                ]
            ],
        'customer_details'=>[
                'personal_details'=>'Personal Details',
                'country'=>'Country',
                'city'=>'City',
                'customer_name'=>'Full Name',
                'phone_number'=>'Phone Number',
                'zip_code'=>'Zip Code',
                'created_at'=>'Created_at',
                'email'=>'Email',
                'address'=>'Address',
                'skype_id'=>'Skype',
                'facebook_id'=>'Facebook',
                'street'=>'street',
                'po_box'=>'PO Box',
                'paypal_address'=>'Paypal Address',
                'company'=>'Company',
                'company_name'=>'Company Name',
                'company_vat'=>'Vat',
                'company_vat_number'=>'Vat Number',
            ]
    ],

    'buttons' => [
        'save_changes' => 'Save Changes',
        'close' => 'Close',
        'add_new'=> 'Add New',
        'edit'=>"Edit",
        'new'=>'New',
        'delete'=>'Delete',
        'cancel'=>'Cancel',
        'save'=>'Save',
        'update_profile'=>'Update Profile',
        'logout'=>'Logout',
        'actions'=>"Actionns",
        'view_detail'=>'View Detail',
        'upload'=>'Upload'
    ],
    'messages'=>[
        'error'=>[
            'auth'=>[
                'invalid_credentials'=>"Email or Password does not match",
            ]

        ],
        'success'=>[
            'update_successfully'=>'Updated Successfully',
            'delete_successfully'=>'Deleted Successfully',
            'order'=>[
                'order_refunded'=>'Order Refunded Successfully',
                'order_completed'=>'Order Completed Successfully',
            ]
        ],
    ],

];
