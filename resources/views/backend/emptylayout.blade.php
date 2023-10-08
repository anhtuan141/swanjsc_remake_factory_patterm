<!DOCTYPE html>
<html lang="en">

<head>

    @include('backend.widget.head')

</head>

<body class="bg-gradient-primary">

    <div class="container">

        @yield('content')

    </div>

    @stack('jscustom')

</body>

</html>
