
<section class="content">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Porperty Footer Link</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="<?= site_url('admin/FooterLinks/add') ?>" enctype="multipart/form-data" autocomplete="off">
                    <div class="box-body">
                        
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">Link Name</label>

                            <div class="col-sm-10 <?= form_error('name') ? 'has-error' : '' ?>">
                                <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Type the Name here" value="<?= set_value('name') ?>">
                                <span class="<?= form_error('name') ? 'text-danger' : '' ?>"><?= form_error('name') ?></span>
                            </div>
                        </div>
                            <?php $cities = $this->properties_model->getWhere(array('status' => 1), 'cities');?>
                        <div class="form-group">
                            <label for="name" class="col-sm-2 control-label">City</label>
                            <div class="col-sm-10">
                                            <select class="form-control" name="city" id="city">
                                                <option selected="" value="">Select Your City</option>
                                                <?php
                                                   foreach ($cities as $city) { ?>
                                                    <option value="<?= $city->id ?>" <?= $this->session->userdata('city') == $city->name ? 'selected' : '' ?>><?= $city->name ?></option>
                                                <?php } ?>
                                            </select>
                                            </div>
                                        </div>
                        <div class="form-group">
                            <label for="search_key" class="col-sm-2 control-label">Search Key</label>

                            <div class="col-sm-10 <?= form_error('search_key') ? 'has-error' : '' ?>">
                                <input type="text" name="search_key" class="form-control" id="text" placeholder="Type the search_key here" value="<?= set_value('search_key') ?>">
                                <span class="<?= form_error('search_key') ? 'text-danger' : '' ?>"><?= form_error('search_key') ?></span>
                            </div>
                        </div>
                                          
                       
                        <div class="form-group">
                            <label for="coloum" class="col-sm-2 control-label">coloum</label>
                             <div class="col-sm-10">
                                <select class="form-control" name="coloum">
                                     <option value="1">1st column</option>
                                     <option value="2">2nd column</option>
                                     <option value="3">3rd column</option>
                                     <option value="4">4th column</option>
                                     <option value="5">5th column</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="priority" class="col-sm-2 control-label">priority</label>
                        <div class="col-sm-10">
                                <select class="form-control" name="priority">
                                     <option value="1">1st position</option>
                                     <option value="2">2nd position</option>
                                     <option value="3">3rd position</option>
                                     <option value="4">4th position</option>
                                     <option value="5">5th position</option>
                                     <option value="6">6th position</option>
                                     <option value="7">7th position</option>
                                     <option value="8">8th position</option>
                                     <option value="9">9th position</option>
                                     <option value="10">10th position</option>

                                </select>
                            </div>
                        </div>

                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-default" onclick="history.go(-1);">Back</button>
                        <button type="submit" class="btn btn-info pull-right">ADD</button>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <div class="clearfix"></div><br><br><br>
            <!-- /.box -->
        </div>
    </div>
</section>
 <script>
                      $(document).ready(function(){
     $( "#text" ).autocomplete({
        source: function( request, response ) {
          // Fetch data
          $.ajax({
            url: '<?=base_url('home/get_locations_like');?>',
            type: 'post',
            dataType: "json",
            data: {
              Location: request.term
            },
            success: function( data ) {
                response($.map(data, function (value, key) {
                return {
                    label: value.name, 
                }
            }));
            }
          });
        },
        select: function (event, ui) {
          // Set selection
          $('#text').val(ui.item.label); // display the selected text
          //$('#userid').val(ui.item.value); // save selected id to input
          return false;
        }
      });

    });
                    </script>
