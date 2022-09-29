<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME', 'HUNTBAZAAR' ) }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('plugin/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{url('plugin/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{url('plugin/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('plugin/admin-lte/css/adminlte.min.css')}}">
</head>
<body class="hold-transition">

@yield('container')

<!-- jQuery -->
<script src="{{url('plugin/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('plugin/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('plugin/select2/js/select2.full.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('plugin/admin-lte/js/adminlte.min.js')}}"></script>

<script>
    function setCounterData(s) {
        const days = Math.floor(s / (3600 * 24));
        const hours = Math.floor((s % (60 * 60 * 24)) / (3600));
        const minutes = Math.floor((s % (60 * 60)) / 60);
        const seconds = Math.floor(s % 60);

        $('#remain-days').html(`${days} Day(s)`);
        $('#remain-hours').html(`${hours} Hour(s)`);
        $('#remain-minutes').html(`${minutes} Minute(s)`);
        $('#remain-seconds').html(`${seconds} Second (s)`);
    }

    $(function () {
        $('.dialog-wizard').modal('show');

        $('.select2bs4').select2({
            theme: 'bootstrap4',
            tags: true,
            tokenSeparators: [',', ' ']
        });

        $(".select2bs4").on("select2:select", function (evt) {
            const element = evt.params.data.element;
            const $element = $(element);
            $element.detach();
            $(this).append($element);
            $(this).trigger("change");
        });

        const expireTime = $('#expired-time').val();

        console.log('expireTime', expireTime * 1000);

        const timer = setInterval(function() {
            const currTime = new Date().getTime();
            let remainTime = (expireTime * 1000) - currTime;

            const days = Math.floor((remainTime / 1000) / (3600 * 24));
            const hours = Math.floor(((remainTime / 1000) % (60 * 60 * 24)) / (3600));
            const minutes = Math.floor(((remainTime / 1000) % (60 * 60)) / 60);
            const seconds = Math.floor((remainTime / 1000) % 60);

            $('#remain-days').html(`${days} Day(s)`);
            $('#remain-hours').html(`${hours} Hour(s)`);
            $('#remain-minutes').html(`${minutes} Minute(s)`);
            $('#remain-seconds').html(`${seconds} Second (s)`);

            if (remainTime <= 0) clearInterval();
        }, 999);
    });
</script>
</body>
</html>
