<?php include ('main-header.php'); ?>
<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--Append to the common top HTML-->
<div class="page">
<!--Concatenate with the particular page HTML followed by the FOOTER HTML-->
<!--<div><img src="./images/ssh-banner.jpg" title="SSH Department IIITD"/></div> -->
<!--<div><a href="https://iiitd.ac.in/events/gisworkshop" target="_blank"><img src="./images/Training Course on Remote Sensing.jpg" title="SSH Department IIITD"/></a></div> -->
    <!--<div><a href="https://iiitd.ac.in/webstory/wpct" target="_blank"><img src="https://iiitd.ac.in/sites/default/files/images/events/wpctbanner.jpg" title="Workshop on Philosophy and Cyber-Technology, SSH Department IIITD"/></a></div> -->
    <br>
    <div class="container" style="width: 900px; height: 50px;margin-left: 20px;">
    
    <input type="radio" id="i1" name="images" checked />
    <input type="radio" id="i2" name="images" />
    <input type="radio" id="i3" name="images" />
    <input type="radio" id="i4" name="images" />
    <input type="radio" id="i5" name="images" />    
    
    <div class="slide_img" id="one">            
            
            <img src="./gallery/1.jpeg">
            
                <label class="prev" for="i5"><span>&#x2039;</span></label>
                <label class="next" for="i2"><span>&#x203a;</span></label>  
        
    </div>
    
    <div class="slide_img" id="two">
        
            <img src="./gallery/2.jpg" >
            
                <label class="prev" for="i1"><span>&#x2039;</span></label>
                <label class="next" for="i3"><span>&#x203a;</span></label>
        
    </div>
            
    <div class="slide_img" id="three">
            <img src="./gallery/3.jpeg">  
            
                <label class="prev" for="i2"><span>&#x2039;</span></label>
                <label class="next" for="i4"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="four">
            <img src="./gallery/4.jpeg"> 
            
                <label class="prev" for="i3"><span>&#x2039;</span></label>
                <label class="next" for="i5"><span>&#x203a;</span></label>
    </div>

    <div class="slide_img" id="five">
            <img src="./gallery/5.jpeg">  
            
                <label class="prev" for="i4"><span>&#x2039;</span></label>
                <label class="next" for="i1"><span>&#x203a;</span></label>

    </div>

    <div id="nav_slide">
        <label for="i1" class="dots" id="dot1"></label>
        <label for="i2" class="dots" id="dot2"></label>
        <label for="i3" class="dots" id="dot3"></label>
        <label for="i4" class="dots" id="dot4"></label>
        <label for="i5" class="dots" id="dot5"></label>
    </div>
        
</div>


    <!--<div class="images">
        <div style="height:200px; float:right; margin-left: 5px; margin-top: 10px; margin-right: 10px; margin-bottom: 5px; border: 1px solid rgb(0, 0, 0);" id="CSSSBackground">
		<img src="./images/cse_iiitd.jpg" alt="CSE Image Slider" />
        </div>
    </div>  -->
<br><br>
<div class="welcome">
       <!-- <h1>Welcome !</h1> -->
        <p align="justify">The Department of Social Science and Humanities (SSH) at the Indraprastha Institute of Information Technology (IIIT Delhi) is home to a multi-disciplinary faculty offering courses and conducting research in Economics, Sociology and Psychology and also broader areas such as Liberal Arts, Communications and the Humanities.</p>
        <p><a href="ssh-about.php">Read More...</a></p>
        <br>
    </div>
<div style="clear:both;"></div>

<div class="newsa" style="overflow:scroll;">
        <h1>Latest News</h1>
        <div class="news_body">
        <ul>
            <p>
		<?php
            require_once 'Classes/PHPExcel.php';

            $excel = PHPExcel_IOFactory::load('news.xlsx');
            $excel->setActiveSheetIndex(0);
            echo "<table borders>";
            $i = 1;
            while($i != 5)
            {
              $name = $excel->getActiveSheet()->getCell('A'.$i)->getValue();

              echo "<tr><td>".$name."</td></tr>";
              echo "
                <tr>
                  <td><a href = ".$name."></a></td>
                </tr>
              ";
              $i++;
            }

            echo "</table borders>";
            ?>
        </ul>
    </p>
        </div>
    </div>
	
	<div class="newsa" style="overflow:scroll;" >
        <h1><a href="ssh-pub.php" target="_blank" style="color:#3fada8;">Events/ Seminar Corner</a></h1>
        <div class="news_body">
        <ul>
            <p>
        <?php
            require_once 'Classes/PHPExcel.php';

            $excel = PHPExcel_IOFactory::load('seminars.xlsx');
            $excel->setActiveSheetIndex(0);
            echo "<table borders>";
            $i = 2;
            while($i != 5)
            {
              $name = $excel->getActiveSheet()->getCell('D'.$i)->getValue();

              echo "<tr><td>".$name."</td></tr>";
              echo "
                <tr>
                  <td><a href = ".$name."></a></td>
                </tr>
              ";
              $i++;
            }

            echo "</table borders>";
            ?>
        </ul>
    </p>
        </div>
    </div>
	
	<div class="newsa">
        <h1><a href="https://www.iiitd.ac.in/research/publications" target="_blank" style="color:#3fada8;">Recent Publications</a></h1>
        <div class="news_body">
        <ul>
            <p>
        <?php
            require_once 'Classes/PHPExcel.php';

            $excel = PHPExcel_IOFactory::load('publications.xlsx');
            $excel->setActiveSheetIndex(0);
            echo "<table borders>";
            $i = 1;
            while($i != 5)
            {
              $name = $excel->getActiveSheet()->getCell('A'.$i)->getValue();

              echo "<tr><td>".$name."</td></tr>";
              echo "
                <tr>
                  <td><a href = ".$name."></a></td>
                </tr>
              ";
              $i++;
            }

            echo "</table borders>";
            ?>
        </ul>
    </p>
        </div>
    </div>
	<?php include ('main-footer.php'); ?>
	
</div><!--content End-->

</div>
</body>
</html>