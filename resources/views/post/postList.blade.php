<div class="container">
    @foreach($posts as $post)
    <ul class="form-control">
        <li class="list-group-item">{{$post->title}}</li>
        <li>{{$post->body}}</li>
    </ul>
    @endforeach
</div>
