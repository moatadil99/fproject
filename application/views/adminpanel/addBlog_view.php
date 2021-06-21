<?php  $this->load->view("adminpanel/header"); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <h2>Add Blog</h2>
      <form enctype="multipart/form-data" action="<?=  base_url(). 'admin/blog/addBlog_post'  ?>" method="post">

        <div class="form-group">
          <input type="text" name="blog_title" class="form-control" placeholder="enter title for Blog">
        </div>
        <br>
        <div class="form-group">
          <textarea  name="desc" class="form-control" placeholder="enter Blog desc"></textarea>
        </div><br>
        <div class="form-group">
          <input type="file" name="file" class="form-control" placeholder="file">
        </div><br>
        <button class="w-50 btn btn-lg btn-primary" type="submit">Add</button>
      </form>
    

    </main>
  </div>
</div>

<?php  $this->load->view("adminpanel/footer"); ?>
<script type="text/javascript">
  <?php
    if(isset($_SESSION['inserted'])){
      if($_SESSION['inserted']=='yes')
      {
        echo "alert('data inserted successfully!')";
      }
      else
      {
        echo "alert('error in inserted!')";
      }
    }

  ?>
</script>
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
 <script>
        CKEDITOR.replace( 'desc' );
 </script>
