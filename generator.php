<?php

// include the TCPDF library if available
if (@file_exists(dirname( __FILE__ ) . '/tcpdf/tcpdf_import.php')) {
	require_once(dirname(__FILE__) . '/tcpdf/tcpdf_import.php');
} else {
	echo '<p class="error">Παρακαλούμε εγκαταστήστε το <a href="http://www.tcpdf.org/">TCPDF</a> στο φάκελο του project σας.</p>';
	return;
}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('ΕΕΛ/ΛΑΚ');
$pdf->SetTitle('Demo δημιουργίας PDF από HTML φόρμα');
$pdf->SetSubject('PDF από HTML φόρμα demo');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default font subsetting mode
$pdf->setFontSubsetting(true);

// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$pdf->SetFont('dejavusans', '', 12, '', true);

// Add a page
$pdf->AddPage();

// the form input data
$firstName  = $_POST['inputFirstName'];
$lastName   = $_POST['inputLastName'];
$email      = $_POST['inputEmail'];
$department = $_POST['inputDepartment'];
$request    = $_POST['inputRequest'];

// The HTML Content with the form data
$html = <<<_EOM
<html lang="el">
	<body>
		<h1 style="text-align:center;font-size:20px;">Demo PDF από HTML φόρμα &mdash; ΕΕΛ/ΛΑΚ</h1>

		<p><strong>Ονοματεπώνυμο:</strong> $firstName $lastName</p>
		<p><strong>E-mail:</strong> $email</p>
		<p><strong>Υπηρεσία:</strong> $department</p>
		<p><strong>Αίτημα:</strong><br /><br />$request</p>
	</body>
</html>
_EOM;

// Print text using writeHTMLCell()
$pdf->writeHTML($html, true, false, false, false, '');

// ---------------------------------------------------------

// Close and output PDF document
// replace 'I' with 'D' to force document download
$pdf->Output('demo.pdf', 'I');
?>
