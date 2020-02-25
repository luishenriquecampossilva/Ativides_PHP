btn = document.getElementById('consultar');
btn.addEventListener('click',function(){
var nome = document.getElementById('nome');
let objajax = new XMLHttpRequest(); //declarei um objeto//
objajax.open('GET','http://localhost:81/aula09/consulta.php');//metodo e url para onde sera enviada a requisição
objajax.send(); //Enviando a requisição//

//objajax.onload = function(response){ //o evento onload e disparado quando a requisição retorna//
	//console.log(response);//response pega todo o conteudo no momento em que voçê envia a requisição
//alert(objajax.responseText);//responseText pega todo o conteudo de texto como retorno quando a requisição for enfiada
//nome.value=objajax.responseText;
//}
objajax.onload=function(){
	let retorno =objajax.responseText;
	let jsonobj = JSON.parse(retorno);//converte o json em objeto
	console.log(jsonobj.nome);
	document.getElementById('nome').value = jsonobj.nome;
	document.getElementById('email').value = jsonobj.email;
}
});