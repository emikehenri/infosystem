$(function(){
    $('#light').on('click', function(){
        $('#light').addClass('disabled border border-0');
        $('#dark').removeClass('disabled border border-0');
        
    });

    $('#dark').on('click',function(){
        $('#dark').addClass('disabled border border-0');
        $('#light').removeClass('disabled border border-0');
        
    });

    //toggle menu
    $('#menu').on('click', function(e) {
        e.preventDefault();
        if ($('#sidecontent').hasClass('d-none')) {
            $('#sidecontent').removeClass('d-none').addClass('d-block');
            $('#dash-content').removeClass('col-xl-12').addClass('col-xl-10');
        } else {
            $('#sidecontent').removeClass('d-block').addClass('d-none');
            $('#dash-content').removeClass('col-xl-10').addClass('col-xl-12');
        }
    });
    
    
});
