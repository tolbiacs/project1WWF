<h6> Your Monthly Donation </h6>    
<fieldset id="amount_wrapper">  
    <div class="select_amount">
        <input type='radio' name='donate_dollars' id='ten_dollars' class='bucks' value='$10'>
        <label for="ten_dollars">$10</label>
    </div>
    <div class="select_amount">
        <input type='radio' name='donate_dollars' id='fifteen_dollars' class='bucks' value='$15'>
        <label for="fifteen_dollars">$15</label>
    </div>
    <div class="select_amount">
        <input type='radio' name='donate_dollars' id='twenty_dollars' class='bucks' value='$20'>
        <label for="twenty_dollars">$20</label>
    </div>
    <div class="select_amount">
        <input type='radio' name='donate_dollars' id='twenty5_dollars' class='bucks' value='$25'>
        <label for="twenty5_dollars">$25</label>
    </div>
    <div class="select_amount">
        <input type='radio' name='donate_dollars' id='fifty_dollars' class='bucks' value='$50'>
        <label for="fifty_dollars">$50</label>
    </div>
    <div class="select_amount">
        <input type='radio' name='donate_dollars' id='other_amount' class='bucks' value='OTHER'>
        <label for="other_amount">OTHER</label>
    </div>
</fieldset>
<script>
var select_amount = document.querySelectorAll(".select_amount");
for (var i=0; i<select_amount.length; i++){
    select_amount[i].addEventListener('click', function(e){
        if (e.target.parentNode.nodeName == "DIV") {
            e.target.parentNode.style.backgroundColor="red";
        }
        else {
            e.target.style.backgroundColor="red";
        }
        
    });
}
</script>