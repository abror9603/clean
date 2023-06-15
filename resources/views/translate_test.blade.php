<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($all_locales as $lang)
    <a href="{{route('change.locale', ['lang'=> $lang])}}">
        {{
            $lang
        }}
    </a>
    @endforeach
    <h2>{{__('Description')}}</h2>
    <p>{{__('This package allows you to scan your app for translations and create your *.json file.')}}</p>
    <h2>{{__('It also allows you to upload your base translation to poeditor.')}}</h2>
</body>
</html>