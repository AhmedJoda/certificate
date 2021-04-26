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
                <img src="{{asset('image/kisspng-ministry-of-education-saudi-arabia-school-saudi-gazette-5b145d91148646.9813660615280613290841.png')}}" alt="Ministry of Education_logo">
                <img src="{{asset('image/madrasati.jpg')}}" alt="madrasati">
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
                <img width="200" height="200" class="sig-img" src="{{asset('images/'.setting('signature'))}}" alt="">
                @endif
            </div>
            <div class="Seal">
                @if(setting('seal'))
                <img width="200" height="200" src="{{asset('images/'.setting('seal'))}}" alt="Seal">
                @endif
            </div>
        </div>

    </section>
</body>

</html>