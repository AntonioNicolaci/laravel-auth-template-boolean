<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('admin.includes.header')
    <div class="container">
        <main>
            @yield('contents')
        </main>
    </div>
    @include('admin.includes.footer')
</body>
</html>