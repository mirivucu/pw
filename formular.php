<?php
require_once('functions.php');
security_check();
if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$like_design = $_POST['like_design'] == 'yes' ? 'yes' : 'no';
	$like_information= $_POST['like_information'] == 'yes' ? 'yes' : 'no';
	$like_concept = $_POST['like_concept'] == 'yes' ? 'yes' : 'no';
	$score = $_POST['score'];
	$comments = $_POST['comments'];

	$message = "Nume: $name
Email: $email

Apreciaza designul: $like_design
Apreciaza informatia: $like_information
Apreciaza conceptul: $like_concept

Score: $score

Comments:
$comments";

	if ( save_message( "$name <$email>", $like_design, $likes_infrmation, $like_concept, $score, $comments ) ) {
		$message = "<div class='success message'>Mesajul a fost trimis cu success</div>";
	} else {
		$message = "<div class='fail message'>Mesajul nu a putut fi trimis (" . mysql_error(). ")</div>";
	}
}

?>
<div class="row">
<div class="twelve columns"><?php echo @$message; ?></div>
</div>
<form method="post">
	<div class="row">
    <div class="six columns">
      <label for="name">Numele dvs</label>
      <input class="u-full-width" name="name" id="name" type="text">
	</div>
    <div class="six columns">
      <label for="email">Adresa de email</label>
      <input class="u-full-width" name="email" id="email" type="email">
	</div>
	</div>

	<div class="row">
    <div class="six columns">
	  <label>Ce v-a placut in acest website?</label>
	  <label class="cb"><input type="checkbox" name="like_design" value="yes" id="like_design"><span> Designul</span></input></label>
	  <label class="cb"><input type="checkbox" name="like_information" value="yes" id="like_information"><span> Informatia</span></input></label>
	  <label class="cb"><input type="checkbox" name="like_concept" value="yes" id="like_concept"><span> Conceptul</span></input></label>
	</div>
	<div class="six columns">
	  <label for="score">Nota website</label>
	  <select name="score" id="score" class="u-full-width">
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
	   </select>
	</div>
	</div>

	<div class="row">
	  <div class="twelve columns">
	  <label for="comments">Comentarii pentru imbunatatirea website-ului</label>
	  <textarea name="comments" id="comments" class="u-full-width"></textarea>

	  </div>
	</div>
	<div class="row">
	  <div class="twelve columns">
		<input class="button-primary" name="submit" type="submit" value="Trimite">
		<input name="reset" type="reset" value="Reset">
	  </div>
	</div>
</form>
