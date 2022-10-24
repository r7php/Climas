$(function(){
	$('#form').on('submit',function(e){
		e.preventDefault();	

    	var cidade = $('input[name=searchInput]').val();

		if(cidade){
	        $.ajax({
               type:'POST',
               url:'ReturnDados/getDados.php',
               data:{cidade:cidade},
               dataType: "json",
               beforeSend: function() { $('#wait').show(); },
               complete: function() { $('#wait').hide();},   
               success:function(msg){
                $('.resultado').css('display','flex');
                $('#InfoTempo').html(msg[1]);
                $('#Tempo').html(msg[0]);
                $('#velocidade').html(msg[2]);
                $("#img").attr("src","http://openweathermap.org/img/wn/"+msg[3]+"@2x.png");
               },
               error:function(){
               alert("Algo deu errado!"); 
               }
            });
		}else{
         $('#aviso').css('display','flex')
      }
	});
});