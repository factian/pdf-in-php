<?php
require('fpdf/fpdf.php');
include('config.php');

// Create an instance of FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$templateContent = '';

$result = mysqli_query($con, "SELECT id, drId, message FROM template");
while ($row = mysqli_fetch_array($result)) {
    $template = $row['message'];
    $PName = "John Doe";
    $Address = "123 Main Street";
    $template = str_replace("|PName|", $PName, $template);
    $template = str_replace("|Address|", $Address, $template);
    
    // Accumulate the template content
    $templateContent .= $template . "\n";
}

// Output the accumulated template content in the PDF
$pdf->MultiCell(0, 10, $templateContent);

// Generate and output the PDF
$pdf->Output();

// Close the connection
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ckeditor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>
<body>
<!-- Your HTML content here -->
</body>
</html>

 
 <?php
    // require('fpdf/fpdf.php');
    // include('config.php');
?>
<!--<html>  
<head>  
    <title>Ckeditor</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
</head>
<body>
<?php 
   
    // $result = mysqli_query($con, "SELECT id, drId, message FROM template" );
    // while ($row = mysqli_fetch_array($result)) 
    // {

    //     //echo "ID:" .$row[0]." drId:".$row[1]." message: ". str_replace("|PName|", "Patient Name here", $row[2]). str_replace("|Address|", "Address here", $row[2]) ."<br>";
    //     $template = $row[2];
    //     $PName = "John Doe";
    //     $Address = "123 Main Street";
    //     $template = str_replace("|PName|", $PName, $template);
    //     $template = str_replace("|Address|", $Address, $template);
    //     //echo $template;

        
    // }
    //     $pdf=new FPDF();
    //     $pdf->AddPage();
    //     $pdf->SetFont('Arial','B',16);
    //     $pdf->Cell(40,10,$template);
    //     $pdf->Output();   
    // //close the connection
    //     mysqli_close($con);
  ?>
<body>
</body>
</html> -->