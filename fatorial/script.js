
var botao = document.getElementById('botao');
var fatorial  = document.getElementById('fatorial')
botao.addEventListener('click',function(){
	var valor = document.getElementById('valor').value;
var soma = parseInt(valor);
var teste =1 ;
for (var i = soma; i >1; i--) {
	teste=teste*i;
}
fatorial.innerHTML = teste;
});