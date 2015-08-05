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
				$this->conversiones=$this->conversiones+(($this->numero[$lenght-$i])*(pow(2,$i)));
			}

			return $this->conversiones;
		}
	}
}
?>