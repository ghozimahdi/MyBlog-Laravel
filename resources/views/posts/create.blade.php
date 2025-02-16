<x-layout>
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            <p class="text-2xl">Create Posts</p>
            <form method="POST" action="{{route('posts.store')}}">
                @csrf

                <div class="flex flex-col mt-4">
                    <input placeholder="Title" type="text" name="title"/>

                    @error('title')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <div class="flex flex-col mt-4">
                    <textarea placeholder="Content" class="mt-4" type="text" name="content"></textarea>

                    @error('content')
                    <p class="error">{{$message}}</p>
                    @enderror
                </div>

                <button class="mt-4" type="submit">Create</button>
            </form>
        </div>
    </div>
</x-layout>
