<!DOCTYPE html>
<html lang="en">
<head>
<title>Farming Simulator 19 Map Making Tutorial - PMC Tactical</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Farming Simulator 19 Map Making Tutorial - PMC Tactical">
<META name="keywords" content="Farming, Simulator, 19, Map, Making, Tutorial, PMC, Tactical">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>PMC Tactical Farming Simulator 19 Map Making Tutorial</b></h1>
</header>

<section>
	<h2>Overview</h2>

<p>
<b>2019-02-11</b> This page is work in progress, will be updated later for example when we get official Giants Editor release (v8.1 final was released 2019-02-09) etc.
</p>

<p>
Please read <a href="../map-making-tutorial.php" target="_blank">Farming Simulator 17 (FS17) Map Making Tutorial</a> first because what you see below assumes you know all of that FS17 stuff.
</p>


	<h2>File Structure</h2>

<p>
root/ directory has modDesc.xml as every mod should, also map.xml file. Estancia Lapacho files are called "mapSA.xml", Ravenport "mapUS.xml" and Felsbrunn "mapDE.xml". So unique names hmm. Rest of the files are listed below, in this example we have mapSA files listed.
</p>

<ul>
<li>mapSA_colorGrading.xml</li>
<li>mapSA_colorGradingNight.xml</li>
<li>mapSA_environment.xml</li>
<li>mapSA_farmlands.xml</li>
<li>mapSA_items.xml</li>
<li>mapSA_sound.xml</li>
<li>mapSA_transportMissions.xml</li>
<li>mapSA_vehicles.xml</li>
</ul>

<p>
root/mapSA/ dir contains the following files all 01 through 04:
</p>

<ul>
<li>beachSand01_weight.png</li>
<li>cityAsphalt01_weight.png</li>
<li>concrete01_weight.png</li>
<li>forestGround01_weight.png</li>
<li>grass01_weight.png</li>
<li>gravel01_weight.png</li>
<li>industrialMud01_weight.png</li>
<li>mountainRock01_weight.png</li>
<li>pigMud01_weight.png</li>
<li>roughDirt01_weight.png</li>
<li>townGrass01_weight.png</li>
</ul>

<p>
Then 01 and 02 for waterPuddleSA01_weight.png
</p>

<p>
Then these individual files:
</p>

<ul>
<li>cultivator_density.gdm</li>
<li>dummy_weight.png</li>
<li>fruit_density.gdm</li>
<li>grassFlowers_color.dds</li>
<li>grassFlowers_mask.dds</li>
<li>mapSA_dem.png</li>
<li>mapSA_farmland.grle</li>
<li>mapSA_farmland.png</li>
<li>mapSA_preview.dds</li>
<li>pda_map_H.dds</li>
<li>seasons_mask.gdm</li>
<li>terrainDetailHeight_density.gdm</li>
<li>tipColInfoLayer.grle</li>
<li>weed_density.gdm</li>
</ul>

<p>
PNG resolutions are 2048 x 2048 except mapSA_dem.png is standard 1025 x 1025 and mapSA_farmland.png is 1024 x 1024 resolution.
</p>


	<h2>Create Sample Terrain</h2>

<p>
Don't download sample mod maps as they usually contain all kinds of "good stuff" the author wants you to have and quickly gets outdated. Instead just create sample terrain by yourself from the latest up to date game data available, anytime.
</p>

<p>
- start giants editor v8.1 (final)<br>
- file -> new mod from game -> map: sample mod map 1<br>
- delete all transformgroups with original terrain objects in them, basically only leave terrain and careerstartpoint<br>
- save and exit
</p>

<p>
You can of course leave the objects from mapDE or mapUS (depending which you chosen) into the sample terrain, but usually they are just in the way and its easier to delete all of them.
</p>


	<h2>Porting FS17 Terrain</h2>

<p>
If you try to load Farming Simulator 17 terrain as-is it will not show up in the game start menu.
</p>

<p>
- get mapDE sample terrain to a directory, name it lets say MyMap_4km<br>
- edit modDesc.xml for proper author, name, description, map id, configName etc<br>
- copy FS17 pda_map_h.png to MyMap_4km/maps/pda_map.png<br>
- copy FS17 map01_preview.png to MyMap_4km/map_preview.png<br>
- rename MyMap_4km/maps/mapDE/ directory to MyMap_4km/maps/MyMap_4km/<br>
- rename MyMap_4km/maps/MyMap_4km/mapDE_dem.png to MyMap_4km_dem.png<br>
- rename MyMap_4km/maps/MyMap_4km/mapDE_farmland.grle to MyMap_4km_farmland.grle<br>
- rename MyMap_4km/maps/mapDE.i3d to MyMap_4km.i3d<br>
- rename MyMap_4km/maps/mapDE.i3d.colMap.grle to MyMap_4km.i3d.colMap.grle<br>
- rename MyMap_4km/maps/mapDE.i3d.plcMap.grle to MyMap_4km.i3d.plcMap.grle<br>
- rename MyMap_4km/maps/mapDE.i3d.shapes to MyMap_4km.i3d.shapes<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.lod.type.cache to MyMap_4km.i3d.terrain.lod.type.cache<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.nmap.cache to MyMap_4km.i3d.terrain.nmap.cache<br>
- rename MyMap_4km/maps/mapDE.i3d.terrain.weights.cache to MyMap_4km.i3d.terrain.weights.cache<br>
- rename MyMap_4km/maps/mapDE.xml to MyMap_4km.xml<br>
- rename MyMap_4km/maps/mapDE_farmlands.xml to MyMap_4km_farmlands.xml<br>
- rename MyMap_4km/maps/mapDE_transportMissions.xml to MyMap_4km_transportMissions.xml<br>
- open MyMap_4km.i3d in text editor and change "mapDE/ to "MyMap_4km/<br>
- change MyMap_4km.i3d line "MyMap_4km/mapDE_dem to "MyMap_4km/MyMap_4km_dem<br>
- change MyMap_4km.i3d line "MyMap_4km/mapDE_farmland to "MyMap_4km/MyMap_4km_farmland<br>
- change MyMap_4km.i3d lines density.gdm to density.png<br>
- copy FS17 cultivator_density.gdm and fruit_density.gdm to MyMap_4km/maps/MyMap_4km/ dir<br>
- copy _run_convert_gdm_to_png.bat to MyMap_4km/maps/MyMap_4km/ dir and execute it<br>
- open MyMap_4km.i3d in GE
</p>

<p>
If you get the GE console error from GDM files not found, please refer to common errors.
</p>

<p>
It is absolute nightmare to port FS17 terrain to FS19 depending how complex it is and usually these terrains are quite complex. For example I tried porting parkers prairie objects... and let me tell you it is a huge task, there are so many objects in different messy transformgroups and probably most of the buildings have shaders which need to be fixed etc etc... you would be better off doing native FS19 terrain with its own objects so you dont have to worry about any shader etc errors.
</p>

<p>
Also lets not forget that if you don't have permission to port, then why bother spending all that hard work for something you cannot release to the public.
</p>


	<h3>FS19 Simple Port Tutorial</h3>

<p>
_run_graphicsmagick_FS19_mapsize_to_4096.bat in the directory where PNG files are present will convert 2km to 4km. You also need to edit TerrainName.XML file for terrain size.
</p>

<p>
- FS17 copy cultivator_density.gdm and fruit_density.gdm into FS19 maps/mapDE/ dir<br>
- use _run_convert_gdm_to_png.bat<br>
- delete cultivator_density.gdm and fruit_density.gdm files<br>
- edit mapDE.i3d and change cultivator_density.GDM to PNG and same for fruit_density<br>
- use _run_graphicsmagick_FS19_mapsize_to_4096.bat<br>
- load mapDE.i3d with GE, save and exit<br>
- edit mapDE.i3d and change cultivator_density.PNG to GDM and same for fruit_density
</p>

<p>
PMCTODO add the actual bat files ;)
</p>


	<h2>Buy Land - Farmlands</h2>

<p>
- make sure giants editor is updated to v8.1 final (beta had bugs on info layer)<br>
- terrain editing window -> info layer painting -> info layer -> farmland<br>
- make sure the terrain editing window is wide enough, on info layer painting section you need to see tick boxes for 0, 1, 2 and 3<br>
- activate terrain info layer painting mode icon form main menu, brush radius 1000m, square, then erase (RMB) whats painted in the farmland info layer<br>
- start painting with info channel 0 (layer value 1)<br>
- once done, select info channel 1 (layer value 2), etc etc, until you have covered the whole terrain (see below)<br>
- when whole terrain is done select info channels 0 through 5, layer value 63 and paint all triggers with plenty of space around them (see below)<br>
- open mapDE_farmlands.xml, assign IDs for each xml entry according to GE layer value<br>
- paint one area for new farmer game mode and assign its farmlands.xml ID with defaultFarmProperty="true"
</p>

<table id="farmlandsid">
  <tr>
    <th>Field ID</th>
    <th>Info Channel</th>
  </tr>
  <tr>
<td>1</td>
<td>0</td>
</tr>
<tr>
<td>2</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>01</td>
</tr>
<tr>
<td>4</td>
<td>2</td>
</tr>
<tr>
<td>5</td>
<td>02</td>
</tr>
<tr>
<td>6</td>
<td>12</td>
</tr>
<tr>
<td>7</td>
<td>012</td>
</tr>
<tr>
<td>8</td>
<td>3</td>
</tr>
<tr>
<td>9</td>
<td>03</td>
</tr>
<tr>
<td>10</td>
<td>13</td>
</tr>
<tr>
<td>11</td>
<td>013</td>
</tr>
<tr>
<td>12</td>
<td>23</td>
</tr>
<tr>
<td>13</td>
<td>023</td>
</tr>
<tr>
<td>14</td>
<td>123</td>
</tr>
<tr>
<td>15</td>
<td>0123</td>
</tr>
<tr>
<td>16</td>
<td>4</td>
</tr>
<tr>
<td>17</td>
<td>04</td>
</tr>
<tr>
<td>18</td>
<td>14</td>
</tr>
<tr>
<td>19</td>
<td>014</td>
</tr>
<tr>
<td>20</td>
<td>24</td>
</tr>
<tr>
<td>21</td>
<td>024</td>
</tr>
<tr>
<td>22</td>
<td>124</td>
</tr>
<tr>
<td>23</td>
<td>0124</td>
</tr>
<tr>
<td>24</td>
<td>34</td>
</tr>
<tr>
<td>25</td>
<td>034</td>
</tr>
<tr>
<td>26</td>
<td>134</td>
</tr>
<tr>
<td>27</td>
<td>0134</td>
</tr>
<tr>
<td>28</td>
<td>234</td>
</tr>
<tr>
<td>29</td>
<td>0234</td>
</tr>
<tr>
<td>30</td>
<td>1234</td>
</tr>
<tr>
<td>31</td>
<td>01234</td>
</tr>
<tr>
<td>32</td>
<td>5</td>
</tr>
<tr>
<td>33</td>
<td>05</td>
</tr>
<tr>
<td>34</td>
<td>15</td>
</tr>
<tr>
<td>35</td>
<td>015</td>
</tr>
<tr>
<td>36</td>
<td>25</td>
</tr>
<tr>
<td>37</td>
<td>025</td>
</tr>
<tr>
<td>38</td>
<td>125</td>
</tr>
<tr>
<td>39</td>
<td>0125</td>
</tr>
<tr>
<td>40</td>
<td>35</td>
</tr>
<tr>
<td>41</td>
<td>035</td>
</tr>
<tr>
<td>42</td>
<td>135</td>
</tr>
<tr>
<td>43</td>
<td>0135</td>
</tr>
<tr>
<td>44</td>
<td>235</td>
</tr>
<tr>
<td>45</td>
<td>0235</td>
</tr>
<tr>
<td>46</td>
<td>1235</td>
</tr>
<tr>
<td>47</td>
<td>01235</td>
</tr>
<tr>
<td>48</td>
<td>45</td>
</tr>
<tr>
<td>49</td>
<td>045</td>
</tr>
<tr>
<td>50</td>
<td>145</td>
</tr>
<tr>
<td>51</td>
<td>0145</td>
</tr>
<tr>
<td>52</td>
<td>245</td>
</tr>
<tr>
<td>53</td>
<td>0245</td>
</tr>
<tr>
<td>54</td>
<td>1245</td>
</tr>
<tr>
<td>55</td>
<td>01245</td>
</tr>
<tr>
<td>56</td>
<td>345</td>
</tr>
<tr>
<td>57</td>
<td>0345</td>
</tr>
<tr>
<td>58</td>
<td>1345</td>
</tr>
<tr>
<td>59</td>
<td>01345</td>
</tr>
<tr>
<td>60</td>
<td>2345</td>
</tr>
<tr>
<td>61</td>
<td>02345</td>
</tr>
<tr>
<td>62</td>
<td>12345</td>
</tr>
<tr>
<td>63</td>
<td>012345</td>
</tr>
</table>

<p>
You must paint the whole terrain, every single pixel, leave no pixels unpainted because that cause _farmlands.xml errors in-game.
</p>

<p>
When you mouse over existing painted layer and hit CTRL-R, it will select that info channel layer value for you.
</p>

<p>
layer value is mapDE_farmlands.xml ID like &lt;farmland id="1"
</p>

<p>
Triggers like sellpoints and shop etc need to have unused layer value painted to them which prevents players of purchasing that farmland and placing placeables there. Make sure the you paint large enough area for triggers so there are no problems with terrain changing when placeables are placed (difficult to explain heh).
</p>

<p>
Water area should not be painted as purchaseable land (dunno why?).
</p>


	<h2>modDesc.xml</h2>

<p>
In your modDesc.xml is where the name of the terrain, author and version number is defined. More importantly the class or ID is set, almost all sample maps floating out there use "SampleModMap".
</p>

<p>
&lt;maps&gt;&lt;map id="SampleModMap" needs to be unique for every terrain, so <b>do not use "SampleModMap"</b>, instead you must use unique to your terrain like for our example "pmc_sample_2048" etc.
</p>


	<h2>Creating Field Definitions</h2>

<p>
- create transformgroup fields<br>
- create transformgroup field01 and cut and paste it as child to fields<br>
- fields transformgroup add new attribute name: onCreate and type: script callback. onCreate attribute: FieldUtil.onCreate<br>
- create two transformgroups into field01, name them fieldDimensions and fieldMapIndicator<br>
- create transformgroups called corner01_1, corner01_2 and corner01_3<br>
- make corner01_2 and corner01_3 as child for corner01_1. cut and paste corner01_1 as child to fieldDimensions<br>
- field01 add attribute fieldDimensionIndex type integer<br>
- field01 add attribute nameIndicatorIndex type integer
</p>

<p>
fieldDimensionIndex is fieldDimensions -> index path, the last number (it should be 0 for field01).
</p>

<p>
nameIndicatorIndex is fieldMapIndicator -> index path, the last number (it should be 1 for field01).
</p>

<p>
Once you have created your first field, check that it works in-game, then you can simply select transformgroup field01 and CTRL-D duplicate / copy paste it and rename it to field02. Repeat this to as many fields you need to create (obviously increasing the fieldXX number every time).
</p>

<p>
Special shaped corners for fields are done with simply adding more corner01_* transformgroups and placing them so that they create a new shape for your field. Again obviously doing corner01_, corner02_, corner03_ etc increasing the cornerXX_ number.
</p>

<p>
General terrain and field design tip:
</p>

<p>
Paint the fields into terrain normally with proper edges, but only create standard rectangle box field definitions. This way players can buy the fields and enlarge them by using plowing implement, giving them something nice to do, or they can of course leave them as is.
</p>

<p>
You could say that this would be lazy terrain developer method as making simple rectangle field definition takes one CTRL-D while detailed several cornerXX pieces requiring field takes much longer.
</p>

<p>
Courseplay recognizes the foliage layer plowed/cultivated etc terrain type, NOT the field definition, at least I believe this is how courseplay/game works? So make sure you do not paint the foliage layer as plowed/cultivated land but that umm what was it the odd looking brown colored terrain type (no idea, the one seen in FS17 cornbelt heh)? :)
</p>


	<h2>General Terrain Editing Tips</h2>

<p>
Error LOG is your friend, always check it first before starting to play. Either open log.txt and search for "error" and "warning" or try to see immediate bad errors from the in-game console debug log.
</p>

<p>
Do not edit extensive periods in giants editor without testing the terrain in-game because what looks very nice in giants editor might be totally crap/useless in-game, so don't waste your time editing something for hours which you regret the minute you see it in-game. Also try seeding, harvesting, cultivating and plowing to make sure the fields work properly (weight/density images). You can keep giants editor running and just for example robocopy /MIR the updated files into mods dir, that saves some time.
</p>

<p>
<b>Field sizes:</b> for the large terrain developers, include smaller fields for the early part of savegame where you start with lower end vehicles when doing missions. If you start by doing missions on 200+ hectare fields... let me tell you, the mission durations make it a world of hurt :)
</p>

<p>
Variety is the key, add huge 500+ hecatare and tiny 5 hectare fields, make the terrain interesting, give players options what size of fields to work on etc. Making a huge terrain doesn't mean that there is no tiny fields because sometimes those can be useful, like potato harvests etc.
</p>

<p>
Make field foliage layer matching the field definition because it looks very sloppy in-game when you see uneven field edges. Yes this sounds like a petty thing that who cares, but small details like this which are easy to get correctly done in giants editor make a huge of difference when you play.
</p>

<p>
When you edit in giants editor the stuff is stored in memory, only when you click save the GDM and GRLE etc files are saved to disk.
</p>

<p>
Saving 16km terrain, 8192 resolution DEM and 16384 res weight etc images takes several minutes on i7 4790K processor.
</p>

<p>
When you edit regularly check in-game and error log that its clean, if there are any errors fix them before proceeding editing. Trust me on this, the more errors you leave for "nah I'll fix that later", the more work you have when eventually that "later" comes :)
</p>

<p>
$moddir$ is case-sensitive.
</p>

<p>
Placing trees will require new savegame career start, trees will not show up in your existing savegame made when you had no trees.
</p>

<p>
You should not resize images like _farmland.grle after painting it using tools that do not support interpolation: none, like GIMP, unless you can be sure no stray pixels are created during resizing.
</p>

<p>
Grass or other general foliage should be placed first when you are creating a brand new terrain, its far easier to put fields, roads etc special foliage (or erase foliage) on these small areas than to paint grass between fields and roads etc as its really frustrating to carefully place that grass to avoid overlap where grass should not be present.
</p>


	<h2>Adding Selling Points</h2>

<p>
- GE file -> import -> FS19_root -> data -> placeables -> mapDE -> sellingstationgeneric<br>
- create dir to your terrain maps\placeables\sellingpoints\<br>
- copy from the game placeables dir sellingStationGeneric.xml and sellingStationPort01.xml to your sellingpoints dir<br>
- edit the xml stationName to your liking, like PMC Grain Sales INC<br>
- rename xml to like PMC_sellingStationGrain.xml and PMC_sellingStationPoorMans.xml<br>
- edit PMC_sellingStationPoorMans.xml, copy paste milk line and rename it to "cotton", now this sellpoint accepts cotton too<br>
- edit YourTerrain\defaultItems.xml and add mapBoundId for names of your xml files without the file extension<br>
- move the sellingstationgeneric object in GE where you want first selling point, then check the attributes -> transform -> translate<br>
- copy paste translate coordinates to defaultitems.xml position= part, also check rotation if you want<br>
- once done for both objects, delete the objects from GE as you dont need them anymore<br>
- edit defaultitems.xml filename part to say $moddir$MyMap_2km/maps/Placeables/Sellingpoints/PMC_sellingStationGrain.xml and the poormans as well
</p>

<p>
Above example uses PMC_ tagging for the file names, that is not really necessary but it helps a lot to identify the files you're edited. You should use your own tag if you so choose.
</p>


	<h2>User Interface Image Resolutions</h2>

<p>
map_preview.png resolution is 2048 x 1024 pda_map.png resolution is what your terrain is, 2048, 4096, 8192. Or is it... 2048 seemed to work fine on larger terrains(?).
</p>

<p>
Preview and map images are once again NOT FLIPPED, hehe. Do them as is, no need to flip vertically anymore like in FS17.
</p>


	<h2>Common Errors</h2>

<pre>
Error: Trying to set DensityMapHeightUpdater collision map with invalid size (33554432 vs 134217728)
Error: Blocked area map is wrong size for terrain (1024 x 1024) vs (2048 x 2048)
</pre>
<p>
Fix: GE -> scripts -> fs19 -> map -> create ground collision map. TERRAINNAME.i3d.plcMap.grle will not be updated when you create ground collision map, you must copy TERRAINAME.i3d.plcColMap.grle to TERRAINNAME.i3d.plcMap.grle for it to work.
</p>

<pre>
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/FieldManager.lua(90) : attempt to index local 'farmland' (a nil value)
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/FieldManager.lua(104) : attempt to index field 'farmland' (a nil value)
Error: Running LUA method 'update'.
dataS/scripts/fieldJobs/Field.lua(103) : attempt to index field 'farmland' (a nil value)
</pre>
<p>
Fix: you did not info layer paint farmland area over EVERY field, also check that your farmlands.xml is in order. If you forgot to paint over some fields you can easily see this in-game as the fields are not present, colored so to speak.
</p>

<pre>
Error: Failed to open xml file '$data/placeables/mapDE/sellingStationGeneric/sellingStationPort01.xml'.
Warning: corrupt savegame, item 24 with className SellingStationPlaceable could not be loaded
</pre>
<p>
Fix: edit defaultItems.xml, remove or fix the entries there.
</p>

<pre>
Error: GDM file has wrong number of channels (11 should be 13)
DensityMap: failed to load GDM file.
Error: Can't load resource 'c:/mydir/MyMap_4km/maps/MyMap_4km/cultivator_density.png'.
Error: Failed to load terrain detail layer 'terrainDetail'.
Error: GDM file has wrong number of channels (9 should be 10)
DensityMap: failed to load GDM file.
Error: Can't load resource 'c:/mydir/MyMap_4km/maps/MyMap_4km/fruit_density.png'.
</pre>
<p>
Then you need to delete the GDM and possibly GRLE files, only leave the PNG versions. open terrain again in GE and it should work now.
</p>

<pre>
Error: TerrainDeformation requires a terrain lod size that is a multiple of the terrain height map size
</pre>
<p>
Fix: some of your _weight or _density (or all maybe) image resolutions are smaller than heightmap, resize them properly.
</p>

	<h2>Creating Forests</h2>

<p>
Select a tree, use CTRL-B, press and hold LMB, move mouse and hit left CTRL key to place the tree. GE v8.1 (final) introduced interactive placement new features, see below. Still with these features, creating forests is extremely frustrating like most things in GE, but admittedly random scale is nice improvement to the previous.
</p>


	<h2>Giants Editor</h2>

<p>
If you get huge list of errors about case sensitivity, you must fix the game installation path to be case sensitive from file -> preferences -> game installation path. Next time when you load any terrain there wont be game installation path case sensitive errors.
</p>

<p>
Giants Editor (GE) got v8.1 release on 2019-02-09, new features were toggle options for interactive placement mode. S Scale new objects randomly (range according to preferences), C Don't place new objects on objects created during the current session, T Only place new objects on terrain.
</p>

<p>
Use file -> preferences -> viewport -> interactive placement scale variance. This will set the object placing using CTRL-B with random scale.
</p>

<p>
HOWTO use new interactive placement for trees. Select a tree, press CTRL-B, click and HOLD LMB somewhere on the terrain. Now in bottom of GE status bar you see new options "Interactive placement: align to normal 'B' (Off) random scale 'S' (Off) self avoidance 'C' (Off) terrain height 'T' (Off)". While LMB down you hit B, S, C or T keys will turn on/off these toggles. Press left CTRL to place (duplicate) object into the location it is at. Once you release LMB the selected object is placed and interactive mode turns off.
</p>

<p>
Converting old terrain. Use file -> open mod, then browse to your terrains modDesc.xml file, rest is just clicking OK button and seeing what happens. While its processing be patient and wait, GE looks like its doing nothing but it is processing something on the background, you will get notification when its done.
</p>

<p>
When you change _density image resolution you must run GE -> scripts -> fs19 -> map -> create ground collision map.
</p>

	<h2>Real World Data Terrain</h2>

<p>
2019-02-11 this is very much work in progress, but decided to write down what I can today.
</p>

<p>
The tools we use are Global Mapper, Terra Incognita and L3DT. Unfortunately global mapper is a commercial software about $500. Please read <a href="https://pmc.editing.wiki/doku.php?id=arma3:terrain:real-world-data-tutorial" target="_blank">PMC Editing Wiki: ArmA 3 Real World Data Terrain Tutorial</a> how to use these tools to get satellite texture and SRTM heightmap.
</p>

<p>
FS19 terrains use 2 meters per pixel heightmap resolution.
</p>

<p>
Start L3DT and load heightmap.asc, then use CTRL-E export and choose PNG file. You should smooth or blur the heightmap a bit, L3DT is great for this but I guess GE works as well. SRTM heightmap resolution is 30 meters which is awfully low for FS19, but its best and easiest option to use.
</p>


	<h2>Weight Image Resolutions</h2>

<p>
<b>mapDE - Felsbrunn</b> _weight image resolutions:<br>
animalMud01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
animalMud02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
animalMud03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
animalMud04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
asphalt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.4Ki<br>
asphalt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.3Ki<br>
asphalt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.0Ki<br>
asphalt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.4Ki<br>
beachSandWet01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
beachSandWet02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
beachSandWet03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 16.8Ki<br>
beachSandWet04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
concrete01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.2Ki<br>
concrete02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 25.7Ki<br>
concrete03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 26.5Ki<br>
concrete04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.2Ki<br>
concreteDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.5Ki<br>
concreteGravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.0Ki<br>
forestGround01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.3Ki<br>
forestGround02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.2Ki<br>
forestGround03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 35.1Ki<br>
forestGround04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.3Ki<br>
forestGroundUS01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 15.9Ki<br>
forestGroundUS02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 15.9Ki<br>
forestGroundUS03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 15.9Ki<br>
forestGroundUS04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 20.0Ki<br>
grass01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 85.2Ki<br>
grass02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 85.0Ki<br>
grass03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 84.9Ki<br>
grass04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 84.9Ki<br>
grassRough01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 329.8Ki<br>
grassRough02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 350.4Ki<br>
grassRough03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 353.0Ki<br>
grassRough04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 329.7Ki<br>
grassTown01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.0Ki<br>
grassTown02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.4Ki<br>
grassTown03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.4Ki<br>
grassTown04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 12.1Ki<br>
gravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 16.8Ki<br>
gravel02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.1Ki<br>
gravel03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 18.2Ki<br>
gravel04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 16.9Ki<br>
mountainRock01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 38.3Ki<br>
mountainRock02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 38.1Ki<br>
mountainRock03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.0Ki<br>
mountainRock04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 37.9Ki<br>
mountainRockDark01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 71.7Ki<br>
mountainRockDark02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 72.0Ki<br>
mountainRockDark03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 72.0Ki<br>
mountainRockDark04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 72.3Ki<br>
plate01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.5Ki<br>
plate02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 20.6Ki<br>
plate03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 20.6Ki<br>
plate04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 19.6Ki<br>
plateDamaged01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.4Ki<br>
plateDamaged02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.5Ki<br>
plateDamaged03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.6Ki<br>
plateDamaged04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.4Ki<br>
riverStoneBank01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 56.0Ki<br>
riverStoneBank02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 55.9Ki<br>
riverStoneBank03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 56.8Ki<br>
riverStoneBank04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 56.2Ki<br>
riverStoneBankWater01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.8Ki<br>
riverStoneBankWaterEdge01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.3Ki<br>
roughDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 29.3Ki<br>
roughDirt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.8Ki<br>
roughDirt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.7Ki<br>
roughDirt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.9Ki<br>
waterPuddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki
</p>

<p>
<b>mapUS - Ravenport</b> _weight image resolutions:<br>
asphalt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.5Ki<br>
asphalt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.8Ki<br>
asphalt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.6Ki<br>
asphalt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 33.0Ki<br>
cliffRock01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 30.8Ki<br>
cliffRock02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 31.2Ki<br>
cliffRock03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 31.0Ki<br>
cliffRock04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 31.0Ki<br>
concrete01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.6Ki<br>
concrete02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.6Ki<br>
concrete03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.5Ki<br>
concrete04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 7.6Ki<br>
dustyRockUS01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 11.0Ki<br>
dustyRockUS02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.8Ki<br>
dustyRockUS03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.8Ki<br>
dustyRockUS04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.8Ki<br>
forestGround01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.4Ki<br>
forestGround02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.5Ki<br>
forestGround03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.2Ki<br>
forestGround04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 39.4Ki<br>
forestNeedles01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
graniteYellow01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.9Ki<br>
graniteYellow02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.0Ki<br>
graniteYellow03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.8Ki<br>
graniteYellow04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.9Ki<br>
grass01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grass02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grass03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grass04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
grassDry01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 239.5Ki<br>
grassDry02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 238.4Ki<br>
grassDry03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 237.4Ki<br>
grassDry04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 238.5Ki<br>
grassRough01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 233.1Ki<br>
grassRough02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 244.0Ki<br>
grassRough03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 245.0Ki<br>
grassRough04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 232.9Ki<br>
gravel01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.0Ki<br>
gravel02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.1Ki<br>
gravel03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.1Ki<br>
gravel04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 5.0Ki<br>
mudDark01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
mudDark02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
mudDark03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
mudDark04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 6.2Ki<br>
roughDirt01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.5Ki<br>
roughDirt02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.5Ki<br>
roughDirt03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.6Ki<br>
roughDirt04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.6Ki<br>
roughMud01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 122.6Ki<br>
roughMud02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 123.1Ki<br>
roughMud03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 123.1Ki<br>
roughMud04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 122.4Ki<br>
sand01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.6Ki<br>
sand02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 25.2Ki<br>
sand03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 25.6Ki<br>
sand04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 24.5Ki<br>
sandPuddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.4Ki<br>
sandPuddle02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 11.1Ki<br>
sandRough01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.3Ki<br>
sandRough02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
sandRough03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.1Ki<br>
sandRough04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 17.4Ki<br>
sandWet01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.2Ki<br>
sandWet02_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.3Ki<br>
sandWet03_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 10.5Ki<br>
sandWet04_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki<br>
waterPuddle01_weight.png PNG 2048x2048+0+0 PseudoClass 256c 8-bit 4.2Ki
</p>


	<h2>Density Image Resolutions</h2>

<p>
<b>mapDE - Felsbrunn</b> _density image resolutions:<br>
cultivator_density.png PNG 4096x4096+0+0 DirectClass 8-bit 61.0Ki<br>
forestGrassDark_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 56.8Ki<br>
fruit_density.png PNG 4096x4096+0+0 DirectClass 8-bit 809.8Ki<br>
terrainDetailHeight_density.png PNG 4096x4096+0+0 DirectClass 8-bit 48.1Ki<br>
townDecoGrass_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 29.2Ki<br>
weed_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki
</p>

<p>
<b>mapUS - Ravenport</b> _density image resolutions:<br>
cultivator_density.png PNG 4096x4096+0+0 DirectClass 8-bit 78.5Ki<br>
fruit_density.png PNG 4096x4096+0+0 DirectClass 8-bit 1.3Mi<br>
terrainDetailHeight_density.png PNG 4096x4096+0+0 DirectClass 8-bit 48.5Ki<br>
weed_density.png PNG 4096x4096+0+0 PseudoClass 256c 8-bit 16.1Ki
</p>


	<h2>Farmland and tipColInfoLayer Resolution</h2>

<p>
<b>mapDE - Felsbrunn</b> _farmland and tipColInfoLayer image resolutions:<br>
mapDE_farmland.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 14.8Ki<br>
tipColInfoLayer.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 28.1Ki
</p>

<p>
<b>mapUS - Ravenport</b> _farmland and tipColInfoLayer image resolutions:<br>
mapUS_farmland.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 19.7Ki<br>
tipColInfoLayer.png PNG 1024x1024+0+0 PseudoClass 256c 8-bit 22.3Ki
</p>

<!--
	<h2></h2>

<p>
</p>

<a href="" target="_blank"></a>

<ul>
<li></li>
</ul>
-->
</section>

<footer>
<p><a href="../index.php" class="button">PMC Farming Simulator root page</a></p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
