<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
document.title = "اضافة كلمة"
</script>
<?php
include '../templet/hedder.php';

$db = new SQLite3('../data/word.db');
$was = $db->query('SELECT word FROM words WHERE word="'.$_GET['word'].'";');
echo $was1 = count($was->fetchArray());
//$db->exec("CREATE TABLE words(id INTEGER PRIMARY KEY, user TEXT, word TEXT, ar TEXT)");
if($_GET['user'] and $_GET['word'] and $_GET['ar'] != '')
{
	if($was1 != 1)
	{
		echo "<script>
Swal.fire({
  title: 'الكلمة مكررة',
  text: 'للأسف الكلمة هذه مكررة حاول بكلمة آخرى',
  type: 'error',
  confirmButtonText: 'تمام'
})
</script>";
$url = 'index.php';
$time = 2;
header("refresh: $time; url=$url");
exit();

		
	}else{
		$stm = $db->prepare("INSERT INTO words(user, word, ar) VALUES (?, ?, ?)");
        $stm->bindParam(1, $user);
        $stm->bindParam(2, $word);
        $stm->bindParam(3, $ar);
        $user = $_GET['user'];
        $word = str_replace(" ","-",$_GET['word']);
        $ar = $_GET['ar'];
        $stm->execute();
		$stms = $db->query('UPDATE user SET words = words + 1  WHERE name="'.$_GET["user"].'"');
		
    	$db->close();
        unset($db);
		echo "
<script>
Swal.fire(
  'تم',
  'من المفترض أن تكون كلمتك تم اضافتها',
  'success'
)
</script>
";
$url = 'index.php';
$time = 2;
header("refresh: $time; url=$url");
exit();
	}
	
}else
{
	echo 'هناك خطأ ما';
}

require '../templet/footer.php';
?>

