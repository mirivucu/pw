<?php
function endswith($string, $test) {
	$strlen = strlen($string);
	$testlen = strlen($test);
	if ($testlen > $strlen) return false;
	return substr_compare($string, $test, $strlen - $testlen, $testlen) === 0;
}

function menu_page( $title, $link ) {
	$active = ( endswith( $_SERVER['REQUEST_URI'], $link ) ? 'active' : '');
	echo "<a href='$link' title='$title' class='$active'>$title</a>";
}

function security_check() {
	if ( ! defined('MAIN_PAGE') ) die('Cannot access this page directly');
}

function quiz_question_markup($question, $answers) {
	global $_question;
	$_question++;
	$cnt = 0;

	echo "<p class='question'>$question</p>";
	foreach( $answers as $text => $correct ) {
		$cnt++;
		$_correct = $correct ? 'yes' : 'no';
		$_correct_msg = $correct ? '<span class="tip">(raspuns corect)</span>' : '';
		echo "
		  <label for='q$_question-$cnt'>
			<input type='radio' name='q$_question' id='q$_question-$cnt' value='$cnt' data-correct='$_correct'>
			<span>$text</span>
			$_correct_msg
		  </label>
		";
	}
}

function save_message($from, $likes_design, $likes_information, $likes_concept, $score, $comments) {
	if( ! mysql_connect('info.tm.edu.ro:3360','gturcut','bernabeu') ) return false;
	if( ! mysql_select_db('gturcut') ) return false;

	# sanitize input data
	$from = mysql_escape_string($from);
    $likes_design = ($likes_design == 'yes' ? 'yes' : 'no');
    $likes_information = ($likes_information == 'yes' ? 'yes' : 'no');
    $likes_concept = ($likes_concept == 'yes' ? 'yes' : 'no');
	$score = (int)$score;
	$comments= mysql_escape_string($comments);
	
	return mysql_query( sprintf("INSERT INTO atestat_survey VALUES (0, '%s', '%s', '%s', '%s', %d, '%s')", $from, $likes_design, $likes_information, $likes_concept, $score, $comments) );
}
