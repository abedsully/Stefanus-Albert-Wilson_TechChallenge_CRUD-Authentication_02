<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Home</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('/css/home.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="mt-5 mx-5">

    <form action="/logout" method="POST">
        @csrf
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger">Logout</button>
        </div>
    </form>

    <div class="d-flex flex-row gap-4">
        <h1 class="text-white">Citizens Data</h1>
        <a href="/store" class="h6 text-success d-flex align-items-center mt-3">&#43 Add New Data</a>
    </div>


    <table class="table table-bordered table-light w-75 mt-3">
        @if($datas->isEmpty())
        <p class="text-warning mt-3 small">Currently, there is no data!</p>
        @else
        <thead>
            <tr>
              <th scope="col" style="width: 4%">No</th>
              <th scope="col" style="width: 30%">Full Name</th>
              <th scope="col" style="width: 7%">Age</th>
              <th scope="col" style="width: 20%">Occupation</th>
              <th scope="col" style="width: 20%">Nationality</th>
              <th scope="col" style="width: 7%">Action</th>
            </tr>
          </thead>
        @endif

        <tbody>
        @foreach ($datas as $data)
          <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->age}}</td>
            <td>{{$data->occupation}}</td>
            <td>{{$data->nationality}}</td>

            <td class="d-flex">
                <a href="/edit/{{$data->id}}"><i class="fa fa-edit bg-primary p-1 text-white"></i></a>
                <form action="/delete/{{$data->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button><i class="fa fa-trash bg-danger p-1 text-white"></i></button>
                </form>
            </td>
          </tr>
        @endforeach
        </tbody>
      </table>









    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>
