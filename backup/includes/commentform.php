
 <h2>Contact Us</h2>

<form action="gdform.php" id="form-contact" method="post"> 
<input type="hidden" name="subject" value="Concept Effects - Form Submission" /> 
<input type="hidden" name="redirect" value="ThankYou.php" />
<input type="hidden" name="email" value="admin@concepteffects.com" />
   <fieldset id="contacts-form">

   <div class="rowElem">
      <label>Name:</label>
      <input name="Name" type="text" id="Name" class="text" />    
   </div>

   <div class="rowElem">
      <label>E-mail:</label>
      <input name="Email" type="text" id="Email" class="text" />
   </div>

   <div class="rowElem">
      <label>Phone:</label>
      <input name="Phone" type="text" id="Phone" class="text" />
   </div>

   <div class="rowElem">
      <label>Date of Event:</label>
      <input name="Date" type="text" id="Date" class="text" />
   </div>

   <div>
      <label>Message:</label>
      <textarea name="tbComment" rows="1" cols="1" id="tbComment"></textarea>
   </div>

   <div class="button">
      <a id="lbSend" href="javascript:document.getElementById('form-contact').submit();" onClick="document.getElementById('form-contact').submit();">SEND</a>
      <a href="#" onClick="document.getElementById('form-contact').reset(); return false;">clear</a>
   </div>

   </fieldset>
</form>
