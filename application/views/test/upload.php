<?php
/**
 * Created by PhpStorm.
 * User: liududu
 * Date: 17-10-10
 * Time: 下午1:05
 */
?>
<html>
<head>
<title>Upload Form</title>
</head>
<body>


<?php echo form_open_multipart('Test/getPic');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</body>
</html>
