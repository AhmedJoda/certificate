@extends('layouts.admin')
@section('content')
<form class="form-inline d-flex justify-content-around" action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
    <div class="form-group m-4"><label class="m-1" for="">اسم الموقع:</label><input type="text" name="site_name" value="{{setting('site_name')}}" class="form-control"></div>

    @csrf
    <div class="form-group m-4"><label class="m-1" for="">شعار المدرسة:</label><input type="file" name="logo" class="form-control"></div>
    @if (setting('logo'))
    <img width="100" height="100" src="{{asset('images/'.setting('logo'))}}" alt="">
    @endif
    <div class="form-group m-4"><label class="m-1" for="">شعار التربية والتعليم:</label><input type="file" name="logo1" class="form-control"></div>
    @if (setting('logo1'))
    <img width="100" height="100" src="{{asset('images/'.setting('logo1'))}}" alt="">
    @endif
    <!--<div class="form-group m-4"><label class="m-1" for="">شعار إضافي:</label><input type="file" name="logo2" class="form-control"></div>
     @if (setting('logo2'))
    <img width="100" height="100" src="{{asset('images/'.setting('logo2'))}}" alt="">
    @endif -->
    <div class="form-group m-4"><label class="m-1" for="">نص التربية والتعليم:</label><textarea type="text" name="text" class="form-control">{{setting('text')}}</textarea></div>
    <div class="form-group m-4"><label class="m-1" for="">لقب المديرة:</label><input type="text" name="epithet" value="{{setting('epithet')}}" class="form-control"></div>
    <div class="form-group m-4"><label class="m-1" for="">اسم المديرة:</label><input type="text" name="name" value="{{setting('name')}}" class="form-control"></div>
    <div class="form-group m-4"><label class="m-1" for="">التوقيع:</label><input type="file" name="signature" class="form-control"></div>
    @if (setting('signature'))
    <img width="100" height="100" src="{{asset('images/'.setting('signature'))}}" alt="">
    @endif
    <div class="form-group m-4"><label class="m-1" for="">الختم:</label><input type="file" name="seal" class="form-control"></div>
    @if (setting('seal'))
    <img width="100" height="100" src="{{asset('images/'.setting('seal'))}}" alt="">
    @endif
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
{{-- form>(div.form-group m-4>(label+input.form-control))*6+input:submit.btn.btn-primary --}}