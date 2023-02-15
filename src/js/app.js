$(document).ready(function(){
    $('.log-btn').click(function(){
        $('.log-status').addClass('wrong-entry');
       $('.alert').fadeIn(500);
       setTimeout( "$('.alert').fadeOut(1500);",3000 );
    });
    $('.formulario-control').keypress(function(){
        $('.log-status').removeClass('wrong-entry');
    });

});
