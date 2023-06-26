@extends('layouts.aoe_app')

@section('title', 'Tạo link điểm danh')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <form class="content-wrapper pt-80 pb-20 px-20" method="POST" action="{{route('aoe.post_link_survey')}}">
        @csrf
        <!-- Page Container -->
        <div class="page-container box-shadow">
            <div class="mx-40 sp-mx-10">
                <div class="page-title pt-20">TẠO LINK ĐIỂM DANH</div>
                <div class="pt-15 sp-pt-7 border-bottom-gray"></div>
            </div>
            <div class="pt-25 sp-pt-15 mx-80 sp-mx-20">
                <div class="input-form-comments">
                    <span>Tạo những thông tin cần thiết cho một cuộc điểm danh với tựa game AOE</span>
                </div>

                <div class="input-item-title pt-20 sp-pt-20">Thời gian<span class="color-alert">*</span></div>
                <div class="checkbox-items pt-12 sp-pt-10 lg-d-flex flex-wrap">
                    <label><input name="play_time" class="mr-2" type="radio" value="0" checked />Sáng</label>
                    <label><input name="play_time" class="mr-2" type="radio" value="1" />Chiều</label>
                </div>

                <div class="input-item-title pt-25 sp-pt-25">Thế loại thi đấu<span class="color-alert">*</span></div>
                <div class="checkbox-items pt-12 sp-pt-10 lg-d-flex flex-wrap">
                    <label><input name="title" class="mr-2" type="radio" value="0" />1 vs 1</label>
                    <label><input name="title" class="mr-2" type="radio" value="1" />2 vs 2</label>
                    <label><input name="title" class="mr-2" type="radio" value="2" />3 vs 3</label>
                    <label><input name="title" class="mr-2" type="radio" value="3" checked />4 vs 4</label>
                </div>

                <div class="pt-25 sp-pt-25 input-item-title">Loại quân<span class="color-alert">*</span></div>
                <div class="checkbox-items pt-12 sp-pt-10 lg-d-flex flex-wrap">
                    <label><input name="unit_type" class="mr-2" type="radio" value="0" checked />Cung R Shang</label>
                    <label><input name="unit_type" class="mr-2" type="radio" value="1" />Cung R Assyrian</label>
                    <label><input name="unit_type" class="mr-2" type="radio" value="2" />Random</label>
                </div>

                <div class="pt-25 sp-pt-25 input-item-title">Cược<span class="color-alert">*</span></div>
                <div class="checkbox-items pt-12 sp-pt-10 lg-d-flex flex-wrap">
                    <label><input name="bet" class="mr-2" type="radio" value="0" checked />Húc</label>
                    <label><input name="bet" class="mr-2" type="radio" value="1" />Tiền mặt</label>
                </div>

                <div class="mt-45 pb-80 sp-pb-50 d-flex align-items-center justify-content-center">
                    <button type="submit" class="btn-common btn-main btn-back-main d-flex align-items-center justify-content-center ">Tạo link điểm danh</button>
                </div>
            </div>
        </div>
        <!-- Page Container -->
    </form>
    <!-- /.content-wrapper -->
@endsection
