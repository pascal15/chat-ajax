

$(document).ready(function(){
    receive();
$('.formulaire').submit(function(){

    var nom=$('.nom').val();
    var message=$('.message').val();

    $.post('chat.php',{nom:nom,message:message},function(donnees){
        $('.return').html(donnees);

       $('.nom').val('');
       $('.message').val('');
        receive();
     });
     return false;
    });
    function receive(){
        $.post('recuperation.php',function(data){
            $('.afficher').html(data);
        });
    }
   setInterval(receive,1000);
});