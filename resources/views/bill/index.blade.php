<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/bootstrap-rtl.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>{{setting('site_name')}}</title>
</head>

<body>
    <main>
        <!----------------------- top ----------------------------->
        <div class="top text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-6 order-1  order-md-1">
                        <div class="main-logo py-2 ">
                            <img src="{{asset('images/'.setting('logo'))}}" class="img-fluid" style="width: 130px;" alt="main-logo">
                        </div>
                    </div>
                    <div class="col-md-6 col-12 d-flex align-items-center justify-content-center order-3 order-md-2">
                        <h1 class="mb-md-0 mb-4 mt-md-5 mt-2 text-center">فاتورة خدمات مقدمة إلكترونية</h1>
                    </div>
                    <div class="col-md-3 col-6 d-flex align-items-center justify-content-center order-2 order-md-3">
                        <div class="cycile my-2 text-center">
                            <p>التاريخ : {{$bill->created_at->toDateString()}}</p>
                            <span class="d-inline-block" style="color: #008780; font-weight: 600;"><span
                                    style="color: #0920F1;">حالة الفاتورة
                                    : </span>
                                    {{$bill->payment_status ? 'مسدده' : 'غير مسدده'}}
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!----------------------- text ----------------------------->
        <div class="container">
            <p class="text-right mt-4 mb-4 mb-lg-2"
                style="color: #00060C; font-weight: 600; font-size: 18px; letter-spacing: 1px;">
                المكرم / {{$bill->receiver}}</p>
            <p class="text-center" style="font-size: 18px;">السلام عليكم ورحمه الله وبركاتة</p>
        </div>
        <!-----------------------main  ----------------------------->
        <div class="container mt-5">
            <p class="text-right"> نقدم لكم فاتورة بالخدمات المقدمة على النحو التالي :</p>
            <p class="text-left" style="color: #F10909;">رقم الفاتورة : #{{$bill->id}}</p>
            <div class="row">
                <div class="col-12">
                    <div class="table-1">
                        <table class="table table-bordered text-center">
                            <thead
                                style="background-color: #F5F5F5; border: 1px solid #707070; margin-bottom: 10px !important;">
                                <tr>
                                    <th scope="col" colspan="6" class="text-center" style="font-size: 20px;">الخـدمات
                                        المقـدمة
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="first">
                                    <th scope="row" class="text-center">م</th>
                                    <th scope="row" class="text-center">الخدمات والتفاصيل</th>
                                    <th scope="row" class="text-center">الخصم</th>
                                    <th scope="row" class="text-center">المبلغ</th>
                                </tr>
                                @foreach ($bill->services as $item)
                                <tr>
                                    <th scope="row" class="text-center icon">1</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->discount}}</td>
                                    <td>{{$item->cost}} ر.س</td>
                                </tr>
                                @endforeach


                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
            <p class="text-left" style="color: #F10909; font-weight: 600;">إجمالي الفاتورة {{$bill->total}} س.ر</p>
            <p class="text-right" style="margin-bottom: 0 !important;"><span style="color: #F10909;">* </span>الفاتورة
                لا
                تشمل خدمات الدعم الفني</p>
            <p class="text-right"><span style="color: #F10909;">* </span>الفاتورة لا تشمل خدمات الدعم الفني</p>
            <hr style=" border: 1px solid #707070;">
        </div>

        <!-----------------------bank  ----------------------------->
        <div class="container bank mt-5">
            <p class="text-right" style="font-weight: 600;">الحسابات البنكية</p>
            <div class="row">
                @foreach (App\Models\Bank::all() as $item)

                <div class="col-md-4 col-12">
                    <table class="table table-bordered text-center ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">{{$item->name}}</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$itme->number}}</td>
                            </tr>
                            <tr>
                                <td>>{{$itme->eban}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                @endforeach

            </div>
            <p class="mt-4 text-center" style="font-size: 18px;">مرحبين بأي استفسار منكم والتواصل معنا لتقديم
                مايسركم....والله الموفق</p>
        </div>
        <!-----------------------footeer  ----------------------------->
        <div class="container maneger">
            <div class="row">
                <div class="col-md-2 text-right d-flex align-items-end order-2 order-md-1">
                    <img src="image/Image 1.png" alt="">
                </div>
                <div class="col-md-10  text-center order-1 order-md-2">
                    <div class="maneger-text mb-5">
                        <p> إدارة المبيعات ومتابعة قسم العملاء //</p>
                        <p> {{setting('manger')}}</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container text-center">
            <div class="footer">
                <div class="row">
                    <div class="col-md-3">
                        <p style="font-size: 12px;">{{setting('site_name')}}</p>
                    </div>
                    <div class="col-md-3">
                        <p>{{setting('email')}} <i class="fas fa-at"></i></p>
                    </div>
                    <div class="col-md-3">
                        <p>{{setting('phone')}} <i class="fas fa-phone-square-alt"></i></p>
                    </div>
                    <div class="col-md-3">
                        <p>www.const-tech.com.sa</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-----------------------js----------------------------->

    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>
