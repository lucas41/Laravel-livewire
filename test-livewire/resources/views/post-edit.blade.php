@extends('master')

@section('content')

    @livewire('post-edit', ['post' => $post])

@endsection
