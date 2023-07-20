<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

{{--    @if(count($articles)==1)--}}
{{--        <p>this is a single article</p>--}}
{{--    @elseif(count($articles)>1)--}}
{{--        <p>this is a few  article</p>--}}
{{--    @else--}}
{{--        <p>you are not here</p>--}}

{{--    @endif--}}

@foreach($articles as $article )
    {{$article}} <br>
@endforeach
</body>
</html>
