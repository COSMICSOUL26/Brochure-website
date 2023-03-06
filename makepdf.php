<?php

require_once __DIR__ . '/vendor/autoload.php';


// grab variables

$sname = $_POST['sname'];
$tagline = $_POST['tagline'];
$benifits = $_POST['benifits'];
$intro = $_POST['intro'];
$testimonial1 = $_POST['testimonial1'];
$testimonial2 = $_POST['testimonial2'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$url = $_POST['url'];
$remarks = $_POST['remarks'];
$punchline1 = $_POST['punchline1'];
$punchline2 = $_POST['punchline2'];

// create new pdf instance

$mpdf = new \Mpdf\Mpdf();

// create pdf

$data = "";



// add data
$data .= '<h1 style="color:blue"; "font-family: Impact, Haettenschweiler, Arial Narrow Bold, sans-serif";"justify-content: center;">'. $sname . '</h1><br><hr>';
$data .= '<h2 style="color:red";"font-family: Franklin Gothic Medium, Arial Narrow, Arial, sans-serif;">' .$tagline.'</h2><br><br><br>';

if ($benifits) {
    $data .= '<strong>Our major benifits: </strong>' . $benifits . '<br/><br>';
}
if ($intro) {
    $data .= '<strong>A brief introduction: </strong>' . $intro . '<br/><br>';

}



if ($testimonial1) {
    $data .= '<strong>What our customers say: </strong>' . $testimonial1 . '<br/><br>';
}
if ($testimonial2) {
    $data .= '<strong>What our customers say: </strong>' . $testimonial2 . '<br/><br>';
}

$data .= '<strong>Our Email: </strong>' . $email . '<br/><br>';
$data .= '<strong>Contact us on: </strong>' . $number . '<br/><br>';
$data .= '<strong>We are at: </strong>' . $address . '<br/><br>';
$data .= '<strong>Reach us at:  </strong>' . $url . '<br/><br>';
$data .= '<strong>Remarks: </strong>' . $remarks . '<br/><br>';
$data .= '<strong>Punchline: </strong>' . $punchline1 . '<br/><br>';
$data .= '<strong>Punchline: </strong>' . $punchline2 . '<br/><br>';



// write pdf

$mpdf->WriteHTML($data);

//output to browser

$mpdf->Output('brochure.pdf', 'D');
