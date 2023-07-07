<form action="{{url('/profile/update')}}" method="POST">
@method('PUT')
@csrf
<div class="form-floating mb-4">
    <input id="name" type="text"
        class="form-control @error('username') is-invalid @enderror" name="username"
        value="{{ Auth::user()->username }}" required autocomplete="name" autofocus
        placeholder="Username">
    <label for="loginName">Username</label>

    @error('username')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>
<div class="form-floating mb-4">
    <input id="email" type="email"
        class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="E-mail">
    <label for="loginEmail">E-mail</label>

    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-floating mb-4">
    <input id="fname" type="text"
        class="form-control @error('fname') is-invalid @enderror" name="fname"
        value="{{ Auth::user()->fname }}" required autocomplete="fname" autofocus
        placeholder="Nama Depan">

    <label for="loginEmail">Nama Depan</label>

    @error('fname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-floating mb-4">
    <input id="lname" type="text"
        class="form-control @error('lname') is-invalid @enderror" name="lname"
        value="{{ Auth::user()->lname }}" required autocomplete="lname" autofocus
        placeholder="Nama Belakang">

    <label for="loginEmail">Nama Belakang</label>

    @error('lname')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-floating mb-4">
    <input id="phone_number" type="number"
        class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
        value="{{ Auth::user()->phone_number }}" required autocomplete="phone_number" autofocus
        placeholder="Nomor Telepon">

    <label for="loginEmail">Nomor Telepon</label>

    @error('phone_number')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-floating password-field mb-4">
    <input id="password" type="password"
        class="form-control @error('password') is-invalid @enderror" name="password"
        autocomplete="new-password" placeholder="Password">
    <span class="password-toggle"><i class="uil uil-eye"></i></span>

    <label for="loginPassword">Password</label>

    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-floating password-field mb-4">
    <input id="password-confirm" type="password" class="form-control"
        name="password_confirmation" autocomplete="new-password"
        placeholder="Konfirmasi Password">

    <span class="password-toggle"><i class="uil uil-eye"></i></span>
    <label for="loginPasswordConfirm">Konfirmasi Password</label>
</div>
        <input type="submit" value="Submit" name="Ubah" class="btn btn-primary rounded-pill btn-login w-100 mb-2">
</form>
