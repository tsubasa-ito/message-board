@extends('layouts.app')
@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>メッセージ一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>メッセージ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                    <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td>
                    <td>{{ $message->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('messages.create', '新規メッセージの投稿', null, ['class' => 'btn btn-primary'])!!}
    <!--
    第1引数：ルーティング名
    第2引数：リンクにしたい文字列
    第3引数：/messages/{messages} の {messages} のようなURL内のパラメータに代入したい値を配列形式で指定（今回は不要なので空っぽの配列 []）
    第4引数：HTML タグの属性を配列形式で指定（今回は Bootstrap のボタンとして表示するためのクラスを指定）
    -->
@endsection