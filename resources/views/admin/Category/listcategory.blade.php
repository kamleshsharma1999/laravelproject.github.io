



@extends('admin/comm');
@section('commman');

<main id="main" class="main">

<div class="pagetitle">
  <h1>Category Tables</h1>
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
          <a href="{{('Categoryform')}}" class="btn btn-danger">Add</a></td>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Srno</th>
                <th scope="col">Name</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
               
              </tr>
            </thead>
            <tbody>
@foreach($list as  $key=>$showdatas)

              <tr>
                <td>{{$key+1}}</td>
                <td>{{$showdatas->name}}</td>

                <td>
                                    @if($showdatas->status=='1')
                                    <a href="{{url('status-update/'.$showdatas->id)}}" class="btn btn-primary">Active</a>
                                    @else
                                    <a href="{{url('status-update/'.$showdatas->id)}}" class="btn btn-warning">InaActive</a>
                                    @endif
                                </td>
       
                
                <td>    
                 <a href="/Category/{{ $showdatas->id }}/formdelete" class="btn btn-danger">DELETE</a></td>
                <td><a href="/Category/{{ $showdatas->id }}/formedit" type="button" class="btn btn-primary">Edit</a></td></td>
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



