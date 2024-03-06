<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Amortization;
use App\Models\User;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $amortizations = Amortization::all();
        $users = User::whereIn('id', [1,2,3,4,5])->get();

        foreach($amortizations as $amortization) {
            foreach($users as $user) {
                for ($i = 0; $i <= 40; $i++) {
                    $payment = new Payment();
                    $payment->user_id = $user->id;
                    $payment->amortization_id = $amortization->id;
                    $payment->amount = $amortization->amount / 40;
                    $payment->state = $amortization->state;
                    $payment->save();
                }
            }
        }
    }
}
