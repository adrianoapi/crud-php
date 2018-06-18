<script>
    jQuery(document).ready(function(){
        
        jQuery('#frm_cadastro').submit(function(){
           var dados = jQuery(this).serialize();
           
           jQuery.ajax({
               type: "POST",
               url:  "?action=add_cliente",
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