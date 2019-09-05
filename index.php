<?php

$db = new SQLite3('data/word.db');

//$db->exec("CREATE TABLE words(id INTEGER PRIMARY KEY, user TEXT, word TEXT, ar TEXT)");

/*$stm = $db->prepare("INSERT INTO words(user, word, ar) VALUES (?, ?, ?)");
$stm->bindParam(1, $user);
$stm->bindParam(2, $word);
$stm->bindParam(3, $ar);
$user = 'واصل';
$word = 'guys';
$ar = "رفاق";
$stm->execute();

$user = 'واصل';
$word = 'gays';
$ar = "مثليين جنسيين";
$stm->execute();
*/

include 'templet/hedder.php';
?>
        <script src="https://code.responsivevoice.org/responsivevoice.js?key=2kIG5XHy"></script>
        <script>
		function vio(spek)
		{
            return responsiveVoice.speak(spek, "US English Female", {rate: 0.75}, {pitch: 2});
		}
		</script>
<h1 style="text-align: center;">كلمات ومعانيها</h1>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">صاحب الكلمة</th>
            <th scope="col">الكلمة</th>
            <th scope="col">معناها</th>
          </tr>
        </thead>
        <tbody>
<?php
function rowss() 
{
	
}
$res = $db->query('SELECT * FROM words');
while ($row = $res->fetchArray()) {
	
	echo ' <tr>
                <th scope="row">'.$row[0].'</th>
                <td>'.$row[1].'</td>
                <td>'.str_replace("-"," ",$row[2]).'<br /><button onclick=vio("'.$row[2].'") type="button" value="Play">🔊</button></td>
                <td>'.$row[3].'</td>
              </tr>';
    //echo "{$row[0]} {$row[1]} {$row[2]}\n";
}
require 'templet/footer.php';