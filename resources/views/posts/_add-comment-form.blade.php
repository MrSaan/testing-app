@auth
<!-- form input comment -->
    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="post">
            @csrf

            <header class="flex items-center ">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-6">
                <textarea 
                    name="body" 
                    class="w-full text-sm focus:outline-none focus:ring" 
                    rows="5" 
                    placeholder="Quick, thing of something to speak!"
                    required></textarea>
            </div>
            
            @error('body')
                {{ $message }}
            @enderror

            <div class="flex justify-end pt-6 mt-6 border-t border-gray-200 ">
                <x-submit-button>Post</x-submit-button>
            </div>
        </form>
    </x-panel>
<!-- end form input comment -->
@else
    <p class="font-semibold">
        <a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login" class="text-blue-500 hover:underline">Log in</a> to leave a comment.
    </p>
@endauth