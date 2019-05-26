<?php
    include_once 'header.php';
?>
	<div class="row" id="main-container">
		<div id="brainMap">
			<h1><i>Rana pipiens</i> smegenys</h1><img id="frogBrain" src="images/frogBrain.svg" usemap="#frogBrain"> <map id="frogBrain" name="frogBrain">
				<area alt="Uoslės traktas" coords="54,69,52,78,45,80,39,82,32,85,24,86,17,86,9,84,7,95,11,102,16,104,21,105,27,106,41,106,46,107,53,107,50,97,53,86" href="https://en.wikipedia.org/wiki/Olfactory_tract" shape="poly" target="_blank" title="Uoslės traktas">
				<area alt="Didžiosios smegenys" coords="55,106,52,99,52,91,53,81,52,71,57,65,66,61,71,55,76,49,81,44,88,41,95,39,103,37,108,33,114,32,123,32,131,32,139,32,145,34,152,39,152,46,149,54,147,61,146,68,145,76,142,84,140,91,135,98,127,104,120,106,104,105,80,107,67,110" href="https://en.wikipedia.org/wiki/Cerebral_hemisphere" shape="poly" target="_blank" title="Didžiosios smegenys">
				<area alt="Tarpinės smegenys" coords="152,37,152,48,149,56,147,62,146,73,142,85,134,95,135,101,146,102,156,98,159,89,161,80,162,68,161,58,161,47" href="https://en.wikipedia.org/wiki/Diencephalon" shape="poly" target="_blank" title="Tarpinės smegenys">
				<area alt="Regos žievė" coords="157,40,162,59,162,65,162,74,161,83,157,97,150,101,141,103,133,101,126,105,121,113,127,120,136,118,140,108,149,106,156,107,162,99,168,99,176,98,183,96,191,93,197,88,203,82,206,70,206,59,203,48,199,40,193,32,184,26,171,25,164,30,159,33" href="https://en.wikipedia.org/wiki/Superior_colliculus" shape="poly" target="_blank" title="Regos žievė">
				<area alt="Smegenėlės" coords="204,47,205,51,206,57,206,64,207,71,205,76,201,85,193,92,186,96,176,99,179,106,193,107,197,110,205,112,212,110,212,101,212,94,213,86,214,76,213,66,215,58,211,50" href="https://en.wikipedia.org/wiki/Cerebellum" shape="poly" target="_blank" title="Smegenėlės">
				<area alt="Medulla" coords="216,58,215,65,214,70,214,76,214,82,213,89,212,97,211,109,212,111,218,113,226,112,234,110,244,107,253,110,264,111,272,111,285,113,296,113,304,115,314,115,321,116,330,116,341,117,350,116,358,114,368,114,376,113,379,106,379,99,379,90,372,85,365,82,326,76,249,62" href="https://en.wikipedia.org/wiki/Medulla_oblongata" shape="poly" target="_blank" title="Medulla">
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