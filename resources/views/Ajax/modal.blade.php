<h2>{{$obj->name}}</h2>
@if($obj->picture)
<img src="{{asset('uploads/'.$obj->user_id.'/'.$obj->picture)}}" width="100%"/>
@else
-
@endif
<p>Цена:<b>{{$obj->price}}</b></p>
{!! $obj->body !!}
