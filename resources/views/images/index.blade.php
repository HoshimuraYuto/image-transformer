<style>
    img {
        max-width: 300px;
        height: auto;
    }
</style>

<h1>画像</h1>

<ul>
    <li><a href="{{ route('images.index') }}">Images</a></li>
    <li><a href="{{ route('images.create') }}">Create Image</a></li>
</ul>

@if (count($images) === 0)
    <p>imageがありません</p>
@else
    <ul>
        @foreach ($images as $image)
            <li>
                <img src="{{ asset('storage/' . $image->path) }}" alt="画像" />
            </li>
        @endforeach
    </ul>
@endif
