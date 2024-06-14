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
            'Pic Pay',
            'Cartão de Crédito',
            'Cartão de Débito'
            ];
            \App\Models\PaymentMethod::factory()->create(
                [
                    'description' => 'PayPal',]
            );
    }
}
