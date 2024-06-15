<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $cartItems = [];

    protected $listeners = [
        'cartUpdated' => 'mount' // Re-fetch cart items when 'cartUpdated' event is emitted
    ];

    public function mount()
    {
        $this->cartItems = Cart::content();
    }

    public function updateQuantity($rowId, $quantity)
    {
        Cart::update($rowId, $quantity);
        $this->emit('cartUpdated');
    }

    public function removeItem($rowId)
    {
        Cart::remove($rowId);
        $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
