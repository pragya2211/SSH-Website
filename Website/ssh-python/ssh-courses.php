<?php include ('main-header.php'); ?>
<div class="page">

<style>
#pbox { width:25%; float:left; border:1px solid #ccc; padding:5px; margin:1px 20px 20px 1px; border-radius: 10px; box-shadow: 2px 5px #888888; height:320px; overflow:auto;}
#pbox img { padding:10px; }
/*#pbox:hover { background-color:#3fada8; color:#fff;}*/
#pbox:hover { font-weight:bold;}

.alignleft {border-radius: 8px;}
</style>
<br>
<h1>SSH Courses</h1>

<div id="cards-container">

	<div class="card rteleft facultycard" style="height:400px; width:160px; overflow: scroll;margin-left: 10px;">
		<h3>Economics</h3>
		<br>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('courses-economics.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  $name_course = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
			  echo "
			    <tr>
			      <td><a href = ".$name.">".$name_course." </a></font></td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</div>
	<div class="card rteleft facultycard" style="height:400px; width:160px; overflow: scroll;">
		<h3>Psychology</h3>
		<br>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('courses-psychology.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  $name_course = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
			  echo "
			    <tr>
			      <td><a href = ".$name.">".$name_course." </a></td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</div>
	<div class="card rteleft facultycard" style="height:400px; width:160px; overflow: scroll;">
		<h3>Sociology</h3>
		<br>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('courses-sociology.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  $name_course = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
			  echo "
			    <tr>
			      <td><a href = ".$name.">".$name_course." </a></td>
			    </tr>
			  ";
			  $i++;
			}
			echo "</table borders>";
			?>
		</p>
	</div>
	<div class="card rteleft facultycard" style="height:400px; width:160px; overflow: scroll;">
		<h3>Liberal Arts,Communication and Humanities</h3>
		<br>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('courses-lach.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  $name_course = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
			  echo "
			    <tr>
			      <td><a href = ".$name.">".$name_course." </a></td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</div>
</div>
<h3>For more detailed description of the courses, please visit this <a target="_blank" href="https://iiitd.ac.in/courserepo/ssh.php">link</a></h3>


<!---<div class="rtejustify" id="id1"><iframe id="img1" src="" style="border: none; width: 100%; height: 5800px;"></iframe></div>
<script type="text/javascript">

function pic2(){
document.getElementById("img1").src="https://iiitd.ac.in/courserepo/ssh.php";
document.getElementById("id1").style.display="block";
}

window.onload = function () {
pic2()
}
</script>--->

<?php include ('main-footer.php'); ?>
	
</div><!--page content End-->

</div>
</body>
</html>