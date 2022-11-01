@extends('layouts.app')
@section('content')


<form method="get" action="{{route('home')}}">
                    <p><label for="name">Your Name:*</label> <input type="text" class="form-control" name="name" id="name" tabindex="1"></p>
                    <p><label for="email">Contact Email:*</label> <input type="text" class="form-control" name="email" id="email" tabindex="2"></p>
                    <p><label for="comments">Your Message to us:*</label> <textarea class="form-control" name="comments" id="comments" cols="12" rows="6" tabindex="3"></textarea></p>
                    <p><input name="submit" type="submit" id="submit" class="submit" value="Send" tabindex="4"></p>
                </form>
@endsection