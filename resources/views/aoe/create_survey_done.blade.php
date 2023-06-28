@extends('layouts.aoe_app')

@section('title', 'Tạo link điểm danh')

@section('content')
<div class="content-wrapper pt-80 pb-20 px-20">
    <div class="page-container box-shadow">
        <div class="mx-40 sp-mx-10 row pt-20 pb-20">
            <div class="page-title col-md-3">Link điểm danh:</div>
            <div class="border-bottom-gray col-md-9">{{$link}}</div>
        </div>
    </div>
</div>
@endsection
