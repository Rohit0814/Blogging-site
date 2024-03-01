<x-user-view>
    <h1>Profile</h1><br>
    <div class="container">
        <h5>Name: {{ Auth::guard('blogger')->user()->first_name }} {{ Auth::guard('blogger')->user()->last_name }}</h5>
        <br>
        <h5>Email: {{ Auth::guard('blogger')->user()->email }}</h5><br>
        <h5>userName: {{ Auth::guard('blogger')->user()->userName }}</h5><br>
        <h5>Address: {{ Auth::guard('blogger')->user()->address }}, {{ Auth::guard('blogger')->user()->state }}
            {{ Auth::guard('blogger')->user()->country }}</h5><br>
        <button class="btn btn-warning">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger">Close Account</button>
    </div>
</x-user-view>
