<?php 
include('class/slider.class.php');

$sliderObj = new Slider();
$view = $sliderObj->viewSlider();
foreach ($view as  $value) {
 /* echo '<pre>';
  var_dump($value);*/

?>
<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="process/process_update_slider.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter slider title" value="<?php echo $value['title'];?>">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="desc" class="form-control" placeholder="Enter description"><?php echo $value['desc_text'];?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Slider Link</label>
                  <input type="text" class="form-control" id="link" name="link" placeholder="Enter slider link" value="<?php echo $value['slider_link']?>">

                </div>
                <div class="form-group">
                  <input type="hidden" value="<?php echo $_GET['id']?>" name="slider_id">
                </div>
                
                
                <div class="form-group">
                 
                </div>
                
              </div>
             

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="update_slider">Submit</button>
              </div>
            </form>
          </div>
          <?php } ?>