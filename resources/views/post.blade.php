<x-layout>
    <h1>
        <strong> {{ $post->title }} </strong>
    </h1>
    <div>
        by <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in
        <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </div>    
    <article>
        {{$post->body}}
    </article>
    <br>
    <a href="/">Get Back</a>
</x-layout>