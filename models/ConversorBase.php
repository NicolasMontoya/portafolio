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
			for ($i=0; $i <= $lenght ; $i++) { 
				if ($this->numero[$i]==',') {
					$this->conversiones[0]=0;
					$p=$i;
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
			}


			return $this->conversiones;
		}
	}
}
?>