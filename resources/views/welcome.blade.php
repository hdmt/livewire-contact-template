<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        @livewireStyles
    </head>
    <body class="antialiased">
        
            <div>フォームTOPページ</div>
<input type="text" value="" ><button>GO</button>
                    

                    <button wire:click="save">ボタン</button>

@livewireScripts
    </body>
</html>
