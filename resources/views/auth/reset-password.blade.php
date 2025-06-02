<form method="POST" action="{{ route('password.update') }}">
    @csrf

    <input type="hidden" name="token" value="{{ $token }}">
    <input type="hidden" name="email" value="{{ $email }}">

    <label>New Password</label>
    <input type="password" name="password" required>

    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" required>

    <button type="submit">Reset Password</button>
</form>
