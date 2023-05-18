<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function show(Invoice $invoice) {
        return view('invoices.show', compact('invoice'));
    }
}
