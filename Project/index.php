<?php include 'header.php'?>
<title>Jobs Posted</title>
<div class="content">
<div class="d-flex flex-row justify-content-end">
  <a href="login.php"><button class="btn btn-primary mt-3  ml-5 ">Log Out</button></a>
</div>
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
 Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="" method="POST">
  <div class="mb-3">
    <label for="Company Name" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPosition" class="form-label">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name="pos">
  </div>
  <div class="mb-3">
    <label for="JobDesc" class="form-label">Job Description</label>
    <textarea rows="10" cols="30" class="form-control" name="Jdesc"></textarea>
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills Required</label>
    <input type="text" class="form-control" id="skills" name="skills">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="CTC">
  </div>
  <button type="submit" class="btn btn-primary" name="jobs">Submit</button>
</form>
  </div>
</div>
<table class="table  table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql="SELECT `cname`,`position`,`CTC` from `jobs`";
        $result = mysqli_query($conn,$sql);
        $i=0;
        if($result->num_rows > 0){
          while($rows=$result->fetch_assoc()){
        echo "
        <tbody>
            <tr>
              <td> ".++$i." </td>
              <td> ".$rows['cname']."</td>
              <td>".$rows['position']."</td>
              <td>".$rows['CTC']."</td>
            </tr>";
        }}
        else{
          echo"";
        }
    ?>
  </tbody>
</table>
</div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>