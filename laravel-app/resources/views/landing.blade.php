<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Landing Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8fafc;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-color: #3490dc;
            color: white;
            padding: 50px 0;
        }
        h1 {
            margin: 0;
            font-size: 3rem;
        }
        .content {
            padding: 50px 20px;
        }
        footer {
            background-color: #f8fafc;
            color: #6c757d;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Laravel Landing Page</h1>
    </header>

    <div class="content">
        <p>{{ $message }}</p>
        <p>Feel free to customize it.</p>
    </div>

    <footer>
        <p>&copy; 2024 My Laravel App</p>
    </footer>
</body>
</html>

