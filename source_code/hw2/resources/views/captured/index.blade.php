<head>
<script>

function deletePokemon(uid, pid, url)
{
if (uid && pid)
{
 var form = document.createElement("form");
    form.setAttribute("method", "get");
    form.setAttribute("action", url);

    var hiddenField = document.createElement("input");
    hiddenField.setAttribute("type", "hidden");
    hiddenField.setAttribute("name", "uid");
    hiddenField.setAttribute("value", uid);
    form.appendChild(hiddenField);

    var hiddenFieldHash = document.createElement("input");
    hiddenFieldHash.setAttribute("type", "hidden");
    hiddenFieldHash.setAttribute("name", "pid");
    hiddenFieldHash.setAttribute("value", pid);
    form.appendChild(hiddenFieldHash);
    document.body.appendChild(form);
    form.submit();
}
else
{
alert("Error");
}

}

</script>

</head>
@extends('layouts.app')

@section('content')
<div class="container">
<div class="content">
<h1> Trainer: {{$user_name->name}} </h1>
<h1> Trainer has Pokemon: {{($user_name->pokemon) ? $user_name->pokemon->count() : 0}} </h1>
<ul>
@if($user_name->pokemon)
@foreach($user_name->pokemon as $tr)
<li>{{$tr->name}} 
@if(Auth::user()->is_admin || Auth::user()->id == $user_name->id)
<a href="javascript:deletePokemon({{$user_name->id}}, {{$tr->id}}, '{{ url('droppokemon') }}')">Drop</a>
@endif
</li>
@endforeach
@endif
</ul>
</div>
</div>
@endsection
