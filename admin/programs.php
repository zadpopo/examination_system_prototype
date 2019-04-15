  <!DOCTYPE html>
  <html>
  <head>
  	<title>Programs</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  </head>
  <body>
  
  
  <?php 
  include ("php/nav.php");
  ?>

 <div class="container" style="height: 100%" >
<div class="card-deck" >
  <div class="card">
 
    <div class="card-body " style="background-color: #2B2A2A">
       <h5 class="card-title text-white">Create Program</h5>
      <div class="card-body " style="background-color: white;" >
     
    

    <form action="" method="POST">


  <div class="form-group row">
    <label for="" class="col-sm-6 col-form-label">Program:</label>
    <div class="col-sm-4  ">
    <div class="form-group">
 
    <input class="form-control" type="text" name="program" value="" required placeholder="program name..">
  </div>
  </div>
</div>

 <div class="modal-footer">
     
        <button  type="submit" name="padd" class="btn btn-primary">Add</button>
      </div>

</form>

<?php

if (isset($_POST['padd'])) {

  $program =$_POST['program'];


  $sql ="INSERT INTO programtbl (program_name) VALUES ('$program')";


  if($conn->query($sql) === TRUE ){
          
                  echo "<script language = 'javascript'>alert('New program is added !')</script>";
                  echo "<script>window.location.href = 'programs.php';</script>";
                  }else{
                  echo "Error" . $sql . '' . $conn->connect_error;
                  }
               $conn->close();

}
 ?>
<h5>Program List</h5>
<br>
<?php
  $q1="SELECT DISTINCT program_name FROM  programtbl ";

           $r1= mysqli_query($conn,$q1);
?>

 <div class=" table table-sorting table-wrap table-responsive-sm mx-auto" >
                                        <table class="table table-striped table-bordered"  id="tSortable25">
                                        <thead class="thead-dark">   


                                            <th style="width:40%">Program List</th>
                                          
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>

                                        <?php
                                      while  ($row = mysqli_fetch_array($r1)){
                                        ?>


                                      

                                         <td><?php echo $row["program_name"];?></td>

                                         
</tr>
<?php
}
?>

</tbody>
</table>
<style >
  .table{

      border-collapse: collapse;
  }

.table-wrap {
  height: 300px;
  overflow-y: scroll;
  display: inline-block;
}

</style>
    </div>
  
  </div>
</div>
</div>
</div>
<br>




<!---footer--->
<div class="fixed-bottom">
  
<?php

include("../php/footer_fit.php");

?>
  

</div>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
 <script>
      $(document).ready(function() {
   
    $('#tSortable25').DataTable();
} );
  
 </script>

  </body>
  </html>
