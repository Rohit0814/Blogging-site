<x-user-view>
    <div style="padding: 0px 80px;">
        <form action = '/users/posts' method="Post">
            @csrf
            <div class="d-flex justify-content-between">
                <h3>Blog Post</h3>
                <button type="submit" class="btn btn-success" style="margin-right: 30px; width:100px">Post <i
                        class="fa-solid fa-file-import"></i></button>
            </div><br>
            <input type="text" name="title" placeholder="Heading" style="width:100%; padding:5px 20px;font-size:20px"
                value="{{ old('title') }}"><br>
            <span style="color:red; font-weight:bolder">
                @error('title')
                    {{ $message }}
                @enderror
            </span>
            <br><br>
            <textarea rows="18" name="content" placeholder="Start Writing Here....."
                style="width:100%; resize:none; padding:20px 20px; font-size:17px">{{ old('content') }}</textarea><br>
            <span style="color:red; font-weight:bolder">
                @error('content')
                    {{ $message }}
                @enderror
            </span>
        </form>
    </div>

</x-user-view>
