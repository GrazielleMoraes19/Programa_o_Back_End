<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Questionário de Química</title>
</head>

<body>
<form action="gravar.php" method="post" enctype="multipart/form-data">
  <table width="775" border="0" align="center">
    <tr>
      <td colspan="3">
        <table width="100%" border="0">
          <tr>
            <td>Nome:</td>
            <td><input name="nome" type="text" size="100"></td>
          </tr>
          <tr>
            <td>Email:</td>
            <td><input name="email" type="text" size="100"></td>
          </tr>
          <tr>
            <td>Telefone:</td>
            <td><input name="telefone" type="text" size="100"></td>
          </tr>
          <tr>
            <td>CPF:</td>
            <td><input name="cpf" type="text" size="100"></td>
          </tr>
        </table>
      </td>
    </tr>
    
    <tr><td colspan="3"><hr></td></tr>
    <tr><td colspan="3"><b>Questionário de Química</b></td></tr>
    
    <tr>
      <td colspan="3">1. Em uma reação de oxirredução, ocorre:</td>
    </tr>
    <tr>
      <td colspan="3">
        <label><input type="radio" name="conceito" value="Apenas o compartilhamento de elétrons"> a) Apenas o compartilhamento de elétrons</label><br>
        <label><input type="radio" name="conceito" value="Transferência de elétrons entre as espécies químicas"> b) Transferência de elétrons entre as espécies químicas</label><br>
        <label><input type="radio" name="conceito" value="Quebra de ligações iônicas"> c) Quebra de ligações iônicas</label><br>
        <label><input type="radio" name="conceito" value="Formação de ligações covalentes"> d) Formação de ligações covalentes</label>
      </td>
    </tr>
    
    <tr><td colspan="3">Comente:</td></tr>
    <tr><td colspan="3"><textarea name="coment_um" cols="100" rows="5"></textarea></td></tr>

    <tr><td colspan="3">02. Quais tecnologias ou softwares são necessários para trabalhar com o PHP?</td></tr>
    <tr><td colspan="3"><textarea name="tecnologias" cols="100" rows="5"></textarea></td></tr>

    <tr><td colspan="3">03. O PHP possibilita inserir funcionalidades avançadas em um site?</td></tr>
    <tr>
      <td colspan="3">
        <label><input type="radio" name="funcionalidades" value="Sim"> Sim</label><br>
        <label><input type="radio" name="funcionalidades" value="Não"> Não</label>
      </td>
    </tr>

    <tr><td colspan="3">Comente:</td></tr>
    <tr><td colspan="3"><textarea name="coment_dois" cols="100" rows="5"></textarea></td></tr>

    <tr><td colspan="3">04. Qual animal é o mascote do PHP?</td></tr>
    <tr><td colspan="3"><textarea name="mascote" cols="100" rows="5"></textarea></td></tr>

    <tr><td colspan="3">05. Cite algumas características do PHP:</td></tr>
    <tr><td colspan="3"><textarea name="caracteristicas" cols="100" rows="5"></textarea></td></tr>

    <tr>
      <td colspan="3"><hr>
        <input type="submit" value=".::: Gravar Cadastro :::.">
        <input type="reset" value=".::: Limpar Formulário :::.">
      </td>
    </tr>
  </table>
</form>
</body>
</html>
