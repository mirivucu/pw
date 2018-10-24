<?php
require_once('functions.php');
security_check();
?>
<div class="row">
<div class="twelve columns"><?php echo @$message; ?></div>
</div>

<form method="post" id="quiz">
	<div class="row">
	<div class="twelve columns">
	<ol class="questions">

<li>
<?php
quiz_question_markup(
	'Cati ani a petrecut ca jucator Emilio Butragueno la Real Madrid?',
	array(
		'12' => false,
		'15' => false,
		'14' => true,
		'16' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Cine este singurul jucator din istorie cu 6 trofee ale Cupei Europene?',
	array(
		'Ferenc Puskas' => false,
		'Alfredo Di Stefano' => false,
		'Paco Gento' => true,
		'Amancio Amaro' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'In ce an a semnat Sergio Ramos cu echipa de pe Concha Espina?',
	array(
		'2006' => false,
		'2004' => false,
		'2005' => true,
		'2003' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Care din urmatorii jucatori nu a facut parte din "Quinta del Butre"?',
	array(
		'Michel' => false,
		'Hugo Sanchez' => true,
		'Manolo Sanchis' => false,
		'Martin Vazquez' => false
	)
);
?>
</li>
<li>
<?php
quiz_question_markup(
	'Cine a devenit presedinte la Real Madrid in anul 1945?',
	array(
		'Santiago Bernabeu Yeste' => true,
		'Adolfo Melendez' => false,
		'Regele Alfonso al XIII-lea al Spaniei' => false,
		'Lorenzo Sanz' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Data in care a fost infiintat clubul Real Madrid:',
	array(
		'11 aprilie 1902' => false,
		'6 martie 1902' => true,
		'9 februarie 1902' => false,
		'7 ianuarie 1902' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Cine a fost golgheterul lui Real Madrid in sezonul 1996-1997?',
	array(
		'Ivan Zamorano' => false,
		'Raul Gonzalez' => false,
		'Davor Suker' => true,
		'Michael Laudrup' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Dupa spusele lui Johann Crujff si Pele, cine este cel mai bun jucator de fotbal al tuturor timpurilor?',
	array(
		'Alfredo di Stefano' => true,
		'Raul Gonzalez' => false,
		'Zinedine Zidane' => false,
		'Ferenc Puskas' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Cine este fostul jucator al Realului cu 10 campionate ale Spaniei castigate si actual component in stafful echipei cu diploma de doctor?',
	array(
		'Jose Miguel Martin del Campo "Michel"' => false,
		'Jose Martinez Sanchez Pirri' => true,
		'Jose Antonio Camacho' => false,
		'Rafa Martin Vasquez' => false
	)
);
?>
</li>

<li>
<?php
quiz_question_markup(
	'Cine este cel mai bun marcator al tuturor timpurilor pentru Real Madrid?',
	array(
		'Ferenc Puskas' => false,
		'Raul Gonzalez' => false,
		'Alfredo di Stefano' => false,
		'Cristiano Ronaldo' => true
	)
);
?>
</li>

	</ol>
	</div>
	</div>

	<div class="row">
	  <div class="twelve columns">
		<input class="button-primary" name="submit" type="submit" value="Verifica raspunsurile">
	  </div>
	</div>

	<div class="row">
	  <div class="twelve columns">
		  <div class="message" id="answers"></div>
	  </div>
	</div>
</form>
