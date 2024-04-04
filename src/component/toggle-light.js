$(function(){
    $('#light').on('click', function(){
        $('#light').addClass('disabled border border-0');
        $('#dark').removeClass('disabled border border-0');
    });

    $('#dark').on('click',function(){
        $('#dark').addClass('disabled border border-0');
        $('#light').removeClass('disabled border border-0');
    });
});