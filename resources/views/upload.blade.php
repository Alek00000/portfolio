<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dodavanje projekata</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container">

        <h3>Projekti</h3>
     <form action="{{ route('upload.file') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
        {{ csrf_field() }}
            <input type="file" name="file">
            <br>
            <input type="text" name="text" id="text">
           <br>
            
            <input type="submit" class="btn btn-info">
     </form>
</div>
</body>
</html>