<?php include ('main-header.php'); ?>
<div class="page">

<h3>LATEST NEWS</h3>
<style>
tr,td { border:1px solid;}
</style>
<?php
require_once 'Classes/PHPExcel.php';

$excel = PHPExcel_IOFactory::load('news.xlsx');
$excel->setActiveSheetIndex(0);
echo "<table borders>";
$i = 1;
while($excel->getActiveSheet()->getCell('A'.$i)->getValue()!= "")
{
  $id = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
  echo "
    <tr>
      <td>".$id." </td>
    </tr>
  ";
  $i++;
}

echo "</table borders>";
?>
  
  
</table>
<?php include ('main-footer.php'); ?>
	
</div><!--page content End-->

</div>
</body>
</html>