<?php
	session_start();
	include("db.php"); // we include the file with the database connexion

	if(isset($_POST['login']) AND isset($_POST['email']) AND isset($_POST['password']) AND isset($_POST['password_verify']))
	{
	// Security
		$login = addslashes(htmlspecialchars(htmlentities(trim($_POST['login']))));
		$email = addslashes(htmlspecialchars(htmlentities(trim($_POST['email']))));
		$password = $_POST['password'];
		$passwordConfirm = $_POST['password_verify'];
		
		if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $email)) {// we check if the email has a valid format.
			if($password == $passwordConfirm) {// we check that the two passwords are identical.
				$req = $db->query("SELECT login FROM members WHERE login = '$login'");
				// We select the field (login) in our table users where login is equal to the login field entered by the user
				$count = $req->rowCount(); // on rowCount () the query, so rowcount will return a value if it finds.
				if($count == 0){// if he does not find a value, then it's good
					$req = $db->prepare("INSERT INTO members(login, password, email) VALUES(:login, :password, :email)");
					$req->execute(array(
						'login' => $login,
						'password' => password_hash($password, PASSWORD_DEFAULT),
						'email' => $email
					));
					header('Location: connexion.php');
				}
				else{
					echo 'This login is already used.';
				}
			}
			else{
				echo  'Your passwords are not the same.';
			}
		}
		else{
			echo  'These emails address are not the same.';
		}
	}
?>
 
<form name=form_susbcribe action="inscription.php" method="post">
    <div class="form-group">
        <label for="login">Your login</label>
        <input type="text" name="login" id="login" class="form-control">
    </div>
    <div class="form-group">
        <label for="email"> Your e-mail address
        </label>
        <input type="text" name="email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password"> Your password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_verify">Confirm your password</label>
        <input type="password" name="password_verify" id="password_verify" class="form-control">
    </div>
    <button type="submit" class="btn btn-default btn-lg btn-block">Subscribe</button>
</form>

<form name=form_login action="connexion.php" method="post">
    <button type="submit" class="btn btn-default btn-lg btn-block">Login</button>
</form>

tadatatatatatata
