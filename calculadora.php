<?php

include("calculadora.html");

	$a = $_POST['num1'];
	$b = $_POST['num2'];
	$op = $_POST['operacao'];
	
		function soma (int $a, int $b){
		
			return $a + $b;
		
		}
		
		function sub (int $a, int $b){
		
			return $a - $b;
		
		}
		
		function mult (int $a, int $b){
		
			return $a * $b;
		
		}
		
		function div (int $a, int $b){
		
			return $a / $b;
		
		}
		
		function porc (int $a, int $b){
		
			return ($a/100) * $b;
		
		}
		
		function inverso1 (int $a){
		
			return 1/$a;
		
		}
		
		function inverso2 (int $b){
		
			return 1/$b;
		
		}
		
		function potencia (int $a, int $b){
			
			$pot = 1;
			
			if ($b != 0){

				for ($i = 1; $i <= $b; $i++){
				
					$pot = $pot * $a;
					
				}
				
				return $pot;
			
			}
		
		}
		
		function raizQ1 (int $a){
		
			return sqrt($a);
		
		}
		
		function raizQ2 (int $b){
		
			return sqrt($b);
		
		}
	
		if(empty($a) || empty($b) || !is_numeric($a) || !is_numeric($b)){
		
			echo "<br>Erro! Preencha os campos corretamente!";
		
		}

		elseif($op == '+'){
			
			echo "<br>$a + $b = " . soma($a, $b);
			
		}
			
		elseif($op == '-'){
			
			echo "<br>$a + $b = " . sub($a, $b);
			
		}
			
		elseif($op == '*'){
			
			echo "<br>$a + $b = " . mult($a, $b);
			
		}
		
		elseif($op == '/'){
			
			echo "<br>$a + $b = " . div($a, $b);
			
		}
		
		elseif ($op == '%'){
		
			echo "<br>$a % $b = " . porc($a, $b);
		
		}
		
		elseif ($op == '1/x'){
		
			echo "<br>1/$a = " . inverso1($a);
			echo "<br>1/$b = " . inverso2($b);
		
		}
		
		elseif ($op == '^'){
		
			echo "<br>$a ^ $b = " . potencia($a, $b);
		
		}
		
		elseif ($op == '√'){
		
			echo "<br>√$a = " . raizQ1($a);
			echo "<br>√$b = " . raizQ2($b);
		
		}

?>