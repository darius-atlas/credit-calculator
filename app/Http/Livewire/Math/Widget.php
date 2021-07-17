<?php

namespace App\Http\Livewire\Math;

use Livewire\Component;

class Widget extends Component
{
    public $total = 0, $sum, $procentage, $month;

    public function math() {
        for($i = 0; $i <= $this->month; $i++) {
            $thisPayment = ($this->sum / 100) * $this->procentage;
            $this->sum -= $thisPayment;
            $this->total += $thisPayment;
        }
        $this->render();
    }

    public function render()
    {
        return view('livewire.math.widget');
    }
}
