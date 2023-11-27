require ()

const url = 'index.html'

var u_id 
var u_name
var u_cargo

$.ajax({
  url: url,
  method:'GET',
  data: {id: u_id, nome: u_nome, cargo: u_cargo},
  dataType:'json',
}).done(function(result){
  console.log(result)
})
