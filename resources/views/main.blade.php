<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap core CSS -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
<!-- Fonts -->
<link href="{{asset('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
<link href="{{asset('https://fonts.googleapis.com/css?family=Righteous')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('assets/css/mediumish.css')}}" rel="stylesheet">
</head>
<body>
    <div id="app"></div>
    @vite('resources/js/app.js')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js')}}" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/ie10-viewport-bug-workaround.js')}}"></script>
</body>
</html>
