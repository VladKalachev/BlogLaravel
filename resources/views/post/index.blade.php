@extends('app')

@section('content')
	@foreach($posts as $post)
	<article class="main">
		<h2>
			{{ $post->title }}
		</h2>
		<p>
			{!! $post->excerpt !!}
		</p>
		<p>
			published: {!! $post->published_at !!}
		</p>
	</article>
	@endforeach
@stop