<?php


return [

    'menu' => [
        'home' => 'Αρχική',
        'dashboard' =>  'Πίνακας ελέγχου',
        'vehicle_catalogue' => 'Κατάλογος οχημάτων',
        'vehicle_types' => 'Τύποι οχημάτων',
        'users' => 'Χρήστες',
        'manufacturers' => 'Κατασκευαστές',
        'vehicle_manufacturers' => 'Κατασκευαστές Οχημάτων',
        'vehicle_models' => 'Μοντέλα',
        'vehicle_engines' => 'Κινητήρες',
        'item'=>'Εργασίες',
        'items' => 'Εργασίες',
        'items_list'=>'Εργασίες Tunning',
        'item_prices'=>'Τιμές Εργασιών Tunning',
        'tunning_items'=>'Εργασίες Tunning',
        'tunning_items_price'=>'Τιμές Εργασιών Tunning',
        'administration' => 'Διαχείριση',
        'roles' => 'Ρόλοι',
        'system_settings' => 'Ρυθμίσεις συστήματος',
        'profile'=>"Προφίλ",
        'packages'=>'Πακέτα',
        'work_time_table'=>'Ώρες λειτουργίας',
        'settings'=>'Ρυθμίσεις',
        'paypal_settings'=>'Ρυθμίσεις Paypal',
        'credit_settings'=>'Ρυθμίσεις Πιστωτικής',
        'general_settings'=>'Γενικές Ρυθμίσεις',
        'email_settings'=>'Ρυθμίσεις Email',
        'manage_users'=>"Διαχείριση χρηστών",
        'manage_roles'=>'Διαχείριση ρόλων',
        'manage_settings'=>'Διαχείριση ρυθμίσεων',
        'list'=>'Λίστα',
        'email_configuration'=>"Διαμόρφωση email",
        'paypal_configuration'=>'Διαμόρφωση Paypal',
        'credit_configuration'=>'Διαμόρφωση πιστωτικής',
        'profile'=>'Προφίλ',
        'customers' => 'Πελάτης',
        'ecu_type'=>"Τύπος Ecu",
        'orders' => 'Αγορές',
        'transcations' => 'Συναλλαγές',
        'email_templates' => 'Πρότυπα Email',
        'transactions' => 'Συναλλαγές',
        'tickets'=>'Tickets',
        'payment_details'=>'Λεπτομέρειες πληρωμής',
        'order_details'=>'Λεπτομέρειες Παραγγελίας',
        'items_category'=>'Κατηγορία Service',
        'blog_category'=>'Blog Categories',
        'blog'=>'Blog',
        'blog_post'=>'Blog Post',
        'posts'=>'Posts',

    ],

    'forms'=>[
        'labels'=>[
            'vehicle_types'=>[
                'type_name'=>'Όνομα',
            ],
            'manufacturers'=>[
                'name'=>'Όνομα',
                'vehicle_type'=>'Τύπος οχημάτος'
            ],
            'vechile_models'=>[
                'name'=>'Όνομα',
                'manufacturer'=>'Μάρκα',
                'model_engines'=>'Μοντέλο'
            ],
            'vechile_engines'=>[
                'name'=>'Όνομα',
                'engine_number'=>'Κινητήρας',
                'engine_type'=>'Τύπος Κινητήρα',
            ],
            'packages'=>[
                'name'=>'Όνομα',
                'credits'=>'Μονάδες',
                'cost_per_credit'=>'Κόστος μονάδας',
            ],
            'tunning_items'=>[
                'name'=>'Όνομα',
                'note'=>'Σημείωση',
                'description'=>'Περιγραφή',
                'cat_name'=>'Κατηγορία',
            ],
            'tunning_items_prices'=>[
                'item'=>'Item',
                'model'=>'Μοντέλο',
                'engine'=>'Κινητήρας',
                'cost'=>'Κόστος',
                'ecu_type' => 'Τύπος Ecu'
            ],
            'users'=>[
                'name'=>'Όνομα',
                'role'=>'Ρόλος',
                'email'=>'Email',
            ],
            'roles'=>[
                'name'=>'Όνομα',
            ],
            'general_settings'=>[
                'company_name'=>'Όνομα εταιρείας',
                'company_email'=>'Email',
                'company_phone'=>'Τηλέφωνο',
                'company_city'=>'Πόλη',
                'company_state'=>'Νομός',
                'zip_code'=>'Ταχ. Κώδικας',
                'company_address'=>'Διεύθυνση'
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
                'rate'=>"Νόμισμα",
                'name'=>'Όνομα',
                'symbol'=>'Σύμβολο',
            ],
            'time_table'=>[
                'monday'=>'Δευτέρα',
                'tuesday'=>'Τρίτη',
                'wednesday'=>'Τετάρτη',
                'thursday'=>'Πέμπτη',
                'friday'=>'Παρασκευή',
                'saturday'=>'Σάββατω',
                'sunday'=>"Κυριακή",
                'from'=>'από',
                'to'=>'έως',
                'not_working'=>'Κλειστά',

            ],
            'profile'=>[
                'full_name'=>'Ονοματεπώνυμο',
                'email'=>"Email",
                'password'=>'Κωδικός'
            ],
            'ecu_type'=>[
                'name'=>"Όνομα",
                'number'=>'Αριθμός Ecu',
                'model'=>"Μοντέλο",
                "engine"=>"Κινητήρας",
            ],
            'orders'=>[
                'modified_file'=>'Αρχείο Tuning',
            ],
            'items_category'=>[
                'name'=>"Όνομα",
            ],
            'blog_category'=>[
                'name'=>"Όνομα",
                'slug'=>'slug',
            ],
            'blog'=>[
                'title'=>"Τίτλος",
                'category'=>'Κατηγορία',
                'status'=>'Κατάσταση',
                'content'=>'Περιεχόμενο',
                'feature_image'=>'Feature Image',
            ],

        ],
        'titles'=>[
            'vehicle_types'=>[
                'new_vehicle_type'=>'Προσθήκη κατηγορίας οχήματος',
                'edit_vehicle_type'=>'Επεξεργασία κατηγορίας οχήματος',
            ],
            'manufacturers'=>[
                'new_manufacturer'=>'Προσθήκη μάρκας',
                'edit_manufacturer'=>'Επεπξεργασία μάρκας',
            ],
            'vechile_models'=>[
                'new_model'=>'Προσθήκη μοντέλου',
                'edit_model'=>'Επεξεργασία μοντέλου',
            ],
            'vechile_engines'=>[
                'new_engine'=>'Προσθήκη νέου κινητήρα',
                'edit_engine'=>'Επεξεργασία κινητήρα',
            ],
            'packages'=>[
                'new_package'=>'Νέο πακέτο εργασιών',
                'edit_package'=>'Επεξεργασία πακέτου εργασιών',
            ],
            'tunning_items'=>[
                'new_tunning_items'=>'New Tunning Service',
                'edit_tunning_items'=>'Edit Tunning Service',
            ],
            'tunning_items_prices'=>[
                'new_tunning_items_price'=>'Προσθήκη τιμής νέου πακέτου',
                'edit_tunning_items_price'=>'Επεξεργασία τιμής νέου πακέτου',
            ],
            'users'=>[
                'add_new_user'=>'Προσθήκη νέου χρήστη',
                'edit_user'=>'Επεξεργασία χρήστη',
            ],
            'email_settings'=>[
                'email_configuration'=>"Επεξεργασία Email",
            ],
            'paypal_settings'=>[
                'paypal_configuration'=>'Επεξεργασία Paypal',
            ],
            'time_table'=>[
                'work_time_table'=>'Ώρες λειτουργίας'
            ],
            'profile'=>[
                'user_profile'=>'Προφίλ χρήστη'
            ],
            'ecu_type'=>[
                'add_new'=>"Προσθήκη ECU",
                'edit_ecu'=>'Επεξεργασία Ecu',
            ],
            'order'=>[
                'new'=>'Νέα παραγγελία',
                'order_details' => 'Λεπτομέρειες παραγγελίας'
            ],
            'customer' =>[
                'customer_details'=>'Λεπτομέρειες Πελάτη',

            ],
            'items_category'=>[
                'add'=>"Προσθήκη",
                'edit'=>'Επεξεργασία'
            ],
            'blog_category'=>[
                'new'=>"Add New Blog Category",
                'edit'=>'Edit New Blog Category',
            ]


        ]
    ],
    'datatables'=>[
        'action'=>'Ενέργεια',
        'reference_number'=>'Αριθμός αναφοράς',
        'name'=>'Όνομα',
        'vehicle_types'=>[
        ],
        'manufacturers'=>[
            'vehicle_type'=>'Κατηγορία οχήματος'
        ],
        'vechile_models'=>[
            'manufacturered_by'=>'Ανα μάρκα',
        ],
        'vechile_engines'=>[
            'engine_number'=>'Αριθμός κινητήρα',
            'engine_type'=>'Τύπος κινητήρα',
        ],
        'packages'=>[
            'credits'=>'Μονάδες',
            'rate'=>"Αξία",
            'total_cost'=>"Συνολικό κόστος",
        ],
        'tunning_items'=>[
            'note'=>'Σημείωση',
            'description'=>'Description',
            'cat_name'=>'Κατηγορία',
        ],
        'tunning_items_prices'=>[
            'item'=>'Item',
            'model'=>'Μοντέλο',
            'engine'=>'Κινητήρα',
            'cost'=>'Κόστος',
            'ecu_type'=>"Ecu",
        ],
        'users'=>[
            'role'=>'Ρόλος',
            'email'=>'Email',
        ],
        'roles'=>[
            'role_name'=>"Όνομασια",
            'role_type'=>"Τύπος",
        ],
        'customers'=>[
            'first_name'=>'Όνομα',
            'last_name' => 'Επίθετο',
            'email'     => 'Email',
            'password'  => 'Κωδικός',
            'city'      =>'Πόλη',
            'phone_number'=>'Τηλέφωνο'
        ],
        'orders'=>[
            'transaction_id'=>'ID συναλλαγής',
            'priority' => 'Προτεραιότητα',
            'amount'     => 'Ποσό',
            'status'  => 'Κατάσταση',
            'tunning_file'=>'Αρχείο Tunning',
            'customer_id'=>'id πελάτη',
            'customer' => 'Πελάτης',
            'created_at'=>'Δημιουργήθηκε στις',
            'ref_no'=>'Αριθμός αναφοράς',
        ],
        'tickets' =>[
            'start_date'=>'Ημερομηνία έναρξης',
            'description'=>'Περιγραφή',
            'tickets' => 'Tickets'
        ],
        'ecu_type'=>[
            'model'=>'Μοντέλο',
            'engine'=>"Κινητήρας",
            'number'=>"Αριθμός Ecu",

        ],
        'blog_category'=>[
            'slug'=>"Slug",
        ],
        'blog'=>[
            'title'=>"Τίτλος",
            'category'=>'Κατηγορία',
            'status'=>'Κατάσταση',
            'created_date'=>'Ημερομηνία δημιουργίας',
            'image'=>'Προτεινόμενη εικόνα',
        ],
    ],
    'tables' => [
        'order_details' =>[
            'save_changes' => 'Αποθήκευση αλλαγών',
            'customer' => 'Πελάτης',
            'vin'=>'Vin',
            'amount'=>'Ποσό',
            'priority'=>'Προτεραιότητα',
            'checksumm_correction'=>'Διόρθωση Checksumm',
            'reading_method'=>'Εργαλείο ανάγνωσης',
            'vehicle'=>'Όχημα',
            'description'=>'Περιγραφή',
            'model'=>'Μοντέλο',
            'engine'=>'Κινητήρας',
            'ecu_type'=>'Ecu',
            'manufacturer'=>'Κατασκευαστής',
            'engine'=>'Κινητήρας',
            'item' => 'Item ',
            'payment_method'=>'Μέθοδος πληρωμής',
             'order'=>'Πωλήσεις',
            'transactions' =>[
                'transaction_ID' => 'ID συναλλαγής',
                'amount' => 'Ποσό',
                'type' => 'Τύπος',
                'created_at' => 'Δημιουργήθηκε στις',
                'no_credits'=>'Σύνολο'
                ]
            ],
        'customer_details'=>[
                'personal_details'=>'Προσωπικά στοιχεία',
                'country'=>'Χώρα',
                'city'=>'Πόλη',
                'customer_name'=>'Όνομα',
                'phone_number'=>'Τηλέφωνο',
                'zip_code'=>'Ταχ. Κώδικας',
                'created_at'=>'Δημιουργήθηκε στις ',
                'address'=>'Διεύθυνση',
                'skype_id'=>'Skype',
                'facebook_id'=>'Facebook',
                'street'=>'Οδός',
                'po_box'=>'Αριθμός',
                'paypal_address'=>'Paypal',
                'company'=>'Εταιρεία',
                'company_name'=>'Όνομα εταιρείας',
                'company_vat'=>'ΑΦΜ',
                'company_vat_number'=>'Αριθμός ΦΠΑ',
            ]
    ],

    'buttons' => [
        'save_changes' => 'Αποθήκευση',
        'close' => 'Κλεισιμο',
        'add_new'=> 'Πρόσθηκη',
        'edit'=>"Επεξεργασια",
        'new'=>'Νεο',
        'delete'=>'Διαγραφη',
        'cancel'=>'Ακυρωση',
        'save'=>'Αποθηκευση',
        'update_profile'=>'Ανανεωση',
        'logout'=>'Εξοδος',
        'actions'=>"Ενεργειες",
        'view_detail'=>'Δες λεπτομερειες',
        'upload'=>'Ανέβασε'
    ]

];
