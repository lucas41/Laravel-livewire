@extends('master')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Opções</th>
        </tr>
    </thead>
    @foreach($posts as $post)
    <tbody>
            <td>{{$post->title }}</td>
            <td><a href="{{ route('post.edit', ['post' => $post->id]) }}">Editar</a></td>
    </tbody>
    @endforeach
    <tfoot>
        <tr colspan="4">
            <td> {{ $posts->links() }}</td>
        </tr>
    </tfoot>
    @endsection


</table>
