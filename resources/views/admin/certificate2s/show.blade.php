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
        @if(setting('logo2'))
        <img src="{{asset('images/'.setting('logo2'))}}" alt="Go back">
        @endif
      </div>
      <div class="certificate_title">
        <p>
          {{setting('text')}}
        </p>
      </div>
      <div class="certificate_text">
        <h1>{{$show->main_title}}</h1>
        <p>
          {{$show->sub_title}}
        </p>
        <div class="input-group">
          <div class="name_certificate_holder">
            <span class="sr-name">{{$show->name1}}/</span>
            <span class="the-name">{{$show->epithet1}}</span>
          </div>
        </div>
        @if($show->epithet2 and $show->name2)
        <div class="input-group">
          <div class="name_certificate_holder">
            <span class="sr-name">{{$show->name2}}/</span>
            <span class="the-name">{{$show->epithet2}}</span>
          </div>
        </div>
        @endif
        <p class="Gratitude_text">

          {{$show->message}}
        </p>
      </div>
      <div class="Signature">
        <h1>{{setting('epithet')}}</h1>
        <p>
          {{setting('name')}}
        </p>
      </div>
      <div class="Seal">
        <img src="image/Seal.png" alt="Seal">
      </div>
    </div>


  </section>
</body>

</html>