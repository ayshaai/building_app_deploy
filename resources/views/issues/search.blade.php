<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
</head>
<body>
  <div class="container">
<div class="row">
<div class="col-md">
<div class="form-group">

<form action="/searchissue" method="POST">
@csrf
<div class="mb-3">
    <input type="text" class="form-control" id="search"  name="search" >
     </div>
     <button type="submit" class="btn btn-primary">Search</button>
</div>

</div>
</div>
</div>  
<div class="container">
    <div class="row">
        

<ul>

    @foreach ($issues as $issue)
    <li>{{$issue->name}}</li>
    <li>{{$issue->msg}}</li>
@endforeach
</ul>
</div>


    </div>
</div>
</body>
</html>