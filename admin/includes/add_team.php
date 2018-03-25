<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Team</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="process/process_add_team.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter team name">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Post</label>
                  <input type="text" class="form-control" id="post" name="post" placeholder="Enter team post">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea name="desc" class="form-control" placeholder="Enter description"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="image" name="image">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Facebook url</label>
                  <input type="text" class="form-control" id="fb" name="fb" placeholder="Enter team Facebook link">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Twitter url</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Enter team Twitter link">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Instagram url</label>
                  <input type="text" class="form-control" id="insta" name="insta" placeholder="Enter team Instagram link">
                </div>
                <div class="form-group">
                  
                  <input type="hidden" class="form-control" id="team_id" name="team_id">
                </div>
                
              </div>
             

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_team">Submit</button>
              </div>
            </form>
          </div>