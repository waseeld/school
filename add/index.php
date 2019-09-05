<?php
include '../templet/hedder.php';
?>
<link rel="stylesheet" href="style.css" />
<div>
<form action='add.php' method='get'>
  <div class='form-group'>
    <label for='exampleInputEmail1'>أسم صاحب الكلمة: </label>
    <input type='text' class='form-control' name='user' aria-describedby='emailHelp' placeholder='أسم صاحب الكلمة....'>
    
  </div>
  <div class='form-group'>
    <label for='exampleInputPassword1'>الكلمة بالانجليزي:</label>
    <input type='text' class='form-control' name='word' placeholder='الكلمة بالانجليزي...'>
  </div>
  <div class='form-group'>
    <label for='exampleInputPassword1'>الكلمة بالعربي:</label>
    <input type='text' class='form-control' name='ar' placeholder='الكلمة بالعربي..'>
  </div>

  <button type='submit' class='btn btn-primary'>حفظ</button>
</form>
<div>
<?php
include '../templet/footer.php';
?>