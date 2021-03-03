@extends('layouts.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">المستلم</th>
        <th scope="col">حالة الفاتورة</th>
        <th scope="col">إجمالي الفاتورة</th>
        <th scope="col">تاريخ الفاتورة</th>
        <th scope="col">التحكم</th>
      </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\Bill::all() as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->receiver}}</td>
        <td>{{$bill->payment_status ? 'مسدده' : 'غير مسدده'}}</td>
        <td>{{$item->total}}</td>
        <td>{{$item->created_at->toDateString()}}</td>
        <td>
            <a target="_blank" class="btn btn-secondary" href="{{ url('services?bill_id='.$item->id) }}"">الخدمات</a>
            <a class="btn btn-info" href="{{ route('bills.show',$item->id) }}"">عرض</a>
            <a class="btn btn-primary" href="{{ route('bills.edit',$item->id) }}"">تعديل</a>
            <form method="POST" action="{{ route('bills.destroy',$item->id) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <div class="form-group">
                    <input type="submit" class="btn btn-danger" value="حذف">
                </div>
            </form>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>@endsection
