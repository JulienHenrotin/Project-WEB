@extends('layout')


@section('contenu')

    <form method="post">

        {{ csrf_field() }}

        <input type="text" name="textidee" placeholder= " Ton idée">

        <input type="submit" value="Valider mon idée">

    </form>

@endsection