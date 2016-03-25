(function(){

//radio dugmici
var bmw = document.querySelector('#bmw');
var fiat = document.querySelector('#fiat1');
var golf = document.querySelector('#golf');
var bmwx = document.querySelector('#bm');
var fiatx = document.querySelector('#fiat');
var golfx = document.querySelector('#go');
var list = document.querySelector('select');
var button = document.querySelector('input[type="submit"]');

bmw.addEventListener('click', function () {
	fiatx.style.display = "none";
	golfx.style.display = "none";
	bmwx.style.display = "block";
})

fiat.addEventListener('click', function () {
	  bmwx.style.display = "none";
	  golfx.style.display = "none";
	  fiatx.style.display = "block";
})

golf.addEventListener('click', function(){
	bmwx.style.display = "none";
	fiatx.style.display = "none";
	golfx.style.display = "block";
})

list.addEventListener('click', function(){
	button.style.marginTop = "70px";
})
//radio dugmici

//validacija 
button.addEventListener('click', validacija);

function validacija(){
	var ime = document.querySelector('#i').value;
	var prezime = document.querySelector('#pre').value;
	var validParagraf = document.createElement('p');
	var validParagraf2 = document.createElement('p');
	var validText = document.createTextNode("Molimo Vas da upišete Vaše ime!");
	var validText2 = document.createTextNode("Molimo Vas da upišete Vaše prezime!")
	var labelIme = document.querySelector('label[for="i"]');
	var labelPrezime = document.querySelector('label[for="pre"]');
	validParagraf.appendChild(validText);
	validParagraf2.appendChild(validText2);

	if(ime.length < 1){
		labelIme.appendChild(validParagraf);
	}
	if(prezime.length < 1){
		labelPrezime.appendChild(validParagraf2);
	}
}
//validacija












})()