
window.addEventListener('load', function() {

	var h1 = document.getElementById('pealkiri');
	alert(h1.innerHTML);
});

var numberMuutuja = 123;

//(Math.round(0.1*10) + Math.round(0.1*20))/10;
//(Math.round(0.1*1000) + Math.round(0.2*1000))/1000;

var tekstMuutuja = "tek \n \x20 \u0020 st";
var tekstMuutuja = 'tekst';

var booleanMuutuja = true;
var booleanMuutuja = false;

var undefinedMuutuja = undefined;
var nullMuutuja = null;

var massiivMuutuja = [1, "tekst", 3, [4, 5, 6], function(){}, false];

var meetod = function(a){
	return this.omadus + a;
}

var objektMuutuja = {
	omadus: 123,
	meetod: meetod
	}
};

var objektMuutuja2 = {
	omadus: 6,
	meetod: objektMuutuja.meetod
}

alert(objektMuutuja.meetod(5));
alert(objektMuutuja2.meetod(5));

"tekst".toUpperCase();
