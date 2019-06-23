<!DOCTYPE html>
<html>
<head>
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
     
    <form action="{{ route('postlogin') }}" aria-label="{{ __('Login') }}" method="post">
        @if ($message = Session::get('error'))
            <p><i class="icon fa fa-warning"></i> {{$message}}</p>
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p>Email : </p>
        <input type="email" name="email" class="form-control input_user" placeholder="Email">
        <p>Password : </p>
        <input type="password" name="password" class="form-control input_pass" placeholder="Password">
        <br/>
        <br/>
        <button type="submit" class="btn login_btn">Login</button>
    </form>
</body>
</html>