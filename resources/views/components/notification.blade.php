<script>
    @if(Session::has('notification'))
        Noty.overrideDefaults({
            theme: 'limitless',
            layout: "{{isset(Session::get('notification')["layout"])? Session::get('notification')["layout"]: "topRight"}}",
            type: 'alert',
            timeout: "{{!isset(Session::get('notification')["timeout"])? 2500:Session::get('notification')["timeout"]}}"
        });
        new Noty({
            type: "{{Session::get('notification')["type"]}}",
            text: "{{Session::get('notification')["text"]}}"
        }).show();
    @endif
</script>
