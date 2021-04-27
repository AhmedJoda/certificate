<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>{{$show->name1}}</title>
    <style>

    </style>
</head>

<body>
    <div class="d-flex justify-content-center">
        <img src="{{url('images/'.$show->name1.$show->id .'.jpeg')}}" alt="">
    </div>
    <div class="m-3 d-flex justify-content-center">
        <a class="btn btn-primary " href="{{url('images/'.$show->name1.$show->id .'.jpeg')}}" download="">تحميل الشهادة</a>
    </div>
</body>

</html>