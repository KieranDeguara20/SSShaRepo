<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>SSS Home Assignment</title>
 
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
 
    </head>
 
    <body class = "antialiased">
        <div>
            <a href ="{{ route('colleges.index') }}">All Colleges </a>
            <a href ="{{ route('colleges.create') }}">Add Colleges</a>
            <a href ="{{ route('colleges.edit', 1) }}">Edit Colleges</a>
            <a href ="{{ route('students.index') }}">All Students </a>
            <a href ="{{ route('students.create') }}">Add Students</a>
            <a href ="{{ route('students.edit', 1) }}">Edit Students</a>
            <a href ="{{ route('students.destroy', 1) }}">Delete Students</a>
        </div>
    </body>
</html>
