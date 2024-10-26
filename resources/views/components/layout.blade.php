<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobSearch</title>
</head>

<body>
    <div>
        <nav>
            <div>
                <a href="/">
                    <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="" srcset="">
                </a>
            </div>
            <div>links</div>
            <div>post a job</div>
        </nav>
        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>