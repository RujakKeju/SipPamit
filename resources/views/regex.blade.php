<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
</head>
<body>
    <h1>register</h1>
    <div class="main-form">
        <form method="post" action="/register">
            @csrf
            <div class="form-input">
            <label for="name">name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-input">
            <label for="name">username</label>
                <input type="text" name="username" id="name">
            </div>
            <div class="form-input">
            <label for="email">email</label>
                <input type="text" name="email" id="email">
            </div>
            <div class="form-input">
            <label for="password">password</label>
            <input type="password" name="password" id="password">
            </div>
            <div class="form-input">
            <label for="role">role</label>
            <input type="text" name="role" id="role">
            </div>
            <div class="form-input">
            <label for="address">address</label>
                <input type="text" name="address" id="address">
            </div>
            <div class="form-input">
            <label for="contact">contact</label>
                <input type="text" name="contact_phone" id="contact">
            </div>
            <div class="form-input">
            <label for="descript">descript</label>
                <input type="text" name="descript" id="descript">
            </div>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>