<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-info">
    <div class="container mt-5">
        <h1 class="text-center mb-4">Movie Collection</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text"><strong>Genre:</strong> {{ $movie['genre'] }}</p>
                            <p class="card-text"><strong>Director:</strong> {{ $movie['director'] }}</p>
                            <p class="card-text"><strong>Release Year:</strong> {{ $movie['release_year'] }}</p>
                            <p class="card-text"><strong>Price:</strong> ${{ number_format($movie['price'], 2) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
