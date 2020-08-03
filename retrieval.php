<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Purchase List</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="bs-example">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Purchase List</h2>
                    </div>
                    <?php
                    $host='localhost';
                    $username='root';
                    $password='';
                    $dbname = "Backend";
                    $conn=mysqli_connect($host,$username,$password,"$dbname");
                    if(!$conn)
                    {
                        die('Could not Connect MySql Server:' .mysql_error());
                    }
                        $result = mysqli_query($conn,"SELECT * FROM checkout_tab");
                    ?>
 
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table border = 3 class='table table-bordered table-striped'>
                       
                      <tr>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Full Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Zip</th>
                        <th>Number of Vintage Bags</th>
                        <th>Number of Vin Shoes</th>
                        <th>Total Cost</th>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["names"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["city"]; ?></td>
                        <td><?php echo $row["country"]; ?></td>
                        <td><?php echo $row["zip"]; ?></td>
                        <td><?php echo $row["v1"]; ?></td>
                        <td><?php echo $row["v2"]; ?></td>
                        <td><?php echo $row["total"]; ?></td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>