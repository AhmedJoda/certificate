<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/certificate_style3.css')}}">
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
</head>

<body>
    <section id="certificate">
        <div class="certifate1_container">
            <div class="certificate_text">
                <h1>{{$show->main_title}}</h1>
                <div class="input-group">
                    <div class="name_certificate_holder">
                        <span class="sr-name">{{$show->epithet}}/</span>
                        <span class="the-name">{{$show->name}}</span>
                    </div>
                </div>
                <p class="Gratitude_text">
                    {{$show->message}}
                </p>
            </div>
        </div>
    </section>
</body>

</html>