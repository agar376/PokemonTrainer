@extends('layouts.app')

@section('content')
<div class="container">
<div class="content">
@if(Auth::user())
<table border = 1>
<tr>
<th> Trainer </th>
<th> Role </th>
<th> Total number of Pokemon </th>
<th> Pokemon </th>
<th> Hometown </th>
<th> Edit </th>
</tr>


@foreach($user as $tr)
<tr>
<td> {{link_to_route('user.captured.index',$tr->name,[$tr->id])}} </td>
<td> @if($tr->is_admin)
Admin
@else
Trainer
@endif
</td>
<td> {{$tr->pokemon->count()}} </td>
<td> 
<ul>
@if($tr->pokemon)
@foreach($tr->pokemon as $pk)
<li>{{link_to_route('pokemon.owned.index',$pk->name,[$pk->id])}}
</li>
@endforeach
@endif
</ul>
@if(Auth::user()->id == $tr->id)
<a href="{{url('userpokemon')}}"> Add Pokemon </a>
@endif
</td>
<td> 
@if($tr->hometown) 
{{$tr->hometown}} 
@else
N/A
@endif
</td>
<td> 
@if(Auth::user()->is_admin)
<a href="user/{{$tr->id}}"> Edit </a>
@else
@if(Auth::user()->id == $tr->id)
<a href="user/{{$tr->id}}"> Edit </a>
@else
N/A
@endif
@endif
</td>
</tr>
@endforeach
</ul>



</table>
@endif
</div>
</div>
@endsection
