{{-- <x-app-layout>

	<h1>{{ $post->title }}</h1>

	<img src="{{ asset('images/' . $post->picture) }}" alt="{{ $post->title }}">
	{{-- <img src="{{ route('image.show', [$post->picture]) }}" alt="{{ $post->title }}"> --}}

	{{-- <img src="{{ asset('storage/' . $post->picture) }}" alt="{{ $post->title }}"> --}}
	{{-- @php
	dd($post->picture)
	@endphp --}}

	{{-- <img src="{{str_starts_with($post -> picture, 'http') ? $post -> picture: $post -> picture}}"> --}}

	<div>{{ $post->content }}</div>

	<p><a href="{{ route('feed') }}" title="Retourner aux articles" >Retourner aux posts</a></p>

</x-app-layout> --}}
