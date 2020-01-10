<html>
    <head>
        <title>File uploading</title>
    </head>
    <body>

    <?php echo form_open_multipart('index.php/Upload/do_upload_video');?>
    <?php echo "<input type='file' name='userfile' size='200' />"; ?>
   
     <?php echo "<input type='submit' name='submit' value='upload' /> ";?>
    <?php echo "</form>"?>
    </body>
    </html>