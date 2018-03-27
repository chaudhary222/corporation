<?php 
include('class/slider.class.php');
?>
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input name="table_search" class="form-control pull-right" placeholder="Search" type="text">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                  <?php 
                  $userObj = new Slider();
                 $views =  $userObj->viewSlider();
                
                  ?>
                  <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Link</th>
                  <th>Approval</th>
                </tr>
                <?php 
                 foreach ($views as $value) {
                 /* echo '<pre>';
                  var_dump($value);
                  die();*/
                 ?>
                <tr>
                  <td><?php echo $value['slider_id'];?></td>
                  <td><?php echo $value['title'];?></td>
                  <td><?php echo $value['desc_text'];?></td>
                  <td><img src="<?php echo 'images/slider/'. $value['slider_image'];?>" height="70px" width="70px"> </td>
                  <td><?php echo $value['slider_link'];?></td>
                  <td><button type="submit" class="btn btn-primary" name="update"><a href="index.php?id=<?php echo $value['slider_id'];?>&page=slider&action=update">Update</a></button><button type="submit" class="btn btn-primary-danger" name="delete">Delete</button></td>
                  
                </tr>
                <?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>