<?php  $this->load->view("adminpanel/header"); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <h2>view Blog</h2>
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>sr.NO</th>
              <th>title</th>
              <th>desc</th>
              <th>image</th>
              <th>edit</th>
              <th>delete</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              if ($result) {
                
              $counter=1;
              foreach ($result as $key => $value) {
                echo "
                  <tr>
                    <td>".$counter."</td>
                    <td>".$value['blog_title']."</td>
                    <td>".$value['blog_desc']."</td>
                    <td><img src='". base_url().$value['blog_img']."' class='img-fluid' width='100'></td>
                    <td><a class='btn btn-info' href='" . base_url().'admin/blog/editBlog/'.$value['blogid']."'>edit</a></td>
                    <td><a class='btn btn-danger delete' href='#.' data-id=".$value['blogid'].">delete</a></td>
                  </tr>

                ";
                 $counter++;
              }
            }
            else
            {

              echo "<tr><td colspan='6' > no records found </td></tr>";
            }

            ?>
            

            
          </tbody>
        </table>

    </main>
  </div>
</div>

<?php  $this->load->view("adminpanel/footer"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
$(".delete").click(function() {
  var delete_id=$(this).attr('data-id');

  var bool = confirm('are you sure to delete')
  if(bool)
  {
    $.ajax({
      url:'<?= base_url().'admin/blog/deleteBlog'?>',
      type:'post',
      data:{'delete_id':delete_id},
      success: function(response)
      {
        if(response=="delete")
        {
          location.reload();
        }
        else if(response=="nodelete"){
          alert(" somthing wrong in deleted");
        }
      }
    });
  }
  else
  {
    alert(" your blog is safe ");
  }


});

  <?php
    if(isset($_SESSION['updated'])){
      if($_SESSION['updated']=='yes')
      {
        echo "alert('data updated successfully!')";
      }
      else
      {
        echo "alert('error in updated!')";
      }
    }

  ?>
</script>