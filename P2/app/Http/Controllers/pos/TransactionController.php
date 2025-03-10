<?php

namespace App\Http\Controllers\pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    private $transaction = [
        [
            'Transaction ID' => 'TXN001',
            'Date' => '2025-03-01',
            'Product' => 'Vacuum Cleaner',
            'Quantitiy' => 1,
            'Total Price' => 2500000
        ],
        [
            'Transaction ID' => 'TXN002',
            'Date' => '2025-03-02',
            'Product' => 'Air Purifier',
            'Quantitiy' => 1,
            'Total Price' => 3500000
        ],
        [
            'Transaction ID' => 'TXN003',
            'Date' => '2025-03-03',
            'Product' => 'Dishwasher',
            'Quantitiy' => 1,
            'Total Price' => 7000000
        ],
        [
            'Transaction ID' => 'TXN004',
            'Date' => '2025-03-04',
            'Product' => 'Water Dispenser',
            'Quantitiy' => 1,
            'Total Price' => 2000000
        ],
        [
            'Transaction ID' => 'TXN005',
            'Date' => '2025-03-05',
            'Product' => 'Robot Mop',
            'Quantitiy' => 1,
            'Total Price' => 2800000
        ]
    ];
    
    
    public function transaction(){
        $id = session('id');
        $name = session('name');

        return view('pos.transaction')
        ->with('id', $id)
        ->with('name', $name)
        ->with('transaction', $this->transaction);
    }
}
