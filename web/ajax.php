<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"location_db");

$state=isset($_GET["state"]) ? $_GET['state'] : '';
$district1=isset($_GET["district1"]) ? $_GET['district1'] : '';
$subdistrict1=isset($_GET["subdistrict1"]) ? $_GET['subdistrict1'] : '';
$block1=isset($_GET["block1"]) ? $_GET['block1'] : '';
if($state!="")
{
        $res=mysqli_query($link,"select *from district where state_id=$state");
        echo "<select id='districtdd' onChange='change_district()'>";
      
        while($row=mysqli_fetch_array($res))
        {
            echo "<option value='$row[id]' >"; echo $row{"name"}; echo "</option>";
        }
        echo "</select>";
}
if($district1!="")
{
        $res=mysqli_query($link,"select *from subdistrict where district_id=$district1");
        
        echo "<select id='subdistrictdd' onChange='change_subdistrict()'>";
     
        while($row=mysqli_fetch_array($res))
        {
            echo "<option value='$row[id]' >"; echo $row{"name"}; echo "</option>";
        }
        echo "</select>";
}
if($subdistrict1!="")
{
        $res=mysqli_query($link,"select *from block where subdi_id=$subdistrict1");
       
        echo "<select id='blockdd' onChange='change_block()'>";
        while($row=mysqli_fetch_array($res))
        {
            echo "<option value='$row[id]' >"; echo $row{"name"}; echo "</option>";
        }
        echo "</select>";
}
if($block1!="")
{
        $res=mysqli_query($link,"select *from village where block_id=$block1");
        echo "<select>";
     
        while($row=mysqli_fetch_array($res))
        {
            echo "<option value='$row[id]' >"; echo $row{"name"}; echo "</option>";
        }
        echo "</select>";
}
?>
