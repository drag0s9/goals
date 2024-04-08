<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goal Tracker</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Obiectivele mele</h1>
        
        <!-- Buton pentru crearea unui nou obiectiv -->
        <a href="{{ route('create') }}" class="btn btn-primary mb-3">Adaugă un obiectiv nou</a>
        
        @if($goals->isEmpty())
            <p>Nu există obiective definite.</p>
        @else
            <ul class="list-group mt-3">
                @foreach($goals as $goal)
                    <li class="list-group-item">
                        <h4>{{ $goal->name }}</h4>
                        <p>{{ $goal->description }}</p>
                        <p>Data limită: {{ $goal->due_date }}</p>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
</body>
</html>
