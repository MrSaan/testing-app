<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/post/{{ $post->slug }}">
                    {!! $post->title !!}
                </a>
            </h1>
           
            by <a href="/authors/{{ $post->author->username  }}">{{ $post->author->name }}</a> in
            <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <div>
                {!! $post->slug !!}
            </div>
        </article>
    @endforeach
</x-layout>