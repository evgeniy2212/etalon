@extends('welcome')

@section('content')

    <div class="row">
        <div class="col-sm-3 sub-categories sub-1 scale-img">
            <a href="products?category=2&sub_category=1">{{$sub_categories[0]->name}}</a>
        </div>
        <div class="col-sm-3 col-sm-offset-2 sub-categories sub-9 scale-img">
            <a href="products?category=2&sub_category=2">{{$sub_categories[1]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-11 scale-img">
            <a href="products?category=2&sub_category=3">{{$sub_categories[2]->name}}</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 sub-categories sub-4 scale-img">
            <a href="products?category=2&sub_category=4">{{$sub_categories[3]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-5 scale-img">
            <a href="products?category=2&sub_category=5">{{$sub_categories[4]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-7 scale-img">
            <a href="products?category=2&sub_category=6">{{$sub_categories[5]->name}}</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 sub-categories sub-7 scale-img">
            <a href="products?category=2&sub_category=7">{{$sub_categories[6]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-8 scale-img">
            <a href="products?category=2&sub_category=8">{{$sub_categories[7]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-9 scale-img">
            <a href="products?category=2&sub_category=9">{{$sub_categories[8]->name}}</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-3 sub-categories sub-10 scale-img">
            <a href="products?category=2&sub_category=10">{{$sub_categories[9]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-11 scale-img">
            <a href="products?category=2&sub_category=11">{{$sub_categories[10]->name}}</a>
        </div>
        <div class="col-sm-3 sub-categories sub-4 scale-img">
            <a href="products?category=2&sub_category=12">{{$sub_categories[11]->name}}</a>
        </div>
    </div>

@endsection