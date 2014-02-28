@extends('layout')
@section('content')
	<h1>Contacting!</h1>
	<p>Fill the Form!</p>
	{{HTML::ul($errors->all(),array('class'=>'errors'))}}
	{{Form::open(array('url' => 'contact'))}}
	{{Form::label('Subject')}}
	{{Form::text('subject','Enter the Subject')}}
	<br>
	{{Form::label('Message')}}
	{{Form::textarea('message','Enter the Message')}}
	<br>
	{{Form::submit()}}
	{{Form::close()}}
@stop
