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
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>Enter Member' NIC No</h4>
                    </div>
                    <div class="card-body">
                    
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>NIC No</label>
                                        <input type="nic" name="nic" placeholder="nic" value="" class="form-control">
                                    </div>
                                </div>
                                
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Click to Search</label> <br>
                                      <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-body">
                        <table class="table table-borderd" border="1" >
                            <thead>
                                <tr border="1">
                                    <th>Member ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Address</th>
                                    <th>E-mail Address</th>
                                    <th>NIC No</th>
                                    <th>Mobile No</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            
                           <?php 
                             
                              $nic = $_GET['nic'];


                                $con = mysqli_connect("localhost","root","","library_db");

                                
                                    
                                    

                                    $query = "SELECT `memberid`, `firstname`, `lastname`,`address`,`email`,
                                    `nic`,`mobile`,`username`,`password` FROM member where nic= '$nic'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['memberid']; ?></td>
                                                <td><?= $row['firstname']; ?></td>
                                                <td><?= $row['lastname']; ?></td>
                                                <td><?= $row['address']; ?></td>
                                                 <td><?= $row['email']; ?></td>
                                                <td><?= $row['nic']; ?></td>
                                                <td><?= $row['mobile']; ?></td>
                                                <td><?= $row['username']; ?></td>
                                                 <td><?= $row['password']; ?></td>
                                                
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
<center><b><h2><a href="admin.php"> Back to Admin's Page </a></font></h2></b></center>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>