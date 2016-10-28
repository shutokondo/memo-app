@extends('welcome')

@section('content')
{{ Form::model($memo, array('action' => 'MemosController@store')) }}
{{ Form::text('text') }}
{{ Form::submit('投稿') }}
{{ Form::close() }}
<ul>
  @foreach ($memos as $memo)
    <li>
      {{ $memo->text }}
    </li>
  @endforeach
</ul>
@endsection