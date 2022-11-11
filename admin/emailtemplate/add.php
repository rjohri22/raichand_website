<?php include '../sidebar.php'; ?>

<!-- CDN for CKeditor -->
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script> -->

<div class="page-wrapper" style="min-height: 250px;">
    <div class="page-breadcrumb bg-white">
        <div class="row align-items-center">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h4 class="page-title">Email Template</h4>
            </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <div class="d-md-flex">
                    <ol class="breadcrumb ms-auto">
                        <li><a href="<?php echo SITE_URL;?>/admin/" class="fw-normal">Dashboard &nbsp;/&nbsp;</a></li>
                        <li><a href="#" class="fw-normal">E-mail Template</a></li>
                    </ol>
                </div>
            </div>
        </div>
     </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="box-title">Email Template</h3>
                        </div>
                        <div class="d-flex">

                            <!-- ================ ADD Form START =================================== -->

                            <form method="post" action="index.php" enctype="multipart/form-data">

                            <div class="form-group mb-4">
                                <label class="col-md-12 p-0" for="title"> Title:</label>
                                <div class="col-md-12 border-bottom p-0">
                                    <input type="text" class="form-control p-0 border-0" name="title" id="title" >
                                </div>
                            </div> 

                            <div class="form-group mb-4">
                                <label for="year" class="col-md-12 p-0"> Content</label>
                                <div class="col-md-12 border-bottom p-0">                                  
                                    <textarea name="content"></textarea>
                                </div>
                            </div>                             

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Email type</label>
                                <select name="email_type" class="form-control" id="email_type">
                                    <option value="contact us">contact us</option>
                                    <option value="newslater">Newslater</option>
                                </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="formFileSm" class="form-label" class="col-md-12 p-0">Active / InActive</label>
                                <select name="is_active" class="form-control" id="idactiveinactive">
                                    <option value="1">active</option>
                                    <option value="0">inactive</option>
                                        </select>
                            </div>

                            <div class="form-group mb-4">
                                <div class="col-sm-12">
                                <input type="submit" class="btn btn-warning" name="submit" id="submit" value="submit">
                                </div>
                            </div>
                        </form>
                            <!-- ============= ADD Form END ========================================== -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    CKEDITOR.replace('content');
   // var desc = CKEDITOR.instances['content'].getData();
</script>








