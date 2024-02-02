<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <main class="container p-5 border rounded">
        <h1 class="fw-bold">To-do List</h1>
        <hr>
        <form method="POST" action="{{ route('addtodo') }}">
        @csrf
            <input type="text" class="form-control" name="content" placeholder="Write something here...">
            <button type="submit" class="btn btn-primary btn-sm mt-3">Add</button>
        </form>
        <hr>
        @foreach($todos as $todo)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
               {{ $todo -> content }}
            </label>
        </div>
        @endforeach
    </main>
</body>
</html>