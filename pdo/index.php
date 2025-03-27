<?php
	ini_set('display_errors', 1);
	#No Laravel você faria no arquivo .env
	$driver = "mysql";
	$host = "127.0.0.1";
	$port = 3306;
	$dbname = "times_futebol";
	$user = "root";
	$pass = "";

	try {
		// A conexão (Isso aqui tranquilamente seria um método que seria executado logo na criação do objeto)
		// construct
		$conexao = new PDO($driver.":host=".$host.";port=".$port.";dbname=".$dbname, $user, $pass);
		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		//Primeiro eu faço a minha ação.
		if(isset($_GET['acao'])) {
			switch($_GET['acao']) {
				case 'excluir':
					if(isset($_GET['id'])) {
						# Preparo contra injeção de SQL.
						$query = "DELETE FROM times WHERE id = :id";
						$stmt = $conexao->prepare($query);
						$stmt->bindParam(':id', $_GET['id'], PDO::PARAM_INT);
						$stmt->execute();
					} else {
						throw new PDOException('ID Inválido!');
					}
			}
		}



		// Consulta -> Depois eu consulto no banco.
		//! Não importa se é ORM ou sem ORM, PHP não entende nada de SQL.
		$query = "SELECT * FROM times";
		$stmt = $conexao->query($query);
		//* Esse cara retornou o objeto todo? Não!
		$times = $stmt->fetchAll(PDO::FETCH_ASSOC);

		//Conferência
		if(count($times) === 0) {
			echo "Não foram encontrados times que atendam este critério.";
		}

		echo "<ul>";
		foreach($times as $time) {
			echo "<li>".$time['nome']." - ".$time["cidade"];
			echo " | <a href='?acao=excluir&id=".$time['id']."'>Excluir</a></li>";
		}
		echo "</ul>";

	} catch (PDOException $e) {
		$conexao->rollback();
		die("Erro de Conexão: " . $e->getMessage());
	} finally {
		$conexao->commit();
		$conexao = null;
	}