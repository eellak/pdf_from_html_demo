<!DOCTYPE html>
<html lang="el">
<head>
	<meta charset="UTF-8">
	<title>Demo δημιουργίας PDF από φόρμα HTML &mdash; ΕΕΛ/ΛΑΚ</title>
	<!-- bootstrap for quick 'n' dirty styling -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<style>
		.center {
			text-align: center;
		}
		h5 {
			margin-bottom: 25px;
			line-height: 20px;
		}
		.inputForm {
			max-width: 400px;
			margin: 40px auto;
		}
		.form-control {
			margin: 10px 0;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="center">Demo δημιουργίας PDF από φόρμα HTML</h1>
		<h2 class="center"><a href="https://ellak.gr" target="_blank">ΕΕΛ/ΛΑΚ</a></h2>

		<form action="generator.php" method="post" class="inputForm">
			<h5 class="center">Παρακαλούμε συμπληρώστε την παρακάτω φόρμα για να δημιουργηθεί PDF με τα στοιχεία και το αίτημα σας.</h5>

			<label for="inputFirstName" class="sr-only">Όνομα</label>
			<input type="text" name="inputFirstName" class="form-control" placeholder="Όνομα" required autofocus>
			<label for="inputLastName" class="sr-only">Επώνυμο</label>
			<input type="text" name="inputLastName" class="form-control" placeholder="Επώνυμο" required>

			<label for="inputEmail" class="sr-only">E-mail</label>
			<input type="email" name="inputEmail" class="form-control" placeholder="E-mail" required>
			<label for="inputDepartment" class="sr-only">Υπηρεσία</label>
			<input type="text" name="inputDepartment" class="form-control" placeholder="Υπηρεσία" required>
			<label form="inputRequest" class="sr-only">Αίτημα</label>
			<textarea name="inputRequest" class="form-control" placeholder="Συμπληρώστε το αίτημα σας" rows=10></textarea>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Υποβολή</button>
		</form>

		<p class="center">Μπορείτε να βρείτε τον πηγαίο κώδικα της φόρμας, <a href="https://github.com/eellak/pdf_from_html_demo" target="_blank">εδώ</a>.</p>
	</div><!-- .container -->
</body>
</html>
