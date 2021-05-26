<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentMethodList extends Component
{
    public function render()
    {
        $paymentMethods = Auth::user()->paymentMethods();
        return view('livewire.payment-method-list', compact('paymentMethods'));
    }
}
