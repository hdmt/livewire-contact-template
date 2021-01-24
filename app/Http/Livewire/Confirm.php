<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use Illuminate\Support\Arr;

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
        $recipients = [
            Arr::get($this->posts, 'email'),
            env('MAIL_ADMIN_ADDRESS')
        ];

        foreach ($recipients as $recipient) {
            Mail::to($recipient)->send(new Contact($this->posts));
        }

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
