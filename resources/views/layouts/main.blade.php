<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  
  <title>Welcome</title>
</head>
<body>
  <x-back-to-home />
  @yield('list-table')
</body>
</html>