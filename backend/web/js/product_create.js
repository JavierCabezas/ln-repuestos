/**
 * Created by javier on 9/3/17.
 */

let check_link = $("#tutorial_dropdown");
let path_field = $("#path_field");

let show_or_hide = function(){
    let is_on = check_link.val() > 0;
    if(is_on){
        path_field.show();
    }else{
        path_field.hide();
    }
};

check_link.on('change', function(){
    show_or_hide();
});

show_or_hide();