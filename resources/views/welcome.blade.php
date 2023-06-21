<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h2>LOGIN</h2>
    <form action="{{ url('user/auth') }}" method="post">
        @csrf
        <table>
            <tr>
                <td>EMAIL</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>PASSWORD</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>