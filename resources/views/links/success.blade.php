@extends('layouts.app')
@section('content')
<div class="container">



<h3>Bravooo !!!</h3>
    <p>
    <a class="btn btn-primary" href="{{ action('LinkController@show',['id' => $link->id])}}">

            {{ action('LinkController@show',['id' => $link->id])}}
    </a>

    </p>

</div>
@stop