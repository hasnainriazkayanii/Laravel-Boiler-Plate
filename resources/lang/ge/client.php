<?php

use App\Models\Manufacturer;

return [

    'menu' => [
        'home' => 'Αρχική',
        'dashboard' =>  'Πίνακας ελέγχου',
        'orders' => 'Αγορές',
        'order_details' => 'Λεπτομέρειες αγοράς',
        'invoices' => 'Τιμολόγια',
        'tickets' => 'Tickets',
        'users' => 'Χρήστες',
        'credits' => 'Μονάδες',
        'vehicle_manufacturers' => 'Κατασκευαστές',
        'vehicle_models' => 'Μοντέλα',
        'vehicle_engines' => 'Κινητήρες',
        'item'=>'Items',
        'items' => 'Υπηρεσίες',
        'items_list'=>'Υπηρεσίες Tunning',
        'item_prices'=>'Τιμές Tunning',
        'tunning_items'=>'Υπηρεσίες Tunning',
        'tunning_items_price'=>'Τιμές Tunning',
        'administration' => 'Διαχείριση',
        'roles' => 'Ρόλοι',
        'system_settings' => 'Ρυθμίσεις συστήματος',
        'profile'=>"Προφίλ",
        'packages'=>'Packages',
        'work_time_table'=>'Ὠρες Λειτουργίας',
        'settings'=>'Ρυθμίσεις',
        'paypal_settings'=>'Ρυθμίσεις Paypal',
        'credit_settings'=>'Ρυθμίσεις πιστωτικής',
        'general_settings'=>'Γενικές ρυθμίσεις',
        'email_settings'=>'Ρυθμίσεις Email',
        'manage_users'=>"Διαχείριση χρηστών",
        'manage_roles'=>'Διαχείριση ρόλων',
        'manage_settings'=>'Διαχείριση ρυθμίσεων',
        'list'=>'Λίστα',
        'email_configuration'=>"Διαμόρφωση email",
        'paypal_configuration'=>'Διαμόρφωση Paypal',
        'credit_configuration'=>'Διαμόρφωση πιστωτικής',
        'profile'=>'Προφίλ',
        'transactions'=>'Συναλλαγές',
        'transaction_activity'=>'Ιστορικό πίστωσης',
        'tickets'=>"Tickets",
        'payment_details'=>'Λεπτομέρειες πληρωμής',


    ],

    'forms'=>[
        'labels'=>[
            'order'=>[
                'vehicle_type'=>'Τύπος οχήματος',
                'model'=>'Μοντέλο',
                'manufacturer'=>'Κατασκευαστής',
                'engine'=>"Κινητήρας",
                'ecu_type'=>"Τύπος Ecu",
                'reading_method'=>"Εργαλείο ανάγνωσης",
                'priority'=>'Προτεραιότητα',
                'gearbox_type'=>"Κιβώτιο ταχυτήτων",
                'engine_power'=>"Ιπποδύναμη",
                'hp'=>"PS",
                'kw'=>"KW",
                'is_file_original'=>"Το αρχείο είναι Original",
                'car_year'=>"Έτος",
                'file_input'=>"Φόρτωση αρχείου",
                'checksum_correlation'=>"Διόρθωση Checksum",
                'vin'=>"Πλαίσιο",
                'description'=>'Περιγραφή',
                'note_additional_info'=>'Συμπληρώστε τις παρακάτω πληροφορίες',
                'payment'=>"Payment",
                'include_invoice'=>'Παρακαλώ τσεκάρετε αν θέλετε την έκδοση τιμολογιου',
            ],
            'profile'=>[

                'full_name'=>'Πλήρες όνομα',
                'first_name'=>'Όνομα',
                'last_name'=>'Επίθετο',
                'email'=>"Email",
                'password'=>'Κωδικός',
                'change_password'=>'Αλλαγή Κωδικού',
                'confirm_password'=>'Επιβέβαιωση κωδικού',
                'country'=>'Χώρα',
                'city'=>'Πόλη',
                'street'=>'Διεύθυνση',
                'po_box'=>'Po-box',
                'prefix_code_no'=>'Πρόθεμα ',
                'phone_number' =>'Τηλέφωνο',
                'paypal_address'=>'Paypal',
                'zip_code'=>'Ταχ. Κώδικας',
                'skype'=>'Skype',
                'facebook'=>'Facebook',
                'i_am_company'=>'Είμαι εταιρεία',
                'subscribe'=>'Εγγραφή',
                'company_name'=>'Όνομα εταιρείας',
                'vat'=>'ΑΦΜ',
                'vat_no'=>'Αριθμός ΑΦΜ',


            ]

        ],
        'titles'=>[
            'order'=>[
                'new'=>'Νέα αγορά',
                'order_details' => 'Λεπτομέρειες'
            ],
            'profile'=>[
                'user_profile'=>'Προφίλ Χρήστη',
            ]


        ]
    ],
    'datatables'=>[
        'action'=>'Ενέργεια',
        'reference_number'=>'Αριθμός αναφοράς',
        'Περιγραφή'=>'Περιγραφή',
        'vehicle_types'=>[
        ],
        'manufacturers'=>[
            'vehicle_type'=>'Τύπος οχήματος'
        ],
        'vechile_models'=>[
            'manufacturered_by'=>'Κατασκευαστής',
        ],
        'vechile_engines'=>[
            'engine_number'=>'Αριθμός Κινητήρα',
            'engine_type'=>'Τύπος Κινητήρα',
        ],
        'packages'=>[
            'credits'=>'Μονάδες',
            'rate'=>"Τιμή",
            'total_cost'=>"Συνολικό κόστος",
        ],
        'tunning_items'=>[
            'note'=>'Σημείωση',
            'description'=>'Περιγραφή',
        ],
        'tunning_items_prices'=>[
            'item'=>'Item',
            'model'=>'Μοντέλο',
            'engine'=>'Κινητήρας',
            'cost'=>'Κόστος',
        ],
        'users'=>[
            'role'=>'Ρόλος',
            'email'=>'Email',
        ],
        'roles'=>[
            'role_name'=>"Όνομα",
            'role_type'=>"Τύπος",
        ],
        'orders'=>[
            'transaction_id'=>"ID Συναλλαγής",
            'amount'=>"Ποσό",
            'status'=>'Κατάσταση',
            'type'=>'Τύπος',
            'created_at'=>'Δημιουργήθηκε_από',
            'description'=>'Περιγραφή'
        ]
    ],
    'tables' => [
        'order_details' =>[
            'save_changes' => 'Αποθήκευση αλλαγών',
            'customer' => 'Πελάτης',
            'vin'=>'Πλαίσιο',
            'vehicle'=>'Όχημα',
            'amount'=>'Ποσό',
            'payment_method'=>'Μέθοδος πληρωμής',
            'priority'=>'Προτεραιότητα',
            'checksumm_correction'=>'Διόρθωση Checksumm',
            'reading_method'=>'Μέθοδος ανάγνωσης',
            'description'=>'Περιγραφή',
            'model'=>'Μοντέλο',
            'engine'=>'Κινητήρας',
            'ecu_type'=>'Τύπος Ecu',
            'manufacturer'=>'Κατασκευαστής',
            'engine'=>'Κινητήρας',
            'item' => 'Item ',
            'transactions' =>[
                'transaction_ID' => 'ID συναλλαγής',
                'amount' => ' Ποσό',
                'type' => 'Τύπος',
                'created_at' => 'Δημιουργήθηκε στις ',
                'no_credits'=>'Συνολικές πιστώσεις'
                ]
        ]
    ],

    'buttons' => [
        'save_changes' => 'Αποθηκευση',
        'close' => 'Κλεισιμο',
        'add_new'=> 'Πρόσθηκη',
        'edit'=>"Επεξεργασια",
        'new'=>'Νεο',
        'delete'=>'Διαγραφη',
        'cancel'=>'Ακυρωση',
        'save'=>'Αποθηκευση',
        'update_profile'=>'Ανανεωση',
        'logout'=>'Εξοδος',
        'action'=>"Ενεργεια",
        'actions'=>"Ενεργειες",
        'pay_now'=>"Πληρωμη",
        'view_detail'=>"Δες λεπτομερειες",
    ]

];
