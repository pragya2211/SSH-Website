<?php include ('main-header.php'); ?>
<div class="page">

<style>
#pbox { width:25%; float:left; border:1px solid #ccc; padding:5px; margin:1px 20px 20px 1px; border-radius: 10px; box-shadow: 2px 5px #888888; height:320px; overflow:auto;}
#pbox img { padding:10px; }
/*#pbox:hover { background-color:#3fada8; color:#fff;}*/
#pbox:hover { font-weight:bold;}

.alignleft {border-radius: 8px;}
</style>
<h1>Btech Students</h1>

<div id="cards-container">

	<div class="card rteleft facultycard" style="height:1000px; width:245px; overflow: scroll;">
		<h3>2019</h3>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('btech-19.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $id = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  echo "
			    <tr>
			      <td>".$id." </td>
			      <td>".$name." </td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</div>
	<div class="card rteleft facultycard" style="height:1000px; width:245px;overflow: scroll;">
		<h3>2018</h3>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('btech-18.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $id = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  echo "
			    <tr>
			      <td>".$id." </td>
			      <td>".$name." </td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</div>
	<div class="card rteleft facultycard" style="height:1000px; width:245px;overflow: scroll;">
		<h3>2017</h3>
		<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('btech-17.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 2;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $id = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
			  $name = $excel->getActiveSheet()->getCell('B'.$i)->getValue();
			  echo "
			    <tr>
			      <td>".$id." </td>
			      <td>".$name." </td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</div>

	<?php include ('main-footer.php'); ?>
</div><!--page content End-->

</div>
</body>
</html>