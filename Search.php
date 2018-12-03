
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
        
        <div>
            values
            <p id="result"></p>
            
            
<?php 
	$var= mysql_connect("localhost","root","") or die("error in connection".mysql_error());
    mysql_select_db("form",$var);
	
	$select= "select * from form order by sellername desc limit 10";
	$result= mysql_query($select);
	echo "<h1>DataBase</h1>";
	echo "<table border =\" 1 \" cellpadding = '10' >";
	echo "<th>sellername</th><th>address</th><th>city</th><th>phone</th><th>email</th><th>make</th><th>model</th><th>year</th><th>Link</th>";
	while($row= mysql_fetch_assoc($result))
	    {
			echo "<tr>";
			echo "<td>".$row['sellername']."</td>";
			echo "<td>".$row['address']."</td>";
			echo "<td>".$row['city']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['make']."</td>";
			echo "<td>".$row['model']."</td>";
            echo "<td>".$row['year']."</td>";
            echo "<td>".$row['link']."</td>";
		    echo "</tr>";
			
		}
	
?>

            
        </div>
        
    </body>
    <script src="Prog8170_Assignment4.js"></script>
</html>