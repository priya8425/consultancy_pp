
 <?php
include("../../../include/config.php");
if(isset($_POST['dnkd'])){
    
	$sql=mysqli_query($conn,"SELECT * FROM services where id='".$_POST['dnkd']."'");
                      
                        $arr=mysqli_fetch_array($sql);
                        echo'
                        <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="hidden" value="'.$_POST['dnkd'].'" name="id">
                        <input type="text" class="form-control" value="'.$arr['name'].'" name="name" id="exampleInputEmail1" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Content</label>
                        <textarea type="text" class="form-control" name="content" id="example2" placeholder="Enter Description">'.$arr['content'].'</textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Image</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="image" value="'.$arr['image'].'"  class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" value="'.$arr['description_name'].'"  name="description_name" id="example2"
                          placeholder="Enter Description">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea type="text" class="form-control"  name="description" id="example2" placeholder="Enter Description">'.$arr['description'].'</textarea>
                      </div>
                ';

                        }


                        if(isset($_POST["submit"])){
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $content=$_POST['content'];
                            $description_name=$_POST['description_name'];
                            $description=$_POST['description'];
                            $image=$_FILES['image']['name'];   
                            $filedet=$_FILES['image']['tmp_name'];
                            $loc="../../dist/img/credit/".$image;
                            move_uploaded_file($filedet,$loc);
                           
                            
                            $sql = "UPDATE services SET name = '$name', content = '$content', description_name = '$description_name', description = '$description',image = '$image' WHERE id = '$id'";
                            $result=mysqli_query($conn, $sql);

                            header("location:cctv.php");
                            
                            }

                            ?>

                            <?php
                            if(isset($_POST['dnkdd'])){
    
                                $sql=mysqli_query($conn,"SELECT * FROM testimonials where id='".$_POST['dnkdd']."'");
                                                  
                                                    $arr=mysqli_fetch_array($sql);
                                                    echo'
                                                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="hidden" value="'.$_POST['dnkdd'].'" name="id">
                    <textarea type="text" class="form-control" name="description"  id="example2" placeholder="Enter Description">'.$arr['description'].'</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" value="'.$arr['image'].'" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" value="'.$arr['name'].'" id="example2" placeholder="Enter Description">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">about</label>
                    <input type="text" class="form-control" name="about" value="'.$arr['about'].'" id="example2" placeholder="Enter Description">
                  </div>
                </div>
                <!-- /.card-body -->

                
                                            ';
                            
                                                    }
                            
                            
                                                    if(isset($_POST["submit1"])){
                                                        $id=$_POST['id'];
                                                        $about=$_POST['about'];
                                                        $name=$_POST['name'];
                                                        $description=$_POST['description'];
                                                        $image=$_FILES['image']['name'];   
                                                        $filedet=$_FILES['image']['tmp_name'];
                                                        $loc="../../dist/img/credit/".$image;
                                                        move_uploaded_file($filedet,$loc);
                                                       
                                                        
                                                        $sql = "UPDATE  testimonials SET about = '$about', name = '$name', description = '$description', image = '$image' WHERE id = '$id'";
                                                        $result=mysqli_query($conn, $sql);
                                                        header("location:instructor.php");
                                                        }
                        ?>
<!-- residental -->
<?php
                            if(isset($_POST['dnkddd'])){
    
                                $sql=mysqli_query($conn,"SELECT * FROM residental where id='".$_POST['dnkddd']."'");
                                                  
                                                    $arr=mysqli_fetch_array($sql);
                                                    echo'
                                                    <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="hidden" value="'.$_POST['dnkddd'].'" name="id">
                                                    <input type="text" class="form-control" name="name"  value="'.$arr['name'].'" id="exampleInputEmail1" placeholder="Enter email">
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                    <label for="exampleInputPassword1">Content</label>
                                                    <textarea type="text" class="form-control" name="content" id="example2" placeholder="Enter Description">'.$arr['content'].'</textarea>
                                                  </div>
                                                  <div class="form-group">
                                                    <label for="exampleInputFile">Image</label>
                                                    <div class="input-group">
                                                      <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input"  value="'.$arr['image'].'"id="exampleInputFile">
                                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                      </div>
                                                      <div class="input-group-append">
                                                        <span class="input-group-text">Upload</span>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  
                                                  
                                                </div>
                                            ';
                            
                                                    }
                            
                            
                                                    if(isset($_POST["submit2"])){
                                                        $id=$_POST['id'];
                                                        $name=$_POST['name'];
                                                        $content=$_POST['content'];
                                                        $image=$_FILES['image']['name'];   
                                                        $filedet=$_FILES['image']['tmp_name'];
                                                        $loc="../../dist/img/credit/".$image;
                                                        move_uploaded_file($filedet,$loc);
                                                       
                                                        
                                                        $sql = "UPDATE residental SET name = '$name', content = '$content', image = '$image' WHERE id = '$id'";
                                                        $result=mysqli_query($conn, $sql);
                                                        header("location:residental.php");
                                                        
                                                        }
                        ?>

            
            
            
  
     