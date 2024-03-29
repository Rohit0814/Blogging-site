<x-user-view>
    <div style="padding: 0px 80px;">
        @foreach ($post as $p)
            <div class="d-flex justify-content-between">
                <h3>Blog Update</h3>

                <div class="d-flex">
                    <form action = '/posts/update/{{ $p->post_id }}' method="Post">
                        @csrf
                        <button type="submit" class="btn btn-success" style="margin-right: 30px; width:100px">Update <i
                                class="fa-solid fa-pen-fancy"></i></button>
                    </form>

                    <form action="/posts/delete/{{ $p->post_id }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Move
                            to Trash <i class="fa-brands fa-bitbucket"></i></a>
                    </form>
                </div>
            </div><br>
            <input type="text" name="update_title" placeholder="Heading"
                style="width:100%; padding:5px 20px;font-size:20px" value="{{ $p->title }}"><br>
            <span style="color:red; font-weight:bolder">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
            <br><br>
            <textarea rows="18" name="update_content" placeholder="Start Writing Here....."
                style="width:100%; resize:none; padding:20px 20px; font-size:17px">{{ $p->content }}</textarea><br>
            <span style="color:red; font-weight:bolder">
                @error('content')
                    {{ $message }}
                @enderror
            </span>
        @endforeach
    </div>

</x-user-view>
