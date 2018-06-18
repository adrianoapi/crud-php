<script>
    jQuery(document).ready(function(){
        
        jQuery('#frm_cadastro').submit(function(){
            
           document.getElementById('msg-erro').style.display = "none";
           var dados = jQuery(this).serialize();
           var nome  = document.getElementById('nome' ).value;
           var email = document.getElementById('email').value;
           var valid = form_validtaion(nome, email);
           
           if(valid.length > 0){
               document.getElementById('msg-erro').innerHTML     = valid.join('<br>');
               document.getElementById('msg-erro').style.display = "block";
               return false;
           }
       
           jQuery.ajax({
               type: "POST",
               url:  "./",
               data: dados,
               success: function (data){
                   console.log(data);
               }
           });
           
        });
        
    });
</script>
</div>
    </body>
</html>