<?php  
 $connect = mysqli_connect("localhost", "root", "", "db_users");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"])); 
      $course_name = mysqli_real_escape_string($connect,$_REQUEST['course_name']);
      $place_name = mysqli_real_escape_string($connect,$_REQUEST['place_name']);
      $place_description = mysqli_real_escape_string($connect,$_REQUEST['place_description']);
      $Date = mysqli_real_escape_string($connect,$_REQUEST['DDate']); 
      $query = "INSERT INTO tb_images(name,course_name,place_name,place_description,DDate) VALUES ('$file','$course_name','$place_name','$place_description','$Date')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert Packages</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <label for="crs">Course Name</label>
                    <input type="course" name="course_name" id="crs" /><br/><br/>
                    <label for="pl">Place Name</label>
                    <input type="place" name="place_name" id="pln"/><br/><br/>
                    <label for="pldsc">Place Description</label>
                    <input type="placedesc" name="place_description" id="pld"/><br/><br/>
                    <label for="dt">Date</label>
                    <input type="date" name="DDate" id="dat"/><br/><br/>
                    <input type="file" name="image" id="image" />  
                    <br />  
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />  
                <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>  
                     </tr>  
                <?php  
                $query = "SELECT * FROM tb_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query) or die( mysqli_error($connect));  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                          <tr>  
                               <td>  
                                    <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="200" width="200" class="img-thumnail" />  
                               </td>  
                          </tr>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  