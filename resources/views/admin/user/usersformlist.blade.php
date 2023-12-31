



@extends('admin/comm');
@section('commman');

<main id="main" class="main">

<div class="pagetitle">
  <h1>General Tables</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<section class="section">
  <div class="row">
    <div class="col-lg-8">
        @if($message = Session::get('success'))
        <div class="alert alert-success alert-block">{{$message}}</div>
        @endif
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Default Table</h5>
          <a href="{{('addform')}}" class="btn btn-danger">Add</a></td>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">srno</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">address</th>
                <th scope="col">acton</th>
              </tr>
            </thead>
            <tbody>
@foreach($list as  $key=>$showdatas)

              <tr>
                <td>{{$key+1}}</td>
                <td>{{$showdatas->name}}</td>
                <td>{{$showdatas->email}}</td>
                <td>{{$showdatas->mobile}}</td>
                <td>{{$showdatas->address}}</td>
                <td>    
                 <a href="/user/{{ $showdatas->id }}/formdelete" class="btn btn-danger">DELETE</a></td>
                <td><a href="/user/{{ $showdatas->id }}/formedit" type="button" class="btn btn-primary">Edit</a></td></td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <!-- End Default Table Example -->
     
    
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
</section>

</main><!-- End #main -->
@end@section



