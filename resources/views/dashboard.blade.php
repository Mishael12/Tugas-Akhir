@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
  <head>
    <title>Manajemen Perpustakaan - Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css\style.css')}}" />
  </head>
  <body>
    <header>
    <div id="admin-content">
        <div class="container">
            <div class="head">
                <div class="col-md-3">
                    <h2 class="admin-heading">Manajemen Perpustakaan</h2>
                </div>
            </div>
    </header>
    <section>
      <div>
      <div class="row-2">
      <div class="col-md-3">
        <div class="card" style="width: 14rem; margin: 0 auto;">
        <div class="card-body text-center">
            <p class="card-text">{{ $authors }}</p>
            <h5 class="card-title mb-0">Authors Listed</h5>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 14rem; margin: 0 auto;">
        <div class="card-body text-center">
            <p class="card-text">{{ $publishers }}</p>
            <h5 class="card-title mb-0">Publishers Listed</h5>
        </div>
        </div>
        </div>
        <div class="col-md-3">
        <div class="card" style="width: 14rem; margin: 0 auto;">
        <div class="card-body text-center">
            <p class="card-text">{{ $categories }}</p>
            <h5 class="card-title mb-0">Categories Listed</h5>
        </div>
        </div>
        </div>
        </div>
        <div class="row-3">
        <div class="col-md-3">
        <div class="card" style="width: 14rem; margin: 0 auto;">
        <div class="card-body text-center">
            <p class="card-text">{{ $books }}</p>
            <h5 class="card-title mb-0">Books Listed</h5>
        </div>
        </div>
        </div>
        <div class="row-4">
        <div class="col-md-3">
        <div class="card" style="width: 14rem; margin: 0 auto;">
        <div class="card-body text-center">
            <p class="card-text">{{ $students }}</p>
            <h5 class="card-title mb-0">Register Students</h5>
        </div>
        </div>
        </div>
      </div>
      </div>
    </section>
  </body>
</html>
@endsection
   