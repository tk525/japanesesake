<?php

namespace App\Http\Controllers\Owner;


use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


// 酒蔵側が閲覧するページ用のイベント機能
class EventController extends Controller
{
    public function create() //新規投稿
    {
        return view('events.create');
    }


    public function store(Request $request) //DBに保存
    {
        $events = new Event();
        $imgPath = $this->saveEventImage($request['picture']);

        $events->name = $request->name;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->place = $request->place;
        $events->price = $request->price;
        $events->owner_id = $request->owner_id;
        // $events->owner_id = Owner::owner()->id;
        $events->picture_path = $imgPath;
        $events->save();

        return redirect()->route('owner.mypage');
    }



    // public function destroy(int $id)
    public function destroy(Event $event)
   {
    //    dd($event);
        //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
        // $event = Event::find($id);
        // dd($event);

        //取得したデータを削除
        $event->delete();

        return redirect()->route('owner.mypage');
    }


    public function edit(int $id)  //イベント編集
    {
        $event = Event::find($id);

        return view('events.edit', ['event' => $event]);//ここまでOK
    }


    public function update(int $id, Request $request)
    {
        $event = Event::find($id);
        $imgPath = $this->saveEventImage($request['picture']);

        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->place = $request->place;
        $event->price = $request->price;
        $event->picture_path = $imgPath;
        $event->save();

        return redirect()->route('owner.mypage');
    }


    protected function validator(array $event) //バリデーション
    {
        return Validator::make($event, [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'date' => ['required', 'string', 'min:6', 'confirmed'],
            'place' => ['required', 'string', 'min:6', 'confirmed'],
            'price' => ['required', 'string', 'min:6', 'confirmed'],
            'picture_path' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ], [], [
            'name' => 'イベント名',
            'description' => '詳細',
            'date' => '日時',
            'place' => '会場',
            'price' => '値段',
            'picture_path' => 'イベント画像'
        ]);
    }

    private function saveEventImage($image) //画像登録
    {
        $imgPath = $image->store('images/eventPicture', 'public');

        return 'storage/' . $imgPath;
    }

}

