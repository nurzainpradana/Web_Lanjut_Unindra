<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=">
    <title>Login</title>
</head>
<body>
    <form action="cek_login.php" method="POST">
        <label for="txtUser">Username</label>
        <input type="text" name="txtUser" id="" placeholder="Username" required="required">

        <label for="txtPass">Password</label>
        <input type="password" name="txtPass" id="" placeholder="Password" required="required">

        <label for="">Level</label>
        <select name="txtLevel" id="" required="required">
            <option value="">Pilih</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <button type="submit">Login</button>
    </form>
</body>
</html>