btn =document.getElementById('consultar');
var ceps =document.getElementById('cep');
ceps.addEventListener('input',function(){
	if(ceps.value.length==8){
let cep = document.getElementById('cep').value;
let objajax = new XMLHttpRequest();
objajax.open('GET','https://viacep.com.br/ws/'+cep+'/json/');
objajax.send();
objajax.onload = function(){

	let retorno = objajax.responseText;
	let jsonobj = JSON.parse(retorno);

	document.getElementById('rua').value = jsonobj.logradouro;
	document.getElementById('bairro').value = jsonobj.bairro;
	document.getElementById('cidade').value = jsonobj.localidade;
	document.getElementById('uf').value = jsonobj.uf;
}}
});