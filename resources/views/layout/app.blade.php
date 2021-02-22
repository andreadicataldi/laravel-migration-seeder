<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>University</title>
</head>

<body>
    <div class="container">
        <nav role="navigation">
            <h3 class="navbar-brand" href="#">University</h3>
            <ul class="">
                <li class="">
                    <a href="/">Home</a>
                </li>
                <li class="">
                    <a href="{{ route('student.index') }}">Students</a>
                </li>
                <li>
                    <a href="{{ route('group.index') }}">Groups</a>
                </li>
                <li>
                    <a href="{{ route('course.index') }}">Course</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
