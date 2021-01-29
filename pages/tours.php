<?php
$link = connect();
$sel1 = "SELECT * FROM Countries";
$res = mysqli_query($link, $sel1);
echo "<select name='countryid' onchange='showCities(this.value)'>";
echo "<option value='0'>Выберите страну...</option>";
while ($row = mysqli_fetch_array($res, MYSQLI_NUM)) {
    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
}
echo "</select>";
echo "<select name='cityid' onchange='showCities(this.value)' id='cityid'>";
echo "</select>";

// echo "</select>";
// echo "<select name='cityid' onchange='showHotels(this.value)' id='cityid'>";
// echo "</select>";

?>
<script>
async function showCities(val){
    let response=await fetch("pages/ajax1.php?cid="+val, {method: "GET"});
    if(response.ok===true){
        let content=await response.text();
        let citySelect=document.getElementById("cityid");
        citySelect.innerHTML=content;
    }
}

async function showHotels(val){
    let formData=new FormData();
    formData.append("arg1", val);
    let response=await fetch("pages/ajax2.php", {method: "POST", body: formData});
    if(response.ok===true){
        let content=await response.text();
        console.log(content);
        let resDiv=document.getElementById("res");
        resDiv.innerHTML=content;
    }
}
</script>