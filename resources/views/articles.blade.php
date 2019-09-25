@extends('layouts.app')

@section('head')
<styLe>
 h1{
 color:blue;

}
</styLe>
@endsection
@section('content')


@foreach($articles as $article)

<a href="{{route('article',['id'=>$article->id])}}">{{$article->title}}</p>

@endforeach
<div class="row">
	<div class="col-md-6">
{{$articles->links()}}
</div>
</div>

























@endsection