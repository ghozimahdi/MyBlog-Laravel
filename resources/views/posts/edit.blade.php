<x-layout>
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            <p class="text-2xl">Update Posts</p>
            <form method="POST" action="{{route('posts.update', ['id' => $post->id])}}">
                @csrf
                @method('PATCH')

                <div class="flex flex-col mt-4">
                    <input placeholder="Title" type="text" name="title" value="{{ old('title', $post->title) }}"/>

                    @error('title')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-4">
                    <textarea placeholder="Content" class="mt-4"
                              name="content">{{ old('content', $post->content) }}</textarea>

                    @error('content')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <button class="mt-4" type="submit">Update</button>
            </form>
        </div>
    </div>
</x-layout>
