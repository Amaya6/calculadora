@extends('plantilla')
@section('contenido')
<h1>La resta es {{ $resta }}</h1>

{!! Form::open(['url' => 'foo/bar']) !!}
{{ Form::label('La resta es', null, ['class' => 'control-label']) }}
{{ Form::text('Holame', $resta, array_merge(['class' => 'form-control'], ['color'=>'red'])) }}
{!! Form::close() !!}
@endsection