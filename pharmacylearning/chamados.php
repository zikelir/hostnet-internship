<?php include_once "cabecalhoSelantel.php"?>
          <h1>Favor digitar abaixo sua necessidade(Chamado para atendimento):</h1>
          <form action="enviar-chamado2.php" method="get">
          <h3>Nome:</h3>
          <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome">
          <h3>Telefone:</h3>
          <div class="input-group">
  <input type="text" class="form-control" placeholder="Digite seu telefone para contato" name="telefone" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">2127777777</span>
</div>
          <h3>Condomínio:</h3>
          <input type="text" class="form-control" name="condominio" placeholder="Digite o seu condomínio">
          <h3>E-mail:</h3>
          <div class="input-group">
  <input type="text" class="form-control" placeholder="Digite seu e-mail" name="email" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">exemplo@email.com</span>
          </div>
          <h3>Chamado:</h3>
           <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" name="chamada" placeholder="Digite o seu chamado"></textarea>
           </div>
          <p><input class="btn btn-primary btn-lg" type="submit" name="submit" value="sent"></p>
          <!--input type="submit" value="enviar"-->
          </form>
      
    <?php include_once "rodapeSelantel.php"?>