@extends('layout.main')

@section('main-section')
    <div class="container my-2">
        <article class="blog-post">
            {{-- {{ dd($post) }} --}}
            <h2 class="display-5  mb-1" style="font-weight: bolder">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at->format('jS M') }} by <a
                    href="#">{{ $post->blogger->first_name }} {{ $post->blogger->last_name }}</a></p>

            <p>{{ $post->content }}</p>
        </article>
    </div>
@endsection
