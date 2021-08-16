{{--@extends('components.layout')--}}
<x-layout>
    <x-slot name="slot">
    {{--@section('content')--}}
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3" id="blue1">blow1
                    </div>
                    <div class="col-md-3" id="blue2">blue2
                    </div>
                    <div class="col-md-3" id="blue3">blue3
                    </div>
                    <div class="col-md-3" id="blue4">blue4
                    </div>
                </div>
                <div class="row">
                    {{--@yield('gray')--}}{{$gray}}
                    <div class="col-md-12" id="gray">gray
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="green">green
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12" id="dark_blue">{{$drakblue}}{{--@yield('drakblue')--}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="dark_orange">dark_orange
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="light_yellow" >light_yellow
                    </div>
                </div>
            </div>
        </div>
    </x-slot>    
</x-layout>
{{--@endsection--}}