<html>
<head>
    <title>Application Logs</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-300">

<div class="container mx-auto p-10 text-gray-800">
    <div class="flex my-4 items-center">
        @yield('search')
    </div>

    <div class="container mx-auto">
        @yield('content')
    </div>
</div>
</body>
</html>
