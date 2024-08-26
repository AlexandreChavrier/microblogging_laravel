<x-app-layout>
<section class="bg-white">
    <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

		<div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">

			@foreach ($posts as $post)

			<div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
				<a href="#_" class="block">
					<img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="{{ asset('images/' . $post->picture) }}" alt="{{ $post->title }}">
				</a>
				<div class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
					<span>Lifestyle</span>
				</div>
				<h2 class="text-lg font-bold sm:text-xl md:text-2xl">{{ $post->title }}</h2>
				<p class="text-sm text-gray-500">{{ $post->content }}</p>
				<p class="pt-2 text-xs font-medium"> 					
					@if($post->user	)
						Publié par : {{ $post->user->name }}
					@else
						Auteur inconnu
					@endif
			</div>

			@endforeach

		</div>

    </div>
    </div>
</section>
</x-app-layout>
