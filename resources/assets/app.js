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