$(function () {
    dinamicMenu();
    $(".spinner").css("display", "none");
});

$.widget.bridge('uibutton', $.ui.button);
$(document).ready(function(){
    $(document).ajaxStart(function(){
        $(".spinner").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $(".spinner").css("display", "none");
    });

});
function dinamicMenu() {
    var url = window.location;

    $('ul.sidebar-menu a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');

    // Will only work if string in href matches with location
    $('.treeview-menu li a[href="' + url + '"]').parent().addClass('active');
    // Will also work for relative and absolute hrefs
    $('.treeview-menu li a').filter(function() {
        return this.href == url;
    }).parent().parent().parent().addClass('active');
};


///////////////////
// FORM JQUERY Important Method
/////////
function isFormValid(attr_id){
    var result = true;
    $('#'+attr_id).validator('validate');
    $('#'+attr_id+' .form-group').each(function(){
        if($(this).hasClass('has-error')){
            result = false;
            return false;
        }
    });
    return result;
}
function getFormData(attrID) {
    var inputs = $("#"+attrID+' :input');
    var data = {};
    inputs.each(function() {
        data[this.id] = $(this).val();
    });
    return data;
}
///////////////////
// END OF FORM JQUERY Important Method
/////////

