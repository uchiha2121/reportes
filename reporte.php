<?php
//require('config.php');
ob_start();
?>

<style>
<!--

-->
</style>

<page>

<page_header>	<h1>REPUBLICA DE BOLIVARIANA DE VENEZUELA</h1> </page_header>

   
   <page_footer><h3>esto es un footer</h3></page_footer>

<br><br><br><br><p>hola esto es un <strong>texto normalito</strong></p>
<p><b>hola mundo</b></p>

</page>

<?php
$content =ob_get_clean();
require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P', 'A4' ,'es', 'UTF-8');
$pdf->writeHTML($content);
//$pdf->pdf->IncludeJs('print(true)');
$pdf->Output('reportee.pdf');

?>