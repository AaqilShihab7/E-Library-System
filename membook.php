<form action="uploads.php" method="post" enctype="multipart/form-data">
    
    <br><a href="display.php">Click to view </a>
</form>


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