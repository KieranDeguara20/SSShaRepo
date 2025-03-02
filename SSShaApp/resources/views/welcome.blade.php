<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>SSS Home Assignment</title>
 
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f8fafc;
            }
            .container {
                text-align: center;
            }
            .btn {
                display: inline-block;
                margin: 10px;
                padding: 15px 30px;
                font-size: 16px;
                font-weight: 600;
                color: #fff;
                background-color: #3490dc;
                border: none;
                border-radius: 5px;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }
            .btn:hover {
                background-color: #2779bd;
            }
            h1 {
                margin-bottom: 20px;
                font-size: 2.5em;
                color: #333;
            }
        </style>
    </head>
 
    <body class="antialiased">
        <div class="container">
            <h1>SSS Home Assignment</h1>
            <a href="{{ route('colleges.index') }}" class="btn">All Colleges</a>
            <a href="{{ route('students.index') }}" class="btn">All Students</a>
        </div>
    </body>
</html>