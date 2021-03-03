@extends('layouts.admin')
@section('content')


<form action="{{route('banks.update',$edit->id)}}" method="POST">
    @csrf
    @method('put')
    <div class="form-group"><label for="">اسم البنك</label>
        <input type="text" name="name" value="{{$edit->name}}" class="form-control">
    </div>
    <div class="form-group"><label for="">رقم الحساب</label>
        <input type="text" name="number" value="{{$edit->number}}" class="form-control">
    </div>
    <div class="form-group"><label for="">الايبان</label>
        <input type="text" name="eban" value="{{$edit->eban}}" class="form-control">
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
