<?php
move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
echo "File is uploaded successfully";
?>