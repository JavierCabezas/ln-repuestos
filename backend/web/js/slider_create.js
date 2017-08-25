/**
 * Created by javier on 8/24/17.
 */
let check_link = $("#check_link_checkbox");
let path_field = $("#path_field");

let show_or_hide_path = function(){
    let is_on = check_link.is(':checked');
    if(is_on){
        path_field.show();
    }else{
        path_field.hide();
    }
};

check_link.on('change', function(){
    show_or_hide_path();
});

show_or_hide_path();