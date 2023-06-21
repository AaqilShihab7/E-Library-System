<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style >
  body {
  background-image: linear-gradient( to right,white,#FF00FF);
  background-repeat: no-repeat;
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<body>
    
   

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd" border="1" >
                            <thead>
                                <tr border="1">
                                <th>Book ID</th>
                                    <th>Book Title</th>
                                    <th>Uploaded Date</th>
                                    <th>Status</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                           <?php 
                             
                              


                                $con = mysqli_connect("localhost","root","","library_db");

                                
                                    
                                    

                                    $query = "SELECT * FROM images ORDER BY uploaded_on DESC";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                            <td><?= $row['id']; ?></td>
                                                <td><?= $row['file_name']; ?></td>
                                                <td><?= $row['uploaded_on']; ?></td>
                                                <td><?= $row['status']; ?></td>

                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }
                                
                            ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
<center><b><h2><a href="welcome.php"> Back to Welcome Page </a></font></h2></b></center>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>