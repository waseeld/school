<?php
include '../templet/hedder.php';

?>
<script>
document.title = "قائمة المساهمين"
</script>
<body>
  
	 <link href="style.css" rel="stylesheet" />
<script src="https://kit.fontawesome.com/9c59c6efe7.js"></script>
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center"><a href="#custom-modal" class="btn btn-custom waves-effect waves-light mb-4" data-animation="fadein" data-plugin="custommodal" data-overlayspeed="200" data-overlaycolor="#36404a"><i class="mdi mdi-plus"></i> قائمة المساهمين</a></div>
            <!-- end col -->
        </div>
        <!-- end row -->
		<div class="row">
<?php 
$db = new SQLite3('../data/word.db');
function number() {
$x = 0;
echo ++$x;
}
$res = $db->query('SELECT * FROM user ORDER BY words DESC');
while ($row = $res->fetchArray() and $x < 99) {
$ress = $db->query('SELECT count(user) FROM words WHERE user="'.$row[1].'"');
$rows = $ress->fetchArray();
$words = $rows['0'];
$point = $words * 3;

	echo '
            <div class="col-lg-4">
                <div class="text-center card-box">
                    <div class="member-card pt-2 pb-2">
                        <div class="thumb-lg member-thumb mx-auto"><img src="'.$row['7'].'" class="rounded-circle img-thumbnail" alt="profile-image"></div>
                        <div class="">
                            <h4>'.$row['1'].'</h4>
                            <p class="text-muted">@'.$row['8'].' <span>| </span><span><a href="#" class="text-pink"></a></span></p>
                        </div>
                        <ul class="social-links list-inline">
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="'.$row[4].'" target="_brack" data-original-title="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="'.$row[3].'" target="_brack" data-original-title="Twitter"><i class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="https://wa.me/'.$row[5].'" target="_brack"  data-original-title="whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                        </ul>
                        <button type="button" class="btn btn-primary mt-3 btn-rounded waves-effect w-md waves-light">'.$row[2].'</button>
                        <div class="mt-4">
                            <div class="row">
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>'.$point.'</h4>
                                        <p class="mb-0 text-muted">النقاط</p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>'.$words.'</h4>
                                        <p class="mb-0 text-muted">الكلمات </p>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mt-3">
                                        <h4>#'.++$x.'</h4>
                                        <p class="mb-0 text-muted">ترتيب</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			            <!-- end col -->
          
        ';

}
?>
      
 </div> 
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="text-right">
                    <ul class="pagination pagination-split mt-0 float-right">
                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span> <span class="sr-only">Previous</span></a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span> <span class="sr-only">Next</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- container -->
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>