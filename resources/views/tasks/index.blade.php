@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists as $tasklist)
                <tr>
                    
                    <td>{!! link_to_route('tasks.show', $tasklist->id, ['tasklist' => $tasklist->id]) !!}</td>
                    <td>{{ $tasklist->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection