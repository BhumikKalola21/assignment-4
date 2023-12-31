<?php

require_once 'vendor/autoload.php';
require_once 'db.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$data = [];
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

$spreadsheet->getActiveSheet()->fromArray($data, null, 'A1');

// Provide the absolute path for saving the file
$exportFilePath = '/opt/lampp/htdocs/assignmnet-4/answer-5/data_exported.xlsx';

$writer = new Xlsx($spreadsheet);

// Save the file with the absolute path
$writer->save($exportFilePath);

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="data_exported.xlsx"');
header('Cache-Control: max-age=0');

// Read and output the file content
readfile($exportFilePath);

// Delete the file after outputting
unlink($exportFilePath);

echo 'Data exported to Excel successfully.';
?>
