<?php
    include_once 'header.php';
?>
	<div class="row" id="main-container">
		<div id="brainMap">
			<h1><i>Homo sapiens</i> smegenys</h1><img id="humanBrain" src="images/humanBrainSVG.svg" usemap="#humanBrain"> <map id="humanBrain" name="humanBrain">
				<area alt="Smegenėlės" coords="350,206,330,199,317,198,310,199,302,198,296,202,289,205,282,211,277,218,272,224,266,227,260,230,249,231,239,230,234,236,239,240,240,249,247,254,251,257,260,258,266,259,273,264,278,264,291,264,300,261,309,258,315,254,323,250,330,244,338,239,344,228" href="https://en.wikipedia.org/wiki/Cerebellum" shape="poly" target="_blank" title="Smegenėlės">
				<area alt="Smegenų kamienas" coords="250,273,227,238,239,247,249,255,262,258,273,264,281,265,292,274,285,285,272,287,229,259,220,248,222,235,234,230" href="https://en.wikipedia.org/wiki/Brainstem" shape="poly" target="_blank" title="Smegenų kamienas">
				<area alt="Smilkininė skiltis" coords="158,138,154,141,140,149,130,165,122,173,109,185,101,200,95,215,96,224,105,233,111,236,120,241,132,242,141,244,154,242,164,241,180,244,187,238,196,233,219,243,221,235,234,230,247,229,261,229,272,223,279,214,286,207,300,199,340,199,351,200,349,203,359,197,370,188,348,180,337,173,325,171,321,163,318,155,316,143,309,139,303,132,297,130,290,129,283,128,276,127,266,127,257,125,247,124,232,123,220,125,217,127,213,132,193,136,185,127,175,128,168,130,163,132,158,136" href="https://en.wikipedia.org/wiki/Temporal_lobe" shape="poly" target="_blank" title="Smilkininė skiltis">
				<area alt="Pakaušinė skiltis" coords="314,103,318,99,321,93,328,88,332,84,337,79,343,76,352,73,358,73,366,79,371,85,371,92,371,98,378,99,382,104,383,110,384,117,386,123,388,132,385,139,387,147,387,154,386,162,384,168,378,178,374,186,366,185,357,181,347,177,339,173,330,170,322,158,316,149,312,138,306,132,301,128,302,121,305,114,309,108,312,105" href="https://en.wikipedia.org/wiki/Occipital_lobe" shape="poly" target="_blank" title="Pakaušinė skiltis">
				<area alt="Momeninė skiltis" coords="224,4,234,3,241,3,249,5,256,9,263,9,271,10,280,14,287,17,293,19,299,21,304,24,311,28,315,33,318,39,323,43,330,46,336,48,341,53,345,57,349,62,357,74,347,71,343,75,337,79,330,84,326,89,320,93,318,99,313,104,308,110,304,117,302,122,303,132,294,130,287,127,280,127,272,126,262,126,254,124,243,123,233,123,221,125,211,133,205,134,203,134,192,134,187,126,183,127,180,124,178,122,174,116,170,116,166,118,165,110,165,103,168,95,175,92,182,91,184,82,185,75,186,67,187,61,190,48,188,44,185,41,180,37,179,28,182,23,198,21,209,4,202,14,210,2,213,4,227,3,168,114,180,124,183,127,168,115,169,114,218,21" href="https://en.wikipedia.org/wiki/Parietal_lobe" shape="poly" target="_blank" title="Momeninė skiltis">
				<area alt="Kaktinė skiltis" coords="4,117,4,123,2,130,0,141,1,149,0,162,2,171,6,184,10,192,12,198,17,202,23,206,31,210,40,212,54,212,61,209,72,208,81,206,88,205,96,203,100,197,105,188,113,179,120,172,128,166,132,160,137,151,144,145,153,140,158,133,165,131,172,128,179,126,176,118,166,115,165,102,168,95,176,91,183,85,184,75,185,65,187,58,189,50,185,41,178,36,179,26,185,21,192,20,201,15,205,7,198,5,190,8,181,10,173,11,163,12,148,14,139,17,129,19,119,18,108,26,97,30,85,35,76,37,66,41,57,50,50,56,45,62,39,69,33,74,29,79,22,85,16,91,14,100,10,107" href="https://en.wikipedia.org/wiki/Frontal_lobe" shape="poly" target="_blank" title="Kaktinė skiltis">
			</map>
		</div>
		<div id="chooseBrains">
			<h2>Kieno smegenis norite analizuoti?</h2><select id="chooseBrainsMenu">
				<option value="">
					Pasirinkite
				</option>
				<option value="index.php">
					Žmogaus
				</option>
				<option value="dog.php">
					Šuns
				</option>
				<option value="frog.php">
					Varlės
				</option>
			</select><br>
			<button id="executeLink">Analizuoti!</button>
		</div>
		<section class="writeUs">
			<h2><a href="form/public/form.php">Parašykite mums!</a></h2>
		</section>
        <?php
            include_once 'footer.php';
		?>