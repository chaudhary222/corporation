<?php 
//include('class/connection.class.php');
include('class/team.class.php');
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
                  $userObj = new Team();
                 $views =  $userObj->viewTeam();
                
                  ?>
                  <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Post</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Approval</th>
                </tr>
                <?php 
                 foreach ($views as $value) {
                  /*echo '<pre>';
                  var_dump($value);
                  die();*/
                 ?>
                <tr>
                  <td><?php echo $value['team_id'];?></td>
                  <td><?php echo $value['member_name'];?></td>
                  <td><?php echo $value['member_post'];?></td>
                  <td><?php echo $value['member_desc'];?></td>
                  <td><img src="<?php echo 'images/'. $value['team_image'];?>" height="70px" width="70px"> </td>
                  <td><button type="submit" class="btn btn-primary" name="update">Update</button><button type="submit" class="btn btn-primary-danger" name="delete">Delete</button></td>
                  
                </tr>
                <?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>