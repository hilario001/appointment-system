<!doctype html>
<html lang=en>
<head>
    <meta charset="utf-8">
    <title>Swift Appointments - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="styles/general.css" type="text/css" rel="stylesheet">
    <link href="styles/font.css" type="text/css" rel="stylesheet">
    <link href="styles/dashboard.css" type="text/css" rel="stylesheet">
</head>
<body>
    <nav>
        <ul>
            <li>
                <button 
                    data-file="book.php"
                    onclick="loadContent(this, 'book.php')">
                    Book an appointment
                </button>
            </li>
            <li>
                <button
                    data-file="pending.php"
                    onclick="loadContent(this, 'pending.php')">
                    Pending appointments
                </button>
            </li>
            <li>
                <button
                    data-file="upcoming.php"
                    onclick="loadContent(this, 'upcoming.php')">
                    Upcoming appointments
                </button>
            </li>
            <li>
                <button 
                    data-file="history/history.php"
                    onclick="loadContent(this, 'history/history.php')">
                    History
                </button>
            </li>
            <li>
                <a class="logout" href="index.php">Logout</a>
            </li>
        </ul>
    </nav>
    <main></main>

    <script src="js/script.js"></script>
</body>
</html>

