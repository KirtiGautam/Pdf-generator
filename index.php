<?php

/**
 * Simply import all pages and different bounding boxes from different PDF documents.
 */

use setasign\Fpdi;
use setasign\fpdf;

require_once 'vendor/autoload.php';
require_once 'vendor/setasign/fpdf/fpdf.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
set_time_limit(2);
date_default_timezone_set('UTC');
$start = microtime(true);

$pdf = new Fpdi\Fpdi();
//$pdf = new Fpdi\TcpdfFpdi('L', 'mm', 'A3');

if ($pdf instanceof \TCPDF) {
    $pdf->SetProtection(['print'], '', 'owner');
    $pdf->setPrintHeader(false);
    $pdf->setPrintFooter(false);
}



// $files = [
//         'Bill Facility.pdf',
// 		'AI VOICE ASSISTANT.pdf',
// ];

// foreach ($files as $file) {
//     $pageCount = $pdf->setSourceFile($file);

//     for ($pageNo = 1; $pageNo <= $pageCount; $pageNo++) {
//         $pdf->AddPage();
//         $pageId = $pdf->importPage($pageNo, '/MediaBox');
//         //$pageId = $pdf->importPage($pageNo, Fpdi\PdfReader\PageBoundaries::ART_BOX);
//         $s = $pdf->useTemplate($pageId, 10, 10, 200);
//     }
// }
//$pageCount = $pdf->setSourceFile($file);


//Add page
$pdf->AddPage();
$width = $pdf->getPageWidth();
$height = $pdf->getPageHeight();

//Add header, footer
$pdf->Image('images\watermark.png', 17.5, 50, $width-35, $height-90);
$pdf->Image('images\header.png', 17.5, 10, $width - 35);
$pdf->Image('images\footer.png', 12.5, $height-40, $width - 25);
$pdf->SetLeftMargin(15);
$pdf->SetRightMargin(13);
//Add Border
$pdf->Rect(10, 10, $width - 20, $height - 20);

//Writing text
$pdf->SetFont('Times', '', 11);
$pdf->SetXY(15, 60);
$pdf->Write(4.5, 'Ref.No. PTP/20');

$pdf->SetXY($width - 55, 60);
$pdf->Write(4.5, 'Dated: ' . date("d/m/Y"));

$pdf->SetXY(15, 70);
$pdf->Write(4.5, 'To');

////To-do :Company Name form DB, details from db
$pdf->SetXY(15, 75);
$pdf->Write(4.5, 'Company Name');

$pdf->SetXY(15, 85);
$pdf->SetFont('Times', 'B', 10.6);
$pdf->Write(4.5, "SUBJECT: REQUEST FOR INDUSTRIAL TRAINING OF B.TECH 7th/8th SEMESTER STUDENTS\n\n");



$pdf->SetFont('Times', '', 11);
$pdf->Write(4.5, "Sir,\n\nGreetings from GNDEC, Ludhiana.\n\nGuru Nanak Dev Engineering College has emerged as one of the most prestigious engineering institute of North India over the 62 years of its inception and is conducting B.Tech. in seven disciplines as well as M.Tech.,MBA and PhD. for meeting the research requirement of technical field.");
$pdf->Write(4.5, "\n\nSince practical training is equal in importance to theoretical foundation, the course curriculum is so designed that the students get exposure to practical aspects of their respective engineering branch. We are in a process of enrolling the final year students of our institute to various Industrial Organisations for");
$pdf->SetFont('Times', 'B', 11);
$pdf->Write(4.5, " INDUSTRIAL TRAINING (6 MONTHS) ");
$pdf->SetFont('Times', '', 11);
$pdf->Write(4.5, "which is an essential component of their four year B.Tech programme.\n\n");
$pdf->SetFont('Times', 'U', 11);
$pdf->Write(4.5, "The programme will be as under:\n\n");

$pdf->SetFont('Times', '', 11);

$pdf->Write(4.5, "  ".chr(149)."    To get familiar with the setup and working of the organisation.\n  ".chr(149)."    Preparation and submission of synopsis.Working on the given project- provided by the company.\n  ".chr(149)."    Submission of Mid Term and Final Report.\n  ".chr(149)."    Submission of Daily Diary at the end of training maintained & checked by the company representative.\n\n");

$pdf->SetFont('Times', 'B', 11);


$pdf->Write(4.5,"We recommend our graduating student Mr./Ms. Kirti Gautam, Roll no. 1706232 of B.Tech (Branch) CSE, Email Id gautamkirti8c@gmail.com, Phone no. 883786232 to undergo Industrial training in your esteemed organization starting from March 2020 .\n");
$pdf->SetFont('Times', '', 9);
$pdf->Write(4,"(* Exact date of joining may be intimated at a later stage. An early and favourable response will be highly appreciated.)");

$pdf->SetFont('Times', '', 11);
$pdf->Write(4.5,"\n\nWe would highly appreciate if the student can be accommodated for the training programme. Our students are sincere and hard working and we are sure that they will put in their best efforts during the training program. Looking for the confirmation from your side.\n\nYours Sincerely");
$pdf->Write(4.5,"\n\n\nProf. G.S. Sodhi\nTraining & Placement Officer");








$pdf->output();
