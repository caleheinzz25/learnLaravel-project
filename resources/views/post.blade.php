<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container">
        <h1 class="text-2xl font-inter my-1">{{ $post->title }}</h1>
        <h3 class="text-slate-600 mb-1"><a class="hover:underline hover:text-slate-500" href="/blog/author/{{ $post->author->name }}">{{ str_replace(['-','_'], ' ',$post->author->name) }}</a> The <a class="hover:underline hover:text-slate-500" href="/blog/job/{{ $post->category->category }}">{{ str_replace(['-','_'], ' ',$post->category->category) }}</a> | {{ $post->created_at->diffForHumans() }}</h3>
        <p class="text-md text-justify text-slate-600 mt-4">{{ $post->body }}</p>        
        <a href="/blog" class="text-blue-600 hover:text-blue-500 hover:underline">&laquo; Back</a>
    </div>
</x-layout> 