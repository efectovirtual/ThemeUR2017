<?php

	function getFieldsL($gf){

		$f_text = $gf;
		$fields_text = explode(PHP_EOL, $f_text);

		$tf = count($fields_text);

		for ($i=0; $i < $tf; $i++) {
			$sfield .= '<li>'.$fields_text[$i].'</li>';
		}

		return $sfield;
	}

  function sumaCreditos($gf){
    $fields_text = explode(PHP_EOL, $gf);

    for ($i=0; $i < count($fields_text); $i++) {
      $sfield += $fields_text[$i];
    }
    return $sfield;
  }

 ?>


<div class="row">


<?php  $i = 1;  while (get_field('semestre_'.$i) != '' ) {?>

  <div class="columns large-6">
    <div class="row contenido-semestre-programa">
      <div class="columns small-9">

        <div class="semestre-info">
          <p class="numerosemestre"><?php print $i; ?></p>
          <p class="nsemestre">Semestre</p>
        </div>

        <div class="programas">
          <ul>
            <?php echo getFieldsL(get_field('semestre_'.$i));?>
          </ul>
        </div>

        <div class="total-creditos">
          <p>TOTAL CRÉDITOS</p>
        </div>

      </div>
      <div class="columns small-3">
        <div class="credito-info">
          <p class="numerocredito">#</p>
          <p class="ncredito">Créditos</p>
        </div>

        <div class="programas-creditos">
          <ul>
            <?php echo getFieldsL(get_field('semestre_'.$i.'_creditos'));?>
          </ul>
        </div>

        <div class="numero-creditos">
          <p><?php echo sumaCreditos(get_field('semestre_'.$i.'_creditos'));?>
        </div>
      </div>
    </div>
  </div>

	<?php if ($i%2 == 0): ?>
		<div class="clear"></div>
	<?php endif; ?>

<?php  $i++;  } ?>

</div>
