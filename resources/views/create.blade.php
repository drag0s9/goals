<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adaugă obiectiv</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1>Adaugă un nou obiectiv</h1>
        
        <form action="{{ route('store') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="name">Nume obiectiv:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="description">Descriere:</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <div class="form-group">
                <label for="due_date">Data limită:</label>
                <input type="date" class="form-control" id="due_date" name="due_date" required>
            </div>

            <button type="submit" class="btn btn-primary">Adaugă obiectiv</button>
        </form>
    </div>
</body>
</html>
