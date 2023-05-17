<h1>Create new post</h1>

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input id="title" type="text" name="title" placeholder="Post title" class="@error('title') is-invalid @enderror">
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input id="body" type="textarea" name="body" placeholder="Post content" class="@error('body') is-invalid @enderror">
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit">Submit</button>

</form>
