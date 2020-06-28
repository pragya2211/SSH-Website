<?php include ('main-header.php'); ?>
<div class="page">
	
<h1>Publications</h1>
<div class="newsa" style="overflow:scroll;">
        <h1>2020</h1>
        <div class="news_body">
        <ul>
<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('publications_2020.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 1;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $name = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
			  echo "
			    <tr>
			      <td> ".$name." </td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</ul>
</div>
</div>


<div class="newsa" style="overflow:scroll;">
        <h1>Before 2020</h1>
        <div class="news_body">
        <ul>
<p>
			<?php
			require_once 'Classes/PHPExcel.php';

			$excel = PHPExcel_IOFactory::load('publications_before2020.xlsx');
			$excel->setActiveSheetIndex(0);
			echo "<table borders>";
			$i = 1;
			while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
			{
			  $name = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
			  echo "
			    <tr>
			      <td> ".$name." </td>
			    </tr>
			  ";
			  $i++;
			}

			echo "</table borders>";
			?>
		</p>
	</ul>
</div>
</div>


<?php include ('main-footer.php'); ?>
	
</div><!--page content End-->

</div>
</body>
</html>