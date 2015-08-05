<?php
require 'models/ConversorBase.php';
require 'conversor/header.php';

?>

	<style type="text/css">
	p{
		font-size: 2em;
		margin-left: 50px;
	}
	h1{
		font-size: 2em; 
	}
	</style>
	<section id="about">
	<div class="container">
			<div class="modal-body">
				<div class="row">
                <div class="col-sm-4">
                    <span >Conversion a decimal: </span>
                    <p><?php $modelo=new ModelCB($_POST['numero'],2);
	$datos=$modelo->conversor();
	echo $datos;?></p>
                </div>
            </div>
			</div>
	</div>

</section>

<?php
require 'templates/footer.php';
?>