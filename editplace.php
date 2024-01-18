<?php
include('DBCONNECT.php');
if(isset($_GET['id'])){
    $query="";
    $query="select * from place_deatils where place_id=".$_GET['id'];
    $res=$con->query($query);
    foreach($res->fetch_array() as $k=> $val){
        $$k=$val;
    }
}
?>


<input type="hidden" name="place_id" value="<?php echo isset($place_id) ? $place_id : '' ?>">
<h2>Edit Place Price</h2>
<div class="addnew">
    <label ><b>Place Name</b></label>
    <input type="text" autocomplete="off" name="placename"  value="<?php echo isset($placename) ? $placename :'' ?>" required>>


    <label><b>Price</b></label>
        <input type="number" name="price" value="<?php echo isset($price) ? $price :'' ?>" required>

        <button type="button" class="btn cancel" onclick="closeEditForm()">Cancel</button>
        <button type="submit" class="btn">Update</button>



</div>