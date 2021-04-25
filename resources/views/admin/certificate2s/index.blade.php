@extends('layouts.admin')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">الاسم</th>
    </tr>
  </thead>
  <tbody>
    @foreach (\App\Models\Certificate2::all() as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name1}}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('certificate2s.show',$item->id) }}">عرض</a>
        <a class=" btn btn-primary" href="{{ route('certificate2s.edit',$item->id) }}">تعديل</a>
        <form method="POST" action="{{ route('certificate2s.destroy',$item->id) }}" onsubmit="return confirm('هل متاكد من الحذف');">
          @csrf
          @method('delete')
          <div class="form-group">
            <input type="submit" class="btn btn-danger" value="حذف">
          </div>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>@endsection

<script>

</script>