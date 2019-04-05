<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message; // 追加

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでmessages/にアクセスされた場合の「一覧表示処理」
    public function index()
    {
       $messages = Message::all();
       
       //Controller から特定の View を呼び出すには、 view() を使う　第一引数は表示したいviewを指定（形）
       return view('messages.index', [
           'messages' => $messages, //第二引数で渡すデータを指定（中身）
           ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     // getでmessages/createにアクセスされた場合の「新規登録画面表示処理」
    public function create()
    {
        $messages = new Message;
        
        return view('messages.create', [
            'message' => $messages,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      // postでmessages/にアクセスされた場合の「新規登録処理」
    public function store(Request $request)
    {
        $message = new Message;
        $message->content = $request->content;
        $message->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      // getでmessages/idにアクセスされた場合の「取得表示処理」
    public function show($id)
    {
        $message = Message::find($id);

        return view('messages.show', [
            'message' => $message,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // getでmessages/id/editにアクセスされた場合の「更新画面表示処理」
    public function edit($id)
    {
        $message = Message::find($id);

        return view('messages.show', [
            'message' => $message,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // putまたはpatchでmessages/idにアクセスされた場合の「更新処理」
    public function update(Request $request, $id)
    {
        $message = Message::find($id);
        $message->content = $request->content;
        $message->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     // deleteでmessages/idにアクセスされた場合の「削除処理」
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect('/');
    }
}
