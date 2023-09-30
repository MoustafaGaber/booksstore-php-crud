<?php
    include("backend/connect.php");
    include("navbar.php");
    $sql="select * from books";
    $data=mysqli_query($conn,$sql);



?>   
         
        <h1 class="text-center ">Hello, My Students!</h1>
        
   <a href="addnew.php" class="btn btn-success mb-3">Add New</a>
   <table class="table table-striped table-hover text-center">
   <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Title</th>
      <th scope="col">DOE OF Book</th>
      <th scope="col">Number Of Copies</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
      foreach($data as $row)
      {
 
    ?>
    <tr>
      <th scope="row"><?=$row["id_book"];?></th>
      <td><?=$row["title_book"];?></td>
      <td><?=$row["doe_book"];?></td>
      <td><?=$row["copies_book"];?></td>
      <td><a href="edit.php?id=<?=$row["id_book"];?>" class="btn btn-primary">Edit</a></td>
      <td><a href="delete.php?id=<?=$row["id_book"];?>&name=<?=$row["title_book"];?>" class="btn btn-danger">Delete</a></td>
            
    </tr>
    <?php
    }
    ?>
  </tbody>


   </table>
    

    
       
        
<?php
include("footer.php");
?>