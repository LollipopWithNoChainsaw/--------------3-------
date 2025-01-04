@extends('layouts.layout')

@section('title')Блог: ввод@endsection

@section('content')
	<h1>Ваша запись</h1>

	<form action = "{{route('contact-form')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="name">Имя?</label>
			<input type="text" name="name" id="name" placeholder="Зубенко Михаил Петрович" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Электронная почта?</label>
			<input type="text" name="email" id="email" placeholder="urmail@yandex.ru" class="form-control">
		</div>
		<div class="form-group">
			<label for="theme">Тема записи?</label>
			<input type="text" name="theme" id="theme" placeholder="Ну как там с Владимирами?" class="form-control">
		</div>
		<div class="form-group">
			<label for="message">Текст записи</label>
			<textarea type = "text" name="message" id="message" class="form-control"></textarea>
		</div>
		<button type="submit" class="btn btn-success">Опубликовать!</button>
	</form>
@endsection


