<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Data</title>
</head>
<body>
    <h1>Data yang Dikirim</h1>
    <p>Email: <span id="displayEmail"></span></p>
    <p>Password: <span id="displayPassword"></span></p>

    <script>
      // Mengambil data dari localStorage
      document.getElementById('displayEmail').innerText = localStorage.getItem('email');
      document.getElementById('displayPassword').innerText = localStorage.getItem('password');
    </script>
</body>
</html>
