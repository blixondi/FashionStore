<form action="{{ route('customers.update', $users->id) }}" method="post" id="form-update">
    @method('PUT')
    @csrf
    Username : <input type="text" name="username" id="" value="{{ $users->username }}"><br><br>
    Password : <input type="text" name="password" id="" value="{{ $users->password }}"><br><br>
    Email : <input type="text" name="email" id="" value="{{ $users->email }}"><br><br>
    First Name : <input type="text" name="fname" id="" value="{{ $users->fname }}"><br><br>
    Last Name : <input type="text" name="lname" id="" value="{{ $users->lname }}"><br><br>
    Phone Number : <input type="text" name="phone_number" id="" value="{{ $users->phone_number }}"><br><br>
</form>
