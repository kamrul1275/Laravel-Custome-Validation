<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 class="text-center">Registration From</h1>


<div class="container">
  <div class="row">

<div class="col-md-2"></div>
<div class="col-md-8">



    <form action="{{ route('contact.store') }} " method="post">

        @csrf

        <div class="mb-3">
          <label for="name" class="form-label">Name</label>

          <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">

          @error('name')
          <span class="text-danger"> {{ $message }}</span>

         @enderror
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" id="email">

          @error('email')
          <span class="text-danger"> {{ $message }}</span>

         @enderror
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>
<div class="col-md-2"></div>

  </div>

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
