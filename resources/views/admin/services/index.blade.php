@extends('layouts.admin')
@section('content')

<a class="btn btn-secondary" href="{{ url('services/create?bill_id='.request('bill_id')) }}"">اضافة خدمه</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">اسم الخدمه</th>
        <th scope="col">تكلفة الخدمه</th>
        <th scope="col">التحكم</th>
      </tr>
    </thead>
    <tbody>
        @foreach (\App\Models\Service::where('bill_id', request('bill_id'))->get() as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->cost}}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('services.edit',$item->id) }}"">تعديل</a>
            <form method="POST" action="{{ route('services.destroy',$item->id) }}">
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
