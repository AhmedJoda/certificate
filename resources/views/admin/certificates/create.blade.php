@extends('layouts.admin')
@section('content')

<form class="form-inline d-flex justify-content-around" action="{{route('certificates.store')}}" method="POST">
    @csrf
    <!-- <div class="form-group m-4"><label class="m-1" for="">العنوان الرئيسي:</label>
        <input type="text" name="main_title" value="{{old('main_title')}}" class="form-control">
    </div>
    <div class="form-group m-4"><label class="m-1" for="">رسالة اسفل العنوان:</label>
        <textarea type="text" name="sub_title" class="form-control">{{old('sub_title')}}</textarea>
    </div>
    <div class="form-group m-4"><label class="m-1" for="">اللقب:</label>
        <input type="text" name="epithet1" value="{{old('epithet1')}}" class="form-control">
    </div> -->
    <div class="form-group m-4"><label class="m-1" for="">اسم المعلمة :</label>
        <input type="text" name="name1" value="{{old('name1')}}" class="form-control">
    </div>
    <!-- <div class="form-group m-4"><label class="m-1" for="">الدور:</label>
        <input type="text" name="epithet2" value="{{old('epithet2')}}" class="form-control">
    </div> -->
    <!-- <div class="form-group m-4"><label class="m-1" for="">اسم الطالبه:</label>
        <input type="text" name="name2" value="{{old('name2')}}" class="form-control">
         </div> -->
    <!-- <div class="form-group m-4"><label class="m-1" for="">الرسالة:</label>
        <textarea type="text" name="message" class="form-control">{{old('message')}}</textarea>
    </div> -->
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>
@endsection