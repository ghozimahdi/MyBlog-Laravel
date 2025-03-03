<x-layout :post="$post">
    <div class="flex justify-center pt-4 pb-12">
        <div class="w-3/4">
            <p>Title: {{$post->title}}</p>
            <p>Datetime: {{$post->created_at->format('d M Y')}}</p>
            <p>Desc: {{$post->content}}</p>

            <p class="pt-4">Total Comments : {{$post->total_comment}}</p>

            <div class="pt-4">
                @foreach($post->comments as $comment)
                    <p>{{$comment->comment}}</p>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
