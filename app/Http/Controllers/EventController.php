<?php

namespace App\Http\Controllers;

use App\Event;
use App\Owner;
use Illuminate\Support\Facades\Auth;
use App\Event_user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    public function index(Request $id)
    {
        $events = Event::with('event_user')->get();

        return view('events.index',['events' => $events]);
    }


    public function event_create() //新規投稿
    {
        return view('events.create');
    }


    public function event_store(Request $request) //DBに保存
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

        return redirect()->route('event.index');
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

        return redirect()->route('event.index');
    }


    public function event_edit(int $id)  //イベント編集
    {
        $event = Event::find($id);

        return view('events.edit', ['event' => $event]);//ここまでOK
    }


    public function event_update(int $id, Request $request)
    {
        $event = Event::find($id);
        $imgPath = $this->saveProfileImage($event['picture']);

        $event->name = $request->name;
        $event->description = $request->description;
        $event->date = $request->date;
        $event->place = $request->place;
        $event->price = $request->price;
        $event->picture_path = $request->imgPath;
        $event->save();

        return redirect()->route('event.index');
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


    public function event_apply(int $id)//申込
    {
        $event = Event::find($id);

        // return redirect()->route('event.apply');

        return view('events.apply', ['event' => $event]);
    }
    public function event_applyed(int $id, Request $request)//申込完了
    {
        $event_users = new Event_user();

        $event_users->Event_id = $request->eventid;
        $event_users->User_id = '999';//仮id
        $event_users->People_count = '1';
        $event_users->Special_comment = $request->Special_comment;
        $event_users->save();

        return redirect()->route('event.index');
    }
    public function applydestroy(Event_user $event_user)
   {
        $event_user = Event_user::find($event_user);
        //取得したデータを削除
        dd($event_user);
        // $event_user->delete();

        return redirect()->route('event.index');
    }
}
