@extends('admin/comm');
@section('commman');


  <main id="main" class="main">

    <section class="section">
    <div class="pagetitle">
      <h1>Users form</h1>
     
    </div><!-- End Page Title -->

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">General Form Elements</h5>

              <!-- General Form Elements -->
              <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Title</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title">
                    @error('title')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
                <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="image">
                    @error('image')
                    <p style="color:red;">{{$message}}</p>
                    @enderror
                  </div>
                </div>
               
                

                
               

                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label">Submit Button</label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit Form</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->
  @endsection

 