<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products Index</title>
</head>
<body>
    <h1>Products index</h1>
    {{-- <p>{{ $title }}</p> --}}
    {{-- <p>{{ $desc }}</p> --}}
    
        @foreach ($data as $item)
            <p>
                {{ $item }}
            </p>    
        @endforeach
    
    
</body>
</html>