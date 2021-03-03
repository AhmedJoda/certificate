@extends('layouts.admin')
@section('content')

<form action="{{route('banks.store')}}" method="POST">
    @csrf
    <div class="form-group"><label for="">اسم البنك</label>
        <input type="text" name="name" value="{{old('name')}}" class="form-control">
    </div>
    <div class="form-group"><label for="">رقم الحساب</label>
        <input type="text" name="number" value="{{old('number')}}" class="form-control">
    </div>
    <div class="form-group"><label for="">الايبان</label>
        <input type="text" name="eban" value="{{old('eban')}}" class="form-control">
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
