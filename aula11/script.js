btn = document.getElementById("consultar");
btn.addEventListener('click',function(){

var objAjax = new XMLHttpRequest();
objAjax.open('GET','https://api.hgbrasil.com/weather/?format=json-cors&key=development&woeid=538374');
objAjax.send();

objAjax.onload = function(){


	let jasontexto = JSON.parse(objAjax.responseText);


	console.log(jasontexto.results.city_name);
	var cidade = document.getElementById('cidade').innerHTML=jasontexto.results.city_name;
var tempo = document.getElementById("temperatura").innerHTML='temperatura'+jasontexto.results.temp+' ºC';
var umidade = document.getElementById('umidade').innerHTML='umidade '+jasontexto.results.humidity +'%';
var tempo = document.getElementById('tempo').innerHTML=jasontexto.results.description;
var image = document.getElementById('image').src="https://fatweb.s3.amazonaws.com/vestibularfatec/assets/img/layout/logotipo-fatec"+jasontexto.results.img_id+'.png';
var area=document.getElementById('area');
var lista = document.getElementById("lista");
var teste = '';
var teste2 = '';
	for(const valor of jasontexto.results.forecast){
		 teste=teste+'date:'+valor.date+'previsao'+valor.description+'min'+valor.min+'max'+valor.max;
		 teste2=teste2+'<li> data '+valor.date+'</li> '+'<li>previsao  '+valor.description+'</li> '+'<li>  min'+valor.min+'</li>'+'<li>  max'+valor.max+'</li>'+'<br>';
}
area.innerHTML=teste;
lista.innerHTML = teste2;
}



});

