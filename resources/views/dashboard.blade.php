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
            <h6 class="border-bottom pb-2 mb-0">Posts</h6>

            @foreach ($post as $p)
                <div class="d-flex text-body-secondary pt-3">
                    <i class="fa-solid fa-blog" style="position: relative; top:7px; left:26px; color:white"></i>
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff"
                            dy=".3em">32x32</text>
                    </svg>

                    <div class="pb-3 mb-0 small lh-sm border-bottom w-100">
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong class="text-gray-dark">{{ $p->title }}</strong>
                                <span class="d-block">{{ $p->content }}</span>
                            </div>

                            <div>
                                <a href="#" type="button" class="btn btn-warning">Edit <i
                                        class="fa-solid fa-pen-to-square"></i></a> &nbsp; &nbsp;
                                <a href="#" type="button" class="btn btn-danger">Move to Trash <i
                                        class="fa-brands fa-bitbucket"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </x-user-view>

</body>

</html>
