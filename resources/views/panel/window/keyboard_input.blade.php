<div class="panel_window_bar main_color_background">
    {{__('panel.keyboard_input')}}
</div>
<div class="panel_window_content">
    <div class="p-3 text-center">
        <form>
            <textarea id="keyboard_textarea" class="form-control form_input_background" name="sth"></textarea>
            <br/>
            <div class="row">
                <div class="col-lg-9 text-left">
                    <div onclick="keyboard_insert_key('ctrl')" class="btn btn-primary main_color_background">
                        CTRL
                    </div>
                    <div onclick="keyboard_insert_key('alt')" class="btn btn-primary main_color_background">
                        ALT
                    </div>
                    <div onclick="keyboard_insert_key('backspace')" class="btn btn-primary main_color_background">
                        BACKSPACE
                    </div>
                    <div onclick="keyboard_insert_key('delete')" class="btn btn-primary main_color_background">
                        DELETE
                    </div>
                    <div onclick="keyboard_insert_key('shift')" class="btn btn-primary main_color_background">
                        SHIFT
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <input value="{{__('panel.accept')}}" type="submit" class="btn btn-primary main_color_background"/>
                </div>
            </div>
        </form>
    </div>
</div>


<script>
    function keyboard_insert_key(key) {
        document.getElementById("keyboard_textarea").value =
            document.getElementById("keyboard_textarea").value + '<<[' + key + ']>>'
    }
</script>