<!DOCTYPE html>
<html>
   <head>
      <title>File Uploader</title>
      <script type="text/javascript" src="{{asset('js/bootstrap.min.js') }}"></script>
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{asset('css/app.css') }}">

   </head>
   <body>

      <div class="container mt-5  ">
      @if ($message = Session::get('success'))
                   <div class="alert alert-success alert-dismissible">
                      <strong>{{ $message }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

                   </div>
               @endif
               
               @if ($failures = Session::get('failures'))
               <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  <ul>
                     @foreach ($failures as $failure)
                        @foreach ($failure->errors() as $error)
                           <li>{{ $error }}</li>
                        @endforeach
                     @endforeach
                  </ul>
               </div>
               @endif
 
               @if (count($errors) > 0)
               <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

                  <ul>
                     @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                     @endforeach
                  </ul>
               </div>
               @endif
      </div>
      <div class="container mt-5 center ">
         
         <div class="panel panel-primary">
            <div class="panel-heading">
               <h2>File Uploader for Bulk Data</h2>
            </div>
            <div class="panel-body">
               
 
               <form action="{{ url('upload') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                     <div class="col-md-6">
                        <input type="file" name="file" class="form-control"/>
                     </div>
                     <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload File...</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>