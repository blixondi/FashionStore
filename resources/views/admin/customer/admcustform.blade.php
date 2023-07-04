<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <h3>Update Customer</h3>
    <form action="{{ route('customers.update', $users->id) }}" method="post">
        @method('PUT')
        @csrf
        Username : <input type="text" name="username" id="" value="{{ old('username') }}"><br><br>
        Password : <input type="text" name="password" id="" value="{{ old('password') }}"><br><br>
        Email : <input type="text" name="email" id="" value="{{ old('email') }}"><br><br>
        First Name : <input type="text" name="fname" id="" value="{{ old('fname') }}"><br><br>
        Last Name : <input type="text" name="lname" id="" value="{{ old('lname') }}"><br><br>
        Phone Number : <input type="text" name="phone_number" id=""
            value="{{ old('phone_number') }}"><br><br>
        <input type="submit" value="Submit" name="submit">
    </form>
    @if (session('message'))
        <strong style="font-size: 15px">{{ session('message') }}</strong><br>
    @endif
</body>

</html>
