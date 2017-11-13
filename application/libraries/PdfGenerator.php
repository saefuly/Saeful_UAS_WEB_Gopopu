<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/dompdf/dompdf/autoload.inc.php");
use Dompdf\Dompdf;

class Pdfgenerator {

  public function generate($html, $filename='')
  {
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => 0));
    } else {
        return $dompdf->output();
    }
  }
}