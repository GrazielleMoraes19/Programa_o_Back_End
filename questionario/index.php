<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Questionário de Química</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<form action="gravar.php" method="post">
<table border="0" align="center" cellpadding="6">

<tr><td colspan="2"><h2>Dados do Participante</h2><hr></td></tr>
<tr>
  <td width="150">Nome:</td>
  <td><input name="nome" type="text" size="60" required></td>
</tr>
<tr>
  <td>Email:</td>
  <td><input name="email" type="email" size="60" required></td>
</tr>
<tr>
  <td>Telefone:</td>
  <td><input name="telefone" type="text" size="30" required></td>
</tr>

<tr><td colspan="2"><hr></td></tr>
<tr><td colspan="2"><h2>Questionário de Química — 12 Questões</h2></td></tr>

<!-- Seção A – 4 questões de múltipla escolha -->
<tr><td colspan="2"><strong>Seção A — Questões de múltipla escolha</strong></td></tr>

<tr><td colspan="2">1. Qual das substâncias abaixo é considerada um composto orgânico?</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q1" value="CO2"> CO₂</label><br>
  <label><input type="radio" name="q1" value="H2O"> H₂O</label><br>
  <label><input type="radio" name="q1" value="CH4"> CH₄</label><br>
  <label><input type="radio" name="q1" value="NaCl"> NaCl</label>
</td></tr>

<tr><td colspan="2">2. O pH de uma solução ácida é:</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q2" value="Maior que 7"> Maior que 7</label><br>
  <label><input type="radio" name="q2" value="Menor que 7"> Menor que 7</label><br>
  <label><input type="radio" name="q2" value="Igual a 7"> Igual a 7</label><br>
  <label><input type="radio" name="q2" value="Indefinido"> Indefinido</label>
</td></tr>

<tr><td colspan="2">3. Qual gás é essencial para a respiração celular?</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q3" value="Hidrogênio"> Hidrogênio</label><br>
  <label><input type="radio" name="q3" value="Oxigênio"> Oxigênio</label><br>
  <label><input type="radio" name="q3" value="Nitrogênio"> Nitrogênio</label><br>
  <label><input type="radio" name="q3" value="Gás carbônico"> Gás carbônico</label>
</td></tr>

<tr><td colspan="2">4. Qual dos seguintes fatores NÃO afeta a velocidade de uma reação química?</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q4" value="Temperatura"> Temperatura</label><br>
  <label><input type="radio" name="q4" value="Concentração dos reagentes"> Concentração dos reagentes</label><br>
  <label><input type="radio" name="q4" value="Presença de catalisador"> Presença de catalisador</label><br>
  <label><input type="radio" name="q4" value="Cor dos reagentes"> Cor dos reagentes</label>
</td></tr>

<tr><td colspan="2"><hr></td></tr>

<!-- Seção B – 4 questões dissertativas -->
<tr><td colspan="2"><strong>Seção B — Questões dissertativas</strong></td></tr>

<tr><td colspan="2">5. Explique a diferença entre reações endotérmicas e exotérmicas.</td></tr>
<tr><td colspan="2"><textarea name="q5" rows="4" required></textarea></td></tr>

<tr><td colspan="2">6. O que são isótopos e como eles diferem entre si?</td></tr>
<tr><td colspan="2"><textarea name="q6" rows="4" required></textarea></td></tr>

<tr><td colspan="2">7. Descreva a importância da água como solvente universal em processos químicos e biológicos.</td></tr>
<tr><td colspan="2"><textarea name="q7" rows="4" required></textarea></td></tr>

<tr><td colspan="2">8. Explique como o efeito estufa está relacionado com os gases presentes na atmosfera.</td></tr>
<tr><td colspan="2"><textarea name="q8" rows="4" required></textarea></td></tr>

<tr><td colspan="2"><hr></td></tr>

<!-- Seção C – 4 questões V/F -->
<tr><td colspan="2"><strong>Seção C — Verdadeiro ou Falso</strong></td></tr>

<tr><td colspan="2">9. O átomo é formado por prótons, nêutrons e elétrons.</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q9" value="V"> Verdadeiro</label>
  <label style="margin-left:20px"><input type="radio" name="q9" value="F"> Falso</label>
</td></tr>

<tr><td colspan="2">10. A ligação iônica ocorre entre átomos que compartilham elétrons.</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q10" value="V"> Verdadeiro</label>
  <label style="margin-left:20px"><input type="radio" name="q10" value="F"> Falso</label>
</td></tr>

<tr><td colspan="2">11. O gás oxigênio é necessário para a combustão.</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q11" value="V"> Verdadeiro</label>
  <label style="margin-left:20px"><input type="radio" name="q11" value="F"> Falso</label>
</td></tr>

<tr><td colspan="2">12. Os metais geralmente são bons condutores de eletricidade e calor.</td></tr>
<tr><td colspan="2">
  <label><input type="radio" name="q12" value="V"> Verdadeiro</label>
  <label style="margin-left:20px"><input type="radio" name="q12" value="F"> Falso</label>
</td></tr>

<tr><td colspan="2" style="text-align:center">
  <input type="submit" value="Gravar Respostas">
  <input type="reset" value="Limpar Formulário">
</td></tr>

</table>
</form>
</body>
</html>
