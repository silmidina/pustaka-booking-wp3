<?php
defined('BASEPATH') or exit('No direct script access allowed');

require 'vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

class Pdf
{
  public function create($html, $filename, $paper = 'A4', $orientation = 'portrait')
  {
    $options = new Options();
    $options->set('isRemoteEnabled', true);
    $dompdf = new Dompdf($options);

    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    $dompdf->stream($filename, array('Attachment' => 0));
  }
}
