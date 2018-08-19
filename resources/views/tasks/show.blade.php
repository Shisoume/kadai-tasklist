@extends('layouts.app')

@section('content')

  <h1>id = {{ $task->id }} の詳細ページ</h1>

  <table class="table table-bordered">
    <tr>
      <th>id</th>
      <td>{{ $task-> id}}</td>
    </tr>
    <tr>
      <th>タスク</th>
      <th>{{ $task->content }}</th>
    </tr>
    <tr>
      <th>ステータス</th>
      <th>{{ $task->status }}</th>
    </tr>
  </table>

  {!! link_to_route('tasks.edit', '編集', ['id' => $task->id]) !!}

  {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
  {!! Form::close() !!}

@endsection
