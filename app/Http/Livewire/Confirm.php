<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class Confirm extends Component
{

    public $posts;

    public function mount()
    {
         $this->posts = session()->get('posts');
    }

    public function submit()
    {
        // メール送信
        

        // セッションクリア
        session()->flush();

        // 完了画面へ
        return redirect()->route('complete');
    }

    public function back()
    {
        // 入力画面へ戻る
        return redirect()->route('home');
    }
    
    public function render()
    {
        return view('livewire.confirm');
        
    }
}
