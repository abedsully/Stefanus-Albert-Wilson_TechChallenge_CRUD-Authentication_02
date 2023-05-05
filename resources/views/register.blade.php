<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/css/register.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <form action="/register" method="POST">
        @csrf
        <h3>Register Here</h3>

        <label for="username">Name</label>
        <input type="text" placeholder="Enter your name" id="name" name="name" class="@error('name') is-invalid @enderror" value="{{ old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        <label for="email">Email</label>
        <input type="text" placeholder="Enter your email address" id="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email' )}}">
            @error('email')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        <label for="password">Password</label>
        <input type="password" placeholder="Enter your password" id="password" name="password" class="@error('password') is-invalid @enderror" value="{{ old('password' )}}">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        <label for="password">Confirm Password</label>
        <input type="password" placeholder="Enter your password confirmation" id="password" name="confirm" class="@error('confirm') is-invalid @enderror" value="{{ old('confirm' )}}">
            @error('confirm')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        <button type="submit">Register</button>

        <p>Already have an account? <a href="/login" style="text-decoration: underline">Login Here</a></p>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
