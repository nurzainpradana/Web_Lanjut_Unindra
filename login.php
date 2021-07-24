<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/signin.css" rel="stylesheet" />
</head>

<body class="text-center">
    <main class="form-signin">
        <form action="cek_login.php" method="POST" autocomplete="off">

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating" >
                <input type="text" name="txtUser" id="" class="form-control" placeholder="Username" required="required">
                <label for="txtUser">Username</label>
            </div>

            <div class="form-floating">
                <input type="password" name="txtPass" id="" class="form-control" placeholder="Password" required="required">
                <label for="txtPass">Password</label>
            </div>

            <div class="input-group mb-3">
                <label for="txtLevel" class="input-group-text">Level</label>
                <select name="txtLevel" id="" class="form-select" required="required">
                    <option value="">Pilih</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary btn-block w-100">Login</button>

        </form>
    </main>
</body>

</html>