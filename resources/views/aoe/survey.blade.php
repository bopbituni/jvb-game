<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Điểm danh</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/css/adminlte.min.css">

    <link href="/css/base.css" rel="stylesheet" media="all" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
</head>

<body class="hold-transition layout-fixed" style="background-color: aquamarine;" >
    <form class="pt-80 pb-20 px-20 d-flex justify-content-center" method="POST" action="{{route('survey.index', ['game' => $game, 'token' => $token])}}">
    @csrf    
    <!-- Page Container -->
        <div class="page-container box-shadow w-40">
            <div class="mx-40 sp-mx-10">
                <div class="page-title pt-20">Điểm danh đi anh em ơiiii !</div>
                <div class="pt-15 sp-pt-7 border-bottom-gray"></div>
            </div>
            <div class="pt-25 sp-pt-15 mx-80 sp-mx-20">
                <div class="pt-25 sp-pt-25 input-item-title">Tên của anh <span class="color-alert">*</span></div>
                <div class="pt-12">
                    <select name="gamer_id" class="form-control w-50">
                        @foreach($gamers as $gamer)
                            <option value="{{$gamer->id}}">{{$gamer->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="input-item-title pt-25 sp-pt-25">Điểm danh thôi!!!! <span class="color-alert">*</span></div>
                <div class="checkbox-items pt-12 sp-pt-10 lg-d-flex flex-wrap">
                    <label><input name="is_play" class="mr-2" type="radio" value="1" checked/>Chơi</label>
                    <label><input name="is_play" class="mr-2" type="radio" value="0"/>Không chơi</label>
                </div>
                <div class="row input-item-title pt-25 sp-pt-25">
                    <div class="col-md-3">Thời gian:</div>  
                    <label class="col-md-4">{{$desc->play_time}}</label>
                </div>
                <div class="row input-item-title">
                    <div class="col-md-3">Thế loại thi đấu:</div>  
                    <label class="col-md-4">{{$desc->title}}</label>
                </div>
                <div class="row input-item-title">
                    <div class="col-md-3">Loại quân:</div>  
                    <label class="col-md-4">{{$desc->unit_type}}</label>
                </div>
                <div class="row input-item-title">
                    <div class="col-md-3">Cược:</div>  
                    <label class="col-md-4">{{$desc->bet}}</label>
                </div>

                <input name="survey_link_id" hidden value="{{$survey->id}}" />

                <div class="mt-45 pb-80 sp-pb-50 d-flex align-items-center justify-content-center">
                    <button type="submit"
                        class="btn-common btn-main btn-back-main d-flex align-items-center justify-content-center ">Chốt kèoo !!</button>
                </div>
            </div>
        </div>
        <!-- Page Container -->
    </form>

    <!-- jQuery -->
    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="/js/app.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</html>
