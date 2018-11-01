
<?php
    $host = "localhost";
    $user = "sindcoco";
    $pass = "sindcocoNewSql";
    $db = "sindcoco";
    $conexao = mysqli_connect($host,$user,$pass,$db) or die (mysqli_error());

    //PEGANDO O ID ENVIADO DO AJAX
    $ID = $_GET['ID'];   
?>
<div class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Título Modal</h4>
            </div>
            <div class="modal-body">                              
                <?php  
                    $sql = mysqli_query ($conexao, "SELECT * FROM anuncio  WHERE autorizado = 1 ORDER BY data");   
                    $resp = mysqli_fetch_array($sql);   
                    $titulo = $resp['titulo'];    
                ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>Nome do Usuário:</label>   
                        <input type="text" class="form-control" placeholder="<?php echo $titulo; ?>" disabled>                             
                    </div>            
                </div>
            </div>                
            <div class="modal-footer">
                <button type="reset" id="cancelar" class="btn btn-default pull-left" data-dismiss="modal" value="reset">FECHAR</button>               
            </div>
        </div>        
    </div>    
</div>

<script>
    $('.modalDetalhesUsuario').click(function(){
      var ID = $(this).attr("data-a");
      $.ajax({url:"paginaModal.php?ID="+ID,cache:false,success:function(result){    
        $(".modal-content").html(result);
      }});
    });
  </script>