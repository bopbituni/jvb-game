@extends('layouts.aoe_app')

@section('title', 'Tạo link điểm danh')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="w-100 vh-min-100 back-app-main pt-30 pb-100 box-border">
        <div class="home-container text-center">

            <div class="pt-90 sp-pt-60">
                <h1 class="font-26 color-app-main">Sắp xếp team hôm nay.</h1>
            </div>

            <div class="d-flex mt-50 sp-mt-30 sp-flex-wrap">
                <button class="flex-1 back-white mx-2 mb-14 d-flex text-center d-flex align-items-center justify-content-center pt-20 pb-20 rounded-circle">
                    <h2>Team One</h2>
                </button>

                <button class="flex-1 back-white mx-2 mb-14 d-flex text-center d-flex align-items-center justify-content-center pt-20 pb-20 rounded-circle">
                    <h2>Team Two</h2>
                </button>
            </div>


            <div class="d-flex mt-50 sp-mt-30 sp-flex-wrap">

                <div class="flex-1 back-white mx-2 mb-14 d-flex">
                    <div class="flex-2">
                        <img src="/assets/imgs/ico_service1.svg" class="height-150 width-175 px-10 py-10" />
                    </div>
                    <div class="flex-1 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <div class="font-20 line-height-24 text-bold mb-25">基本情報登録</div>
                                                    <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/companies/basic"
                                class="font-16 line-heigh-18 color-white btn-home py-14 px-45 sp-px-20 sp-px-20">詳細はこちら</a>
                        </div>
                    </div>
                </div>

                <div class="flex-1 back-white mx-2 mb-14 d-flex">
                    <div class="flex-2">
                        <img src="/assets/imgs/ico_service2.svg" class="height-150 width-175 px-10 py-10" />
                    </div>
                    <div class="flex-1 d-flex text-center align-items-center justify-content-center">
                        <div>
                            <div class="font-20 line-height-24 text-bold mb-25">売上請求書管理</div>
                            <a href="http://ec2-13-231-228-238.ap-northeast-1.compute.amazonaws.com/saleinvoices/ledger"
                                class="font-16 line-heigh-18 color-white btn-home py-14 px-45 sp-px-20">詳細はこちら</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
