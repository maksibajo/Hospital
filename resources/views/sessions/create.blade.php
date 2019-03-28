<h1>login</h1>

<form method="post" action="/login">

    {{ csrf_field() }}

    <div>
        <label for="email"></label>
        <input type="email" name="email" id="email">
    </div>

    <div>
        <label for="password"></label>
        <input type="password" name="password" id="password">
    </div>

    <button type="submit">Login</button>
</form>