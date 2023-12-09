<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Login extends Component
{
    public $email = '';
    public $password = '';

    public function startSession(){
        
    }
    
    public function render()
    {
        return view('livewire.login');
    }
}
