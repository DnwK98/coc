<div class="panel_window_bar main_color_background">
    {{__('panel.screen_preview')}}
</div>
<div class="panel_window_content">
    <div class="mt-5 mb-5 text-center">
        <div class="panel_img_div" style="background-image: url({{asset("img/screen.png")}})">
            @for($i = 0; $i < 100; $i=$i+2)
                @for($j = 0; $j < 100; $j=$j+1)
                    <div onclick="screen_click({{$j}}, {{$i}})" class="d"></div>
                @endfor
                <div class="nl"></div>
            @endfor
        </div>
        <br />
        <div onclick="change_mouse_button('lmb')" class="btn main_color_background">LPM</div>
        <div onclick="change_mouse_button('rmb')" class="btn main_color_background">RPM</div>
        <div onclick="change_mouse_button('2xlmb')" class="btn main_color_background">2LPM</div>
        <div onclick="change_mouse_button('holdlmb')" class="btn main_color_background">HOLD</div>
    </div>
</div>

<script>
    var mouse_button = 'lmb';

    function change_mouse_button(btn) {
        mouse_button = btn;
    }
    function screen_click(x, y){
        var link = 'http://localhost\\';
        link += mouse_button;
        link += '\\';
        link += x;
        link += '\\';
        link +=y;

        alert(link);
        //window.location.href = link;
    }
</script>