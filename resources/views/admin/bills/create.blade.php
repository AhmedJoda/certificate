@extends('layouts.admin')
@section('content')


<form action="{{route('bills.store')}}" method="POST">
    @csrf
    <div class="form-group"><label for="">المستلم</label>
        <input type="text" name="receiver" value="{{old('receiver')}}" class="form-control">
    </div>
    <div class="form-group"><label for="">حالة الفاتورة</label>
        <select name="payment_status" id="" class="form-control">
            <option {{old('payment_status') ? 'selected' : ''}} value="1">مسدده</option>
            <option {{old('payment_status') ? '' : 'selected'}}  value="0">غير مسدده</option>
        </select>
    </div>
    <div class="form-group"><label for="">إجمالي الفاتورة</label>
        <input type="number" name="total" value="{{old('name')}} class="form-control">
    </div>
    <input type="submit" value="حفظ" class="btn btn-primary">
</form>

@endsection
