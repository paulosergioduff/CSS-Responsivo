<?php 

function retornaSelecaoPorId($id, $varchar1, $varchar2)
	{

    
     echo "**********************************************
";  
     echo "Id: " . $id . "
";   
     echo "Categoria: " . $varchar1 . "
";  
     echo "Titulo: " . $varchar2 . "
";  

//echo "<br>view funcionando!"; //reservado para testes


}

function retornaSelectTotal($id, $varchar1, $varchar2)
	{

    
     echo "**********************************************
";  
     echo "Id: " . $id . "
";   
     echo "Categoria: " . $varchar1 . "
";  
     echo "Titulo: " . $varchar2 . "
";  


}

function retornoInsert()
	{
		echo "<script>alert('Registro inserido com sucesso')</script>";
	}

function retornoUpdate()
	{
		echo "<script>alert('Registro atualizado com sucesso')</script>";
	}

	function retornoDelete()
	{
		echo "<script>alert('Registro excluido com sucesso')</script>";
	}


