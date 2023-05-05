<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Store Data</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/store.css')}}">


</head>
<body class="mt-5 mx-5">
    <a href="/home" class="btn btn-success mt-3">&larr; Back</a>


    <form action="/update/{{$data->id}}" method="POST">
        @csrf
        @method('patch')
        <h3>Update Data</h3>
            @if(session('loginError'))
        <div class="alert alert-danger" role="alert">
                {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <label for="username">Name</label>
        <input type="text" placeholder="Enter your name" id="name" name="name" class="@error('name') is-invalid @enderror"  value="{{$data->name}}">
            @error('name')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror


        <label for="username">Age</label>
        <input type="text" placeholder="Enter your age" id="age" name="age" class="@error('age') is-invalid @enderror"  value="{{$data->age}}">
            @error('age')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

        <label for="password">Occupation</label>
        <input type="text" placeholder="Enter your occupation" id="occupation" name="occupation" class="@error('occupation') is-invalid @enderror"  value="{{$data->occupation}}">
            @error('occupation')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror

            <label for="password">Nationality</label>
            <input type="text" placeholder="Enter your natinality" id="nationality" name="nationality" class="@error('nationality') is-invalid @enderror"  value="{{$data->nationality}}">
                @error('nationality')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

        <button type="submit">Add New Data</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>
