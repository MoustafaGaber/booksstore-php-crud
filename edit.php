<?php
   include("backend/connect.php");
   include("navbar.php");
   //show values in input box
   $id=$_GET["id"];
   $sql="select * from books where id_book=$id ";
   //this $data look like a table
   $data=mysqli_query($conn,$sql);
   //this $row is single row in a table and use it to fill each value in inputbox
   //$row=mysqli_fetch_assoc($data);
   $row = mysqli_fetch_assoc($data);
   //when click cancel buttom
   if(isset($_POST["cancel"]))
   {
      header("Location: index.php");
   }
   //when Update button clicked
   if(isset($_POST["update"]))
   { //collect new value 
    $t=$_POST["title_book"];
    $d=$_POST["doe_book"];
    $c=$_POST["copies_book"];
    $sql="update books set title_book='$t',doe_book='$d',copies_book='$c' where id_book=$id";
    $data=mysqli_query($conn,$sql);
    if($data)
    {
        header("Location: index.php");
    }
   }
?>
<h1>Edit a Book</h1>
<div class="card  p-5" style="width: 40rem;">
<form method="POST">
    <div class="form-group mb-3">
       <label for="">Book Title</label>
       <input type="text" class="form-control" name="title_book" value="<?=$row["title_book"];?>">
    </div>
    <div class="form-group mb-3" >
        <label for="">DOE Book</label>
        <input type="date" class="form-control" name="doe_book" value="<?=$row["doe_book"];?>">
    </div>
    <div class="form-group mb-3">
        <label for="">Number Of Copies</label>
        <input type="number" class="form-control" name="copies_book" value="<?=$row["copies_book"];?>">
    </div>
    <button type="submt" name="update" class="btn btn-outline-primary" >Update</button>
    <button type="submt" name="cancel"  class="btn btn-outline-danger">Cancel</button>
</form>

</div>


<?php
 include("footer.php");
 ?>