/*
pyramid = [
	***
];
*/


function Pyramid(base){
	
	this.base = parseInt(base); // Number
	this.pad  = '@';
	this.wrap = '*';
	this.data = [];
	this.output = [];
}

Pyramid.prototype = {
	
	create : function(){

		var i=0,max = this.getIterationsCount();
		for(;i<max;i++){
			var row = [];
			
			for(var x=0;x<this.base;x++){
				row.push(this.wrap);
			}
			this.data.push(row);
		}
		this.createPyramid();
	},
	// Get the matrix rows quantity
	// Para calcular esa cantidad se fija que la resta de la base por un multiplo de 2 sea mayor a uno, cuando llega a uno
	// quiere decir que se lleg� a la �ltima fila.
	getIterationsCount : function(){
		var c = 0, base = this.base;
		while(base-(c*2)>1){c++;}
		return c+1;
	},
	
	createPyramid : function(){
		var row = blankSpaces = at = atString = sideBsp = null;
		var lastIteration = this.data.length;
		
		this.data.forEach(function(e,i,a){
			blankSpaces = (2*i);
			row = e.join('');
			if(blankSpaces != 0 ){			
				// The second loop and so on. The first one is full of *. We already got it.
				// Now and then blankSpaces is divisible by 2 and greater than 1
				// Ahora necesito reemplazar los caracteres 
				// Get the at's string
				//1� How many ats?? 2: quantity of wrap symbols, one on each side
				at = Math.abs(this.base - blankSpaces - 2);
				atString = this.createString(at, this.pad);
				sideBsp  = this.createString(blankSpaces/2, '-');
				
				if(lastIteration != i+1){

					row = sideBsp + this.wrap + atString + this.wrap + sideBsp;
				}else{
					// Last iteration
					row = sideBsp + this.wrap + sideBsp;
				}
			}
			console.log(row);
			this.output.push(row.split(''));
		},this);
	},
	
	createString : function(length,character){
		var output = '';
		for(var i=0;i<length;i++){
			output += character;
		}
		return output;
	}
};

window.addEventListener('DOMContentLoaded',function(e){
	
	document.forms[0].addEventListener('submit',function(e){
		e.preventDefault();
		var base = document.querySelector('#base').value;
		var pyramid = new Pyramid(base);
		var result = pyramid.create();
	},false);
},false);

















