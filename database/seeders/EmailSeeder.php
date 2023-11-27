<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EmailTemplate;

class EmailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailTemplate::create([
            'name'=>'pbc-reg-admin',
            'tags'=>'{{ first_name }} {{ last_name }} {{ email }}',
            'content'=>'A new User has been registed with following details {{ first_name }} {{ last_name }} {{ email }}',
            'subject'=>"New User Registration",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-reg-user',
            'tags'=>'{{ first_name }} {{ last_name }} {{ email }} {{ password }}',
            'content'=>'A new User has been registed with following details {{ first_name }} {{ last_name }} {{ email }}',
            'subject'=>"New User Registration",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-user-order',
            'tags'=>'{{ reference_number }} {{ amount }}  {{ status }} {{ payment_method }} {{ description }}',
            'content'=>'You have successfully place order  {{ reference_number }} for  {{ amount }} through {{ payment_method }} and is {{ status }}',
            'subject'=>"Order Placed",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-order',
            'tags'=>'{{ reference_number }} {{ first_name }} {{ last_name }} {{ amount }}  {{ status }} {{ payment_method }} {{ description }}',
            'content'=>'New Order has been placed by {{ first_name }} {{ last_name }} reference number {{ reference_number }} for  {{ amount }} through {{ payment_method }} and is {{ status }}',
            'subject'=>"New Order Placed",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-user-credits-transcations',
            'tags'=>'{{ transcation_id }} {{ amount }} {{ credits }} {{ description }}',
            'content'=>'You successfully have made transcation against {{ transcation_id }} for amount of {{  amount }} in credits {{ credits }} as {{ description }}',
            'subject'=>"Transcation Activity",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-credits-transcations',
            'tags'=>'{{ transcation_id }} {{ first_name }} {{ last_name }} {{ amount }} {{ type }} {{ credits }} {{ description }}',
            'content'=>'A transcation is made by {{ first_name }} {{ last_name }} against {{ transcation_id }} for amount of {{  amount }} in credits {{ credits }} as {{ description }}',
            'subject'=>"Transcation Activity",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-order-paid',
            'tags'=>'{{ reference_number }} {{ transcation_id }} {{ first_name }} {{ last_name }} {{ amount }} {{ credits }} {{ description }} {{ payment_method }}',
            'content'=>'Order Reference Number {{ reference_number }} is paid by {{ first_name }} {{ last_name }} against {{ transcation_id }} for amount of {{  amount }}  in credits {{ credits }}  paid using {{ payment_method }}as {{ description }}',
            'subject'=>"Payemnt for order",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-user-order-paid',
            'tags'=>'{{ reference_number }} {{ transcation_id }} {{ first_name }} {{ last_name }} {{ amount }} {{ credits }} {{ description }} {{ payment_method }}',
            'content'=>'You have made purchased order {{ reference_number }}  against {{ transcation_id }} for amount of {{  amount }} in credits {{ credits }} paid using {{ payment_method }} as {{ description }}',
            'subject'=>"Order Payment",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-refunded-order',
            'tags'=>'{{ transcation_id }} {{ reference_number }} {{ first_name }} {{ last_name }} {{ amount }} {{ credits }} {{ description }}',
            'content'=>'Order {{ reference_number }}  has been refunded to {{ first_name }} {{ last_name }} against {{ transcation_id }}  User been refunded with {{ credits }}',
            'subject'=>"Order Refunded",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-user-refunded-order',
            'tags'=>'{{ transcation_id }} {{ reference_number }} {{ first_name }} {{ last_name }} {{ amount }} {{ credits }} {{ description }}',
            'content'=>'Order {{ reference_number }}  Refunded to you  against {{ transcation_id }} and the credits added to your account are  {{ credits }}',
            'subject'=>"Order Refunded",

        ]);

        EmailTemplate::create([
            'name'=>'pbc-user-ticket-replay',
            'tags'=>'{{ reference_number }} {{  description }}',
            'content'=>'You have new message for {{ orders.reference_number }} , {{ description }}',
            'subject'=>"Received New Ticket Message",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-ticket-replay',
            'tags'=>'{{ reference_number }} {{ first_name }} {{ last_name }}  {{ description }}',
            'content'=>'A user has sent you message against {{ reference_number  }} , {{ description }}',
            'subject'=>"Received New Ticket Message",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-ticket-created',
            'tags'=>'{{ reference_number }} {{ first_name }} {{ last_name }}',
            'content'=>' {{ first_name }} {{ last_name }} has created ticket against order {{ reference_number }}',
            'subject'=>"New Ticket",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-admin-order-completed',
            'tags'=>'{{ reference_number }}',
            'content'=>'A Order {{ reference_number }} is completed successfully',
            'subject'=>"Order Completed",

        ]);
        EmailTemplate::create([
            'name'=>'pbc-user-order-completed',
            'tags'=>'{{ reference_number }} {{ note }}',
            'content'=>'An Order {{ reference_number }} is completed kindly visit your dashboard to download the files Note: {{ note }}',
            'subject'=>"Order Completed",
        ]);
    }
}
