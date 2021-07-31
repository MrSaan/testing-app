<x-layout>
    <h1>
        <strong> {{ $post->title }} </strong>
    </h1>
    <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    <article>
        {{$post->body}}
    </article>
    <br>
    <a href="/">Get Back</a>
</x-layout>