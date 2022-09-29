@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-4 rounded-lg">

            @auth
                <form action="{{ route('posts') }}" method="post" class="mb-2">
                    @csrf
                    <div class="mb-3">
                        <label for="body" class="sr-only">Body</label>
                        <textarea 
                        name="body" 
                        id="body" 
                        cols="30" 
                        rows="4" 
                        class="bg-gray-100 border-2 w-full p-4 rounded-lg resize-none @error('body') border-red-500 @enderror"
                        placeholder="Post something!"
                        ></textarea>

                        @error('body')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                        class="bg-blue-500 text-white px-2 py-1 rounded font-medium"
                        >Post</button>
                    </div>
                </form>
            @endauth

            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post" />
                @endforeach

                {{ $posts->links() }}
            @else
                <p>Sorry! not post found.</p>
            @endif
        </div>
    </div>
@endsection