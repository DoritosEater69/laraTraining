@include('layouts.header')

    <body>
        <h1>Welcome, {{ $user->name }}</h1><br>
        Your <b>Email</b> is: {{ $user->email }}<br><br>
        Your created your Account: {{ $user->created_at }}<br>
        Your updated your Account: {{ $user->updated_at }}<br>
    </body>
</html>
