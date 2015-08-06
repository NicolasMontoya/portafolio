<?php
/**
* 
*/
class ModelCB 
{
	protected $numero;
	protected $base;
	protected $conversiones;
	function __construct($num,$base)
	{
		$this->numero = $num;
		$this->base = $base;
	}
	public function conversor(){
		if ($this->base == 2) {

			$lenght = strlen($this->numero)-1;
			$temp = 0;


			for ($i=0; $i <= $lenght ; $i++) { 
				if ($this->numero[$i]==',') {

					$this->conversiones[0]=0;
					$p=$i;
					$temp;
					$tem;

					for ($j=0; $i >=0 ; $j++) { 
						$i--;
						$this->conversiones[0]=$this->conversiones[0]+(($this->numero[$i])*(pow(2,$j)));
					}
					for ($k=-1; $p <= $lenght ; $k--) { 
						$p++;
						$this->conversiones[0]=$this->conversiones[0]+(($this->numero[$p])*(pow(2,$k)));
					}
					

					return $this->conversiones;
				}
				$this->conversiones[0]=$this->conversiones[0]+(($this->numero[$lenght-$i])*(pow(2,$i)));
				$temp=$this->conversiones[0];
					
			}
			for ($l=0; $temp < 8 ; $l++) { 

						$tem[$l]=$temp%8;
						$temp=floor($temp/8);
						if (floor($temp/8) < 8) {
							$tem[$l+1]=$temp;
						}
						
					}
					for ($t=0; t <= strlen($tem) ; $t++) { 
						$arr[$t]=$tem[strlen($tem)-$t];
					}
					$this->conversiones[1]=$arr;


			return $this->conversiones;
		}
	}
}
?>