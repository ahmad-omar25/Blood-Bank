@if(session('error'))
    <script>
        new Noty({
            type: 'error',
            layout: 'topRight',
            text: "{{session('error')}}",
            timeout: 2000,
            killer: true
        }).show();
    </script>
@endif
