<html>
    <head>
        <title>Success Message</title>
    </head>
    <body>
    <h3>Successfuly Uploaded</h3>
    <!-- Uploaded file specification will show up here -->
   




    

     <table>
        <?php for($i=1;$i<=10;$i=$i+1){ ?>

       <tr height="40%"><td width="60%">
                   
             <img src="<?php echo base_url('uploads/').$_SESSION["img_".$i]?>" height="100%" width="100%" >
           </td><td  width="40%">  
            <?php echo $_SESSION["dis_".$i]?>
            </td><td>
            <video controls autoplay loop>
   <source src="<?php echo base_url('uploads_video/').$_SESSION["vid_".$i]?>" type="video/mp4">
   not support
</video>

           <td> </tr>
        <?php } ?>
     </table>  