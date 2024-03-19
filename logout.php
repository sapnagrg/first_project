<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="style/style.css"> 
    <script>
        function logout() {
            setTimeout(function() {
                window.location.href = "login.php";
            }, 2000);
        }
    </script>
</head>
<body>

    <header>
        <h1>It's Paradise</h1>
        <p>
            <button  class="btn" onclick="logout()">Logout</button>
        </p>
    </header>

    <!-- Rest of your content -->

</body>
</html>
