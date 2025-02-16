<x-layout :post="$post">
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            <p>Title: {{$post->title}}</p>
            <p>Datetime: {{$post->created_at->format('d M Y')}}</p>
            <p>Desc: {{$post->content}}</p>
        </div>
    </div>
</x-layout>
