<?php
include 'db.php';
require_once 'component.php';

// create button click
if(isset($_POST['create'])){
    createData();
}

if(isset($_POST['update'])){
    UpdateData();
}


if(isset($_POST['deleteall'])){
    deleteAll();

}

else{
    TextNode("error", "Provide Data in the Textbox");
}
function createData(){
    $topic = textboxValue("topic");
    $body = textboxValue("body");
    $image = textboxValue("image");
    $author = textboxValue("author");

    if($topic && $body && $image && $author){$sql = "INSERT INTO posts (topic, body,image, author) 
        VALUES ('$topic','$body', '$image','$author')";

if(mysqli_query($GLOBALS['db'], $sql)){
TextNode("success", "Record Successfully Inserted...!");
}else{
echo "Error";
}}

        
else{
    TextNode("error", "Provide Data in the Textbox");
}
    

}

function textboxValue($value){
    $textbox = mysqli_real_escape_string($GLOBALS['db'], trim($_POST[$value]));
    if(empty($textbox)){
        return false;
    }else{
        return $textbox;
    }
}


// messages
function TextNode($classname, $msg){
    $element = "<h6 class='$classname'>$msg</h6>";
    echo $element;
}


// update
function UpdateData(){
    $ID = textboxValue("ID");
    $topic = textboxValue("topic");
    $body = textboxValue("body");
    $body_detail = textboxValue("body_detail");
    $image = textboxValue("image");
    $author = textboxValue("author");
    if($topic && $body && $body_detail && $image && $author){
      $sql=  "UPDATE posts SET  topic='$topic', body = '$body', 'body_detail=$body_detail','image='$image', author = '$author' WHERE ID='$ID' ";
        if(mysqli_query($GLOBALS['db'], $sql)){
            TextNode("success", "Data Successfully Updated");
        }else{
            TextNode("error", "Enable to Update Data");
        }

    }else{
        TextNode("error", "Select Data Using Edit icon");
    }
    
}
//delete record


function deleteBtn(){
if (isset($_GET['id']))
{
$sql="DELETE FROM posts WHERE ID=".$_GET['ID'];
$result = mysqli_query($GLOBALS['db'], $sql);

if($result==true)
	echo "sucess";

}

}

function deleteAll(){
    $sql = "DELETE * FROM posts ";

    if(mysqli_query($GLOBALS['db'], $sql)){
        TextNode("success","All Record deleted Successfully...!");
    
    }else{
        TextNode("error","Something Went Wrong Record cannot deleted...!");
    }
}
// get data from mysql database
function getData(){
    $sql = "SELECT * FROM posts";

    $result = mysqli_query($GLOBALS['db'], $sql);

    if(mysqli_num_rows($result) > 0){
        return $result;
    }
    
}

// set id to textbox
function setID(){
    $getid = getData();
    $id = 0;
    if($getid){
        while ($row = mysqli_fetch_assoc($getid)){
            $id = $row['ID'];
        }
    }
    return ($id + 1);
}

?>
