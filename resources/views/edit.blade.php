@extends('layout')

@section('title', 'แก้ไขบทความ')

@section('content')
    <h2 class="text text-center py-3">แก้ไขบทความ</h2>
    <form method="POST" action="{{route('update', $blog->id)}}">
        @csrf  <!-- // ป้องกันการโจมตี -->
        <div class="form-group">
            <label for ="title">ชื่อบทความ</label>
            <input type="text" class="form-control" name="title" value="{{$blog->title}}">
        </div>
        @error('title')
            <p class="text-danger">{{ $message}}</p>
        @enderror
        <div class="form-group">
            <label for ="title">เนื้อหา</label>
            <textarea name="content" cols="30" row="10" class="form-control">{{$blog->content}}</textarea>
        </div>
        @error('content')
            <p class="text-danger">{{ $message}}</p>
        @enderror
        <input type="submit" value="บันทึก" class="btn btn-primary mt-3">
        <a href="/blogs" class="btn btn-danger mt-3">ยกเลิก</a>
    </form>
@endsection
