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
            <div class="minst-img">
                @if(setting('logo1'))
                <img src="{{asset('images/'.setting('logo1'))}}" alt="Ministry of Education_logo">
                @endif
            </div>
            <div class="certificate_text">
                <h1>شكر و تقدير</h1>
                <div class="input-group">
                    <div class="name_certificate_holder">
                        <span class="sr-name">أ/</span>
                        <span class="the-name">{{$show->name}}</span>
                    </div>
                </div>
                <p class="Gratitude_text">
                    {{$show->message}}
                </p>
                <div class="Signature">
                    <h1>
                        <!-- {{setting('epithet')}} -->
                        kljjkl
                    </h1>
                    <p>
                        <!-- {{setting('name')}} -->
                        hgfgfg
                    </p>
                </div>
            </div>
        </div>

    </section>
</body>

</html>