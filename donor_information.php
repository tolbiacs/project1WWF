<h6> Donor Information </h6>
<fieldset id="donor_info">
    <div>
        <label for ="donor_firstname"> 
        <span class="red_star">*</span>
        First Name 
        <input type="text" name="donor_firstname" id="donor_firstname"/> 
        </label>
    </div>
    <div>
        <label for ="donor_address1"> 
        <span class="red_star">*</span>
        Address 1
        <input type="text" name="donor_address1" id="donor_address1"/> 
        </label>
    </div>
    <div>
        <label for ="donor_city"> 
        <span class="red_star">*</span>
        City
        <input type="text" name="donor_city" id="donor_city"/> 
        </label>
    </div>
    <div>
        <label for ="donor_country"> 
        <span class="red_star">*</span>
        Country <?php
        include 'country_list.php';
        ?>
        </label>
    </div>
    <div>
        <label for ="donor_lastname"> 
        <span class="red_star">*</span>
        Last Name 
        <input type="text" name="donor_lastname" id="donor_lastname"/> 
        </label>
    </div>
    <div>
        <label for ="donor_address2"> 
        Address 2 
        <input type="text" name="donor_address2" id="donor_address2"/> 
        </label>
    </div>
    <div>
        <label for ="donor_state"> 
        <span class="red_star">*</span>
        State 
        <input type="text" name="donor_state" id="donor_state"/> 
        </label>
    </div>
    <div>
        <label for ="donor_state"> 
        <span class="red_star">*</span>
        ZIP 
        <input type="text" name="donor_zip" id="donor_zip"/> 
        </label>
    </div>
    <div>
        <label for ="donor_email"> 
        <span class="red_star">*</span>
        Email
        <input type="email" name="donor_email" id="donor_email"/> 
        </label>
    </div>
    <div>
        <input type="checkbox" name="donor_receive_news" id="donor_receive_news"/>
        <label for ="donor_receive_news">
        <span> Send me email about important conservation news and how I can help WWF protect the diversity of life on Earth.</span>
        </label>
    </div>
</fieldset>