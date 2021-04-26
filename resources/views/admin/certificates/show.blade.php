<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/certificate_style.css')}}">
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
            <span class="sr-name">للأستاذة/</span>
            <span class="the-name">{{$show->name1}}</span>
          </div>
        </div>
        <div class="input-group">
          <div class="name_certificate_holder">
            <span class="sr-name">معلمه/</span>
            <span class="the-name"> المتوسطة الاولي بالليث و تعليم الكبيرات</span>
          </div>
        </div>
        <p class="Gratitude_text">
          تعبيراً عن امتناننا لعطاءكِ المتفاني على ما بذلته من جهود إستثنائيه في ظل جائحه كورونا مما ساهم في إنجاح العمليه التعليميه عن بعد خلال العام الدراسي 1441 هـ/1442 هـ..سائلين الله أن ينفع بعلمكِ و يسدد خطاكِ لما يحب و يرضى
        </p>
      </div>
      <div class="Signature">
        <h1>{{setting('epithet')}}</h1>
        <p>
          {{setting('name')}}
        </p>
      </div>
      <div class="Seal">
        <img height="100" width="100" src="{{asset('images/'.setting('seal'))}}" alt="Seal">
      </div>
    </div>


  </section>
</body>

</html>