@extends('layouts.app')

@section('content')
    <h1>Search Post</h1>

    {{ Form::open(['action'=>'PostsController@search','method'=>'POST'])}}

        <div class="form-group">
            {{ Form::text('q', '', ['class'=>'form-control', 'placeholder'=>'Search posts'])}}
        </div>

        {{ Form::submit('Search', ['class' => 'btn btn-primary'])}}
    {{ Form::close() }}

    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Body</th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}</td>
                                    <td>{{ $post->body }}</td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
@endsection