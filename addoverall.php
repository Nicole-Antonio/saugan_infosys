<?php
session_start();
include "connect.php";

require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Xls;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

if(isset($_POST['insertdata']))
{
	$filename = $_FILES['import_file']['name'];
	$file_ext = pathinfo($filename, PATHINFO_EXTENSION);

	$allowed_ext = ['xls','csv','xlsx'];

	if(in_array($file_ext, $allowed_ext))
	{
		$inputFileNamePath = $_FILES['import_file']['tmp_name'];
		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
		$data = $spreadsheet ->getActiveSheet()->toArray();

		$count = "0";
		foreach($data as $row)
		{
			if($count >0)
			{
				$subject = $row['0'];
				$first_qtr = $row['1'];
				$second_qtr = $row['2'];
				$third_qtr = $row['3'];
				$fourth_qtr = $row['4'];
				$final_grade = $row['5'];
				$remarks = $row['6'];

 
				$query = "INSERT INTO overall (`subject`,`first_qtr`,`second_qtr`,`third_qtr`,`fourth_qtr`,`final_grade`,`remarks`) VALUES ('$subject','$first_qtr','$second_qtr','$third_qtr','$fourth_qtr','$final_grade','$remarks')";
				$result = mysqli_query($con, $query);
				$msg = true;
			}
			else
			{
				$count = "1";
			}
		}
		$_SESSION['status'] = "Imported succesfully";
		header('Location: overall.php');
		exit(0);

		 
	}
	else
	{
		$_SESSION['status'] = "Invalid File";
		header('Location: overall.php');
		exit(0);
	}
}



if(isset($_POST['export_excel_btn']))
{
    $file_ext_name = $_POST['export_file_type'];
    $fileName = "overall-grades-sheet";

    $overall = "SELECT * FROM overall";
    $query_run = mysqli_query($con, $overall);

    if(mysqli_num_rows($query_run) > 0)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Subject');
        $sheet->setCellValue('B1', '1st Quarter');
        $sheet->setCellValue('C1', '2nd Quarter');
        $sheet->setCellValue('D1', '3rd Quarter');
        $sheet->setCellValue('E1', '4th Quarter');
        $sheet->setCellValue('F1', 'Final Grade');
        $sheet->setCellValue('G1', 'Remarks');

        $rowCount = 2;
        foreach($query_run as $data)
        {
            $sheet->setCellValue('A'.$rowCount, $data['subject']);
            $sheet->setCellValue('B'.$rowCount, $data['first_qtr']);
            $sheet->setCellValue('C'.$rowCount, $data['second_qtr']);
            $sheet->setCellValue('D'.$rowCount, $data['third_qtr']);
            $sheet->setCellValue('E'.$rowCount, $data['fourth_qtr']);
            $sheet->setCellValue('F'.$rowCount, $data['final_grade']);
            $sheet->setCellValue('G'.$rowCount, $data['remarks']);
            $rowCount++;
        }

        if($file_ext_name == 'xlsx')
        {
            $writer = new Xlsx($spreadsheet);
            $final_filename = $fileName.'.xlsx';
        }
        elseif($file_ext_name == 'xls')
        {
            $writer = new Xls($spreadsheet);
            $final_filename = $fileName.'.xls';
        }
        elseif($file_ext_name == 'csv')
        {
            $writer = new Csv($spreadsheet);
            $final_filename = $fileName.'.csv';
        }

        // $writer->save($final_filename);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attactment; filename="'.urlencode($final_filename).'"');
        $writer->save('php://output');

    }
    else
    {
        $_SESSION['message'] = "No Record Found";
        header('Location: overall.php');
        exit(0);
    }
}
?>