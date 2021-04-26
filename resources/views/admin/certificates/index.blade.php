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
    @foreach (\App\Models\Certificate::all() as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name1}}</td>
      <td>
        <a class="btn btn-primary" href="{{ route('certificates.show',$item->id) }}">عرض</a>
        <a class=" btn btn-primary" href="{{ route('certificates.edit',$item->id) }}">تعديل</a>
        <form method="POST" action="{{ route('certificates.destroy',$item->id) }}" onsubmit="return confirm('هل متاكد من الحذف');">
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