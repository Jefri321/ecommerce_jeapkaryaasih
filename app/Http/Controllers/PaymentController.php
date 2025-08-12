<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
     public function createSnap(Request $request)
    {
        // Konfigurasi Midtrans
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false; // Sandbox mode
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Data transaksi
        $params = [
            'transaction_details' => [
                'order_id' => uniqid(), // ID unik
                'gross_amount' => 50000, // total harga
            ],
            'customer_details' => [
                'first_name' => 'User Test',
                'email' => 'user@example.com',
                'phone' => '081234567890',
            ],
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('pages.payment', compact('snapToken'));
    }
}
