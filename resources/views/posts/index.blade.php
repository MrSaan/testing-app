<x-layout>

    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts='$posts'/>
            
            {{-- Generate Pagination --}}
            {{ $posts->links() }}
        @else 
            <div class="text-center">
                Potingan belum ada coba kembali lagi nanti...
            </div>

        @endif
       
        
    </main>

    {{-- di bawah adalah bagian belajar tahap awal --}}
    {{-- @foreach ($posts as $post)
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
    @endforeach --}}
</x-layout>