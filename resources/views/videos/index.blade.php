<!DOCTYPE html>
<html>
<head><title>YouTube Descriptions</title></head>
<body>
    <h1>Fetch YouTube Video Description</h1>

    <form action="{{ route('videos.store') }}" method="post">
        @csrf
        <input type="text" name="url" placeholder="Enter YouTube URL" required>
        <button type="submit">Fetch & Save</button>
    </form>

    <h2>Stored Videos</h2>
    <ul>
        @foreach($videos as $video)
            <li>
                <strong>{{ $video->url }}</strong><br>
                 {!! nl2br(e($video->description)) !!}
            </li>
        @endforeach
    </ul>
</body>
</html>