@extends('layouts.aoe_app')

@section('title', 'Tạo link điểm danh')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="w-100 vh-min-100 back-app-main pt-30 pb-100 box-border">
    <div class="home-container text-center">
        @if(!empty($setUpTeam))
        <div class="pt-90 sp-pt-60">
            <h1 class="font-26 color-app-main">Sắp xếp team hôm nay.</h1>
        </div>
        <form method="post" action="{{route('aoe.finish_game')}}">
            @csrf
            <div class="d-flex mt-50 sp-mt-30 sp-flex-wrap">
                <input class="flex-1 back-white mx-2 mb-14 d-flex text-center d-flex align-items-center justify-content-center pt-20 pb-20 rounded-circle" type="submit" name="team1" value="Team One" />
                <input class="flex-1 back-white mx-2 mb-14 d-flex text-center d-flex align-items-center justify-content-center pt-20 pb-20 rounded-circle" type="submit" name="team2" value="Team Two" />
            </div>

            @foreach($setUpTeam as $key => $value)
            @php
            $i = 0;
            @endphp
            <div class="d-flex mt-50 sp-mt-30 sp-flex-wrap sortable-container">
                <div class="flex-1 back-white mx-2 mb-14 d-flex sortable-item">
                    @if(!empty($value[0]))
                    <div class="flex-2">
                        <img src="/assets/imgs/ico_service1.svg" class="height-150 width-175 px-10 py-10" />
                    </div>
                    <div class="flex-1 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <div class="font-20 line-height-24 text-bold mb-25">{{ $value[0]['name'] }}</div>
                            <a href="{{ route('aoe.profile_gamers') }}" class="font-16 line-heigh-18 color-white btn-home py-14 px-45 sp-px-20 sp-px-20">Chi tiết</a>
                            <input type="hidden" name="name_team1[]" value="{{ $value[0]['name'] }}" />
                        </div>
                    </div>
                    @endif
                </div>

                <div class="flex-1 back-white mx-2 mb-14 d-flex sortable-item">
                    @if(!empty($value[1]))
                    <div class="flex-2">
                        <img src="/assets/imgs/ico_service2.svg" class="height-150 width-175 px-10 py-10" />
                    </div>
                    <div class="flex-1 d-flex text-center align-items-center justify-content-center">
                        <div>
                            <div class="font-20 line-height-24 text-bold mb-25">{{ $value[1]['name'] }}</div>
                            <a href="{{ route('aoe.profile_gamers') }}" class="font-16 line-heigh-18 color-white btn-home py-14 px-45 sp-px-20">Chi tiết</a>
                            <input type="hidden" name="name_team2[]" value="{{ $value[1]['name'] }}" />
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </form>
        @else
        <div class="pt-90 sp-pt-60">
            <h1 class="font-26 color-app-main">Không có game bây giờ!</h1>
        </div>
        @endif
    </div>
</div>
<!-- /.content-wrapper -->
@endsection
@section('js')
<script>
    const sortableContainers = document.getElementsByClassName('sortable-container');
    const sortables = [];

    for (let i = 0; i < sortableContainers.length; i++) {
        const sortableContainer = sortableContainers[i];
        const sortable = new Sortable(sortableContainer, {
            animation: 150,
            onEnd: function(evt) {
                const container = evt.item.closest('.sortable-container');
                const sortableItems = container.getElementsByClassName('sortable-item');
                let newArr = [] // Mảng giá trị mới nhất
                //Lấy giá trị tương ứng với element sau khi thay đôi vị trí và push vào mảng arr
                for (let i = 0; i < sortableItems.length; i++) {
                    const sortableItem = sortableItems[i];
                    const input = sortableItem.querySelector('input[type="hidden"]');
                    newArr.push(input.value)
                }

                const teamOneInput = container.querySelector('input[name="name_team1[]"]');
                const teamTwoInput = container.querySelector('input[name="name_team2[]"]');
                //Set lại giá trí id tương ưng sau khi thay đổi vị trí element
                teamOneInput.value = newArr[0];
                teamTwoInput.value = newArr[1];
            },
        });
        sortables.push(sortable);
    }
</script>
@endsection