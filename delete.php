<?php
   include("backend/connect.php");
   include("navbar.php");
   $id=$_GET["id"];
   $name=$_GET["name"];

   if(isset($_POST["cancel"]))
   {
      header("Location: index.php");
   }

   if(isset($_POST["delete"]))
   { //collect new value 
    
    $sql="delete from books where id_book=$id";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
        header("Location: index.php");
    }
   }
   
?>
<h1>Delete a Book</h1>
<div class="card bg-warning" style="width: 40rem;">
 <div class="card-header text-center bg-danger">
   <div class="card-title h1 text-dark"> Deleting a Book</div>
 </div>
  <form method="post">
    <p class="h2  p-5 mb-3" > Are You Shure to delete this book:<br>
      Book id :<?=$id;?> <br>
      Book Title : <?=$name;?>
     </p>
     <div class="card-footer bg-dark">
     <button type="submt" name="delete"  class="btn btn-outline-danger">Delete</button>
     <button type="submt" name="cancel" class="btn btn-outline-primary" >Cancel</button>
     </div>
  </form>

</div>


<?php
 include("footer.php");
 ?>