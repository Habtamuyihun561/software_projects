 <?php
 $conn=mysqli_connect("localhost","root","","db");
?>
<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" type="text/css" href="print.css"  media="print">
 </head>
 <body>
    <div class="print_page">
  <h1 style="text-align:center;">Total Cases Report Under All Catagory In Each Status</h1>
              <table>
                <tr>
                    <th></th>
                    <th>Criminal Cases</th>
                    <th>Consultancy Cases</th>
                    <th>Descipline Cases</th>
                    <th>Human Resource Cases</th>
                    <th>Other Civil Cases</th>
                    
                </tr>
                <tr>
                    <td>Avialable Cases</td>
                    <td><?php 
                    $result = mysqli_query($conn,"select count(*) FROM crime_register where status=1");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;
                                 ?></td>
                    <td><?php   $result = mysqli_query($conn,"select count(*) FROM consulancy where status=1");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;
                          ?></td>
                    <td><?php   $result = mysqli_query($conn,"select count(*) FROM descipline where status=1");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total;?></td>
                    <td><?php   $result = mysqli_query($conn,"select count(*) FROM human_resource where status=1");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;
                        ?></td>
                    <td><?php   $result = mysqli_query($conn,"select count(*) FROM other_civil where status=1");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;
                        ?></td>
                  
                </tr>
                    <tr>
                    <td>Tracked Cases</td>
                    <td><?php   $result = mysqli_query($conn,"select count(*) FROM crime_register where status=2");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;
                        ?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM consulancy where status=2");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                            echo $total?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM descipline where status=2");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;
                        ?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM human_resource where status=2");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?>
                            
                          </td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM other_civil where status=2");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                   
                </tr>
                    <tr>
                    <td>Dead Cases</td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM crime_register where status=3");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM consulancy where status=3");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM descipline where status=3");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM human_resource where status=3");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM other_civil where status=3");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                   
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM crime_register ");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php  $result = mysqli_query($conn,"select count(*) FROM consulancy ");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM descipline ");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    <td><?php $result = mysqli_query($conn,"select count(*) FROM human_resource");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;
                        ?></td>
                    <td><?php  $result = mysqli_query($conn,"select count(*) FROM other_civil ");
                          $row = mysqli_fetch_array($result);

                            $total = $row[0];
                          echo $total;?></td>
                    
                </tr>
              </table>
            </div>
            <button onclick="window.print();" class="btn btn-primary" id="print-btn">Print</button>
 </body>
 </html>



 