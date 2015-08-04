<?php

include 'connectdb.php';


$sql="SELECT * FROM `customersinvoice`";
$result = mysqli_query($conn,$sql);

$x = 1 ;
while($row = mysqli_fetch_array($result)) {
  
  
$sqll="SELECT price*quantity as total FROM customersinvoiceitem where InvoiceID =  ".$row['invoiceID'];
$resultt = mysqli_query($conn,$sqll);

$total = 0;
while($roww = mysqli_fetch_array($resultt)) {
	$total += $roww['total'];
	
	
}
  echo '
                                        
                                        <tr>
										<form method ="post" action ="deletecustomerinvoice.php">
                                            <td>'.$x.'</td>
                                            <td>'.$row['invoiceID'].'</td>
                                            <td>'.$total.'</td>
                                            <td>'.$row['date'].'</td>
                                            <td>
                                                <button class="btn btn-xs btn-success"><i class="fa fa-check"></i> </button>
                                                <button class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i> </button>
                                                <button type ="submit" class="btn btn-xs btn-danger"><i class="fa fa-times"></i> </button>
                                            </td>
											<input type="hidden" name="id" value="'.$row['invoiceID'].'"/>
											</form>
                                        </tr>
                                        
                                        
                                    ';
  
  
  $x++;
}














?>