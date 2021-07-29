<form  action='thanks.php'  method='post'>

<div>
  <label  for='nom'>Nom :</label>
    <input  type='text'  id='nom'  name='user_name'>
</div>

<div>
  <label  for='courriel'>Courriel :</label>
    <input  type='email'  id='courriel'  name='user_email'>
</div>

<div>
  <label for="phone">Phone</label>
    <input type="tel" id="phone" class="phone" name='user_phone'>
</div>


  <div>
    <select name="user_topic" id="object">
      <option name='user_option' value="firstTopic">topic</option>
      <option name='user_option' value="secondTopic">topic</option>
      <option name='user_option' value="thirdTopic">topic</option>
    </select>
  </div>
  
  <div>
    <label  for='message'>Message :</label>
    <textarea  id='message'  name='user_message'></textarea>
</div>

<div  class='button'>

  <button type='submit'>Envoyer votre message</button>

</div>
</form>
<?php

var_dump($_POST);

 ?>