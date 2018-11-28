<?php

/* First check you have docx file. */

require "../Classes/Resume.php";

$resume = new Resume();
$file = 'docxfile.docx';
$data = $resume->readDocx($file);
echo $data;
