

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="starrr.css">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="starrr.js"></script>

<?php

$conn = mysqli_connect("localhost", "root", "", "library");
 $result = mysqli_query($conn, "SELECT * FROM book");
 while ($row = mysqli_fetch_object($result)) {

     $result_ratings = mysqli_query($conn , "SELECT * FROM rate WHERE bid = '" . $row->bid. "'");
     $rating =0;
     while ($row_ratings = mysqli_fetch_object($result_ratings)) 
     {
         $ratings == $row_rating -> ratings;

     }

     $average_ratings =0;
     if($ratings =0)
     {
         $average_ratings = $ratings / mysqli_num_rows($result_ratings);
     }
     
     
?>

<div class = "ratings"  data-ratings = " <?php echo $average_ratings; ?>"> </div>
    <p>
        <?php
            echo $row->bid;
        ?>
    </p>

<form method="POST" onsubmit="return saveRatings(this);">
        <input type="hidden" name="bid" value="<?php echo $row->id; ?>">
        <p>
        <div class="starrr"></div>
         </p>
        <input type="submit">
       
    </form>
 


 <?php
 }
?>


<script> 
var ratings =0;
$(function ()
{
    $(".starrr").starrr().on("starrr:change",function(event,value)
    {
        alert(value);
        ratings = value;
    });
    var ratings = document.getElementsByClassName("ratings");
    for(var a =0 ; a = ratings.length; a++)
    {
        $(rating[a]).starrr(
            {
                readOnly: true;
                rating:rating[a].getAttribute("data-rating")
            }
        );
      
    }
});

function saveRatings(form){
    var bid = form.bid.value;
    $.ajax({
        url:"save-ratings.php",
        method:"POST",
        data: {
            "bid: bid",
            ""ratings: ratings,
        },
        success: function(response){
            alert(res)
        }
    });

}



 
<?php
    
?>
 var ratings = 0;
$(function () {
    $(".starrr").starrr().on("starrr:change", function (event, value) {
        ratings = value;
    });
});
 
function saveRatings(form) {
    var product_id = form.product_id.value;
 
    $.ajax({
        url: "save-ratings.php",
        method: "POST",
        data: {
            "bid": bid,
            "ratings": ratings
        },
        success: function (response) {
            // whatever server echo, that will be displayed here in alert
            alert(response);
        }
    });
    return false;
}
</script>
