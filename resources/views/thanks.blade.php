@extends("layout")
@section("content")
<div class="home">
<h1>thank you<h1>
    <p>votre information il est confirmé</p>
    <ul>
   
            @foreach ($users as $user)
        <li><span> name: </span> {{$user['name']}} <span> email: </span>{{$user['email']}} <span> message: </span>{{$user['message']}}</li>
        @endforeach
       
       
    </ul>
</div>
@endsection
@section('title','thanks')