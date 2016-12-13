@extends('layouts.app')

@section('content')
<div class="container">
<div class="content">
<br/>@if(Auth::user()->is_admin)
<a href="{{url('add')}}"> <b>Add New Pokemon</b></a>
<br/>
<br/>
@endif

@if($pokemon->count())
<table border = 1>
<tr>
<th> Pokemon </th>
<th> Number of Trainers <br/>having this Pokemon </th>
<th> Trainers </th>
<th> Edit </th>
<th> Delete </th>
<th> Capture! </th>
</tr>

@foreach($pokemon as $tr)
<tr>
<td> {{link_to_route('pokemon.owned.index',$tr->name,[$tr->id])}} </td>
<td> {{$tr->user->count()}} </td>
<td> 
<ul>
@if($tr->user)
@foreach($tr->user as $pk)
<li>{{link_to_route('pokemon.owned.index',$pk->name,[$pk->id])}}
</li>
@endforeach
@endif
</ul>
</td>
<td> 
@if(Auth::user()->is_admin)
<a href="add/{{$tr->id}}"> Edit</a>
@else
N/A
@endif
</td>
<td> 
@if(Auth::user()->is_admin)
<a href="delete/{{$tr->id}}"> Delete</a>
@else
N/A
@endif
</td>
<td>


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('userpokemon') }}">
                        {{ csrf_field() }}
<input type="hidden" value="{{$tr->id}}" name="pokemon_id"/>
                                <button type="submit" class="btn btn-primary">
                                    Capture!
                                </button>
                    </form>

</td>
</tr>
@endforeach
</ul>



</table>
@endif
</div>
</div>
@endsection
