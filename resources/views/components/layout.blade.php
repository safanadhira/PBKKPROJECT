<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBKK Ninjas</title>
</head>
<body>
    
    <header>
        <nav>
            <h1> PBKK Ninjas </h1>
            <a href="/"> Homepage </a>
            <a href="/ninjas"> All Ninjas </a>
            <a href="/ninjas/create"> Create New Ninja </a>
        </nav>
    </header>
    
    <main class="container">
        {{ $slot }}
    </main>
</body>
</html>