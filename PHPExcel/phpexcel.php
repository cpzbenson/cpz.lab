<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>登入</title>
		<link rel="stylesheet" type="text/css" href="styles/login_regi.css" />
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script>
			$(document).ready(function(){
				//$('body').css('color', 'red');
            });
		</script>
		<style type="text/css" >
		</style>
	</head>
	
	<?
		//Include class
		require_once('PHPExcel/Classes/PHPExcel.php');
		require_once('PHPExcel/Classes/PHPExcel/Writer/Excel2007.php');
		$objPHPExcel = new PHPExcel();

		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw");
		$objPHPExcel->getProperties()->setLastModifiedBy("Maarten Balliauw");
		$objPHPExcel->getProperties()->setTitle("Office 2007 XLSX Test Document");
		$objPHPExcel->getProperties()->setSubject("Office 2007 XLSX Test Document");
		$objPHPExcel->getProperties()->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.");
		$objPHPExcel->getProperties()->setKeywords("office 2007 openxml php");
		$objPHPExcel->getProperties()->setCategory("Test result file");

	
		$objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader('&C&HPlease treat this document as confidential!');
        $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter('&L&B' . $objPHPExcel->getProperties()->getTitle() . '&RPage &P of &N');
	
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'Hello');//可以指定位置
		$objPHPExcel->getActiveSheet()->setCellValue('A100', 'Hello');//可以指定位置
		$objPHPExcel->getActiveSheet()->setCellValue('A150', 'Hello');//可以指定位置
		$objPHPExcel->getActiveSheet()->setTitle('Simple');

		//Create a new worksheet, after the default sheet 創建新的工作標籤
        //$objPHPExcel->createSheet();
        //$objPHPExcel->setActiveSheetIndex(1);
        //$objPHPExcel->getActiveSheet()->setTitle('Simple2');


		//Add a hyperlink to the sheet 添加鏈接
        $objPHPExcel->getActiveSheet()->setCellValue('E26', 'www.phpexcel.net');
        //$objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setUrl('http://www.phpexcel.net');
        $objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setUrl("sheet://'Simple'!A9");
        //$objPHPExcel->getActiveSheet()->getCell('E26')->getHyperlink()->setTooltip('Navigate to website');
        //$objPHPExcel->getActiveSheet()->getStyle('E26')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);



		//Add a drawing to the worksheet 添加圖片
        $objDrawing = new PHPExcel_Worksheet_Drawing();
        $objDrawing->setName('Logo');
        $objDrawing->setDescription('Logo');
        $objDrawing->setPath('./fb.jpg');
        $objDrawing->setHeight(136);
        $objDrawing->setCoordinates('B15');
        $objDrawing->setOffsetX(110);
        $objDrawing->setRotation(25);
        $objDrawing->getShadow()->setVisible(true);
        $objDrawing->getShadow()->setDirection(45);
        $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());
		

		require_once('PHPExcel/Classes/PHPExcel/Writer/Excel5.php');
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);
        $objWriter->save(str_replace('.php', '.xls', __FILE__));



	?>


	<body>
		dsdsf


	</body>
</html>
