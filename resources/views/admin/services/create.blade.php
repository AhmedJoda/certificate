@extends('layouts.admin')
@section('content')

<form action="{{route('services.store')}}" method="POST">
    @csrf
    <input type="hidden" name="bill_id" value="{{request('bill_id')}}">
    <div class="form-group"><label for="">اسم الخدمه</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
    </div>
    <div class="form-group"><label for="">تكلفة الخدمه</label>
        <input type="number" name="cost" value="{{old('cost')}}" class="form-control">
    </div>
    <div class="form-group"><label for="">تخفيض</label>
        <input type="number" name="discount" value="{{old('discount')}}" class="form-control">
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
