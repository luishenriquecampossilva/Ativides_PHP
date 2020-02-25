btnget = document.getElementById('botaoget');
btnpost = document.getElementById('botaopost');
btnput = document.getElementById('botaoput');
btndelete = document.getElementById('botaodelete');
var parag1 = document.getElementById('msg1');
var parag2 = document.getElementById('msg2');
var parag3 = document.getElementById('msg3');
var parag4 = document.getElementById('msg4');
var objajax = new XMLHttpRequest();
btnget.addEventListener('click',function(){
	document.getElementById('loader').style.display = 'block';
objajax.open('GET','http://localhost:81/aula10/index.php? data=hoje');
objajax.send();

objajax.onload = function(){

document.getElementById('loader').style.display = 'none';
	parag1.innerHTML = objajax.responseText;
}


});
btnpost.addEventListener('click',function(){
objajax.open('POST','http://localhost:81/aula10/index.php');
objajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');//indica para o servidor de onde ele deve ler
objajax.send('data=hoje');

objajax.onload = function(){


	parag2.innerHTML = objajax.responseText;
}


});
btnput.addEventListener('click',function(){
	objajax.open('PUT','http://localhost:81/aula10/index.php? data=hoje');
objajax.send();

objajax.onload = function(){


	parag3.innerHTML = objajax.responseText;
}

});
btndelete.addEventListener('click',function(){


	objajax.open('DELETE','http://localhost:81/aula10/index.php/1001');
objajax.send();

objajax.onload = function(){


parag4.innerHTML = objajax.responseText;
}
});


//selecione a palavra desejada e aperte ctrl+d para selecionar todas as palavras iguais


//loader com gif

//retorno da requisição ajax


//sleep(5);