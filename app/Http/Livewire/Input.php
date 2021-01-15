<?php

namespace App\Http\Livewire;

use Livewire\Component;


class Input extends Component
{

    public $name;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        // 'comment' => 'required|min:5',
    ];

    public function submit()
    {
        $this->validate();

        return redirect()->route('confirm');

    }

    public function render()
    {
        return view('livewire.input');
    }

}
