<html><head><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>
        * {
            box-sizing: border-box;
        }
        body {
            max-width: 100%;
            margin: 0;
            padding: 10px;
            font-family: Arial, sans-serif;
        }
        img, video {
            max-width: 100%;
            height: auto;
        }
        input, button, select, textarea {
            max-width: 100%;
        }
        </style></head></html><?php 
$servername="localhost";
$username="root";
$password="";
$database="quickserve_hub";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("error detected".mysqli_error($con));
}
else
{
  //echo"connection stablished successfully";
}
?>