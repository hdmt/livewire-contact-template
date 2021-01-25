<form wire:submit.prevent="confirm">
@csrf
    <div>
        <div>
            <span class="text-sm font-bold text-gray-600 uppercase">会社名</span>
            <input
                class="w-full p-3 mt-2 text-gray-900 bg-white rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="">
        </div>
        <div class="mt-8">
        
            <span class="text-sm font-bold text-gray-600 uppercase">お名前（必須）</span>
            <input
                wire:model="posts.name"
                class="w-full p-3 mt-2 text-gray-900 bg-white rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="鈴木一郎">
            @error('posts.name') <span class="err-message">{{ $message }}</span> @enderror
        </div>
        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">メールアドレス（必須）</span>
            <input
                wire:model="posts.email"
                class="w-full p-3 mt-2 text-gray-900 bg-white rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="mail@example.com">
            @error('posts.email') <span class="err-message">{{ $message }}</span> @enderror
        </div>
        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">電話番号</span>
            <input
                class="w-full p-3 mt-2 text-gray-900 bg-white rounded-lg focus:outline-none focus:shadow-outline"
                type="text" placeholder="090xxxxxxxxx">
        </div>
        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">ご要望（必須）</span>
            <div class="mt-2">
                <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5">
                        <span class="ml-2">資料・サンプルが欲しい</span>
                    </label>
                    </div>
                    <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5">
                        <span class="ml-2">価格が知りたい</span>
                    </label>
                    </div>
                    <div>
                    <label class="inline-flex items-center">
                        <input type="checkbox" class="form-checkbox h-5 w-5">
                        <span class="ml-2">その他</span>
                    </label>
                </div>
            </div>
        </div>

<div class="flex flex-wrap m-6 mb-2 -mx-3">
    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
        <label class="block mb-2 text-sm font-bold tracking-wide text-gray-700 uppercase"
            for="grid-zip">
            郵便番号
        </label>
        <input
            class="block w-full px-4 py-3 leading-tight text-gray-700 bg-white border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
            id="grid-zip" type="text" placeholder="1000001">
    </div>
    <div class="w-full px-3 mb-6 md:w-1/2 md:mb-0">
        <label class="block mb-2 text-sm font-bold tracking-wide text-gray-700 uppercase"
            for="grid-state">
            都道府県
        </label>
        <div class="relative">
            <select
                class="block w-full px-4 py-3 pr-8 leading-tight text-gray-700 bg-white border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"
                id="grid-state">
                <option>選択</option>
                <option>東京都</option>
                <option>東京都</option>
                <option>鹿児島県</option>
            </select>
            <div
                class="absolute inset-y-0 right-0 flex items-center px-2 text-gray-700 pointer-events-none">
                <svg class="w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
            </div>
        </div>
    </div>
</div>

<div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">市区町村／番地</span>
            <textarea
                class="w-full h-20 p-3 mt-2 text-gray-900 bg-white rounded-lg border border-gray-200 rounded appearance-none focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
        </div>

        <div class="mt-8">
            <span class="text-sm font-bold text-gray-600 uppercase">ご希望・ご質問</span>
            <textarea
                class="w-full h-32 p-3 mt-2 text-gray-900 bg-white rounded-lg focus:outline-none focus:shadow-outline"></textarea>
        </div>
        <div class="mt-8">
            <button
                class="w-full p-3 text-sm font-bold tracking-wide text-gray-100 uppercase bg-green-500 rounded-lg focus:outline-none focus:shadow-outline">
                内容確認
            </button>
        </div>
    </div>
</form>