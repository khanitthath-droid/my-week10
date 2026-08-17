@extends('layout')

@section('title','บทความทั้งหมด')
    
@section('content')
<h2 class="text-center py-2" >บทความ</h2>
<table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">title</th>
      {{-- <th scope="col">Content</th> --}}
      {{-- <th scope="col">Content</th> --}}
      <th scope="col">สถานะ</th>
      <th scope="col">แก้ไข</th>
      <th scope="col">ลบ</th>
    </tr>
  </thead>
  <tbody>
     @foreach($blogs as $item)
    <tr>
      <td>{{$item ->title}}</td>
      {{-- <td>{{ Str::limit ($item ->content , 20)}}</td> --}}
      <td>
         @if ($item -> status )
         <a href="/change/{{$item->id}}"><span class="btn btn-success">สถานะ : เผยแพร่</span> </a>
          @else
          <a href="/change/{{$item->id}}"><span class="btn btn-danger">สถานะ : ไม่เผยแพร่</span> </a>
          @endif  
      </td>
      <td><a href="{{route('edit', $item->id)}}" class="btn btn-primary">แก้ไขบทความ</a></td>
      <td>
        <a href = "/delete/ {{$item ->id}}" class="btn btn-danger"
           onclick="return confirm('คุณต้องการลบบทความนี้ {{ $item ->title }} จริงหรือไม่?')">ลบ</a></td>
    </tr> 
    @endforeach

@endsection