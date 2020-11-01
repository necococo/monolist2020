@extends('layouts.app')

@section('content')
    <div class="user-profile">
        <div class="icon text-center">
            <img src="{{ Gravatar::src($user->email, 100) . '$d=mm' }}" alt="" class="img-circle">
        </div>
        <div class="name text-center">
            <h1>{{ $user->name }}</h1>
        </div>
        <div class="status text-center">
            <ul>
                <li>
                    <div class="status-label">WANT</div>
                    <div id="want-count" class="status-value">
                        {{ $count_want }}
                    </div>
                </li>
                <li>
                    <div class="status-label">HAVE</div>
                    <div id="have-count" class="status-value">
                        <!--{{ $count_have }}-->
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @include('items.items', ['items' => $items])
    {!! $items->render() !!}
@endsection