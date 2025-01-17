<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer Diary PMC Iowa Garden City 8km - PMC Farming</title>
<LINK href="../css.css" rel=stylesheet type="text/css">
<META name="description" content="Developer Diary PMC Iowa Garden City 8km - PMC Farming">
<META name="keywords" content="Developer, Diary, Iowa, Garden, City, 8km, PMC, Farming, FS19">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- google analytics -->
<?php include("../include/google-analytics.php"); ?>

</head>
<body>

<header>
<!-- google ads -->
<?php include("../include/google-ads.php"); ?>
<h1><b>Developer Diary PMC Iowa Garden City 8km - PMC Farming</b></h1>
</header>

<section>
	<h2>Dev Diary Iowa Garden City</h2>

<p>
<a href="pmc-iowa-garden-city-8km.php">PMC Iowa Garden City 8km</a> developer diary was started in late 2020 and no older records exist other than <a href="changelog-pmc-iowa-garden-city-8km.php">changelogs</a>. This terrain was initially created in early 2019. Just a little background reference <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2020-09-05T12:59:00Z</b> Backupped PMC Iowa Garden City 8km project dir, edited sync to mods dir with new excluded files. Loaded terrain in <a href="terrain-giants-editor.php">Giants Editor (GE)</a> to check it out if all looks good, then started to prepare PMC_Helpers to a new way of handling it (exported). Also recorded terrain developer diary video <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2020-09-05T13:31:00Z GE initial PMC_Helpers setup created and selling points moved to a proper transformgroup. Pretty much nothing else there, shes a blank slate.
</p>

<p>
2020-09-05T13:43:00Z Moved all the unused directories and files into Exclude.For.Release directory.
</p>

<p>
2020-09-05T13:55:00Z First in-game test that everything loads up ok. There was error about mapDE vehicle shop so it was time to replace that with mapUS vehicle shop model which fixed that issue.
</p>

<p>
2020-09-05T14:25:00Z Started to create universal american PMC_Helpers.i3d to be used in all terrains. Placed giants buildings, utility poles and trees there, then of course CBJ american buildings too. I can now import this to a new terrain and have all the objects at hand right away without going through that import shuffle.
</p>

<p>
2020-09-05T15:33:00Z All preparation work for object placement is done, now just a lunch break and then I'm good to start actually putting down objects <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2020-09-05T15:52:00Z Object placement has officially started.
</p>

<p>
2020-09-05T16:18:00Z Wind turbines placed. Nice landmark object-set for iowa terrain, you can see those far away while farming heh.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T1634.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T1634.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
At this time in fall of 2020 I was still running Windows 7 64bit with 125% user interface scaling, which can easily be seen on screenshots from this era. The desktop I was running has text font so small you need a hubble space telescope to see characters properly ;)
</p>

<p>
2020-09-05T17:03:00Z Building placement officially commenced, here we go!
</p>

<p>
2020-09-05T19:52:00Z Lunch break, here is progress update at this minute, red is areas with buildings and black is buildings placed areas.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T1952.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T1952.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-05T23:22:00Z Enough object placement for today, 53 locations created.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-05T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-05T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2020-09-06T09:15:00Z</b> GIMP buildings xcf and iowa garden city loaded up in GE, lets go to work.
</p>

<p>
2020-09-06T11:02:00Z Decided to try scaling up building to match <a href="https://www.google.com/maps/@42.2530498,-93.3576931,148m/data=!3m1!1e3" target="_blank">google/maps real world data building</a>. This is a big no no in arma3 editing you simply dont scale buildings as it will mess up so many things, however natural objects like rocks, bushes and trees are perfectly fine to scale 75 to 125 percent range.
</p>

<p>
I took CBJ american vehicle shed 72x150 and GE scaled Z to 3.7 while X and Y remains at standard 1. Will be interesting to see in-game how bad it looks and does geometry work etc. This would be extremely cheap way to fit original building sizes to real world specs. But yeah at the end I or someone needs to model new buildings to fit PMC real world data terrains.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1105.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-06T12:02:00Z Found <a href="https://www.google.com/maps/@42.2320671,-93.3484826,296m/data=!3m1!1e3" target="_blank">this location</a> which looks like its just silage covered up, or bales of some sort. Not sure how to place such location, I'm thinking it should be left as empty lot so players could place their own bales/silage here. So I did leave it empty.
</p>

<p>
On the next location which I labeled Location-85 there was half of the farm yard missing because terrain edge cut it off. I really try to avoid these situations but guess this one slipped through my inspection when creating this terrain location.
</p>

<p>
2020-09-06T12:26:00Z Saw the big electric thingy that was documented already in the first design of this terrain <a href="https://www.google.com/maps/@42.2245411,-93.3740411,176m/data=!3m1!1e3" target="_blank">google/maps</a> and again we have no objects to use there. Well havent scourged through mapDE/mapUS maybe there could be something.
</p>

<p>
2020-09-06T13:14:00Z PMC Iowa Garden City 8km building placement is done! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1313.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1313.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Took another backup, just to be safe.
</p>

<p>
2020-09-06T13:52:00Z First utility poles placed in NE corner.
</p>

<p>
2020-09-06T15:30:00Z Was creating utility poles and GE felt a bit sluggish, so I saved, exited, took 7zip backups just to be sure, restarted GE, exported fields, buildings and wind turbine transformgroups, then deleted them. Now GE should load, save and perform just slightly bit better, hopefully.
</p>

<p>
I'm thinking that on a long run on heavy editing sessions its not any use to keep hundreds of objects loaded in GE when you have no use for them, for example I dont need buildings or wind turbines when placing utility poles.
</p>

<p>
Some screensthos of utility poles in real life vs PMC terrain unfortunately got deleted, no idea why. I tried to search them later but cannot find in any directory.
</p>

<p>
2020-09-06T16:27:00Z Lunch break, still many utility pole splines to create, but we'll get there heh.
</p>

<p>
<a href="https://www.google.com/maps/@42.26659,-93.3855119,197m/data=!3m1!1e3" target="_blank">Minerva Creek has a bridge</a>.
</p>

<p>
2020-09-06T18:38:00Z Utility pole objects placement is done! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-06T1837.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-06T1837.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2020-09-06T19:01:00Z First in-game test with building, utility pole and wind turbine objects... zero errors heh.
</p>

<p>
2020-09-06T20:04:00Z Objects aligned to ground and in-game test completed, zero errors. We are good to go for some PMC Gaming computer full glory 4k 60fps testing, perhaps some first look twitch live stream as well.
</p>

<p>
Did twitch live stream and terrain looked awesome, I was cautiously wishing it would look great but man I underestimated it big time, even without vegetation it looks just amazing. Long view distances and you can just see buildings and farm yards everywhere you look, just awesome views. US NED 10m resolution heightmap is in first glance flat but when you drive around there its elevations everywhere making it feel just so nice. I simply cannot wait to start actually playing here.
</p>

<p>
<b>2020-09-08T11:39:00Z</b> First trees placed. I really hate placing trees one by one manually as there is no big areas of trees where I could use spline and script to randomly place trees.
</p>

<p>
Here again I had some screenshots taken, but later when trying to find them... they were nowhere to be seen <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
<b>2020-09-10T16:00:00Z</b> Tree object placement continues. Not really in the mood for placing trees manually, but well its gotta be done.
</p>

<p>
<a href="https://www.google.com/maps/@42.2533254,-93.3991134,209m/data=!3m1!1e3" target="_blank">google/maps</a>.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2020-09-10T1606.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2020-09-10T1606.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>After a long break from editing this terrain...</b> last time I edited was on september last year, now february 2021 editing continues.
</p>

<p>
<b>2021-02-22T02:10:00Z</b> Decided to hastily re-create few lines of utility poles with wires, just for todays <a href="stories-from-zero-iowa-garden-city-unofficial.php">Unofficial Start From Zero</a> game-play <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Found one utility pole line which was created but never placed into the "public" Utility_poles transformgroup and was left into PMC_Helpers, that was odd. Well I re-created that right away with wires and placed into public.
</p>

<p>
Then I re-created the line going west from garden city town... and then few other locations as well.
</p>

<p>
There are so many utility pole lines it feels like they are everywhere, just re-created these few so I can have some wires to look at in-game today <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
<b>2021-04-27T15:16:00Z</b> Started to watch PMC Iowa Garden City 8km developer diary VIDEOS that I recorded in 2020, to get some reference point where I left off in october, that is the last time I added trees to this terrain.
</p>

<p>
I'm quite bummed out that its been this long with just slacking, not doing any editing for this terrain. I've been so burnt out lately for all computer work its very hard to start/continue editing. Luckily I seem to start to get that editing fire back <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-04-27T17:43:00Z Finished watching those previously recorded videos and was really surprised that on october 2020 I did not record anything or write these dev diary entries even though I placed a lot of trees. Hmm that is weird, I thought recording and writing was being done all the time, hmm hmm.
</p>

<p>
2021-04-27T23:02:00Z Took backups of PMC Iowa Garden City 8km and then fired up GE, lets see if we could place some trees again.
</p>

<p>
2021-04-27T23:19:00Z Alright first farm yard trees done for 2021 <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2318.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2318.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Note: here I have installed Windows 8.1 64bit using extra large 200% user interface scaling. This is clearly seen with larger text font and UI in general, also hard disk partition changed with operating system re-install.
</p>

<p>
Second farm yard, this one had really bad building model type selections as there clearly was some pig sheds but I don't have any FS19 data/ pig sheds to use and haven't found any white iowa looking ones from the community mods.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2334.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2334.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2335.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2335.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Farm yard with few bin silos.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2348.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2348.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
One lone bin silo in this farm yard.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-27T2358.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-27T2358.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another farm yard trees placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T0006.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T0006.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Actually I am not going to screenshot every yard, it would bloat this web page size quite a bit because there are I think 50+ farm yards heh. I'll try to screenshot most complex or interesting looking tree placements now.
</p>

<p>
<b>2021-04-28T01:30:00Z</b> Was watching twitch live stream when penalty_box_gaming was playing <a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> v1.1.10, had all editing tools open in the background but burnt out me just spent time watching the stream. Oh well.
</p>

<p>
By the time his stream ended, I was already yawning tired and had no interest of concentrating on editing. This is what happens when you are burnt out for editing / computer work. It really sucks.
</p>

<p>
2021-04-28T15:40:00Z New editing day has started, continuing adding vegetation objects. Just added days first batch of trees to one farm yard.
</p>

<p>
Hopefully today I get some serious damage done for this tree object placement, <a href="https://www.elitedangerous.net" target="_blank">Elite Dangerous</a> odyssey alpha phase 4 just started so I have to check that out but I don't think it will take much of my time today.
</p>

<p>
2021-04-28T16:31:00Z Several farm yards tree object placement done now, but feels like a struggle. Right now in fact I'll take a quick break to check out that mentioned Elite Dangerous odyssey alpha phase 4, this is the life with editing burnout heh.
</p>

<p>
2021-04-28T22:22:00Z Finally back placing trees after several hours break checking out Elite Dangerous odyssey alpha and other things. Hopefully I could get at least few farm yards done. Gotta take screenshots now again to feel like I'm making some progress, heh.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T2230.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T2230.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And another farm yard trees done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T2238.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T2238.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And another ...
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T2243.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T2243.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Once I get into the editing flow, these farm yard tree placements are getting done pretty quickly (one farm yard I mean).
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T231539.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T231539.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-28T231503.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-28T231503.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-04-29T00:23:00Z</b> Taking a lot of breaks, almost between each farm yard, however doing progress slowly but surely.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-29T0023.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-29T0023.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Here is the progress report, color codes red is trees not yet placed, black placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-29T0030.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-29T0030.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
This is the hilarious age old thing with terrain editing: <i>never zoom out...</i> heh.
</p>

<p>
For those who don't know, it means that when you are closely zoomed into terrain editor and place objects etc, you do good work and feel good about yourself that oh wow this will be done in no time, but then you zoom out and are shocked to see you have still incredible amount of work left to do which completely demoralizes you that "boohooo I never gonna get this done!" <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
In 2019 when I placed objects into the initial terrain version which later got re-designed, I have faint recollection that it took like a week of hard work almost 16hrs a day. Unfortunately I don't have any dates or such detailed info about it, I might be able to dig up something from PMC discord.
</p>

<p>
<b>2021-04-30T00:18:00Z</b> Todays first farm yard trees placed. Getting enough editing motivation has been a struggle, yesterday I was slacking so much, just watching movies and twitch/youtube, did the "mandatory" tree placement but nothing else.
</p>

<p>
Days second farm yard tree placement happened in the far NW corner of this terrain.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-30T0036.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-30T0036.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Well at least we reached one corner now, three more to go! heh, uuh.
</p>

<p>
Here is current progress image, showed this for guys in PMC discord so lets attach it here as well:
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-30T0435.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-30T0435.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-04-30T17:51:00Z New editing day has started, got first farm yard done for today. This was now on the extreme north edge of the terrain, actually closest trees were pretty much touching the edge.
</p>

<p>
Good morning screenshot.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-04-30T1752.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-04-30T1752.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got second farm yard done... but my mind was already elsewhere, I wanted to again play FS19, to harvest some canola from F59 in <a href="stories-from-zero-grande-gardens.php" target="_blank">PMC Grande Gardens 16km Start From Zero</a> savegame.
</p>

<p>
<b>2021-05-01T18:47:00Z</b> Todays first farm yard trees placed. Had to take a screenshot.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1846.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1846.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Second farm yard done, another screenshot. By this rate I have 50+ screenshots hehe, oh well.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1902.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1902.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Minerva Creek had some single trees.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1919.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1919.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1920.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1920.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Creek looks a bit naked without bushes or the actual heightmap creek ditch, but those will be added later.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-01T1923.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-01T1923.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-02T18:29:00Z</b> Todays first tree placement done. This was bunch of trees along the railroad track in terrains north edge.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1829.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1829.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1830.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1830.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-02T18:39:00Z First farm yard trees placed, this yard had only two maple/volume and few very small spruce/pine trees. Very quick to place.
</p>

<p>
Next farm yard had a lot of sprune/pine trees, to break the wind and line of sight I believe.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1856.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1856.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-02T1857.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-02T1857.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-03T18:07:00Z</b> Todays first trees placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1807.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1807.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Second farm yard tree objects placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1816.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1816.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Third farm yard tree objects placed.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1829.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1829.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did fourth farm yard, this one right at the north edge of the terrain. This farm yard was actually cut off by terrain edge, the trees from farm yard actually went into some sort of creek bed towards north, but thats beyond terrain edge so not my problem.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1915.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1915.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then there was just few trees in the wilderness, one actually completely alone between two fields.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1922.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1922.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did the NE corner trees on this small, umm, island type area with one structure.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-03T1943.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-03T1943.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
After this I again slid into the idling mode, just staring empty screen with blank look on my face. Editing / computer burnout is not fun.
</p>

<p>
I actually felt like playing <a href="https://www.pmctactical.org/arma3/" target="_blank">ArmA 3</a>, immersing myself into some huge european woodland rolling hills cold war terrain for hours, heck rest of the day. But unfortunately there is no LARGE such terrains available, largest is PMC Rugen and well been there done that, so yeah...
</p>

<p>
<b>2021-05-04T23:15:00Z</b> Todays first farm yard trees placed, well actually this was farm yard that was cut off, the buildings are beyond terrain edge which are not present but the trees are which I now placed.
</p>

<p>
Did another location, no farm yard just trees by side of the road.
</p>

<p>
<b>2021-05-05T01:02:00Z</b> Then did farm yard with spruce/pine trees and all.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T0102.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T0102.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Wrote down changelog entry for may 5th, it looks funny as I have been painfully slowly struggling with these tree objects. Take a look:
</p>

<pre>
2021-04-27:
- iowa garden city vegetation object placement continues
2021-04-28:
- iowa garden city vegetation object placement continues
2021-04-29:
- iowa garden city vegetation object placement continues
2021-04-30:
- iowa garden city vegetation object placement continues
2021-05-01:
- iowa garden city vegetation object placement continues
2021-05-02:
- iowa garden city vegetation object placement continues
2021-05-03:
- iowa garden city vegetation object placement continues
2021-05-04:
- iowa garden city vegetation object placement continues
2021-05-05:
- iowa garden city vegetation object placement continues
</pre>

<p>
This looks so stupid. These trees should have been placed within a day, maximum of two days. Now I have been struggling with boredom/burnout so I usually do one or two farm yards after days first meal just so I can mark changelog that I did something and then... then just slide into idling lazy mode where I stare monitor with blank look on my face, maybe watch some dumb twitch streams.
</p>

<p>
2021-05-05T08:33:00Z Did one more farm yard tree placement after idling half the day watching twitch live streams.
</p>

<p>
2021-05-05T22:14:00Z Todays first trees placed, by the railroad tracks just north of minerva creek.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T2214.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T2214.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T2215.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T2215.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another farm yard trees done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-05T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-05T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-06T00:01:00Z</b> And this next farm yard had the longest spruce/pine tree wind breakers done so far.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-06T0001.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-06T0001.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-06T0002.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-06T0002.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And again only after doing what, two farm yards and one wilderness piece I felt like not wanting to continue editing anymore.
</p>

<p>
Then placed trees by the railroad tracks north from garden city.
</p>

<p>
2021-05-06T07:25:00Z Did one farm yard with not that many trees.
</p>

<p>
2021-05-06T23:55:00Z Todays first farm yard tree object placement done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-06T2355.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-06T2355.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-07T00:07:00Z</b> Second farm yard done right next to the first one.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-07T0006.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-07T0006.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-07T09:37:00Z After several hours of slacking did another farm yard tree placement.
</p>

<p>
2021-05-07T20:38:00Z Todays first farm yard tree objects are placed. Basic farm yard without spruce/pine trees.
</p>

<p>
Created two more locations in the field and by the road (single tree).
</p>

<p>
Another farm yard done. On the background seen the trees on the field.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-07T2133.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-07T2133.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-07T22:33:00Z Another farm yard trees done.
</p>

<p>
<b>2021-05-08T03:12:00Z</b> After a break did one farm yard tree objects again.
</p>

<p>
In this screenshot you can see town of garden city in the background. Placing trees in clockwise circle around the terrain and now kind of reached the area there I started, well more or less.
</p>

<p>
Still plenty of todo of course.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0311.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0311.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next farm yard done, just east of garden city.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0455.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0455.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And then tree object placement progress update for PMC discord.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0501.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0501.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-08T09:17:00Z Another farm yard done but yeah its been slow day again.
</p>

<p>
And one more done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0924.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0924.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next farm yard.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T0931.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T0931.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-08T10:29:00Z Did few more farm yards, felt actually pretty good getting some real progress done, at least for a short while.
</p>

<p>
2021-05-08T11:50:00Z Several more farm yards done now, suddenly got some enthusiasm and motivation to get some editing done.
</p>

<p>
East side of the terrain is now done, basically only the south side left. I start to feel like there is light at the end of the tunnel now.
</p>

<p>
2021-05-08T21:59:00Z Todays first farm yard done. Only 14 more left and then its all done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2157.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2157.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got days first meal in, then attacked tree objects placement with enthusiasm and motivation... today this will end <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-05-08T22:48:00Z Another farm yard done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2248.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2248.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Had good feeling for today, I really feel like these trees get done today.
</p>

<p>
Thick tree line to cover some sort of huge pig barn/shed.
</p>

Google/maps:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2302.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2302.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

GE:
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-08T2303.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-08T2303.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
<b>2021-05-09T00:03:00Z</b> Another farm yard done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0003.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0003.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And another farm yard done, feeling excited!
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0017.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0017.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-09T00:28:00Z Farm yard done, not many left now.
</p>

<p>
2021-05-09T00:38:00Z <b>PMC Iowa Garden City 8km basic object placement is complete!</b> Yeah buddy!
</p>

<p>
So now all basic buildings and trees object placement is done, this is awesome!
</p>

<p>
There will be some minor changes, tweaks etc to buildings, decorations perhaps etc added, but now the bulk work is done! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
All objects selected, cant really fit piece of crap GE into view all at once.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0044.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0044.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then exported PMC_Helpers just in case I edited them, I have no recollection as GE has been running 24hrs a day since apr 27th which is over a week now (last weeks wednesday, now its sat-sun midnight). Then took mandatory backups and finally synced terrain files to FS19 mods dir.
</p>

<p>
Its time to try it in-game first with with all basic objects done <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Brought it in-game with LOD/View distance settings of 5, did camera flyover and was shocked how awesome it looks. Took a bunch of screenshots but single screenshot wont convey the whole meaning of 8km real world data terrain, so here is one of which I liked the most.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-09T0124.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-09T0124.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Compiled new version of the terrain and copied it to PMC Gaming computer, then did flyover video capturing.
</p>

<div class="grid-container">
<div class="grid-item">
<p>
PMC Iowa Garden City 8km Fast Run Through Ground Level 2021-05-09
</p>
<iframe width="480" height="270"
src="https://www.youtube.com/embed/mPFVTd5mJDI">
</iframe>
</div>

<div class="grid-item">
<p>
PMC Iowa Garden City 8km Terrain WIP Tour 2021-05-09
</p>
<iframe width="480" height="270"
src="https://www.youtube.com/embed/-0W9F-qZVbI">
</iframe>
</div>
</div>

<p>
2021-05-17T10:33:00Z Did hasty Seasons GEO for PMC Iowa Garden City 8km, temperatures for freezing winter and moderately warm summer.
</p>

<p>
2021-05-18T07:10:00Z Took a screenshot of current farmland image.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T0708.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T0708.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T11:46:00Z Farmland painting in GIMP continues, almost done first full section. Also wrote notes for farmland painting using cultivator_density in GIMP tutorial.
</p>

<p>
2021-05-18T13:39:00Z Ran out of farmland ID channels, ouch! <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Okay lets create some more, all the way to 255 now.
</p>

<p>
2021-05-18T16:44:00Z Finished GIMP painting farmland image, all 255 ID channels are in use, yikes! <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
Well yeah what can you do, there are lot of fields. I guess those paintings could be tweaked for some compromise like adding two fields into one ID on some places, for example put two small fields into same land, that would free up some IDs to split up remaining huge areas.
</p>

<p>
But dunno, there is so many small individual fields buyable now that NOBODY can whine that Start From Zero savegames are hard as land lots are so large and cost so much, there is plenty of small cheapo lands available now.
</p>

<p>
2021-05-18T18:18:00Z Started to create utility pole wires, did one line now.
</p>

<p>
Screenshot time.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1846.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1846.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T19:09:00Z Ran into interesting utility pole setup in a field. Its transformgroup is called manual-01 and has tree utility poles in a field without cultivator_density holes punched through. This is pretty much reminder for myself that if I come across this location later I know what was going on.
</p>

<p>
I'm going to leave the cultivator_density holes for later because now utility pole wires need to get done first. Of course this field is courseplay / hired worker unusable until those holes are done heh.
</p>

<p>
I have to say this wire project is much more work than I imagined.
</p>

<p>
2021-05-18T19:23:00Z Quite interesting spline setup here, had to re-create it completely as the old one just didn't work for wires.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1922.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1922.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1955.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1955.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next I discovered utility pole line which had really bizarre zig-zag in the beginning, no way the wire script could place wires for this, so I decided to rename the transformgroup to zig-zag and leave it for later date.
</p>

<p>
Check it out.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T1957.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T1957.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Another manually done only 3 poles, I just made a spline for it and got them to align pretty closely like the original ones.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T2010.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T2010.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-18T20:35:00Z Doing good progress, several utility pole lines re-created with wires now.
</p>

<p>
Now I ran into another set of manual transformgroups which mean they were hand placed according to google/maps satellite imagery. I am afraid to touch these so I don't erase work that I did earlier, I'm just going to continue from the next traditional script created transformgroup.
</p>

<p>
These manual ones were manual-03 through 07.
</p>

<p>
2021-05-18T22:22:00Z All utility pole wires placed, except the manual ones which needs some more tinkering.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-18T2222.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-18T2222.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then it was time to start preparing first internal testing version release <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-18T22:57:00Z Uploaded PMC_Iowa_Garden_City_8km_v1.1.3.7z to google drive for internal testers <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-21T22:30:00Z Sell points aligned to ground and v1.1.4 internal testing version compiled.
</p>

<p>
2021-05-22T11:55:00Z Seasons GEO Iowa Garden City starting temperatures increased to warmer.
</p>

<p>
2021-05-27T05:23:00Z Started to paint chart for asphalt roads so I know where to place splines which are used to create asphalt road piece meshes.
</p>

<p>
2021-05-27T05:53:00Z Finished painting it using google/maps as source. Surprisingly low number of asphalt roads there.
</p>

<p>
Below image red is asphalt and yellow is dirt/gravel road.
</p>

<p>
<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T0553.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T0553.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>
</p>

<p>
Next I just need to actually create the asphalt roads... /me backs away slowly ... <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Then decided to start placing asphalt road splines right away, even though I don't remember much at all how I did them previously. What I mean is how to do them so they would look nice and not some jagged edges crap ones, but hey gotta start trying and see how it goes.
</p>

<p>
2021-05-27T06:21:00Z Took backups, always gotta have good backups, a snapshot of last properly working version before starting to add new stuff in.
</p>

<p>
Created spline from center garden city by the railroad towards west and then north west. Its coordinates aligned to ground are: -449.73498535 37.17038727 616.17468262
</p>

<p>
Yep copy pasted them here as I probably need to restore the spline to original coordinates after fiddling with it, so I had to save them somewhere and this is as good text file as any hehe.
</p>

<p>
2021-05-27T07:26:00Z Tested first asphalt road in-game, looks overall pretty good with elevated road except curves has the issue with jagged "empty" edge parts.
</p>

<p>
And when I say first asphalt road I mean in iowa garden city, my real first ever asphalt road was done in PMC Grande Gardens 16km fairly recently.
</p>

<p>
Tomorrow I'm hoping to add more roads and see if anything could be done with those curves. Also need to smooth out elevations a bit on intersections for dirt roads.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T0718.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T0718.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-27T18:24:00Z New terrain editing day has started, already creating spline for the east-west direction asphalt road.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T1823.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T1823.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T1830.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T1830.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Spline coordinates are: 4094.55810547 9.91044426 1449.92602539
</p>

<p>
Third splne done with coordinates: 339.76501465 25.62941742 4094.38110352
</p>

<p>
Road 10m mesh piece placing method:
</p>

<p>
DOESNT WORK:<br>
1) create spline where asphalt road is<br>
2) run scripts -&gt; Roads.Ditches -&gt; Place Roads 9.8m<br>
3) increase spline elevation with 1 meter<br>
4) run scripts -&gt; Roads.Ditches -&gt; set terrain height by spline no raise no smoothing 6m<br>
5) select road 10m piece transformgroup and increase its elevation by 1.5m or until all terrain is beneath the whole road<br>
Done
</p>

<p>
2021-05-27T20:09:00Z works OK:
</p>

<p>
- create spline where asphalt road is, DO NOT ROTATE IT!<br>
- run scripts -&gt; Roads.Ditches -&gt; set terrain height by spline width 8m, raise 1m<br>
- run scripts -&gt; Roads.Ditches -&gt; Place Roads 9.8m
</p>

<p>
This makes nice elevations kind of ditch type (sort of) and placed road objects nicely aligned on top of them.
</p>

<p>
Struggling with curves <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T2033.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T2033.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-27T21:05:00Z Finished asphalt roads with splineplacement method, intersections and well connections in general look real ugly, also the long east-west road was elevated too high with improper ditch smoothness, but yeah asphalt roads are now in and will have to check in-game how they look.
</p>

<p>
More tweaks, probably like complete rework will happen later.
</p>

<p>
2021-05-27T21:13:00Z In-game test done and overall I like the roads even though there are couple of rought spots as mentioned above.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-27T2111.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-27T2111.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-05-29T16:44:00Z New editing day has started, going to GIMP paint those farm yard driveway dirt/gravel roads a bit now. Not feeling overly enthusiastic about it, but lets try and see what happens.
</p>

<p>
2021-05-29T16:57:00Z Northern most row of US NAIP image painted with RGB 255,0,0 red dirt/gravel roads now. There was already few of them done previously in far NW corner, but basically all the rest remain untouched.
</p>

<p>
2021-05-30T01:09:00Z Was GIMP painting dirt/gravel driveway roads, didn't zoom out so don't know how much is done other than two road grids east-west alignment.
</p>

<p>
2021-05-30T02:18:00Z Done painting the driveway parts! <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
There is still few touchups I need to do on intersections, here is couple of examples:
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-30T0220.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-30T0220.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-30T0222.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-30T0222.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Also looks like many of the wind turbine paths are missing:
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-05-30T0223.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-05-30T0223.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then started to do this touchup pass. Better get it done right away so road painting is completely done and I can move into other tasks.
</p>

<p>
2021-05-30T02:44:00Z And all intersection and wind turbine touchups done, now GIMP road painting is 100% complete, if anything was missed then that falls to bugs category <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-05-30T03:56:00Z Compiled PMC_Iowa_Garden_City_8km_v1.1.5.7z for internal testers.
</p>

<p>
Asphalt roads are pretty rough at few places in this first iteration but those will be tweaked later.
</p>

<p>
2021-06-01T02:07:00Z Was watching penalty_box play testing v1.1.5 and live streaming, tipCol was from mapUS so he could not tip to fields on some locations, so we decided that I'll fix it on the fly while he streams, so I did.
</p>

<p>
Compiled v1.1.6 for internal testers.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-02T0207.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-02T0207.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Talking about real time bug fixing <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-06-02T07:00:00Z Started working on players farm 1 for defaultItems.xml
</p>

<p>
First took backups, never forget backups. Just to recap my backup batch file created 7-Zip archive with UTC time stamp, so now I created this file name: PMC_Iowa_Garden_City_8km_2021-06-02T0658.7z - with these kind of backup archives it is very easy to revert back to pick up something you messed up etc. And best yet, its one click batch file, taking backups cant get any easier than that :)
</p>

<p>
2021-06-02T07:33:00Z Finished transferring players farm 1 from GE terrain.i3d into defaultItems.xml as-is, meaning that farmsilolarge will definitely not work with the unloading pipes and dumping grills.
</p>

<p>
Also as they were set to land 0, it didn't work right away.
</p>

<p>
2021-06-02T11:51:00Z Set FarmId to 1 and now the buildings show up in garage and can be sold.
</p>

<p>
There is still issue with giants siloExtension which cant be sold, no idea why, they have the same settings as farmsilolarges.
</p>

<p>
2021-06-02T21:44:00Z Asphalt road elevations smoothed out by dealership and intersections.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-02T2224.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-02T2224.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Did all that asphalt road intersection terrain heightmap smoothing manually in GE, right from the start I knew it was waste of time because next time I need to revert heightmap back to previous backup all this work will be lost. Intersection and field approaches smoothing needs to be done splines, so its non destructive work and can be re-created at any time as many times you want. Oh well, whats done is done.
</p>

<p>
2021-06-04T08:53:00Z Vehicle shop aka dealership start / end coordinates adjusted so that bought stuff wont clip with other objects. These were from the era when there was no other objects nearby.
</p>

<p>
2021-06-04T09:18:00Z Patched hole for cultivator_density where three utility poles were on F258. It was the usual shuffle to paint the locations first in GE, then bring that cultivator_density image to GIMP, then update my actual fields source XCF image with it, then export it back to GE, heh a lot of parts to go through.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T0918.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T0918.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then moved players farm 1 CBJ vehicle shed slightly to east which was on a field edge. Was quite tight location, there really was not much free space on either side of the building, hmm wonder if this CBJ 72x150_Building is too wide for the real life building I'm trying to replicate. Well anyways now vehicles in the field should not collide with the building.
</p>

<p>
Then there was dumb non painted strip of cultivator_density in F38 NW so painted that in and updated both cultivator and fruit density images. This also brough nice grass for the three utility pole holes (giggity) in F258.
</p>

<p>
Attempted to fix F230 field map indicator being so close to terrain edge that the game engine wont render its number on ESC mapview PDA, needs testing in-game if it was moved far away enough in order to work.
</p>

<p>
Then utility poles NE from player farm 1 were scaled 0.75, fixed this back to proper value of 1.
</p>

<p>
2021-06-04T10:01:00Z Missed a building on following location: <a href="https://www.google.com/maps/@42.2843745,-93.3431745,144m/data=!3m1!1e3" target="_blank">google/maps</a>, so added it now. Actually it was two buildings and then I also see in north side some sort of narrow tower or radio mast type structure SHADOW only, so quite difficult to juge what is it, maybe some sort of windmill type object dunno, well that did not get added as said no idea what it might be.
</p>

<p>
Changed one selling point to Max Yield CO-OP name, another for Prairie Land Cooperative, rest were named "SP1", "SP2" etc style. Hmm that prairie land is quite long name, it will clutter ESC mapview badly, oh well.
</p>

<p>
2021-06-04T10:14:00Z Had quite a lot of edits in now so next is the in-game test if everything works okay. Have to carefully go through the changelog to check every edit if it works ok not. Lastly to check log for errors of course.
</p>

<p>
Well in-game test shows that F230 field map indicator was NOT fixed, it is still too close to terrain edge.
</p>

<p>
Found some additional field map indicators which were too close to the terrain edge, see below.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102736.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102736.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102723.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102723.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T102711.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T102711.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Got paintable ground textures with grass in.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1022.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1022.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
And tested that we have plenty of room at vehicle shop when buying new vehicles, I think this is enough space <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1021.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1021.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-04T10:57:00Z Adjusted field map indicators a bit more for all those fields I found them missing. Next I needed to punch holes to F258 field definition which had the utility poles. I could have done this just on top of the normal heightmap but decided to take backups and flatten heightmap to RGB 1,1,1 so its nice and even ground, actually 0,0,0 might be best dunno.
</p>

<p>
Here is how the utility pole field definition turned out as quick simple shape. Note that this will not be the final shape, I will add detailed corner pieces once development reaches that stage.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1105.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1105.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Checked in-game and field defintion turned out fine around utility pole holes.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-04T1122.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-04T1122.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-04T11:39:00Z Added vehicle shop aka dealership customizing and repairing trigger setup, vehicle sell point.
</p>

<p>
2021-06-04T22:27:00Z Adjusted dealership start/end coordinates and rotation away from the building.
</p>

<p>
2021-06-04T23:22:00Z Disabled player farm 1 bin silos completely from defaultItems.xml so testers can place auger pipe required bin silos themselves, hopefully we find best suited bin silo mod for this purpose.
</p>

<p>
And with that edit I'm ready to start put together next internal testing version and changelog web page.
</p>

<p>
2021-06-05T06:40:00Z Compiled PMC_Iowa_Garden_City_8km_v1.1.7.7z for internal testing.
</p>

<p>
<b>2021-06-12</b> Seasons GEO iowa garden city increased winter clouds, rain chance and amount of rain. Gotta make winters HARD <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
<b>2021-06-13</b> Floydno9 had reported that with our seasons GEO iowa garden city sugar beets cannot be harvested. So I started new savegame and.. well let me copy paste my play-by-play report here below, I didn't write it dev diary in mind so be aware of that.
</p>

<p>
Started new savegame, 9 day seasons. 01/early-spring in-game 0835hrs, weather -2C/+4C. Lets start.
</p>

<p>
Had to time accelerate until soil temperature reached +5C which is sugar beet planting temperature. I'm using my standard 6000 speed time acceleration.
</p>

<p>
02/early-spring in-game 0817hrs, weather -0C/+2C.<br>
03/early-spring in-game 0746hrs, weather -2C/+2C.<br>
04/mid-spring in-game 0748hrs, weather +6C/+3C.<br>
05/mid-spring in-game 0803hrs, weather +9C/+6C. Its now sugar beet planting time.
</p>

<p>
Got sugar beets planted, next was just to time accelerate until they are harvest ready... or wither?
</p>

<p>
06/mid-spring in-game 0742hrs, weather +7C. After few real life minutes sugar beets got germinated.<br>
07/late-spring in-game 0747hrs, weather +12C/+10C. After few real life minutes sugar beets are growing (green plants appeared).<br>
08/late-spring in-game 0724hrs, weather +12C/+11C.<br>
09/late-spring in-game 0713hrs, weather +13C.<br>
01/early-summer in-game 0655hrs, weather +13C/+14C.<br>
02/early-summer in-game 0710hrs, weather +14C/+16C. Second growth stage kicked in, green plants increased in size.<br>
03/early-summer in-game 0650hrs, weather +14C/+16C.<br>
04/mid-summer in-game 0649hrs, weather +17C.<br>
05/mid-summer in-game 0709hrs, weather +19C. Another growth stage kicked in.<br>
06/mid-summer in-game 0710hrs, weather +16C/+20C.<br>
07/late-summer in-game 0731hrs, weather +17C/+20C.<br>
08/late-summer in-game 0739hrs, weather +16C/+20C.<br>
09/late-summer in-game 0747hrs, weather +16C/+19C.<br>
01/early-autumn in-game 0754hrs, weather +15C/+19C.<br>
02/early-autumn in-game 0841hrs, weather +12C/+17C.<br>
03/early-autumn in-game 0810hrs, weather +14C/+16C.<br>
04/mid-autumn in-game 0814hrs, weather +6C/+13C. First day of sugar beets harvest season.<br>
05/mid-autumn in-game 0859hrs, weather +8C/+12C. Growth stage is: remove tops. This is before half way to harvest season.
</p>

<p>
Conclusion is that at least for me with the latest seasons GEO, I can get into "remove tops" stage just fine, I assume that is the harvest ready stage.
</p>

<p>
2021-06-13T11:21:00Z Painted tipcol with RGB 0,0,0 black, tipping allowed, for sure this time heh.
</p>

<p>
Seasons mask created.
</p>

<p>
<b>2021-06-15T01:40:00Z</b> Tipping collision fixed, REAL PROPER this time haha!
</p>

<p>
Yeah it was odd, I painted tipCol info layer in GE with BLACK color meaning it was erased, but no dice there was still tipping collision when playing in-game. I painted and checked in-game for like 5 times and no go, still tipping collision.
</p>

<p>
Well then I ran GE script update ground collision map which I always thought was for PLACEABLES, guess not... first in-game test after that and boom tipping collision fixed.
</p>

<p>
<b>2021-06-18T14:54:00Z</b> Editing continues, took backups to have another restore point to fall back into if I mess up.
</p>

<p>
Added storeItems into modDesc.xml so that placeables work properly without causing errors or even a game freeze.
</p>

<p>
2021-06-18T15:46:00Z Added animal dealer 3D model and associated trigger with warning stripes.
</p>

<p>
Was frustrated with the lack of animal hog/pig barns as we don't have any that would match these iowa ones. Didn't want to get stuck dwelling over this problem and decided to do new farmer game-mode vehicles next.
</p>

<p>
Iowa garden city player farm 1 driveway grid coordinates 2820,3320 and vehicle shop coords 3630,4690.
</p>

<p>
Purchased Lemken Titan 18 plow (width 4.9m, speed 12km/h, required horsepower 300hp). John Deere 6R with 6250R engine upgrade (300hp).
</p>

<p>
Used GtX easy dev controls to teleport tractor and plow into players farm 1 driveway, then parked plow into one of the CBJ vehicle sheds. Used easy dev control to throw tractor back to vehicle shop ready to pickup new purchases.
</p>

<p>
Purchased Horsch Tiger 6 DT cultivator (width 6m, speed 15km/h, required horsepower 300hp). Then did the same parking shuffle, next following vehicles/implements are done the same way but I don't spam every itchy pitchy detail here other than brand/model/specs.
</p>

<p>
Purchased Lemken Solitair 23 (capacity 2000 liters) and Lemken Azurit 9 (capacity 600 liters, width 6m, speed 15km/h, required horsepower 110hp). Filled with fertilizer and seeds.
</p>

<p>
Purchased Vaderstad Rapid A 600S (capacity 3100 liters, width 6m, speed 18km/h, required horsepower 180hp). Filled with fertilizer and seeds.
</p>

<p>
Purchased Agroliner TAW 30 (capacity 45,000 liters).
</p>

<p>
Purchased Kuhn PF 1500 (capacity 1500 liters) and Kuhn Deltis 1302 MTA3 (capacity 1300 liters, with 21m, speed 12km/h).
</p>

<p>
Purchased Kuhn Axis 40.2 M-EMC-W (capacity 3200 liters, width 24m, speed 20km/h).
</p>

<p>
Purchased Rostelmash Nova 330 combine, Ziegler Corn Champion 5R header (width 3.4m, speed 10km/h), Rostelmash PowerStream500 header (width 5m, speed 10km/h).
</p>

<p>
Purchased product pallets 4 seed, 4 fertilizer, 4 lime and 2 herbicide tanks. Had to use fliegl autoload trailer to transfer these pallets into one of the CBJ midwest buildings vehicle sheds in the farm, I could not figure out any way to teleport them.
</p>

<p>
Then opened savegame vehicles.xml and edited operating time and wear to zero, then copy pasted everything to terrains defaultVehicles.xml and added defaultFarmProperty="true" property.
</p>

<p>
2021-06-18T18:22:00Z Tested and stuff appears okay in New-farmer game-mode, they do not appear in Farm manager. All good.
</p>

<p>
2021-06-18T19:22:00Z Grass cleared off from farm 1 placeable buildings, didn't paint the ground to gravel or anything yet, at least now it looks a bit better than just grass growing inside your vehicle sheds.
</p>

<p>
Then added terrain edge block invisible geometry's so vehicles wont fall off the edge. This was super easy, just import pre-made terrain_boundaries_8km.i3d and boom done <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-18T1927.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-18T1927.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-18T20:00:00Z Transferred Location-06 farm yard buildings to player farm 2. Its on farmId="2" now which I actually cant test without starting multiplayer hosted server as far as I know. Buildings show up fine in farm manager game-mode but door animations wont work (because I'm on farmId="1" in singleplayer).
</p>

<p>
Hmm I think farmId="0" which is tied to the farmland purchase is better option here.
</p>

<p>
In multiplayer server players create farms and then wont get any buildings right away, like whoever creates farm 2 doesn't necessarily want to buy this farm yard, so with farmId="0" they could buy any land they wish along with the buildings located there.
</p>

<p>
Need to figure that out and document it properly, I think my local notes have something written down but have already forgotten them heh.
</p>

<p>
<b>2021-06-19T02:10:00Z</b> Transferred Location-09 into player farms.
</p>

<p>
Then transferred Location-10, 13, 19, 20, 24 and 25 into player farms.
</p>

<p>
With Location-24 I had to create farmSiloSmall for PMC Farm Silos mod as it was not there yet, just never had any need for this smaller silo.
</p>

<p>
2021-06-19T03:11:00Z Transferred Location-26 into player farms.
</p>

<p>
Quite nice bunch of farms transferred into players ownership, all in farmId="0" which should work okay, needs testing.
</p>

<p>
Started FS19 for in-game test and got this error:
</p>

<pre>
2021-06-19 03:13 Error: C:/FS19.Mods/PMC_Iowa_Garden_City_8km/defaultItems.xml. items.
</pre>

<p>
Umm "items", thats it? Can you elaborate on that a bit? HEHE
</p>

<p>
First time I've seen such "items" error, time to go check what notepad++ copy pasting messed up in there. Discovered that farmSiloLarge.xml ending line was /&gt; instead of just &gt; heh
</p>

<p>
2021-06-19T06:16:00Z Just got all the new player farm placeable objects in so that on new savegame you don't own any of them but they are in the terrain and animations work (doors open/close), then once you buy the land you get ownership of the buildings/silos as well.
</p>

<p>
<b>2021-06-20T00:09:00Z</b> PMC Farm Silo Extension gave some lua index error when you attempted to sell it, well there was a bug in defaultItems.xml where className was SiloPlaceable which was wrong, it needs to be SiloExtensionPlaceable, its now finally fixed.
</p>

<p>
2021-06-20T15:17:00Z New farmer game-mode vehicles, Kuhn axis 40.2 m-emc-w spreader cant do lime so you have now NO lime spreading ability, had to fix this by selling kuhn and buying Bredal K105 with 6m spreading unit.
</p>

<p>
Then updated defaultVehicles.xml with operating time and wear set to zero, also added defaultFarmProperty="true" as usual.
</p>

<!--












-->

<p>
2021-06-20T21:36:00Z Decided to add land to New Farmer game-mode which contains field 163. This field (and land) is tiny, its cute little field, however it matches really nicely to the small starter vehicles I chose to add into this game-mode.
</p>

<p>
<b>2021-06-22T23:31:00Z</b> Took backups, lets switch those giants farm bin silos to some auger pipe operated ones.
</p>

<p>
2021-06-22T23:45:00Z Imported brock_bin, fs19_gsi_bin_large and gsi_bin, then went to players farm 1, removed the giants bins and placed two brock bin's and four gsi bin large's. Then added them into defaultItems.xml file of course.
</p>

<p>
<b>2021-06-23T00:26:00Z</b> Had some className issues but got those figured out, now brock and gsi large bins are in players farm 1, work as designed. Nice.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-23T0031.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-23T0031.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-23T01:27:00Z Switched bin silos for two more farm yards, farm 4 Location-10 and farm 6 Location-19.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-23T0131.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-23T0131.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Then did Farm 7, GE Location-20. And Farm 8, GE Location-24.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-23T0155.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-23T0155.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Next did Farm 9, GE Location-25. Then Farm 10, GE Location-26.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-23T0214.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-23T0214.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Tested all player farms in-game and they work nicely, buying land and the bin silo itself has capacity percent indicator working. Looking good.
</p>

<p>
<b>2021-06-26T21:31:00Z</b> After few days break just playing in PMC Iowa Garden City v1.1.8 its time to get back to editing. Todays goal is to transfer SIX (6) farm yard buildings into player farms placeables using defaultItems.xml config.
</p>

<p>
I want to focus on the SE and NE area, well lets just say eastern area because right now somehow all the 10 farm yards I did are in very close proximity to farm 1 in west, south west area.
</p>

<p>
In GE transformgroup Buildings have Location sub transformgroups, looks like number 57 is in north central and from there buildings are placed in clockwise direction where 93 is directly south from garden city.
</p>

<p>
2021-06-26T21:54:00Z Took a moment but Location-36 transferred to players farm, this is now farm 11 (farmid="0" but yeah eleventh player farm).
</p>

<p>
2021-06-26T22:15:00Z Players farm 11 transferred from static ai farms, with auger pipe bin silo.
</p>

<p>
<b>2021-06-27T19:29:00Z</b> Yesterday was a big failure, plan was to edit a lot but as soon as I started penalty_box_gaming went live in twitch to play test PMC Iowa Garden City 8km and I started to watch of course. Then I tried to edit on the background, even muted the stream for short while... but it just wasn't working, I could not fully concentrate on editing so I stopped.
</p>

<p>
I actually switched to PMC Gaming computer and continued playing animal care basics testing savegame while watching that live stream. It was good day spent doing that but unfortunately it was disaster for any editing progress heh.
</p>

<p>
So today I made a clear decision, actually made this last night already, had it all planned out etc, that I'll shut down discord, wont watch any twitch or youtube, just completely concentrate on editing farmsim terrains. This means iowa garden city and I actually still have hopes to get some work done to <a href="pmc-grande-gardens-16km.php">PMC Grande Gardens 16km</a> as well, but first things first and now we continue transferring those static farm yards to player farms <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
To recap; we now have 12 player farm yards on defaultItems.xml so they will be owned once you buy the land these objects are located at. All farm bin silos are the auger pipe operated ones.
</p>

<p>
2021-06-27T19:44:00Z Was scoping out the next static farm yard to transfer into player farms. I wanted to distribute these evenly across the terrain even though there is no particular way for players to spot that, still its not nice to have them all bunched up in a small area when rest of the terrain remain free of player farms.
</p>

<p>
Location-69 was on east edge somewhat close to terrain edge, but great looking farm yard though. Location-88 was in SE area, quansat hut, three bin silos but no apparent farm house, not that it really interests me but anyways. Location-89 awesome farm yard in SE area with 4 smaller bin silos and one large, this is going to be one of our farm yards for sure. Location-90 is doable but somewhat close to S edge, same as Location-91. Location-92 has three very small bin silos and two larger ones, two vehicle sheds and a farm house, yep this will be one player farm for sure. Location-93 was just S of garden city, three bin silos, two vehicle sheds and a farm house, perfect player farm. Location-94 was right next to 93, a bit too close although dunno if that matters, two bins, vehicle shop and a farm house. Location-96 was on SSW area, another great one, many bin silos, big vehicle shed and a farm house, yeah this is so going to be a player farm.
</p>

<p>
2021-06-27T20:08:00Z Static farm yard Location-88 transferred to players farm with auger pipe operated bin silos.
</p>

<p>
Static farm yard Location-89, 92 and 93 transferred to players farm with auger pipe operated bin silos. This makes now 16 player farms, full multiplayer server worth of players.
</p>

<p>
Its not so much about matching the number of player farms to MP dedicated server capabilities but to have enough nice playable farms for the players. This also helps single player because all of these objects can be sold and the bin silos used.
</p>

<p>
<b>2021-06-28T00:18:00Z</b> Editing day after that came to sudden halt, after doing those above farm yards I didn't want to edit, was yawning so went to take a nap and after waking up almost three hours later I had no mental energy to edit again.
</p>

<p>
2021-06-28T14:15:00Z Spent remainder of 28th to just idle and then watch TV, just had no motivation to continue editing, mind was blank. Waking up the next day and motivation was much the same, just about zero. Editing (well computer stuff in general for me) burnout is no joke <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
<b>2021-06-29T06:36:00Z</b> Back to editing, this time started to fix farmland image in GIMP, it had some overlapping ie duplicate RGB colors used so need to fix or at least reduce those.
</p>

<p>
2021-06-29T07:13:00Z Finished tweaking, debugging and bug fixing farmland image <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Its now pretty cool using 256 farmland areas, but it still ran out of farmland ID channels, would need more to add all individual farm yards and fields into buyable land. Right now its fine, more than fine actually... but I just would like to have more ID channels to use heh. Oh well maybe it can be increased to 512 havent investigated that yet.
</p>

<p>
All in all there is SO MUCH small and cheap land lots for players to purchase it should be no issue for anyone to start their farm with small equipment and not much money.
</p>

<p>
2021-06-29T08:37:00Z Tested GIMP painted fruit_density flowers/shrubbery, still not getting the random jitter pencils quite right but slowly getting there. (edit: these images got outdated few hours later, there ended up much less shrubbery).
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-29T0835.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-29T0835.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-06-29T0836.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-06-29T0836.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-06-29T10:38:00Z Was not happy with the results, either I got too little or way too much of the flower shrubbery. Painting it manually on specific spots takes way too long, but using some other brush pencil methods cause way too much of the shrubbery to appear. Had to go back and forth several times before I got somewhat decent results.
</p>

<p>
Its still very low amount of shrubbery, but I think this is now good starting point. Also it worries me as these shrubbery objects do not disappear on seasons winter, it looks stupid to have brightly colored flowers growing in a snow heh.
</p>

<p>
This latest shrubbery density is so low its like every few fields you see couple of flowers, heh.
</p>

<p>
2021-06-29T11:19:00Z Decided to add terrainDetailHeight_density channel increase whatever its called so that <a href="https://www.farming-simulator.com/mod.php?mod_id=150958" target="_blank">MaizePlus</a> and <a href="https://www.farming-simulator.com/mod.php?mod_id=177412" target="_blank">StrawMe</a> addons work properly with seasons. I really don't like this as it locks your GRLE image behind crashing GRLEConverter, but well, many people seem to request this feature so quess I have to add it.
</p>

<p>
2021-06-29T11:34:00Z terrainDetailHeight_density image and configs updated, checked in-game, no errors.
</p>

<p>
Obviously I did not test yet with all those maizeplus and strawme addons, that has to be left for internal testers.
</p>

<p>
2021-06-29T12:00:00Z Compiled PMC Iowa Garden City 8km v1.1.9 for internal testing and tested it myself that log is error free, all looks good for internal testing release <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2021-06-30T22:15:00Z Created american flag pole placeable object from mapUS flagPole01.i3d, made it buyable with land, then placed it on players farm 1 and tested that everything works okay.
</p>

<p>
store item DDS image came out ugly, but thats just cosmetics will learn how to fix it later.
</p>

<p>
2021-06-30T23:52:00Z New farmer player does not own his farm yard land (only F163), added farm yard ownership to _farmlands.xml config <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
This was the last edit for june 2021, in few minutes we start july, whee... I guess? <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-07-01T23:11:00Z Added american flag pole to two more player farm yards. Plan is to add them all to all player farms which just have farm house of any kind, so it looks like people actually live there.
</p>

<p>
2021-07-01T23:22:00Z Several more added, almost done.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-01T2322.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-01T2322.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-01T23:40:00Z Finished generating new collision map, exporting PMC_Helpers and saving project. Now all player farms with farm houses have american flag pole.
</p>

<p>
2021-07-02T09:53:00Z Added fuel station (mapUS gasStation.xml) next to dealership. Not sure if I like that building object, it looks kind of odd doesn't remind me of gas station, but oh well guess its a little bit more gas station alike than just meridian fuel tank, dunno.
</p>

<p>
2021-07-02T12:36:00Z Used splines, cubes and whatnot to create railroad tracks using SplineStreetConstructor by TracMaxx. Its now just a iron train track, still no train added, but at least we have one of the noticeable landmarks in.
</p>

<p>
I really havent decided what to do with train yet, can players drive it or is it just cosmetic eye candy.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T1235.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T1235.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T1236.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T1236.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-02T14:50:00Z Added train locomotive and grain wagons to the tracks. Its now player drivable so you can TAB into it, but I want to disable that feature as the train travels outside terrain edge and that is not where players should follow.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T144523.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T144523.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-02T144557.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-02T144557.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
It looks so great to have train back in Garden City <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-07-02T16:45:00Z Finished setting train spline up one more time, previous one did not work train just disappeared. Now it casually loops around terrain west side. This is not what I really want to do, but its a train that drives by, in the future I want to configure it to purely cosmetic train which drives by once every maybe two or so hours so it will be a true treat when it goes by.
</p>

<p>
Now its bad if player drives it and goes outside the terrain edge, it will then just drive in "oblivion". But yeah, need to figure out that later how to make it cosmetic only.
</p>

<p>
2021-07-05T09:53:00Z New editing day has started, todays goal is two fold, first write a precision farming paint soil type image in GIMP tutorial and then to paint such image for PMC Iowa Garden City 8km, lets get to work <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
PMC Farming website already has <a href="https://www.farming-simulator.org/19/terrain-soil-types.php">soil types precision farming tutorial</a> page, but this has no fancy GIMP painting info other than the RGB 1,1,1 colors, I want to add full tutorial how to get very nice soil map painted in GIMP. So I created <a href="terrain-soil-types-painting-gimp.php">Soil Types Painting in GIMP for Precision Farming tutorial</a> page.
</p>

<p>
It was bizarre feeling recording FS19 terrain dev diary video while writing farming-simulator.org terrain tutorial.
</p>

<p>
2021-07-05T10:28:00Z First draft of the tutorial page was written (copy pasted from PMC local notes) and GIMP_precision_farming_soil_types.xcf image done.
</p>

<p>
2021-07-05T10:40:00Z Used _run_graphicsmagick_create_soilmap.bat to create precision farming soilmap with graphicsmagick. Its now 1024 x 1024 pixel resolution which sucks, but hey its giants hardcoded stuff, 2048 or larger wont work, so yeah <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Downloaded latest precision farming for testing this new soilmap of ours, edited the sampler vehicle for 50km radius. Then it was in-game testing time.
</p>

<pre>
2021-07-05 10:59   Info: Load soil map 'C:/FS19.Mods/PMC_Iowa_Garden_City_8km/maps/PMC_Iowa_Garden_City_8km/soilmap.grle'
</pre>

<p>
Yeah baby, that's how we roll, no errors on the first try [foriowagardencity] <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T110336.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T110336.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T110342.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T110342.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T110346.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T110346.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-05T1104.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-05T1104.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-05T17:19:00Z Selling point names got added for the "SP1" ones, just some random nonsense that came to my mind like "Big Grain" or whatever heh, its a name, if you don't like it suggest better ones <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-07-07T12:04:00Z New editing day had kicked of a while ago already while I forgot to write dev diary, SORRY <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
Big_guy86 was twitch live streaming last night and I noticed one tiny grass spot on F85, it was cultivator_density which had this spot unpainted, fixed that.
</p>

<p>
Then took german jahwol sausage eating LSD company garbage field definitions script and create 21.4 megabytes and 301,000 lines of XML parameters field definitions. I actually created the PNG images and setup the script already couple of days ago so this was real quick task.
</p>

<p>
It scares me so much to add such trash field definitions config to any PMC terrain, it is completely crazy to have HUNDREDS of corner pieces per field, I did not check them all but few had like 300 - 450 corner pieces per field. This is absolutely way too much, every single corner piece eats like 3 lines of XML parameters/code and as said these fields now have over three hundred thousand lines of XML.
</p>

<p>
Field definitions I3D alone is larger than rest of the TERRAIN.i3d file. Its that insane.
</p>

<p>
But the field definitions look pretty, players will be happy, they have no idea how crap these configs under the hood are.
</p>

<p>
My plan now is to experiment with these trash field definition XML lines, if any of the testers cant find anything wrong... if I cannot find anything wrong while testing some better contracts savegame playing... then I need to think this through is it good editing ethics to use such shit tech under the hood just because it looks good.
</p>

<p>
We'll see, this is now <i>highly experimental</i>.
</p>

<p>
Also forgot to write dev diary about changing map_fruitTypes.xml to only allow AI to plant american crops for iowa area, meaning corn and soybeans.
</p>

<p>
Added this template XML to my copy paste directory so further terrains that need such XML don't have to go through this same editing I can just copy paste it over.
</p>

<p>
2021-07-07T13:11:00Z Created few road splines for intersections to smooth out elevations for those roads that are, well elevated.
</p>

<p>
First few came out all right. Smooth elevations on intersections are very important because it looks childish when you see videos and twitch live streams players driving 50+ km/h into such intersection with a tractor or a semi truck and then it goes flying backflips in the air. Intersection road elevations must be so smooth that even childish fast speeding vehicle driver cant make the vehicle fly.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-07T1314.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-07T1314.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
I'm now working on the south to north direction asphalt road which is elevated.
</p>

<p>
2021-07-07T14:11:00Z Finished doing the whole south to north asphalt road plus small connecting asphalt road (difficult to explain, from city west side curve down south, hmph).
</p>

<p>
2021-07-07T14:24:00Z This is quite tiresome to do those splines for intersections, driveways and field approaches / entrances. Its easy, but otherwise just tiresome, been doing it now over an hour straight and almost need to start taking artificial restroom breaks to stretch my legs and just get few minutes of downtime from this tiresome spline creation.
</p>

<p>
Don't get me wrong, mood is good, these splines are worth the effort because now if I ever make adjustments for asphalt roads I can just come back and adjust these already existing intersection splines and run them again. Or if I edit heightmap, maybe revert it back to the original, then all I have to do is to run all these spline scripts and all intersections are smooth again.
</p>

<p>
Non destructive editing, that's what's it all about.
</p>

<p>
2021-07-07T14:38:00Z More intersections and driveways and field approaches ...
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-07T1437.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-07T1437.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
2021-07-07T15:00:00Z Finished creating splines for road intersection smoothing, uuaah <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Glad to have that task done, quite relief actually, nice to have smooth road elevations now.
</p>

<p>
2021-07-07T15:22:00Z Removed grass under player farms CBJ vehicle sheds so when players open those and drive vehicles there it looks tidy.
</p>

<p>
And now we are done for todays edits. First in-game testing begins and if I cant find anything then its just off to compile next internal testing version.
</p>

<p>
2021-07-07T15:41:00Z Compiled new PMC Iowa Garden City 8km v1.1.10 internal testing version release packet PMC_Iowa_Garden_City_8km_v1.1.10.7z
</p>

<p>
Next need to update changelog and this dev diary I'm writing right now.
</p>

<!--


-->
<p>
2021-07-09T05:19:00Z Woke up, ate days first meal, didn't feel much like editing FS19, well anything, but got to do it as PMC Iowa Garden City 8km is too close to its first release it would be foolish to just idle.
</p>

<p>
Today need to figure out how to sort out asphalt road mess by the dealership railroad tracks.
</p>

<p>
So day begins by taking backups so we have another fall back point in case we need it. Never forget backups, NEVER.
</p>

<p>
2021-07-09T05:30:00Z Reverted back to original single shape field definitions, that german sausage eating american hating scumbag jawohl script is bad in so many levels, I'll never going to use it.
</p>

<p>
2021-07-09T06:27:00Z Did very rough duct tape style fixes for asphalt roads, not happy with these but besides doing a complete re-make of them this is the best I could do.
</p>

<p>
2021-07-14T15:44:00Z New editing day has been started hour or so ago, been studying that dreaded SplineStreetConstructor (SSC) program, plan today is to fix PMC Iowa Garden City 8km roads using it. Well the idea is to fix roads what ever means possible but SSC seems like the method I know most right now. In perfect world I would need to create road 3d meshes with modo but that would be yet another layer of studying on top of everything else, so SSC it is.
</p>

<p>
First I deleted existing roads which were a bit hastily made. Then restored the original Global Mapper and L3DT exported heightmap DEM image so the road elevation and ditches are removed. Restarted GE just in case the heightmap 4096 to 4097 saving didn't load properly (cant never be too sure with GE).
</p>

<p>
Moved old asphalt road splines into transformgroup and made it invisible, they are now retired into backup state, if my plan works then they will be permantently deleted.
</p>

<p>
Then started to create the longest north to south road which runs through garden city itself. Uuh another long spline to create.
</p>

<p>
2021-07-14T16:08:00Z N/S spline created from north to south direction, I made it from just a few control vertexes so this will be kind of experiment how it comes out, I doubt it needs more of them but we'll see how it looks.
</p>

<p>
Used SSC to create road mesh and by miracle it worked using the default setting it had. No idea which texture goes along with it, shows road_diffuse.dds but there are no such texture along with SSC download.
</p>

<p>
Took roadSolid.dds from BlueWeb's tutorial files, copied it to maps/textures/ directory and used material editor to set albedo texture path and file name to this texture, it shows up OK in GE. So far so good.
</p>

<p>
Exported railRoadBarriers out of mapUS. Initially I thought there was that kind of railroad crossing object which allows vehicles to smoothly run over the tracks but there was no such thing, I think mapUS tracks have no geometry hmm.
</p>

<p>
Imported railroadBarriers and placed them next to dealership crossing. Then took a look at trainSystem.xml for railroadCrossings and was basically taking wild guess how rootNode etc work, my first assumption is that it matches GE index path value, so I used that. Will be interesting to see what happens when bringing it in-game.
</p>

<p>
2021-07-14T17:05:00Z First railroadBarrier aka railroad crossing in-game test... was a failure <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<pre>
2021-07-14 16:58   Error: Failed to find child 14 from node trainSystem, only 1 childs given
</pre>

<p>
Had to go back to mapUS files and study how railroad crossings are done there, this is my first time trying to get them in-game on PMC terrains. Always exciting learning new skills.
</p>

<p>
2021-07-14T18:11:00Z Got trainSystem.i3d and XML working with railroad crossings. Now all the barriers have been added into trainSystem.i3d and XML has been configured properly to give good warning time when the barriers go down and then lift back up again after train has passed. mapUS settings of start/end distance 125 did not work for us as we have 40 car train <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Then I continued doing roads. Next is the E / W direction road and finally then that one short connection road as well.
</p>

<p>
2021-07-14T18:41:00Z Finished GE work for all the asphalt road 3d meshes, they are now just about flat on the ground without elevation, first step was to get them done through SSC, that is about done just pending in-game test.
</p>

<p>
Well in-game test revealed that E / W road had two flips on it, sigh. This is rage inducing crap with SSC <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Also SSC settings were from the default 9m road so it had nothing but a flat plane, no curb on it. Need to add some nice curb as just plain asphalt plane is not very nice. My current setup also lacks the elevated road with ditches.
</p>

<p>
Alright back to GE playing with cubes and in SSC trying to come up with good config INI file for road with curb.
</p>

<p>
2021-07-14T19:59:00Z Discovered I made a mistake creating the first asphalt road spline from south to north, forgot one turn. Oh well need to re-create it now for the third time, nice...
</p>

<p>
2021-07-14T21:19:00Z Battle continues to get SSC working properly. Once I got nice road curb/verge config file then curves caused bad wrinkles on the mesh. This was resolved by simply removing cube objects on the corners to make them more smooth. There was still one or two kind of wrinkles but it should be playable in-game now. Greetings to Grus-Tube in <a href="../contact.php">PMC Farming discord</a>.
</p>

<p>
Man I'm telling ya... FS19 road mesh making SUCKS so bad I'm ready to jump out of the window screaming. This is not what sane person goes through to get some ancient road tech in-game <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I really need to learn how to use modo so I can bring in heightmap and generate nice smooth roads.
</p>

<p>
2021-07-14T23:04:00Z Got all asphalt roads re-made with intersection crossings. They don't have elevation and ditching for now.
</p>

<p>
I am exhausted, its been miserable hot day and I'm sweating in +27C heat in PMC Bunker trying to understand how this piece of crap SSC works. Its going to be a cold day in hell if I ever use SSC again this is just insanity, nobody in their right mind uses such garbage tools for terrain editing. I'm happy to stay with painted texture "asphalt" roads if the alternative is to go through such hell as what today has been <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
Yes yes sure it will get easier now that I have somewhat understanding how SSC likes its I3D imports, it will go nuts with rotation="180 NUMBER 180" values, it requires rotation="0 NUMBER 0" instead. That can now be changed with simple regex. But yes this is so stupid I cant believe of the time I spend today working on this crap <img src="../images/smileys/icon_sad.gif" alt="Smiley :(" loading="lazy">
</p>

<p>
I could have made couple arma3 terrains in this time it took me to get few asphalt road meshes done with SSC, completely insane... <img src="../images/smileys/icon_rolleyes.gif" alt="Smiley :rolleyes:" loading="lazy">
</p>

<p>
2021-07-14T23:31:00Z In-game test complete. Long drive through N/S asphalt road, then down the short N/S connector and from there towards east using the E/W road.
</p>

<p>
There was one wrinkled issue on the E/W road beginning (from the west side intersection), dunno whats wrong with it, I'm so exhausted now that I don't want to dig into it. At least I need a small break.
</p>

<p>
I guess overall I'm happy that now we have good looking asphalt roads with double yellow lines which work pretty nice.
</p>


<!--



-->
<p>
2021-07-16T14:27:00Z New asphalt roads were not perfectly aligned to intersections so fixed the east/west roads intersections. It was tedious tweaking one number change at the time and exporting/importing cubes, generating road mesh etc, just terrible way to edit.
</p>

<p>
2021-07-16T14:48:00Z Finished asphalt road N/S connection intersections. They arent perfect but should be playable.
</p>

<p>
I hate SplineStreetConstructor (SSC), did I ever tell you that?
</p>

<p>
Checked latest edits in-game, they look fine to me, good to release.
</p>

<p>
2021-07-16T16:13:00Z Edited fruit_density.png to add one pixel separation to roads/fields areas and places where grass and flowers grow. Restored some custom shrubbery bushes image which seem to have way too much white flowers now, guess its better than plain grass but it needs some work.
</p>

<p>
Except for some odd reason flowers were setup properly but grass wasnt, hum makes no sense heh, okay need to re-check fruit_density.png :)
</p>

<p>
2021-07-16T16:49:00Z Got fruit_density sorted out and in-game test looks pretty good.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T1647.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T1647.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T1648.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T1648.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T1649.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T1649.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-16T164924.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-16T164924.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Hopefully in the future I can improve road 3d mesh creation.
</p>

<p>
2021-07-16T21:19:00Z Its time to start adding corner pieces to field definitions. Knowing how large task that is for 275 fields I am going to start with just simple shapes instead of trying to do detailed shapes to each field. Goal is not to have it picture perfect but enough detail that contracts are enjoyable without needing too much courseplay outlines.
</p>

<p>
2021-07-16T21:27:00Z Alright first three field definitions got simple shape corner pieces. Its a start. Now only 272 more ... <img src="../images/smileys/icon_surprised.gif" alt="Smiley :o" loading="lazy">
</p>

<p>
2021-07-16T23:00:00Z Started to do second row of field grid few moments ago, coming along nicely. Just have to keep reminding yourself not to get bogged down doing too detailed corner pieces because all they do is take my time. With simple shapes you can have great contract game-play, field definitions do not need to be super detailed. If you don't do contracts then its purely cosmetic feature.
</p>

<p>
Also need to keep myself from zooming into too close, you lose sense of relativity when too close, its easy to see that oh yeah I can quickly do that corner piece, but when you zoom out you realize that oh wow that was tiny meaningless spot heh.
</p>

<p>
2021-07-16T23:50:00Z Okay 30 fields done now, some were so fitting had to do no corner pieces, others were quite complex. This will be clearly several day task for me, its friday night now so cautiously I'd say that in monday this task will be done, hopefully.
</p>

<p>
Maybe monday could be a good release day, I would say next week we will definitely release PMC Iowa Garden City 8km, unless I hit like a complete mental block in my editing burnout, release should happen next week. Hmm yeah, sounds good.
</p>

<p>
2021-07-17T01:47:00Z Now got 41 fields done after a quick lunch break. Slow steady pace.
</p>

<p>
2021-07-17T04:08:00Z Now 50 field definitions done.
</p>

<p>
2021-07-17T06:15:00Z Now 71 field definitions done and that concludes todays editing, dead tired been up over 17hrs today, time to get some shut eye.
</p>

<p>
2021-07-17T12:09:00Z New editing day has started, lets continue doing field definition simple shape corner pieces.
</p>

<p>
2021-07-17T12:52:00Z Total of 80 field definitions done now. And oddly enough my pinky finger isn't even hurting, yet.
</p>

<p>
2021-07-17T14:21:00Z Just finished 100th field definition, and now... now I'm bored. I get easily distracted to check discord for new chat messages, twitch for favorite streamers etc.
</p>

<p>
So 100 out of 275 field definitions done, this will be a loong weekend <img src="../images/smileys/icon_wink.gif" alt="Smiley ;)" loading="lazy">
</p>

<p>
2021-07-17T15:17:00Z Total of 115 field definitions done, havent taken any screenshots so here is one.
</p>

<a href="screenshots/PMC-Iowa-Garden-City-8km-2021-07-17T1517.jpg" target="_blank"><img src="screenshots/thumbs/PMC-Iowa-Garden-City-8km-2021-07-17T1517.jpg" alt="PMC Iowa Garden City 8km Terrain, Developer Diary" loading="lazy" class="terrainimg"></a>

<p>
Can clearly see the rows of field grids I've done so far.
</p>

<p>
2021-07-17T19:16:00Z Had to take a short 3hrs break but now back at editing, lets do more field definition corner pieces.
</p>

<p>
2021-07-17T20:36:00Z Total of 131 field definitions done. Uuh this takes so long heh, field definition creation for large real world data terrains always seems like "no problem thats quick few hours job" but no it ain't, its like few days and you always run into motivation issues when creating these field after field... its just never ending task heh.
</p>

<p>
2021-07-17T22:27:00Z Total of 160 field definitions done.
</p>

<p>
2021-07-18T00:50:00Z Total of 200 field definitions done, uuh aah we broke magical 200 mark <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
2021-07-18T04:43:00Z All field definition simple shape corner pieces created, aayeah! <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
2021-07-18T05:20:00Z Restored heightmap and got new field sizes calculated. Now even though this is very late for me in the night, I want to give a quick try on these new field definitions using contracts game-play, so going to copy latest version into Gaming computer and do some farming before I snooze off <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

<p>
Later tonight played some FS19 testing these new field definitions edits, did bunch of cultivating contracts. (hmm that sentence was clearly wrote early next morning not even bothering to read what I wrote just above haha, so silly I decided to left it here heh).
</p>

<p>
2021-07-18T17:25:00Z New editing day has started, took backups and loaded terrain in GE, started to eyeball sell point locations. Todays plan is to find good locations for sell points and add decorations if there is no existing ones.
</p>

<p>
2021-07-18T18:39:00Z Got sell points moved a bit, found nice locations from existing farm yards which fit quite well. I mean mapUS ravenport has that one location really lame just dump grate and some random building, so guess that level of detail is enough.
</p>

<p>
Placed sell point 2 by animal dealer and added giants farm stable or some building to that area. Cleaned grass out of all sell point dump grates, no elevation changes were necessary but I did few anyways.
</p>

<p>
Updated defaultItems.xml with new coordinates. Then created new ground collision map while PMC_Helpers was in GE so those buildings get added to the collisions.
</p>

<p>
2021-07-18T22:06:00Z SinisterSockz was twitch live streaming North Dakota Regent 8.1km terrain editing in GE so I started to watch that a bit... well this "a bit" turned into over 3hrs session heh. Was helping him to GIMP paint terrain roads and fields.
</p>

<p>
2021-07-18T23:08:00Z Finally was able to check sell points in-game, all look good, couple could use some heightmap leveling underneath them but nothing that prevents vehicles drive over the dump grate.
</p>

<p>
2021-07-19T00:36:00Z A while ago started in-game testing courseplay field work course generation for all 275 fields. I see that some complex shape fields for example F10 takes minutes to generate course with headlands.
</p>

<p>
F27 and F112 could not be detected by courseplay, odd. After finished first round of course generation I went back to GE and studied what is wrong with these fields, well turns out (I think) that fieldMapIndicator was not in field definition corner piece, in both fields there was empty space in middle of the field just where fieldMapIndicator was and there you go, courseplay could not see the field. Hmm thinking about it now a bit later it might actually been because there was no cultivator_density painting underneath fieldMapIndicator, hmm maybe, maybe... Anyways moved them into cultivator_density and corner piece.
</p>

<p>
2021-07-19T01:44:00Z New in-game tested for F27 + F112 and courseplay can detect them fine, excellent.
</p>

<p>
2021-07-19T01:48:00Z Compiled new v1.1.11 (one one eleven, huh) internal testing version and uploaded it <img src="../images/smileys/icon_biggrin.gif" alt="Smiley :D" loading="lazy">
</p>

<p>
Then just some web page changelog and this dev diary updating, kind of rushed job as the internal testing release is already out but changelog hasn't even been updated heh, oh well. Maybe next release will have everything ready so all I have to do is to upload.
</p>

<p>
Tonight I'm going to test PMC Iowa Garden City 8km v1.1.11 myself to see if I can spot anything broken or not suitable for first general public release. Will be good times running around and doing cultivating contracts <img src="../images/smileys/icon_smile.gif" alt="Smiley :)" loading="lazy">
</p>

</section>

<footer>
<p>
<a href="pmc-terrains.php" class="button">PMC Terrains</a>
<a href="changelog-pmc-iowa-garden-city-8km.php" class="button">Changelog PMC Iowa Garden City 8km</a>
<a href="pmc-iowa-garden-city-8km.php" class="button">PMC Iowa Garden City 8km</a>
<a href="../index.php" class="button">PMC Farming Simulator root page</a>
</p>
<p><i>PMC Farming Simulator 2017 - <?php print(date("Y")); ?>.</i></p>
<?php include("../include/w3-validator-logo.php"); ?>
</footer>

</body>
</html>
