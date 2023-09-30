<?php
    include("backend/connect.php");
    include("navbar.php");
    if (isset($_POST["submit"])) {
        $t=$_POST["title_book"];
        $d=$_POST["doe_book"] ;
        $c=$_POST["copies_book"];
        $sql=" insert into books values (null,'$t','$d','$c')";
        $data=mysqli_query($conn,$sql);
        if($data)
        {
          header("Location: index.php");
        }
        else
        {
          echo "failed";
        }
        
       }
       if(isset($_POST['cancel']))
       {
        header("Location: index.php");
       }
   
?>
  <h1 >Add New Book!</h1>

  <div class="card me-5 p-5 " style="width: 40rem;">
    <form action="" method="post">
        <div class="form-group mb-3">
            <label for="">Book title</label>
            <input type="text" class="form-control" name="title_book">
        </div>
        <div class="form-group mb-3">
            <label for="">DOE Book</label>
            <input type="date" class="form-control" name="doe_book">
        </div>
        <div class="form-group mb-3">
            <label for="">Number Of copies </label>
            <input type="number" class="form-control" name="copies_book">
        </div>
        <button type="submit" name="submit" class="btn btn-primary ">Save</button>
        <button type="submit" name="cancel" class="btn btn-danger ">cancel</button>
        <!-- <a href="index.php" cname="cancel" class="btn btn-danger ">Go Back</a> -->
    </form>
  </div>

  <?php
include("footer.php");
?>