<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* table {border:1px solid #000;} */
    </style>
</head>
<body>
    <div class="login-form">
        <h2>PHP CRUD Using Ajax</h2>
        <form action="">
            <input type="text" placeholder="Username" id="username">
            <input type="password" placeholder="Password" id="password">
            <button id="btn-submit">Submit</button>
        </form>
    </div>

    <div class="data">
        <table>
            <thead>
                <th>Username</th>
                <th>Password</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <script>
        let uname = document.getElementById('username');
        let pass = document.getElementById('password');

        let btn = document.getElementById('btn-submit');
        btn.addEventListener('click', insertData);

        function insertData()
        {
            let xhr = new XMLHttpRequest();
            xhr.open("POST", "crud.php", true);

            xhr.send();
        }
    </script>
</body>
</html>