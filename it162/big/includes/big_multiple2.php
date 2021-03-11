<?php
/**
 * multiple.php is a postback application designed to provide a 
 * contact form for users to email our clients.  
 * 
 * multiple.php provides a larger form with more elements to provide 
 * a richer example form.
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 2 2019/10/13
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @todo none
 */

#--------------END CONFIG AREA ------------------------#
?>

<!-- START HTML FORM -->
<form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">

<div id="font">
    <label class="fontstyle">
    Name, address, phone and email to appear on your website:<br /><input type="text" class="fieldsize" name="Website Contact Info" tabindex="10" size="44" autofocus />
    </label>
</div>

<div>	
    <label>
    Social Media Site(s) (Busines Related):<br /><input type="text" name="Social Media" class="fieldsize4" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
	
    <label>
   What are your Business Hours? <br /><input type="text" name="Descript" class="fieldsize4" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>

<div>	
    <label>
    How would you define your business and what you have to offer in 1-2 sentences? <br /><input type="text" name="Descrip" class="fieldsize2 " title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>

<div>	    
    <fieldset>
        <legend> Will you be offering any additional services?</legend>
        <input type="radio" name="Yes" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="No" value="No" /> No <br />
    </fieldset>

</div>

<div>
    <label>
  If yes, please describe <br /><textarea name="Additional Services" cols="50" rows="8" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
    </label>
</div>


<!--
<div>	
    <label>
        How Did You Hear About Us?:<br />
        <select name="How_Did_You_Hear_About_Us?" required="required" title="How You Heard is required" tabindex="30">
            <option value="">Choose How You Heard</option>
            <option value="Phone">Phone</option>
            <option value="Web">Web</option>
            <option value="Magazine">Magazine</option>
            <option value="A Friend">A Friend</option>
            <option value="Other">Other</option>
        </select>
    </label>
</div> -->

<!-- <div>	
    <fieldset>
        <legend>What Services Are You Interested In?</legend>
        <input type="checkbox" name="Interested_In[]" value="New Website" tabindex="40" /> New Website <br />
        <input type="checkbox" name="Interested_In[]" value="Website Redesign" /> Website Redesign <br />
        <input type="checkbox" name="Interested_In[]" value="Special Application" /> Special Application <br />
        <input type="checkbox" name="Interested_In[]" value="Lollipops" /> Complimentary Lollipops <br />
        <input type="checkbox" name="Interested_In[]" value="Other" /> Other <br />
    </fieldset>
</div> -->

<!-- <div>	
    <fieldset>
        <label>Would you like to join our mailing list?</legend>
        <input type="radio" name="Join_Mailing_List?" value="Yes" 
        required="required" title="Mailing list is required" tabindex="50"  
        /> Yes <br />
        <input type="radio" name="Join_Mailing_List?" value="No" /> No <br />
    </fieldset>
</div> -->
<div>	
    <label>
        Comments:<br /><textarea name="Comments" cols="36" rows="4" placeholder="Your comments are important to us!" tabindex="60"></textarea>
    </label>
</div>	

<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>

<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

