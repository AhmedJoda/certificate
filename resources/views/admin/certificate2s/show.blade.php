<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/certificate_style2.css')}}">
    <!-- fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Amiri&display=swap" rel="stylesheet">
</head>

<body>
    <section id="certificate">
        <div class="certifate1_container">
            <div class="certificate_logo">
                @if(setting('logo'))
                <img src="{{asset('images/'.setting('logo'))}}" alt="madrasati">
                @endif
                @if(setting('logo1'))
                <img src="{{asset('images/'.setting('logo1'))}}" alt="Ministry of Education_logo">
                @endif
            </div>
            <div class="certificate_title">
                <p>
                    {{setting('text')}}
                </p>
            </div>
            <div class="certificate_text">
                <h1>شكر و تقدير</h1>
                <p>
                    تتقدم إدارة المتوسطة الاولى و تعليم الكبيرات بالليث بباقات الشكر و التقدير و عبارات العرفان و التحايا و كلمات الفخر و الاعتزاز
                </p>
                <div class="input-group">
                    <div class="name_certificate_holder">
                        <span class="sr-name">للأستاذه/</span>
                        <span class="the-name">{{$show->name1}}</span>
                    </div>
                </div>
                <div class="input-group">
                    <div class="name_certificate_holder">
                        <span class="sr-name">وليه أمر الطالبه/</span>
                        <span class="the-name">{{$show->name2}}</span>
                    </div>
                </div>
                <p class="Gratitude_text">
                    {{$show->message}}
                </p>
            </div>
            <div class="Signature">
                <h1>{{setting('epithet')}}</h1>
                <p>
                    {{setting('name')}}
                </p>
                @if(setting('signature'))
                <img class="sig-img" src="{{asset('images/'.setting('signature'))}}" alt="">
                @endif
            </div>
            <div class="Seal">
                @if(setting('seal'))
                <img src="{{asset('images/'.setting('seal'))}}" alt="Seal">
                @endif
            </div>
        </div>

    </section>
</body>

</html>