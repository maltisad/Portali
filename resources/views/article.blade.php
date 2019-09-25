<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1> {{$p->title}}</h1>
<h3> {{$p->content}}</h3>
<h3> {{$p->Category->name}}</h3>

<h3> <a href="{{route('author',['id'=>$p->author['id']])}}">{{$p->Author->author_name}}</a></h3>
<p> Created at: {{$p->created_at->diffForHumans()}}</p>
<p> Updated at: {{$p->updated_at->diffForHumans()}}</p>

</body>
</html>