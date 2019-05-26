<?php
    include_once 'header.php';
?>
	<div class="row" id="main-container">
		<div id="brainMap">
			<h1><i>Canis domesticus</i> smegenys</h1><img id="dogBrain" src="images/dogBrain.svg" usemap="#dogBrain"> <map id="dogBrain" name="dogBrain">
				<area alt="Smegenų žievė" coords="97,153,94,159,90,165,84,166,76,168,68,173,66,180,63,190,65,197,69,204,68,211,60,216,51,216,43,215,31,213,21,211,14,209,9,204,3,195,5,185,7,177,11,168,13,160,13,152,16,144,18,136,22,129,26,123,29,117,34,111,40,104,45,97,51,92,57,85,65,80,72,75,81,72,88,69,95,66,103,62,112,59,121,56,131,52,143,51,151,48,162,46,176,45,187,45,197,45,207,46,214,48,220,50,225,53,231,58,236,63,239,68,244,74,250,79,253,85,256,92,255,100,248,99,240,99,234,103,225,105,219,108,210,117,206,124,199,113,196,105,191,100,185,99,172,99,155,103,147,107,140,110,131,112,123,115,115,119,102,127,98,134,97,142" href="https://en.wikipedia.org/wiki/Cerebral_cortex" shape="poly" target="_blank" title="Smegenų žievė">
				<area alt="Didžioji smegenų jungtis" coords="70,201,63,195,64,188,65,180,69,173,74,168,83,165,90,163,96,156,97,148,99,140,99,133,103,126,109,123,117,119,124,115,131,112,139,110,147,107,155,103,161,100,168,100,174,98,183,98,192,99,198,103,199,110,200,115,198,122,194,128,188,129,176,131,169,128,162,126,153,125,142,132,140,137,139,145,135,153,130,158,126,164,123,170,120,175,119,180,115,188,110,194,104,196,94,196,86,201,77,202" href="https://en.wikipedia.org/wiki/Corpus_callosum" shape="poly" target="_blank" title="Didžioji smegenų jungtis">
				<area alt="Tarpinės smegenys" coords="115,204,109,198,113,188,117,179,120,171,125,165,129,161,133,154,136,147,140,139,147,131,154,127,163,127,171,129,179,130,186,130,192,128,199,123,202,118,204,124,204,130,207,136,207,142,207,151,204,159,193,167,189,172,182,177,180,182,176,188,175,197,168,200,160,203,150,206,140,204,134,204,126,199,118,199" href="https://en.wikipedia.org/wiki/Diencephalon" shape="poly" target="_blank" title="Tarpinės smegenys">
				<area alt="Vidurinės smegenys" coords="227,175,225,184,222,194,224,202,221,212,216,223,203,221,195,217,187,211,180,202,174,191,177,183,182,177,186,173,192,167,199,162,205,158,212,163,216,166,221,171" href="https://en.wikipedia.org/wiki/Midbrain" shape="poly" target="_blank" title="Vidurinės smegenys">
				<area alt="Smegenėlės" coords="206,149,207,139,207,132,206,125,209,117,216,111,224,107,234,103,242,100,250,100,258,100,265,102,272,105,278,107,285,110,289,114,297,123,299,128,299,136,298,146,294,153,293,162,293,168,288,173,279,178,269,181,260,181,251,179,241,176,230,174,220,171,214,165,206,158" href="https://en.wikipedia.org/wiki/Cerebellum" shape="poly" target="_blank" title="Smegenėlės">
				<area alt="Smegenų tiltas" coords="284,177,287,191,289,199,289,208,288,215,281,218,271,219,259,221,250,221,242,221,232,221,218,222,219,214,222,206,223,197,223,189,224,180,228,172,242,177,251,179,263,181,271,182,277,181" href="https://en.wikipedia.org/wiki/Pons" shape="poly" target="_blank" title="Smegenų tiltas">
				<area alt="Medulla" coords="283,177,289,174,297,174,305,176,316,177,322,177,329,177,339,178,346,177,354,175,364,175,371,174,379,173,385,173,392,175,392,182,393,194,384,197,375,201,366,205,358,207,345,207,336,210,320,210,311,210,304,210,296,211,287,214,288,206,290,199,286,188,288,193" href="https://en.wikipedia.org/wiki/Medulla_oblongata" shape="poly" target="_blank" title="Medulla">
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
				<option class="mainPage" value="dog.php">
					Šuns
				</option>
				<option class="mainPage" value="frog.php">
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
