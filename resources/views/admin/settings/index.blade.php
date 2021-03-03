@extends('layouts.admin')
@section('content')
<form action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group"><label for="">الشعار</label><input type="file" name="logo" class="form-control"></div>
    @if (setting('logo'))
    <img width="100" height="100" src="{{asset('images/'.setting('logo'))}}" alt="">
    @endif
    <div class="form-group"><label for="">اسم الموقع</label><input type="text" name="site_name" value="{{setting('site_name')}}" class="form-control"></div>
    <div class="form-group"><label for="">ادارة</label><input type="text" name="manger" value="{{setting('manger')}}" class="form-control"></div>
    <div class="form-group"><label for="">الجوال</label><input type="text" name="phone" value="{{setting('phone')}}" class="form-control"></div>
    <div class="form-group"><label for="">الرابط</label><input type="text" name="link" value="{{setting('link')}}" class="form-control"></div>
    <div class="form-group"><label for="">البريد الالكتروني</label><input type="text"  name="email"  value="{{setting('email')}}" class="form-control"></div>
    <div class="form-group"><label for="">تشغيل الموقع</label>
        <input type="hidden" name="active" value="0" />
        <input type="checkbox" name="active" {{setting('active') ? 'checked' : ''}} value="1" class="form-control">
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
{{-- form>(div.form-group>(label+input.form-control))*6+input:submit.btn.btn-primary --}}
