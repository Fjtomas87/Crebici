<?php

$p = "inicio";


if(isset($_GET['p'])){
	$p=$_GET['p'];
}



?>
<div>
    <h2>Nuevos modelos</h2>
    <p> </p>
    
    <!-- slideshow de imagenes con libreria wowslider de jquery  -->
<div id="wowslider-container1">
    <div class="ws_images">
           <ul>
                <li><img src="data1/images/bh_beartrack.jpg" alt="BH Beartrack" title="BH Beartrack" id="wows1_0"/></li>
                <li><img src="data1/images/bh_beartrakjet.jpg" alt="BH BeartrakJet" title="BH BeartrakJet" id="wows1_1"/></li>
                <li><img src="data1/images/bh_bolero.jpg" alt="BH bolero" title="BH bolero" id="wows1_2"/></li>
                <li><img src="data1/images/bh_gravel.jpg" alt="BH Gravel" title="BH Gravel" id="wows1_3"/></li>
                <li><img src="data1/images/bh_miami.jpg" alt="BH Miami" title="BH Miami" id="wows1_4"/></li>
                <li><img src="data1/images/cube_nature.jpg" alt="Cube Nature" title="Cube Nature" id="wows1_5"/></li>
                <li><a href="http://wowslider.net"><img src="data1/images/kross_flex.jpg" alt="jquery carousel" title="Kross Flex" id="wows1_6"/></a></li>
                <li><img src="data1/images/kross_pulso.jpg" alt="Kross Pulso" title="Kross Pulso" id="wows1_7"/></li>
            </ul>
        </div>
        <div class="ws_bullets">
           <div>
            <a href="#wows1_0" title="BH Beartrack"><span><img src="data1/tooltips/bh_beartrack.jpg" alt="BH Beartrack"/>1</span></a>
            <a href="#wows1_1" title="BH BeartrakJet"><span><img src="data1/tooltips/bh_beartrakjet.jpg" alt="BH BeartrakJet"/>2</span></a>
            <a href="#wows1_2" title="BH bolero"><span><img src="data1/tooltips/bh_bolero.jpg" alt="BH bolero"/>3</span></a>
            <a href="#wows1_3" title="BH Gravel"><span><img src="data1/tooltips/bh_gravel.jpg" alt="BH Gravel"/>4</span></a>
            <a href="#wows1_4" title="BH Miami"><span><img src="data1/tooltips/bh_miami.jpg" alt="BH Miami"/>5</span></a>
            <a href="#wows1_5" title="Cube Nature"><span><img src="data1/tooltips/cube_nature.jpg" alt="Cube Nature"/>6</span></a>
            <a href="#wows1_6" title="Kross Flex"><span><img src="data1/tooltips/kross_flex.jpg" alt="Kross Flex"/>7</span></a>
            <a href="#wows1_7" title="Kross Pulso"><span><img src="data1/tooltips/kross_pulso.jpg" alt="Kross Pulso"/>8</span></a>
            </div>
        </div>

</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!--  -->

   

    
    
</div>
