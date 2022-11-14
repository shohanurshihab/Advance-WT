@extends('layouts.app')
@section('content')


@foreach($names as $n)
<li>{{$n}}</li>
@endforeach

@endsection

