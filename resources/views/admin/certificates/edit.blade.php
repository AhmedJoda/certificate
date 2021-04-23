@extends('layouts.admin')
@section('content')


<div class="container">

    <form class="form-inline d-flex justify-content-around" action="{{route('certificates.update',$edit->id)}}" method="POST">
        @csrf
        @method('put')

        <div class="form-group m-4"><label class="m-1" for="">العنوان الرئيسي:</label>
            <input type="text" name="main_title" value="{{$edit->main_title}}" class="form-control">
        </div>
        <div class="form-group m-4"><label class="m-1" for="">رسالة اسفل العنوان:</label>
            <input type="text" name="sub_title" value="{{$edit->sub_title}}" class="form-control">
        </div>
        <div class="form-group m-4"><label class="m-1" for="">اللقب:</label>
            <input type="text" name="epithet1" value="{{$edit->epithet1}}" class="form-control">
        </div>
        <div class="form-group m-4"><label class="m-1" for="">الاسم:</label>
            <input type="text" name="name1" value="{{$edit->name1}}" class="form-control">
        </div>
        <div class="form-group m-4"><label class="m-1" for="">الدور:</label>
            <input type="text" name="epithet2" value="{{$edit->epithet2}}" class="form-control">
        </div>
        <div class="form-group m-4"><label class="m-1" for="">المدرسة:</label>
            <input type="text" name="name2" value="{{$edit->name2}}" class="form-control">
        </div>
        <div class="form-group m-4"><label class="m-1" for="">الرسالة:</label>
            <textarea type="text" name="message" class="form-control">{{$edit->message}}</textarea>
        </div>
        <div class="form-group m-4"><label class="m-1" for="">اللون:</label>
            <input type="color" name="color" value="{{$edit->color}}">
        </div>
        <input type="submit" value="حفظ" class="btn btn-primary">
    </form>
</div>
@endsection