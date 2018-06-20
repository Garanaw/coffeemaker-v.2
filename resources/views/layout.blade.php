<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    
    @if(isset($scripts))
    
        @foreach($scripts as $script)
            
            <script type="text/javascript" src="{{ asset('js/'.$script.'.js') }}"></script>
    
        @endforeach
    @endif
    
</head>

<body>

@yield('content')

<footer>

</footer>

</body>
</html>
