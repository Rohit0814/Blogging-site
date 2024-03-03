@extends('layout.main')

@section('main-section')
    <div class="container my-2">
        @foreach ($post as $p)
            <article class="blog-post">
                <h2 class="display-5  mb-1" style="font-weight: bolder">{{ $p->title }}</h2>
                <p class="blog-post-meta">{{ $p->created_at->format('jS M') }} by <a href="#">Mark</a></p>

                <p>{{ $p->content }}</p>
            </article>
        @endforeach
    </div>
@endsection
