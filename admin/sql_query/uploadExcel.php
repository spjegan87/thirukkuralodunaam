<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
include('../../config/config.php');
// Create connection
$conn = mysqli_connect($host,$username,$pwd,$database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

//echo "connected";

use Box\Spout\Reader\ReaderFactory;
use Box\Spout\Common\Type;

// Include Spout library 
require_once '../plugin/src/Spout/Autoloader/autoload.php';

// check file name is not empty
if (!empty($_FILES['file']['name'])) {
     
    // Get File extension eg. 'xlsx' to check file is excel sheet
    $pathinfo = pathinfo($_FILES["file"]["name"]);
    
    // check file has extension xlsx, xls and also check 
    // file is not empty
   if (($pathinfo['extension'] == 'xlsx' || $pathinfo['extension'] == 'xls') 
           && $_FILES['file']['size'] > 0 ) {
        
        // Temporary file name
        $inputFileName = $_FILES['file']['tmp_name']; 
   
        // Read excel file by using ReadFactory object.
        $reader = ReaderFactory::create(Type::XLSX);

        // Open file
        $reader->open($inputFileName);
        $count = 1;

        // Number of sheet in excel file
        foreach ($reader->getSheetIterator() as $sheet) {
            
            // Number of Rows in Excel sheet
            foreach ($sheet->getRowIterator() as $row) {
				
                // It reads data after header. In the my excel sheet, 
                // header is in the first row. 
                if ($count > 1) { 
                    // Data of excel sheet
                     $data['thirukkuralpirivu'] = $row[0];
                     $data['kuralathikaram'] = $row[1];
                     $data['tno'] = $row[2];
                     $data['tkural'] = $row[3];
                     $data['tmeaning'] = $row[4];
                     $data['status'] = $row[5];
                    //Here, You can insert data into database. 

					#Method - 1 => This method not inject to database connection
					$stmt = $conn->prepare("INSERT INTO thirukkural (thirukkuralpirivu, kuralathikaram, tno, tkural, tmeaning, status) VALUES (?, ?, ?, ?,?,?)");

					$stmt->bind_param('ssssss', $data["thirukkuralpirivu"], $data["kuralathikaram"], $data['tno'], $data['tkural'], $data['tmeaning'], $data['status']);
					$stmt->execute();
					header('location:'.$localpath.'/admin/templates/index.php?page=thanks.php&msg=kuralupdate');
					#Method - 2
					/*$query = "INSERT INTO excel_data (name,email,phone,city) VALUES('{$data['name']}','{$data['email']}','{$data['phone']}','{$data['city']}')";
					mysqli_query($conn, $stmt);*/
				}
				$count++;
			}
		}

	// Close excel file
        $reader->close();

    } else {

        echo "Please Select Valid Excel File";
    }

} else {

    echo "Please Select Excel File";
    
}
?>