<!DOCTYPE html>
<html lang="en">
<head>
<title>Environmental Sounds Farming Simulator 19 - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Environmental Sounds Farming Simulator 19 - PMC Tactical">
<META name="keywords" content="Terrain, Environmental Sounds, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator Terrain Environmental Sounds</b></h1>
</header>

<section>
	<h2>Environmental Sounds</h2>

<p>
If you do not use your own _sound.* files then you inherit the mapDE/mapUS environmental sounds like birds, water, wind, etc. See below how to add custom _sound.* file setup to your terrain.
</p>

<p>
- copy mapDE_sound.i3d and mapDE_sound.xml files from fs19_root/data/maps/ directory to your terrain maps/ directory<br>
- rename mapDE_sound.* files to your terrain name like name_sound.* (one of ours is PMC_Iowa_Ringsted_8km_sound.* so its not "name" literally, its just for examples sake)<br>
- GE edit name_sound.i3d and remove the sounds you dont need, you can also move or add sounds<br>
- edit name_sound.xml and change filename="$data/maps/mapDE_sound.i3d" to filename="maps/name_sound.i3d"<br>
- edit maps/name.xml and change &lt;sounds filename="$data/maps/mapDE_sound.xml" /> to &lt;sounds filename="maps/name_sound.xml" /&gt;
</p>

<p>
All done, now your terrain will play the sounds from your maps/name_sound.i3d file, so no more ocean sounds in middle of the terrain in fields etc (assuming you removed the water sounds).
</p>

</section>

<footer>
<p><a href="map-making-tutorial.php" class="button">PMC Farming Simulator Map Making Tutorial page</a></p>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
