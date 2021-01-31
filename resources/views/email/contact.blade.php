お問い合わせいただき、ありがとうございます。

■会社名
{{ Arr::get($posts, 'company', '-') }}

■お名前
{{ Arr::get($posts, 'name') }}

■メールアドレス
{{ Arr::get($posts, 'mail') }}

■電話番号
{{ Arr::get($posts, 'tel', '-') }}

■ご要望
@foreach ($posts['request'] as $request)
{{$requestList[$request]}}
@endforeach

■郵便番号
{{ Arr::get($posts, 'zip', '-') }}

■住所
{{ @$prefectures[ $posts['prefecture'] ] }} {{ @$posts['address'] }}

■ご希望・ご質問
{{ Arr::get($posts, 'comment', '-') }}
