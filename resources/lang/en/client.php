<?php

use App\Models\Manufacturer;

return [

    'menu' => [
        'home' => 'Home',
        'dashboard' =>  'Dashboard',
        'orders' => 'Orders',
        'order_details' => 'Orders details',
        'invoices' => 'Invoices',
        'tickets' => 'Tickets',
        'users' => 'Users',
        'credits' => 'credits',
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
        'transactions'=>'Transactions',
        'transaction_activity'=>'Credit History',
        'tickets'=>"Tickets",
        'payment_details'=>'Payment Details',

    ],

    'forms'=>[
        'labels'=>[
            'order'=>[
                'vehicle_type'=>'Vehicle Type',
                'model'=>'Model',
                'manufacturer'=>'Manufacturer',
                'engine'=>"Engine",
                'ecu_type'=>"Ecu Type",
                'reading_method'=>"Reading Method",
                'priority'=>'Priority',
                'gearbox_type'=>"Gearbox Type",
                'engine_power'=>"Engine Power",
                'hp'=>"HP",
                'kw'=>"KW",
                'is_file_original'=>"Is File Original",
                'car_year'=>"Car Year",
                'file_input'=>"File Input",
                'checksum_correlation'=>"Checksum Correlation",
                'vin'=>"Vin",
                'description'=>'Description',
                'note_additional_info'=>'Please fill additional info below',
                'payment'=>"Payment",
                'include_invoice'=>'Include Invoice',
            ],
            'profile'=>[

                'full_name'=>'Full Name',
                'first_name'=>'First Name',
                'last_name'=>'Last Name',
                'email'=>"Email",
                'password'=>'Password',
                'change_password'=>'Change Password',
                'confirm_password'=>'Confirm Password',
                'country'=>'Country',
                'city'=>'City',
                'street'=>'Street',
                'po_box'=>'Po-box',
                'prefix_code_no'=>'Prefix Code Number',
                'phone_number' =>'Phone Number',
                'paypal_address'=>'Paypal Address',
                'zip_code'=>'Zip Code',
                'skype'=>'Skype',
                'facebook'=>'Facebook',
                'i_am_company'=>'I am a Company',
                'subscribe'=>'Subscribe',
                'company_name'=>'Company Name',
                'vat'=>'Vat',
                'vat_no'=>'Vat Number',


            ]

        ],
        'titles'=>[
            'order'=>[
                'new'=>'New Order',
                'order_details' => 'Orders details'
            ],
            'profile'=>[
                'user_profile'=>'User Profile',
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
        ],
        'tunning_items_prices'=>[
            'item'=>'Item',
            'model'=>'Model',
            'engine'=>'Engine',
            'cost'=>'Cost',
        ],
        'users'=>[
            'role'=>'Role',
            'email'=>'Email',
        ],
        'roles'=>[
            'role_name'=>"Role Name",
            'role_type'=>"Role Type",
        ],
        'orders'=>[
            'transaction_id'=>"Transaction ID",
            'amount'=>"Amount",
            'status'=>'Status',
            'type'=>'Type',
            'created_at'=>'Created_at',
            'description'=>'Description'
        ]
    ],
    'tables' => [
        'order_details' =>[
            'save_changes' => 'Save Changes',
            'customer_name' => 'Customer Name',
            'reference_number'=>'Reference Number',
            'status'=>'Status',
            'order_details'=>'Order Details',
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
        'action'=>"Action",
        'actions'=>"Actions",
        'pay_now'=>"Pay Now",
        'view_detail'=>"View Detail",
    ]

];
