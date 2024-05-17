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
				$stud_id = $row['0'];
				$subject = $row['1'];
				$score = $row['2'];
				$items = $row['3'];
				$quiz_no = $row['4'];
 
				$query = "INSERT INTO quizzes (`stud_id`,`subject`,`score`,`items`,`quiz_no`) VALUES ('$stud_id','$subject','$score','$items','$quiz_no')";
				$result = mysqli_query($con, $query);
				$msg = true;
			}
			else
			{
				$count = "1";
			}
		}
		$_SESSION['status'] = " Data Imported succesfully";
		header('Location: allquizzes.php');
		exit(0);

		 
	}
	else
	{
		$_SESSION['status'] = "Invalid File";
		header('Location: allquizzes.php');
		exit(0);
	}
}



if(isset($_POST['export_excel_btn']))
{
    $file_ext_name = $_POST['export_file_type'];
    $fileName = "quizzes-sheet";

    $quizzes = "SELECT * FROM quizzes";
    $query_run = mysqli_query($con, $quizzes);

    if(mysqli_num_rows($query_run) > 0)
    {
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Student ID');
        $sheet->setCellValue('B1', 'Subject');
        $sheet->setCellValue('C1', 'Score');
        $sheet->setCellValue('D1', 'No. of Items');
        $sheet->setCellValue('E1', 'Quiz No.');

        $rowCount = 2;
        foreach($query_run as $data)
        {
            $sheet->setCellValue('A'.$rowCount, $data['stud_id']);
            $sheet->setCellValue('B'.$rowCount, $data['subject']);
            $sheet->setCellValue('C'.$rowCount, $data['score']);
            $sheet->setCellValue('D'.$rowCount, $data['items']);
            $sheet->setCellValue('E'.$rowCount, $data['quiz_no']);
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
        header('Location: allquizzes.php');
        exit(0);
    }
}
?>