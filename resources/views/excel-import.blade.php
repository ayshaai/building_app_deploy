<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
</head>
<body>
   <div class="container">

   <div class="row pt-5">
<div class="col-md-6">
    <div class="form-group">

    <form action="/issues/import" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" id="" name="excelFile">
    @error('excelFile')
    <span class="alert alert-danger">Upload only xlsx file</span>
    @enderror
    
    <input type="submit" value="Submit">
</form>


    </div>
</div>

   </div>
   </div>
    

    
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

</body>
</html>