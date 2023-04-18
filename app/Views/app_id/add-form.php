<?= $this->include('partials/main') ?>

<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
</head>

<?= $this->include('partials/body') ?>
<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?= $this->include('partials/menu') ?>
        <div class="main-content">
            <div class="page-content">
                <?= $page_title ?>
                <div class="row align-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4"><?= $title ?></h4>

                                <form action="<?= base_url('save_appid');?>" method="POST">
                                <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">AppID</label>
                                                <input class="form-control" type="text" name="appid" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <?= $this->include('partials/alert') ?>
                                
                                    <button type="button" class="btn btn-warning" onclick="addRow();"><i class="fa fa-plus"></i></button>
                                    <div class="table-responsive">
                                        <table class="table table-nowrap table-centered mb-0" id="appid-area-list">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Area</th>
                                                    <th class="text-center">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="col-sm-11">
                                                        <input type="text" name="appid_area[]" class="form-control"/>
                                                    </td>
                                                    <td class="col-sm-1 text-center">
                                                        <a type="button" class="ibtnDel btn btn-xs btn-danger" onclick="this.parentNode.parentNode.remove();">
                                                            <i class="fa fa-trash i_link" title="Delete" style="color:white"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button type="button" class="btn btn-warning" onclick="addRow();"><i class="fa fa-plus"></i></button>
                                
                                    <br>
                                    
                                    <button class="btn btn-primary waves-effect waves-light mt-5" type="submit">
                                        <?= lang('Files.Submit') ?>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- End Page-content -->
            <?= $this->include('partials/footer') ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
</div>
<!-- end container-fluid -->

<?= $this->include('partials/right-sidebar') ?>

<!-- JAVASCRIPT -->
<?= $this->include('partials/vendor-scripts') ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="assets/js/pages/tasklist.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

<script>
    var counter = parseInt(1);

    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode == 46) {
          return true;  
        } else if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }

    function addRow() {
        counter += 1;
        
          var newRow = $("<tr>");
          var cols = "";
          cols += `
            <td class="col-sm-11">
                <input type="text" name="appid_area[]" class="form-control"/>
            </td>
            <td class="col-sm-1 text-center">
                <a type="button" class="ibtnDel btn btn-xs btn-danger" onclick="this.parentNode.parentNode.remove();">
                    <i class="fa fa-trash i_link" title="Delete" style="color:white"></i>
                </a>
            </td>
          `;
          newRow.append(cols);
          $("#appid-area-list").append(newRow);
    }
</script>

</body>

</html>