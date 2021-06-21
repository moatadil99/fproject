<?php  $this->load->view("adminpanel/header"); ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      
      <h2>Add Blog</h2>
      <form enctype="multipart/form-data" action="<?=  base_url(). 'admin/blog/editBlog_post'  ?>" method="post">
        <select class="form-select test" aria-label="Default select example" name="publish_unpublish">
          <option value="1" <?= ($result[0]['status']== '1' ? 'selected' : " "); ?>>publish</option>
          <option value="0" <?= ($result[0]['status']== '0' ? 'selected' : " "); ?> >unpublish</option>
        </select><br>
        <input type="hidden" name="blog_id" value="<?= $blog_id ?>">
        <div class="form-group">
          <input type="text" name="blog_title" value = "<?= $result[0]['blog_title'] ?> " class="form-control" placeholder="enter title for Blog">
        </div>
        <br>
        <div class="form-group">
          <textarea  name="desc" class="form-control" placeholder="enter Blog desc"><?= $result[0]['blog_desc'] ?></textarea>
        </div><br>
        <div class="form-group">
          <img src='<?= base_url().$result[0]['blog_img']?>' class='img-fluid' width='100'>
          <input type="file" name="file" class="form-control" placeholder="file">
        </div><br>
        <button class="w-50 btn btn-lg btn-primary" type="submit">Add</button>
      </form>
    

    </main>
  </div>
</div>

<?php  $this->load->view("adminpanel/footer"); ?>
<script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
 <script>
        CKEDITOR.replace( 'desc' );
 </script>
