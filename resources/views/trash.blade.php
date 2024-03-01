<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>

    <x-user-view>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Trash</h6>

            @foreach ($posts as $p)
                <div class="d-flex text-body-secondary pt-3">
                    <i class="fa-solid fa-blog" style="position: relative; top:7px; left:26px; color:white"></i>
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#d40000"></rect><text x="50%" y="50%" fill="#d40000"
                            dy=".3em">32x32</text>
                    </svg>

                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong class="text-gray-dark">{{ $p->title }}</strong>
                                <span class="d-block">{{ Str::limit($p->content, 50, '...') }}</span>
                            </div>

                            <div class="d-flex">
                                <form method="post" action="/post/restore/{{ $p->post_id }}">
                                    @csrf
                                    <button type="submit" class="btn btn-warning mx-2">Restore <i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                </form>
                                <form action="/post/forcedelete/{{ $p->post_id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Permanently Delete <i
                                            class="fa-brands fa-bitbucket"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </x-user-view>

</body>

</html>
