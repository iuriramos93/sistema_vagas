<script type="text/javascript"> 
function confirmacao(){
   return confirm('Deseja Enviar seus Dados?');
}

</script>
<form class="form-horizontal" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
   
    <div class="control-group">
    <label class="control-label">Enviar Currículo </label>
    <div class="controls">
        <div class="uploader" id="uniform-undefined" >
        <input type="file" accept="application/pdf" size="300" style="opacity: 0;" name="curriculo" >
        <span class="filename"></span>
        <span class="action"></span>
        </div>
    </div>
    <div class="form-actions">
    <button type="submit" onclick="return confirmacao()" class="btn btn-success">Gravar</button>
  </div>
</form>