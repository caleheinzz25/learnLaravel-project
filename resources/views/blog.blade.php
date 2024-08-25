<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($posts as $post)
        <div class="overflow-hidden w-full border-b-[1px] border-slate-300 border-solid h-44 m-2">
            <h1 class="bold text-slate-600 font-sans text-2xl mb-1"><a href="/blog/post/{{ $post->title }}">{{ $post->title }}</a></h1>
            <h3 class="text-slate-600 mb-1"><a class="hover:underline hover:text-slate-500" href="/blog/author/{{ $post->author->name }}">{{ str_replace(['-','_'], ' ',$post->author->name) }}</a> The <a class="hover:underline hover:text-slate-500" href="/blog/job/{{ $post->category->category }}">{{ str_replace(['-','_'], ' ',$post->category->category) }}</a> | {{ $post->created_at->diffForHumans() }}</h3>
            <p class=" text-justify text text-2 font-light">{{ Str::limit($post->body, 500, '...') }}  </p>
            <a href="/blog/post/{{ $post->title }}" class="text-blue-600 hover:text-blue-500 hover:underline">More &raquo;</a>
        </div>
    @endforeach
</x-layout>