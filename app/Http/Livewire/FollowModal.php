<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class FollowModal extends ModalComponent
{
    public function render()
    {
        return view('livewire.follow-modal');
    }
}
