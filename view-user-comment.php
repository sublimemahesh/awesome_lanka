<!DOCTYPE html>
<?php
include_once './class/include.php';

if (isset($_POST['save'])) {

    $COMMENT = new Comments(NULL);
    $VALID = new Validator();

    $COMMENT->name = filter_input(INPUT_POST, 'name');
    $COMMENT->title = filter_input(INPUT_POST, 'title');
    $COMMENT->comment = filter_input(INPUT_POST, 'comment');
    $COMMENT->is_active = filter_input(INPUT_POST, 'active');

    $dir_dest = 'upload/comments/';

    $handle = new Upload($_FILES['image']);

    $imgName = null;

    if ($handle->uploaded) {
        $handle->image_resize = true;
        $handle->file_new_name_ext = 'jpg';
        $handle->image_ratio_crop = 'C';
        $handle->file_new_name_body = Helper::randamId();
        $handle->image_x = 300;
        $handle->image_y = 300;

        $handle->Process($dir_dest);

        if ($handle->processed) {
            $info = getimagesize($handle->file_dst_pathname);
            $imgName = $handle->file_dst_name;
        }
    }

    $COMMENT->image_name = $imgName;

    $VALID->check($COMMENT, [
        'name' => ['required' => TRUE],
        'title' => ['required' => TRUE],
        'comment' => ['required' => TRUE]
    ]);

    if ($VALID->passed()) {
        $result = $COMMENT->create();
    }
     header('Location: ' . $_SERVER['HTTP_REFERER']);
     
    if ($result) {
        $success = 'Successfully added new testimonial';
    } else {
        $error = 'oops';
    }
}
?>
