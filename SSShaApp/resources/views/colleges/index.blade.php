<!DOCTYPE html>
<html lang="en">
<head>
    <title>Colleges</title>
</head>
<body>
    <div class="container">
        <h1>List of Colleges</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach($colleges as $college)
                <tr>
                    <td>{{ $college->name }}</td>
                    <td>{{ $college->address }}</td>
                </tr>
                @endforeach
            </tbody>
    </div>
</body>
</html>
