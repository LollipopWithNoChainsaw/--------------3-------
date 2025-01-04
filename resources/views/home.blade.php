
@extends('layouts.layout')

@section('title')Блог: записи@endsection


@section('content')
	<?php
		$link = mysqli_connect("localhost", "root", "", "mysite1");

	if ($link == false){
		print("Невозможно подключится к MySQL. Ошибка: ". mysql_connect_error());
	}
	// else {
	// 	print("Соединение установлено успешно!<br>");
	// }

	mysqli_set_charset($link, "utf8");

	$sql = 'SELECT theme, created_at, name, email, message FROM contacts';

	$result = mysqli_query($link, $sql);

	while ($row = mysqli_fetch_array($result)) {
		print("<br>Тема: " . $row['theme'] . "<br>Дата создания: " . $row['created_at'] . "<br>Имя: " . $row['name'] . "<br>EMail: " . $row['email'] . "<br>Текст: " . $row['message'] . "<br>");
	}
	?>
@endsection


@section('sideMenu')
	@parent
		<p>Слева отображаются записи, введенные на странице "Ввод".</p>
@endsection
