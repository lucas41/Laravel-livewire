@extends('master')

@section('content')
    <ul>
        @foreach($posts as $post)
            <li>
                {{$post->title}} - <a href="{{route('post.edit', $post->id)}}"> Editar</a>
                | <a href="{{route('post.show', $post->id)}}"> Visualizar </a>
            </li>
        @endforeach
    </ul>
@endsection
