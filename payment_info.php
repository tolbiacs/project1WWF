<h6> Payment Information </h6>
<div id="payment_type">
    <label for ="credit_cards" id="credit_card_payment">
    Choose a Payment Type:
    </label> <br>
    <input type="radio" name="payment_options" id="credit_cards">
    <img src="https://support.worldwildlife.org/images/visa_small.gif" alt="Visa">
    <img src="https://support.worldwildlife.org/images/discovercard_sm.gif" alt="Discover Card">
    <img src="https://support.worldwildlife.org/images/mastercd_small.gif" alt="Master Card">
    <img src="https://support.worldwildlife.org/images/amex_small.gif" alt="Amex">
    
    <input type="radio" name="payment_options" id="bank_account_withdrawal">
    <label for ="bank_account_withdrawal" id="payment_options">
        Bank Account Withdrawal 
    </label> 
    <input type="radio" name="payment_options" id="paypal"> 
    <img src="https://support.worldwildlife.org/images/payment/paypal-logo.png" alt="PayPal">
    <br>
    <label for ="credit_card_number" id="cc_number_payment">
        <span class="red_star">*</span>Credit Card Number
    </label> 
    <input type="text" name="credit_card_number" id="credit_card_number"><br>
    <label for ="exipiration_date" id="cc_expiration_payment">
        <span class="red_star">*</span>Expiration Date
    </label> 
    <select name="cc_month" id="cc_month">
        <?php
            $month = date('n');
            for($i=1; $i<=12; $i++) {
                if ( $i == $month) {
                    echo "<option value='".$i."' selected>".$i."</option>";
                }
                else{
                    echo "<option value='".$i."'>".$i."</option>";
                }
            }
        ?>
    </select>
    <select name="cc_year" id="cc_year">
        <?php
            $year = date('Y');
            for($i=2018; $i<=2028; $i++) {
                if ( $i == $year) {
                    echo "<option value='".$i."' selected>".$i."</option>";
                }
                else{
                    echo "<option value='".$i."'>".$i."</option>";
                }
            }
        ?>
    </select><br>
    <label for="cw_cc_number" id="cw_cc_payment">
        <span class="red_star">*</span>CVV Number
    </label><br>
    <a href = "" target="_blank"> What is CW number? </a>
    <input type="text" name="cw_cc_number" id="cw_cc_number">
    <br>
    <input type="submit" name="submit_button" id="submit_button" value="Submit"/>
</div>