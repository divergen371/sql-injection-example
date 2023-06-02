<html>

<body>
    <form action="{{ route('login-result') }}" method="post">
        @csrf
        <input type="text" name="login_id" placeholder="ID" /><br>
        <input type="text" name="login_password" placeholder="PASSWORD" /><br>
        <input type="submit" value="ログイン">
    </form>
</body>

</html>
