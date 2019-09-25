@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-6">
<p>Lista e artikujve te regjistruar</p>
	<ul>
	@foreach($article as $article)
	<li><a href='/article/{{$article->id}}'>{{$article->title}}</a></li>
	@endforeach
</ul>
</div>
</div>
@endsection
