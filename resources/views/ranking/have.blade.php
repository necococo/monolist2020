@extends('layouts.app')

@section('content')
    <h2 class="text-center">Have Ranking</h2>
    @include('items.items', ['items' => $items])
@endsection