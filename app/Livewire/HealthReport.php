<?php

namespace App\Livewire;

use Livewire\Component;

class HealthReport extends Component
{
    public function submit(){
        dd('success');
    }

    public function render()
    {
        return view('livewire.health-report');
    }
}
