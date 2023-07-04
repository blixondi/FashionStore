<form action="{{ route('customers.update', $users->id) }}" method="post" id="form-update">
    @method('PUT')
    @csrf
    Username : <input type="text" name="username" id="" value="{{ old('username') }}"><br><br>
    Password : <input type="text" name="password" id="" value="{{ old('password') }}"><br><br>
    Email : <input type="text" name="email" id="" value="{{ old('email') }}"><br><br>
    First Name : <input type="text" name="fname" id="" value="{{ old('fname') }}"><br><br>
    Last Name : <input type="text" name="lname" id="" value="{{ old('lname') }}"><br><br>
    Phone Number : <input type="text" name="phone_number" id="" value="{{ old('phone_number') }}"><br><br>
</form>
