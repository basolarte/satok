<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $descriptions = [
            'Pix',
            'Boleto',
            'Mercado Pago',
            'PicPay',
            'Cartão de Crédito',
            'Cartão de Débito',
            'PayPal'
            ];

            foreach ($descriptions as $description) { \App\Models\PaymentMethod::factory()->create(
                [
                    'description' => $description,]
            );
    }
}

}