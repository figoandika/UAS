@extends('layouts/dashboard')
@section('content')
<div class="container">
    <h1>Data Store</h1>
    @for ($i = 0; $i < 15; $i++)
    <div class="card text-center mt-5">
        <div class="card-body">
          <h5 class="card-title">Title Product</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Edit</a>
          <a id="myButton" href="#"><img src="https://www.pngplay.com/wp-content/uploads/7/Delete-Logo-Transparent-Background.png" alt="..." width="30"></a>
        </div>
        <div class="card-footer text-body-secondary">
          2 days ago
        </div>
      </div>
  
    @endfor

</div>

@endsection