<?php
session_start();
?>
<1DOCTYPE html>
<html Lang"pt-br">
	<head> /*cabeçalho*/
		<meta charset="utf-8"> /*permite caracters especiais*/
		<title> Cadastro de dados</title>
	
	</head>
	<body>
		
		<h1>Login de Usuario</h1>
		<?php
		if(isset(S_SESSION['msg']))
			echo S_SESSION['msg'];
			unset(S_SESSION['msg']);
		?>
		<form method="POST" action="processa1.php"> /*formulario e direcionamento*/
			<label> Nome: > </label> /*pro usuario saber o que digitar*/
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label>email: <label>
			<input type="email" name="email" placeholder="Digite seu email"><br><br>
			
			<input type="submit" value ="Cadastrar">
			 			
		</form>
	<input type="integr" name="op1" placeholder=0>
	while (op1 <=1){
		echo "Menu"<br>;
		echo "Deseja Cadastrar alguma tarefa ou abrir alguma tarefa?"<br>;
		echo "Digite 1 para Cadastrar Tarefa"<br>;
		echo "Digite 2 para abrir Tarefas Incompletas"<br>;
		echo "Digite 3 para abrir Tarefas Completas"<br>;
		
		<label> op1: > </label> /*pro usuario saber o que digitar*/
		<input type="integr" name="op1" placeholder="Digite a opção"><br><br>
		switch($op1){
			case 1: 
			echo "Cadastrar Tarefa"<br>;		
				
				<?php
				if(isset(S_SESSION['msg']))
				echo S_SESSION['msg'];
				unset(S_SESSION['msg']);
				?>
							
				echo "Digite os valores nos campos corretos"<br>;				
					<label> Name: > </label>
					<input type="text" name="Name" paceholder="Digite o Nome: "><br><br>
					<label> Descricao: > </label>
					<input type="text" name="Descricao" paceholder="Digite a Descrição da Tarefa: "><br><br>
					
						<?php
						header (« Content-type: image/jpeg »);
						$image = imagecreatefromjpeg(« maphoto.jpg »);
						?>
					
					<label> status: > </label>
					<input type="text" name="status" paceholder="Digite o status se completo: "><br><br>
					
					<?php
					$status = TRUE; /* Variavel que vai indicar se está completa a tarefa*/
					if($status == TRUE)
						echo "Está de Completo.";
					else
						echo "Está de Incompleto.";
					?>
						
				
				
					
					<label> CEP: > </label>
					<input type="integr" name="CEP" paceholder="Digite o CEP: "><br><br>
							
					<input type="submit" value ="Cadastrar">			
				break;
						

			Case2:
				echo "Tarefas Incompletas"<br>;	
				echo $this->conn2();
									
			break;
					
			case 3: 
				echo "Tarefas Completas"<br>;
				echo $this->conn2();
			break;
			
			
			default:
				echo "Voce deve escolher uma opção valida!"<br>;
				echo "Volte ao menu."<br>;
			break
			}
	}	
	</body>
	
</html>