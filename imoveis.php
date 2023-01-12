<?php include_once './src/Mvc/Views/header.php'; ?>

<?php include_once 'config.php'; ?>
<!-- CONTEUDO PÁGiNA -->

<div class="container pt-5" id="formularioDeletar">
    
    <form method="POST" action="api.php?acao=deletarImovel">
    <div class="mb-3">
        <h3>Deletar um imóvel</h3>
        <label for="exampleInputEmail1" class="form-label">Digite o ID do imóvel que será deletado.</label>
        <input type="number" class="form-control" name="idImovel">
    </div>
    <button type="submit" class="btn btn-primary">Deletar</button>
    </form>
    
</div>

   
   

<div class="container-fluid">
    <div class="row">
    

    <?php 
    // var_dump(json_decode(new \Mvc\Controladores\Imoveis())->todosImoveis(true)); 
    ?>
  <div class="card-body col-md-3">
    <h5 class="card-title" name="todosImoveis"></h5>
    <p class="card-text">.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">An item</li>
    <li class="list-group-item">A second item</li>
    <li class="list-group-item">A third item</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link">Editar</a>
    <a href="#" class="card-link">Salvar</a>
  </div>
</div>

        </div>
    </div>
</div>


<?php include_once './src/Mvc/Views/footer.php'; ?>