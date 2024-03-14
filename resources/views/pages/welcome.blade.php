<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>

    @vite(['resources/js/app.js'])
</head>
<body>

    <main class="container">
        <div class="row py-5">
            @foreach ($movies as $movie)
                <div class="card" style="width: calc(100% / 5);">
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie['title'] }}</h5>
                        <p>{{ $movie['date'] }}</p>
                        <p class="text-capitalize">{{ $movie['nationality'] }}</p>
                        <p>Vote: {{ $movie['vote'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
    
</body>
</html>