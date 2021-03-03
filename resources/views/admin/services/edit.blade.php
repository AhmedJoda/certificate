@extends('layouts.admin')
@section('content')


<form action="{{route('services.update',$edit->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group"><label for="">اسم الخدمه</label>
        <input type="text" name="name" value="{{$edit->name}}" class="form-control">
    </div>
    <div class="form-group"><label for="">تكلفة الخدمه</label>
        <input type="text" name="cost" value="{{$edit->cost}}" class="form-control">
    </div>
    <div class="form-group"><label for="">تخفيض</label>
        <input type="number" name="discount" value="{{$edit->discount}}" class="form-control">
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
