// AJAX PARA RETORNAR OS DADOS DOS GESTOR
$(document).ready(function(){	
	var pag = "gestor";
	$.ajax({
		url: pag + "/listar.php",
		method: "post",
		data: $('#frm').serialize(),
		dataType: "html",
		success: function(result){
			$('#conteiner_table').html(result)
		},		
	})
})



// AJAX PARA RETORNAR OS DADOS DO PONTO DO GESTOR
$(document).ready(function(){
	var pag = "ponto";
	$('#btn_modal').click(function(event){
		event.preventDefault();	
		
		$.ajax({
			url: pag + "/listar.php",
			method: "post",
			data: $('#frm').serialize(),
			dataType: "html",
			success: function(result){
				$('#dados_historico').html(result)				
			},	
		})
	})	
})



// AJAX PARA RETORNAR OS DADOS DO PONTO DOS FUNCIONARIOS
$(document).ready(function(){
	var pag = "ponto";
	$('#btn_modal_hist_func').click(function(event){
		event.preventDefault();	
		
		$.ajax({
			url: pag + "/listar_todos.php",
			method: "post",
			data: $('#frm').serialize(),
			dataType: "html",
			success: function(result){
				$('#dados_historico_funcionarios').html(result)				
			},	
		})
	})	
})


