<?php include_once './src/Mvc/Views/header.php'; ?>
<?php include_once './public/Assets/Css/estilo.php'; ?>


<div class="card" style="">
<div class="container pt-5" id="cadastrar">
    <!-- DELETE, UPDATE E CREATE são POST, Select é GET -->
    <form method="POST" action="api.php?acao=cadastrar">
    <div class="mb-3">
        <h3>Cadastrar um Imovel</h3>

        <label for="tipo">Imovel</label>        
        <input type="text" name="tipo" id="tipo">

          <label for="metragem">Metragem</label>
    <input type="text" name="metragem" id="metragem">

    <label for="comodos">Comodos</label>
    <input type="text" name="comodos" id="comodos">

    <br><label for="cep">Cep</label><br>
    <input type="text" name="cep" id="cep">
    
    
 
    
    <br><label for="areas_comuns">Areas</label>
    <input type="text" name="areas_comuns" id="areas_comuns">
         
    <input type="text" name="posts" id="">
    
    <br><label for="vagas_automovel">Vagas</label><br>
    <input type="text" name="vagas_automovel" id="vagas_automovel">
    </div>
    
    <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>



    <div>
 
    </div>

    
    <?php
    
//     $cep = "32430-110";
// $url = "https://viacep.com.br/ws/{$cep}/json/";
// $dados = json_decode(file_get_contents($url));

// echo "Logradouro: {$dados->logradouro}";
// echo "Complemento: {$dados->complemento}";
// echo "Bairro: {$dados->bairro}";
// echo "Cidade: {$dados->localidade}";
// echo "Estado: {$dados->uf}";
  
    ?>
</div>
</div>




  <!-- <img src="..." class="card-img-top" alt="...">
  <div class="card-body"> 
    
  <form method="POST" action="api.php?acao=cadastrar"></form>
    <label for="tipo" class="form-label">Imovel</label>
      <input class="form-control" list="tipoopcoes" id="tipo" placeholder="Tipo de Imovel">
          <datalist id="tipoopcoes">
              <option value="Casa">
              <option value="Apto"> 
          </datalist>
   
    <label for="metragem">Metragem</label>
    <input type="text" name="idImovel" id="">

    <label for="comodos">Comodos</label>
    <input type="text" name="idImovel" id="">

    <br><label for="cep">Cep</label><br>
    <input type="text" name="idImovel" id="">
    
    <label for="localizacao">Localização</label>
    <input type="text" name="idImovel" id="">
    
    <br><label for="areas_comuns">Areas</label>
    <input class="form-control" list="areas" id="areas_comuns" placeholder="Areas comuns">
          <datalist id="areas">
              <option value="Sim">
              <option value="Não"> 
          </datalist>
    <input type="text" name="idImovel" id="">
    
    <br><label for="vagas_automovel">Vagas</label><br>
    <input type="number" name="idImovel" id="">
   
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
  </div>
</div> -->



<?php include_once './src/Mvc/Views/footer.php'; ?>