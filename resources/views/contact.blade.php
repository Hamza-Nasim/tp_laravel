@extends("layout")
@section("content")
<div class="contact">
<h1>contact<h1>
<div class="form">
<form action="{{route('Users.store')}}" method="post">
    @csrf
        <input type="text" name="name" placeholder="name"/>
        <input type="text" name="email" placeholder="email"/>
        <textarea placeholder="message" name="message" id="" cols="30" rows="10"></textarea>
        <button type="submit">send</button>
</form>
</div>
</div>
@endsection
@section('title','contact')