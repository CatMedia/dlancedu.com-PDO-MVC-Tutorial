<?php

$this->_pdf->AddPage();
$this->_pdf->SetFont('Arial','B',16);
$this->_pdf->Cell(40,10, utf8_decode('PDF2 '. $nombre . ' ' . $apellido));
$this->_pdf->Output();

?>