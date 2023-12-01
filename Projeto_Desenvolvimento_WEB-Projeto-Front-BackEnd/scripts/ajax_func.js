// AJAX PARA RETORNAR OS DADOS DOS FUNCIONARIOS
$(document).ready(function(){	
	var pag = "funcionarios";
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

// // AJAX PARA RETORNAR OS DADOS DO PONTO
// $(document).ready(function(){	
// 	var pag = "ponto";
// 	$.ajax({
// 		url: pag + "/listar.php",
// 		method: "post",
// 		data: $('#frm').serialize(),
// 		dataType: "html",
// 		success: function(result){
// 			$('#dados_historico').html(result)
// 		},		
// 	})
// })


// AJAX PARA RETORNAR OS DADOS DO PONTO
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
