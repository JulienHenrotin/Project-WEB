


@extends('layout')


@section('contenu')


<div class="text">

   </div>


                <form method="post">

                {{ csrf_field() }}


                   <textarea type="text" name="textidee" placeholder= "Ton idée juste ici"></textarea>


                    <input type="submit" value="Valider mon idée">

                    </form>



<h1> Idees precedentes </h1>


<ul>

                    @foreach($boite_a_idee as $BAI )

                    <li>

                    {{$BAI -> idee}}

                    <input type="submit" name="votes" value="Voter pour l'idee">

                    {{$BAI -> vote}}

                    <?php


                      if ($BAI != NULL )

                    {

                      echo"0";

                    }


                     ?>
                    likes


                                </li>
                                @endforeach
 </ul>







@endsection