<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Slider</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="process/process_add_slider.php" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Enter slider title">
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
                  <label for="exampleInputPassword1">Slider Link</label>
                  <input type="text" class="form-control" id="link" name="link" placeholder="Enter slider link">
                </div>
                
                <div class="form-group">
                 
                </div>
                
              </div>
             

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="add_slider">Submit</button>
              </div>
            </form>
          </div>