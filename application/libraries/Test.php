<?php 
/**
 * 
 */
require 'Wkhtmlpdf.php';
class Test{
	
        public function generate($html)
		  {
		    $wkhtmltopdf = new Wkhtmltopdf();
	        $wkhtmltopdf->setTitle("Title");
	        $wkhtmltopdf->setHtml($html);
	        $wkhtmltopdf->output(Wkhtmltopdf::MODE_DOWNLOAD, "file.pdf");
		  }
    
}
 ?>