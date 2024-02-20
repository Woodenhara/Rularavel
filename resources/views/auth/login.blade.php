<form action="{{ route('auth.proses') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <br>
    <button type="submit">Login</button>
</form>
