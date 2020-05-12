<script type="text/javascript">
  var currencyInput = document.querySelector('input[type="currency"]');
  var currency = 'GBP'; // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

  currencyInput.addEventListener('focus', onFocus);
  currencyInput.addEventListener('blur', onBlur);

  function localStringToNumber(s) {
    return Number(String(s).replace(/[^0-9.-]+/g, ""));
  }

  function onFocus(e) {
    var value = e.target.value;
    e.target.value = value ? localStringToNumber(value) : '';
  }

  function onBlur(e) {
    var value = e.target.value;

    const options = {
      maximumFractionDigits: 2,
      currency: currency,
      style: "currency",
      currencyDisplay: "symbol"
    }

    e.target.value = value ?
      localStringToNumber(value).toLocaleString(undefined, options) :
      ''
  }
</script>
<div class="widget-box">
 

<div class="widget-content nopadding">
<form class="form-horizontal" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
  <div class="control-group">
    <label class="control-label">Nome Vaga :</label>
    <div class="controls">
      <input type="text" class="span11" name="nome_vaga" placeholder="Nome da Vaga" required style="margin: 0px; width: 571px;">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Salário (R$) :</label>
    <div class="controls">
      <input type="currency" class="span11" name="salario" placeholder="Digite o Salário"/ required style="margin: 0px; width: 571px;">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Descrição Vaga :</label>
    <div class="controls">
      <textarea class="span11" name="descricao_vaga" rows="10" placeholder="Digite a Descrição da Vaga" style="margin: 0px; width: 571px; height: 125px;" required></textarea>
    </div>
  </div>

  <div class="form-actions">
    <button type="submit" onclick="return confirmacao()" class="btn btn-success">Gravar</button>
  </div>
</form>

</form>
</div>
</div>