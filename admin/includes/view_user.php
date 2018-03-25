<?php 
//include('class/connection.class.php');
include('class/user.class.php');
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
                  $userObj = new User();
                 $views =  $userObj->viewUser();
                
                  ?>
                  <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>password</th>
                  <th>Approval</th>
                </tr>
                <?php 
                 foreach ($views as $value) {
                 /* echo '<pre>';
                  var_dump($value);*/
                 ?>
                <tr>
                  <td><?php echo $value['user_id'];?></td>
                  <td><?php echo $value['username'];?></td>
                  <td><?php echo $value['email'];?></td>
                  <td><?php echo $value['password'];?></td>
                  <td><span class="label label-success">Approved</span></td>
                  
                </tr>
                <?php } ?>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>