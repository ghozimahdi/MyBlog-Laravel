<x-layout>
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            @if (session('success'))
                <div class="bg-green-500 text-white p-2 mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($posts->isEmpty())
                <p class="text-gray-600 mt-4">No posts available</p>
            @else
                @foreach($posts as $item)
                    <div class="border border-gray-400 mt-4 w-auto p-4 rounded-lg">
                        <p class="text-xl">{{$item->title}}</p>
                        <p>{{$item->content}}</p>
                        <p class="mt-3 text-gray-500">Last updated at {{$item->created_at->format('d M Y')}}</p>
                        <a href="{{ route('posts.show', $item->id) }}" class="btn mt-4">Selengkapnya</a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</x-layout>
