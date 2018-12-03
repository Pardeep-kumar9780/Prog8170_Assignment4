<?php
$var=mysql_connect("localhost","root",'') or die("error in connection".mysql_error());
mysql_select_db("form",$var);


if(isset($_REQUEST['submit']))
{
	$sellername = $_POST['sellername'];
	$address= $_POST['address'];
	$city= $_POST['city'];
	$phone= $_POST['phone'];
	$email= $_POST['email'];
	$make= $_POST['make'];
	$model= $_POST['model'];
    $year= $_POST['year'];
   

	
	$insert= "insert into form(sellername,address,city,phone,email,make,model,year) values('$sellername','$address','$city','$phone','$email','$make','$model','$year')";
	mysql_query("$insert") or die("error in connection".mysql_error()); 

}


?>
<!doctype html>
<html>
    <title>Prog8170_Assignment4</title>
    <head>
            <link rel="stylesheet" href="Prog8170_Assignment4.css" />
    </head>
    <body>
        <div>
            
           <h1> Prog8170 Assignment4</h1>
        </div>
        <div>
        
                <table id="table">
                    <tr>
                            <td>
                                    <a href="index.php">Home |</a>
                            </td>
                        <td>
                                <a href="New.php">New |</a>
                        </td>
                        <td>
                            <a href="Search.php">Search</a>
                        </td>
                    </tr>
                        
                </table>
                
            </div>
        <div id="form"> 
        <form method="post">
            <table>
                <tr>
                    <td>Seller Name</td>
                    <td><input type="text" id="Seller_Name" name="sellername"/></td>
                </tr>
                <tr>
                        <td>Address</td>
                        <td><input type="text" id="Seller_Address" name="address"/></td>
                </tr>
                <tr>
                        <td>City</td>
                        <td><input type="text" id="City" name="city"/></td>
                </tr>
                <tr>
                        <td>Phone Number</td>
                        <td><input type="text" id="Phone_Number" name="phone"/></td>
                </tr>
                <tr>
                        <td>Email Address </td>
                        <td><input type="text" id="Email" name="email"/></td>
                </tr>

                <br>
                <tr>
                    <td>
                            <h3>Vehile Information</h3>
                    </td>
                </tr>

                    <tr>
                        <td><input type="text" placeholder="Vehicle make" id="Vehicle_Make" name="make"/></td>
                        <td><input type="text" placeholder="Model" id="Model" name="model"/></td>
                        <td><input type="text" placeholder="Year" id="Year" name="year"/></td>
                     </tr>
                    <tr>
                        <td><input type="submit" name="submit"  value="Submit details" onclick="Validate_Form(); "></td>
                        <td><input type="button" value="Generate Link" onclick="GenerateLink();"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h4>Click on the following link to view the car !</h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        
                        <a href="https://www.jdpower.com/cars/" id="link" name="link"></a>
                         </td>
                     </tr>

            </table>
           
            </form>

           
        </div>
        

        
    </body>
    <script src="Prog8170_Assignment4.js"></script>
</html>