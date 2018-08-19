@extends('layouts.app')

@section('content')

  <h1>id: {{ $task->id }}の編集</h1>

  <div class="row">
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

    <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-lg-offset-3 col-lg-6">
      {!! Form::label('content', 'タスク：') !!}
      {!! Form::text('content', null, ['class' => 'form-control']) !!}

      {!! Form::label('status', 'ステータス：') !!}
      {!! Form::text('status', null, ['class' => 'form-control']) !!}

      <br>

      {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
  </div>

@endsection
