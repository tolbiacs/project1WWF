<h4> Donor Information </h4>
<label for ="donor_firstname"> 
    First Name 
    <input type="text" name="donor_firstname" id="donor_firstname"/> 
</label>
<label for ="donor_address1"> 
    Address 1
    <input type="text" name="donor_address1" id="donor_address1"/> 
</label>
<label for ="donor_city"> 
    City
    <input type="text" name="donor_city" id="donor_city"/> 
</label>
<label for ="donor_country"> 
    Country <?php
    include 'country_list.php';
    ?>
</label>
<label for ="donor_lastname"> 
    Last Name 
    <input type="text" name="donor_lastname" id="donor_lastname"/> 
</label>
<label for ="donor_address2"> 
    Address 2 
    <input type="text" name="donor_address2" id="donor_address2"/> 
</label>
<label for ="donor_state"> 
    State 
    <input type="text" name="donor_state" id="donor_state"/> 
</label>
<label for ="donor_state"> 
    ZIP 
    <input type="text" name="donor_zip" id="donor_zip"/> 
</label>
<label for ="donor_email"> 
    Email
    <input type="email" name="donor_email" id="donor_email"/> 
</label>
<label for ="donor_receive_news">
    <input type="checkbox" name="donor_receive_news" id="donor_receive_news"/>
    Send me email about important conservation news and how I can help WWF protect the diversity of life on Earth.
</label>