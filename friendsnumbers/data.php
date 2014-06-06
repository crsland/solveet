<?php
/*
* Dados 2 números enteros positivos, determinar si son amigos
* http://es.wikipedia.org/wiki/N%C3%BAmeros_amigos
* Dos números amigos son dos números enteros positivos a y b tales que la suma de los divisores propios de uno es igual al 
* otro numero y viceversa, es decir s(a)=b y s(b)=a, donde s(n) es igual a la suma de los divisores de n, sin incluír a n. 
* (La unidad se considera divisor propio (que no sea un factor el mismo n), pero no lo es el mismo número.)
* 
* Un ejemplo es el par de naturaless (220, 284), ya que:
* 
* los divisores propios de 220 son 1, 2, 4, 5, 10, 11, 20, 22, 44, 55 y 110, que suman 284;
* los divisores propios de 284 son 1, 2, 4, 71 y 142, que suman 220.
* 
* Si un número es amigo de sí mismo (es igual a la suma de sus divisores propios), recibe entonces el nombre de número perfecto.
*/
class FriendNumber{
	
	private $a;
	private	$b;
	
	public function __get($prop){
		if(isset($this->{$prop}))
			return $this->{$prop};
		return false;
	}
	
	public function __construct($a,$b){
		
		$this->a = $a;
		$this->b = $b;
	}
	
	
	
	private function _getNextPrimeNumber($primeNumber){
		$next = $primeNumber+1;
	
		if($this->_isPrime($next)){
			return $next;	
		}else{
			return $this->_getNextPrimeNumber($next);
		}
	}
	
	
	private function _isPrime($n){
		//1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
		if($num == 1)
			return false;

		//2 is prime (the only even number that is prime)
		if($num == 2)
			return true;

		/**
		 * if the number is divisible by two, then it's not prime and it's no longer
		 * needed to check other even numbers
		 */
		if($num % 2 == 0) {
			return false;
		}

		/**
		 * Checks the odd numbers. If any of them is a factor, then it returns false.
		 * The sqrt can be an aproximation, hence just for the sake of
		 * security, one rounds it to the next highest integer value.
		 */
		for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
			if($num % $i == 0)
				return false;
		}

		return true;
	}	

	/**
	* getFactors
	* @scope public
	* @param int $n
	* @return array
	*/
	private function _getFactors($n){
		$nextPrime = 2;
		$factors = array();
		$c=0;
		while($n >= 1){
			$nextPrime = ($c==0)? 2 : $this->_getNextPrimeNumber($nextPrime);
			if($nextPrime % $n == 0){
				// If $nextPrime is divisor of $n
				$factors[] = $n;
				$n = $n / $nextPrime;
				// Le resto una unidad porque la variable se incrementa y como necesito volver a dividir por 
				// el mismo número, entonces le resto uno.
				$nextPrime = ($nextPrime-1);
			}
			$c++;
		}
		return $factors;
	}
	
	private function _getDivisorsQuantity(){
		
		$factorsA = $this->_getFactors($this->a);
		$factorsB = $this->_getFactors($this->b);
		
		for()
		
		return array(
			'a' => array(),
			'b' => array()
		);
	}
	
	public function areFriends(){
		
		
		
	}
}	
	
	
?>