<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once("./vendor/autoload.php");
use Dompdf\Dompdf;

class Pdf {

  public function generate($html, $filename='', $stream=TRUE)
  {
    $dompdf = new DOMPDF();
    $dompdf->set_base_path("/assets/css/");
    $dompdf->load_html($html);
    $dompdf->render();
    $dompdf->stream($filename.'.pdf',array("Attachment"=>0));
  }
}