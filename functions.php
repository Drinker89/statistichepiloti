 <?php
        $mysqli = new mysqli("localhost", "root", "", "statistiche_piloti");
        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }



$laps = "select sum(laps) totallaps
                                    from
                                    (
                                        select laps
                                        from r_monza
                                        where steamid='S76561198092009747'
                                        union all
                                        select laps
                                        from r_nordschleife
                                        where steamid='S76561198092009747'
                                        
                                    ) t
                                ";
$resultlaps = $mysqli->query($laps);
$rowlaps = $resultlaps->fetch_assoc();
$valuelaps = $rowlaps["totallaps"];

$km = "select sum(km) totalkm
                                    from
                                    (
                                        select km
                                        from r_monza
                                        where steamid='S76561198092009747'
                                        union all
                                        select km
                                        from r_nordschleife
                                        where steamid='S76561198092009747'
                                        
                                    ) t
                                ";
$resultkm = $mysqli->query($km);
$rowkm = $resultkm->fetch_assoc();
$valuekm = $rowkm["totalkm"];

$dnf = "select
            (select count(retired) from r_nordschleife where steamid='S76561198092009747' and retired='DNF') +
            (select count(retired) from r_monza where steamid='S76561198092009747' and retired='DNF') totaldnf";
$resultdnf = $mysqli->query($dnf);
$rowdnf = $resultdnf->fetch_assoc();
$valuednf = $rowdnf["totaldnf"];

$gare = "select
	(select count(steamid) from r_nordschleife where steamid='S76561198092009747') +
    (select count(steamid) from r_monza where steamid='S76561198092009747') totalgare";
$resultgare = $mysqli->query($gare);
$rowgare = $resultgare->fetch_assoc();
$valuegare = $rowgare["totalgare"];

$win = "select
	(select count(steamid) from r_nordschleife where steamid='S76561198092009747' and pos=1) +
    (select count(steamid) from r_monza where steamid='S76561198092009747' and pos=1) totalwin";
$resultwin = $mysqli->query($win);
$rowwin = $resultwin->fetch_assoc();
$valuewin = $rowwin["totalwin"];

$podium = "select
	(select count(steamid) from r_nordschleife where steamid='S76561198092009747' and pos<=3) +
    (select count(steamid) from r_monza where steamid='S76561198092009747' and pos<=3) totalpodium";
$resultpodium = $mysqli->query($podium);
$rowpodium = $resultpodium->fetch_assoc();
$valuepodium = $rowpodium["totalpodium"];

$five = "select
	(select count(steamid) from r_nordschleife where steamid='S76561198092009747' and pos<=5) +
    (select count(steamid) from r_monza where steamid='S76561198092009747' and pos<=5) totalfive";
$resultfive = $mysqli->query($five);
$rowfive = $resultfive->fetch_assoc();
$valuefive = $rowfive["totalfive"];

$fl = "SELECT
(select count(steamid) FROM r_monza WHERE numbestlap=(SELECT MIN(numbestlap) FROM r_monza where numbestlap <> 0 having steamid='S76561198092009747')) + 
(select count(steamid) FROM r_nordschleife WHERE numbestlap=(SELECT MIN(numbestlap) FROM r_nordschleife where numbestlap <> 0 having steamid='S76561198092009747')) as totalfl";
$resultfl = $mysqli->query($fl);
$rowfl = $resultfl->fetch_assoc();
$valuefl = $rowfl["totalfl"];




?>