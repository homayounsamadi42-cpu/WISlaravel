<h1>hello from contact section</h1>

<form method="POST" action="{{route('post.create')}}">
@csrf
<button type="submit">create product</button>
</form>