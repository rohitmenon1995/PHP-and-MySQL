<html>
    <head>
        
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </head>
    
<?php
if(!isset($_POST['submit'])){
    require 'FormBuilder.php';
    echo "<pre>";
    $formbuilderobj = new FormBuilder();
    $formbuilderobj->SetFieldBox("Username","Username");
    $formbuilderobj->SetFieldBox("Email","Email");
    $formbuilderobj->SetCheckBox("Hobby",["Guitar","Singing","Dancing"]);
    $formbuilderobj->SetDropDown("FavoriteShow",["Pokemon","Friends","Hero"],"Select Favourite show");
    $formbuilderobj->DateRange("2019-06-25","2019-07-24");
    $formbuilderobj->SetSubmitBtn("btn btn-primary");
    $formbuilderobj->CloseForm();
}  else {
    require 'Validation.php';
    $validationObj = new Validation();
    if($validationObj->isFldEmpty($_POST["Username"])){ 
      echo "Username can't be empty";
    }
    if($validationObj->isfldEmail($_POST["Email"])){
        echo "Email in Incorrect Format";
    }
}    
?>
</html>