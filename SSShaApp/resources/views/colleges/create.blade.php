<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create College</title>
</head>
<body>
    <h2>Create College</h2>
    <form action="{{ route('colleges.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="address">Address: </label>
            <input type="text" name="address" id="address">
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>