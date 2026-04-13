<?php 
include 'db.php';
require 'vendor/autoload.php';

$result = $conn->query("select * from emp");
$pdf = new TCPDF();
$pdf->Addpage();

$pdf->setfont('times','I',12);
$pdf->Cell(0,8,'emp',0,1,'C');

$html='<table style= "background-color:lightpink;"border="1",cellpadding="5">
        <tr>
            <td>Id</td>
            <td>name</td>
            <td>salary</td>
          
        </tr>';
        while($row=$result->fetch_assoc()){
            $html .='<tr>
               
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['salary'].'</td>
           
        </tr>';
        }
        $html .='</table>';

        $pdf->writeHtml($html,true,false,true,false,'');
        $pdf->output('emp.pdf','D');
  
?> 
