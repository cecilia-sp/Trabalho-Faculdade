<?php include_once("header2.php");?> <!--Chama a o header.php ou seja o cabeçalho--> 


<script src="https://kit.fontawesome.com/8046d7e12c.js" crossorigin="anonymous"></script>
  <style type="text/css">

    #botao{
      background-color: green;    /*Cor do fundo do botão*/
      color: #ffffff;         /*Cor da letra do botão*/
      font-weight: bold;        /*Fonte negrito*/
    }
  </style>


<body>

  <body>

<div class="container">  
<form>
<div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Repetir Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Repetir Senha</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Senha">
    </div>
  </div>  

  <div class="form-row"> <!--Inicio dos Dados cadastrais-->
    <div class="row text-center ">
        <h2>Dados cadastrais </h2>
    </div>
      <div class="form-group col-md-5">
        <label for="inputAddress">Nome</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Digite se nome completo">
      </div>
      <div class="form-group col-md-3">
        <label for="inputAddress">CPF</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Digite seu cpf">
      </div>

        <div class="form-group col-md-2">
          <label for="inputCEP">Data de nascimento</label>
          <input type="date" class="form-control" id="inputCEP">
        </div>

      <div class="form-group col-md-3">
        <label for="inputAddress">Telefone celular</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Digite se nome completo">
      </div>
      <div class="form-group col-md-3">
        <label for="inputAddress">Telefone fixo</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Digite se nome completo">
      </div>

        <div class="form-group col-md-3">
          <label for="inputEstado">Sexo</label>      
          <select id="inputEstado" class="form-control">
            <option selected>Femenino</option>   
            <option selected>Masculino</option>
            <option selected>Escolher...</option>   
          </select>
        </div>

    </div>
    </div>    
</form>

<form>
  <div class="container">
    <div class="form-row"> <!--Inicio dos Dados endereço-->
    <div class="row text-center ">
        <h2>Dados da entrega </h2>
    </div>
      <div class="form-group col-md-5">
        <label for="inputAddress">Rua</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Digite o nome da rua para entrega">
      </div>
      <div class="form-group col-md-3">
        <label for="inputAddress">Numero</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Numero para entrega">
      </div>  

      <div class="form-group col-md-4">
        <label for="inputAddress">Bairro</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Bairro para entrega">
      </div> 

      <div class="form-group col-md-3">
        <label for="inputAddress">Cidade</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Nome cidade">
      </div> 

      <div class="form-group col-md-2">
        <label for="inputAddress">Estado</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="Nome estado">
      </div> 

      <div class="form-group col-md-3">
        <label for="inputAddress">CEP</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="CEP para entrega">
      </div> 

      <div class="form-group col-md-4">
        <label for="inputAddress">Complemento</label>
        <input type="text" class="form-control" id="inputAddress" placeholder=" ">
      </div> 


      <div class="form-group col-md-4">
        <label for="inputAddress">Referência</label>
        <input type="text" class="form-control" id="inputAddress" placeholder=" ">
      </div> 
    </div>
</form>

  </div> <!--Fecha o segundo cointaner-->
    <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Li aceito
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>

<?php include_once("footer2.php");?>  <!--Coloca o rodapé aqui-->  