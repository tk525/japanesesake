@extends('layouts.appuser')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mypage</div>

            </div>

            <h1>User Information</h1>
            {{-- ログインしたユーザーの情報表示 --}}
            <div>
                 <div class="m-4 p-4 border border-primary">
                    <h1>{{ $user->name }}</h1>
                    <p>{{ $user->country_id }}</p>
                    <p>{{ $user->sex }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->birthday }}</p>
                 </div>
            </div>

            <h1>Your Booking</h1>
            {{-- ログインしたユーザーが申し込んでいるイベント表示 --}}
            @foreach ($events as $event)
            <div class="m-4 p-4 border border-light">
                <h1>{{ $event->event->name }}</h1>
                <p>{{ $event->event->description }}</p>
                <p>{{ $event->event->date }}</p>
                <p>{{ $event->event->place }}</p>
                <p>{{ $event->event->price }}</p>
                <img height="100px" src="{{ $event->picture_path }}" >
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


