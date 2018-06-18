<script>
    jQuery(document).ready(function(){
        
        // Cadastrar
        jQuery('#frm_cadastro').submit(function(){
            
           document.getElementById('msg-erro').style.display = "none";
           var dados = jQuery(this).serialize();
           var nome  = document.getElementById('nome' ).value;
           var email = document.getElementById('email').value;
           var valid = form_validtaion(nome, email);
           
           // Para a aplicação caso haja erro
           if(valid.length > 0){
               document.getElementById('msg-erro').innerHTML     = valid.join('<br>');
               document.getElementById('msg-erro').style.display = "block";
               return false;
           }
       
           jQuery.ajax({
               type: "POST",
               url:  "./",
               data: dados,
               success: function(data){
                   console.log(data);
                   document.getElementById("frm_cadastro").reset();
                   document.getElementById("msg-success" ).style.display = "block";
               }
           });
           
        });
        
        // Editar
        jQuery('.btnEdit').click(function(){
            
            jQuery.ajax({
                type: "GET",
                url:  "./",
                data: "id=" + this.id,
                success: function(data){
                    
                    var obj = JSON.parse(data);
                    
                    if(obj['id'] > 0){
                        document.getElementById("id"   ).value = obj['id'   ];
                        document.getElementById("nome" ).value = obj['nome' ];
                        document.getElementById("email").value = obj['email'];
                    }
                    
                }
            });
            
        });
        
        // Excluir
         jQuery('.btnDelete').click(function(){
            
            var rst = confirm("Deseja relamente excluir o item " + this.id + " ?");
            if(rst == true){
                
                jQuery.ajax({
                    type: "POST",
                    url:  "./",
                    data: "action=delete_cliente&id=" + this.id,
                    success: function(data){
                        console.log(data);
                    }
                });
                
            }
            
        });
        
    });
</script>
</div>
    </body>
</html>