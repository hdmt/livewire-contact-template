<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Input extends Component
{

    public $posts;
    public $prefectures = ['東京都','北海道'];

    protected $rules = [
        'posts.name' => 'required',
        'posts.email' => 'required|email',
        // 'comment' => 'required|min:5',
    ];

    public function mount()
    {
        $this->posts = session()->get('posts');
    }

    public function confirm()
    {
        $this->validate();

        //セッション登録
        session()->put('posts', $this->posts);

        return redirect()->route('confirm');

    }

    public function render()
    {
        return view('livewire.input');
    }

}
