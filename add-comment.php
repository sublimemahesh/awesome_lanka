<?php
include './view-user-comment.php';
?>
<!-- line modal -->
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
<!--                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>-->
                <h3 class="modal-title" id="lineModalLabel">Add your Comments</h3>
            </div>
             
            <form  method="post" id="client-comment" action="view-user-comment.php" enctype="multipart/form-data"> 
                <div class="modal-body"> 
                    <div class="form-group">
                        <?php if (!empty($success)) { ?>
                            <div class="alert alert-success" style="margin-top: 15px ">
                                <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Success! </strong> <?php echo $success; ?>
                            </div>

                        <?php } ?>
                    </div>

                    <div class="form-group">
                        <label for="imageName">Select Image</label>
                        <input name="image" type="file" id="imageName" required/>
                        <span id="spanimageName" ></span>
                        <p class="help-block">Automatically cropping this image 300 X 300 pixels</p>
                    </div> 

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Name" required/>
                        <span id="spanname"></span>
                    </div> 

                    <div class="form-group">
                        <label for="name">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" required/>
                        <input type="hidden" name="status" value="0" />
                        <span id="spantitle"></span>
                    </div> 

                    <div class="form-group">
                        <label for="description">Comment</label>
                        <textarea id="description" name="comment" class="form-control" rows="5" placeholder="Enter Description" required> </textarea>
                        <span id="spandescription" ></span>
                    </div>
                    <div class="row form-group">
                        <div class="col-sm-6 col-xs-12">
                            <br> 
                            <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> " required>
                            <span id="capspan" ></span> 
                        </div>   
                        <div class="col-sm-6 col-xs-12"> 
                            <?php include("./guest-comment/captchacode-widget.php"); ?> 
                        </div>   
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>  
                    <button type="submit" class="btn btn-default" name="create" id="create">Save Comment</button>
                    <input type="hidden" name="save" value="TRUE">
                </div>
            </form>

        </div>
    </div>
</div>
