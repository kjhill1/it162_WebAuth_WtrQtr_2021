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
        Name:<br /><input type="text" name="Name" required="required" placeholder="Full Name (required)" title="Name is required" tabindex="10" size="44" />
    </label>
</div>
<div>	
    <label>
        Email:<br /><input type="email" name="Email" required="required" placeholder="Email (required)" title="A valid email is required" tabindex="20" size="44" />
    </label>
</div>
<div>	
    <label>
        Phone:<br /><input type="text" name="Phone" required="required" placeholder="Phone (required)" title="Phone" tabindex="20" size="44" />
    </label>
</div>	
 
    <label>
        How can I help?<br>
    </label>
    
   <div>
        <!-- <input type="radio" name="How can I help?" title="How You Heard is required" tabindex="30"> -->
            <input type="radio" name="Designing New Website" value="Designing New Website">Designing a New Website<br>
            <input type="radio" name="Building a New Website" value="Building a New Website">Building a New Websit<br>
            <input type="radio" name="Logo and Branding Services" value="Logo and Branding Services">Logo and Branding Services<br>
            <input type="radio" name="Other" value="Other">Other<br>
</div>
<div>	
    <p>
    <label>
        Tell me a bit about yourself and you goals for a web presence.<br /><textarea name="Comments" cols="36" rows="4" tabindex="60"></textarea>
    </label>
</p>
</div>	


<div class="g-recaptcha" data-sitekey="<?=$siteKey;?>"></div>
<div>
    <input type="submit" value="submit" />
</div>
</form>
<!-- END HTML FORM -->

