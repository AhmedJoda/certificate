@extends('layouts.admin')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم البنك</th>
        <th scope="col">رقم الحساب</th>
        <th scope="col">الايبان</th>
        <th scope="col">التحكم</th>
      </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\Bank::all() as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->number}}</td>
        <td>{{$item->eban}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('banks.edit',$item->id) }}"">تعديل</a>
            <form method="POST" action="{{ route('banks.destroy',$item->id) }}">
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
