$(function(){
   
    $('#pesquisa').keyup(function(){ 
         
        var pesquisa = $(this).val(); 
        if(pesquisa != ''){ 
            var dados = { 
            palavra : pesquisa 
             
            }
            $.post('/pestoque/control/busca.php', dados, function(retorna){
            
            $(' .table-results ').html(retorna);
             
            });
        }else{ 
            var dados = {
            palavra : "tudo"
            }
            $.post('/pestoque/control/busca.php',dados,function(retorna){
            $(' .table-results ').html(retorna);
            });
        }
    });
});