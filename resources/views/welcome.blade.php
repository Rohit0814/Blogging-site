<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css'])
</head>

<body>

    @extends('layout.main')

    @section('main-section')
        <div class="container">
            <h2 class="my-3 text-center">Posts</h2>
            <hr>
            <div class="row mb-2">
                @foreach ($post as $p)
                    <div class="col-md-6">
                        <div
                            class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary-emphasis">World</strong>
                                <h3 class="mb-0">{{ $p->title }}</h3>
                                <div class="mb-1 text-body-secondary">{{ $p->created_at->format('jS M') }}</div>
                                <p class="card-text mb-auto">{{ Str::limit($p->content, 80, ' ...') }}</p>
                                <a href="/posts/content/{{ $p->post_id }}"
                                    class="icon-link gap-1 icon-link-hover stretched-link">
                                    Continue reading
                                    <svg class="bi">
                                        <use xlink:href="#chevron-right"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <svg class="bd-placeholder-img" width="200" height="250"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <defs>
                                        <pattern id="background" width="100%" height="100%">
                                            <image href="imageBlogfinal.png" />
                                        </pattern>
                                    </defs>

                                    <rect width="100%" height="100%" fill="url(#background)"></rect>
                                </svg>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection


</body>

</html>
