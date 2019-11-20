@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Añadir tienda</h3>
  <form action="" method="">
    @csrf
    Name:<br>
    <input type="text" name="name">
    <br><br>
    description:<br>
    <input type="text" name="description">
    <br><br>
    password:<br>
    <input type="text" name="password">
    <br><br>
    email:<br>
    <input type="text" name="email">
    <br><br>
    likes:<br>
    <input type="text" name="likes">
    <br><br>
    

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection