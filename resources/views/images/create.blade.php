<h1>画像</h1>

<ul>
    <li><a href="{{ route('images.index') }}">Images</a></li>
    <li><a href="{{ route('images.create') }}">Create Image</a></li>
</ul>

<form action="{{ route('images.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="image">画像</label>
    <input type="file" name="image" id="image" accept="image/*" required>
    <button type="submit">送信</button>
</form>
