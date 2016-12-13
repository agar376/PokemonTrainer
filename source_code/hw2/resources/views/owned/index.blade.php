@extends('layouts.app')

@section('content')
<div class="container">
<div class="content">
<h1> Pokemon: {{$pokemon_name->name}} </h1>
<h1> Pokemon owned by: {{ ($pokemon_name->user) ? $pokemon_name->user->count() : 0}} </h1>
<ul>
@if($pokemon_name->user)
@foreach($pokemon_name->user as $tr)
<li>{{$tr->name}}</li>
@endforeach
@endif
</ul>
</div>
</div>
@endsection
