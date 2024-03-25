@extends('admin.layout.layout')

@section('content')

@if(Session::has('message'))
<li class="alert {{ Session::get('alert-class') }}" style="margin-top:60px;">{{ Session::get('message') }}</li>
@endif
<table class="table">
   <thead>
    <tr>
        <th>S.No</th>
        <th>Category Name</th>
        <th>Parent Category Name</th>
        <th>Create Date</th>
        <th>Action</th>
    </tr>    
   </thead> 

   <tbody>
    @foreach($categories as $key=>$category)
    <tr>
        <td>{{$key+1}}</td>
        <td>{{$category->name}}</td>
        <td>@if($category->category_id)
            {{$category->parent->name}}
            @else
            No Parent Category
            @endif
        </td>
        <td>{{$category->created_at}}</td>
        <td><a href="{{route('category.edit',$category->id)}}" style="font-size:17px;padding:5px;"><i class="fa fa-edit"></i></a>
        <a href="javascript:void(0)" style="font-size:17px;padding:5px;" class="category_delete" data-id="{{$category->id}}"><i class="fa fa-trash"></i></a></td>
    </tr>
    @endforeach
   </tbody>
</table>
@endsection


@push('delete-script')
<script>
    $('.category_delete').on('click',function(){
      if(confirm('Are you sure you want to delete this category?')){
        var id=$(this).data('id');
        $.ajax({
          url:'{{route("category.delete")}}',
          method:'post',
          data:{
            _token:"{{csrf_token()}}",
            'id':id
          },
          success:function(data) {
           // location.reload();
          }  
        });
      }  
    })
</script>    
@endpush
