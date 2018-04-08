<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Testing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
    <?php echo form_open_multipart('tes/proses_upload', array('method'=>'POST'));?>
    <input type="file" name="file" >
    <button type="submit">Upload</button>
    <?php
        echo form_close();
        if(isset($data)){
            print_r($data);
        }
    ?>

</body>
</html>