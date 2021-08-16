{{--@extends('home')

@section('gray')--}}
<x-home>
    <x-slot name="gray">
        @foreach ($article as $item)
        <div class="col-md-12" id="gray">
            <div>title: {{$item->title}}</div>
            <div>body: {{$item->body}}</div>
            <div><a href="{{ url('articles', [$item->id]) }}">{{$item->title}} </a></div>
        </div>
        @endforeach
    </x-slot>
    {{--@endsection--}}

    {{--@section('drakblue')
    {{--1.form
    2.input text
    3.input text
    4.input password
    5.input submit --}}

    <x-slot name="drakblue">
        ลงทะเบียน
        <form action="register/store" method="post">
            @csrf
            <div class="form-group">
            <label for="name">ชื่อ</label>
            <input type="text"
                class="form-control" name="name" id="name"  placeholder="กรุณาใส่ชื่อ">
            </div>
            <div class="form-group">
            <label for="email">email</label>
            <input type="email"
                class="form-control" name="email" id="email"  placeholder="ใส่อีเมล์">
            </div>
            <div class="form-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password"
                class="form-control" name="password" id="password"  placeholder="ใส่รหัสผ่าน">
            </div>
            <div class="form-group">
            <label for="submit">ลงทะเบียน</label>
            <input type="submit"
                class="form-control" name="submit" id="submit"  placeholder="กดลงทะเบียน">
            </div>
        </form>
    </x-slot>
</x-home>    
{{--@endsection--}}