@extends('layouts.app')

@section('content')
    <h2 class="text-center">Want Ranking</h2>
    @include('items.items', ['items' => $items])
@endsection