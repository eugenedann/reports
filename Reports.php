<!DOCTYPE html>
<html>
<head>
<title>Reports</title> 
<style type="text/css"> 
	input[type=radio], input[type=checkbox], input[type=submit] {
		cursor: pointer;
	}
.d0 {
  display: flex;
  flex-direction: row;	
  /* justify-content: space-between;  Distributes space evenly between the divs */
 /* align-items: left;            Aligns items vertically in the center */  
  flex-grow: 1;  
}
.d0 div {
  background-color: #f1f1f1;
  text-align: left;
}

.redb {
	color: white;
	background-color: red;
}


.list thead {
	position: sticky;
	top: 0;
}
.list {
	-ms-overflow-style: none;
	scrollbar-width: none;
}

.rep, .list {
  background-color: lightblue;
  color: black;
  
}
.rep tfoot {
  background-color: navy;
  color: white;	
  text-align: center;
}

.rep thead, .list thead {
  background-color: navy;
  color: white;	
}
.rep thead {
	text-align: center;
}
.rep {
	margin: 10px;
	position: fixed;
	top: 0px;
	z-index: 2;
}

.sched {
	margin: 10px;
	position: fixed;
	top: 290px;
	z-index: 2;
	background-color: #fff7c6;
	color: black;
}

.sched tfoot {
	background-color: brown;
	color: white;
	text-align: center;
}

.sched thead {
	background-color: brown;
	color: white;
	text-align: center;
}
.tags {
	background-color: lightgreen;
	position: fixed;
	top: 290px;
	z-index: 2;
	width: 40%;
	margin: 10px;
 /*   width: 100%;
    border-collapse: collapse;  Helps with border alignment */
}
.tags thead, .tags tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed; /* Ensures even column widths */
}
.tags tbody {
	color: black;
    display: block;
    height: 500px; /* Set the desired height for the scrollable area */
    overflow-y: auto; /* Enables vertical scrolling */
    overflow-x: hidden; /* Hides horizontal scrollbar */
}
.tags tfoot,thead {
	background-color: green;
	color: white;
}
.replnk {
	background-color: lightgreen;
	position: fixed;
	top: 270px;
	z-index: 2;
	width: 40%;
	margin: 10px;
/*    width: 100%;
    border-collapse: collapse;  Helps with border alignment */
}
.replnk thead, .replnk tbody tr {
    display: table;
   width: 100%;
 /*   table-layout: fixed;  Ensures even column widths */
}
.replnk tbody {
	color: black;
    display: block;
    height: 500px; /* Set the desired height for the scrollable area */
    overflow-y: auto; /* Enables vertical scrolling */
    overflow-x: hidden; /* Hides horizontal scrollbar */
}

.tabl {
	background-color: lightgreen;
	position: fixed;
	top: 270px;
	z-index: 2;
	width: 30%;
	margin: 10px;
 /*   width: 100%;
    border-collapse: collapse;  Helps with border alignment */
}

.tabl thead, .tabl tbody tr {
    display: table;
    width: 100%;
    table-layout: fixed; /* Ensures even column widths */
}

.tabl thead, tfoot {
    /* Adjust width to account for the scrollbar (~1em or ~16px) 
    width: calc(100% - 1em); */
	background-color: green;
	color: white;
	text-align: center;
}

.tabl tbody {
    display: block;
    height: 500px; /* Set the desired height for the scrollable area */
    overflow-y: auto; /* Enables vertical scrolling */
    overflow-x: hidden; /* Hides horizontal scrollbar */
}


th, td {
	border: 1px solid white;		
}
.red {
	color: red;
}
.blue {
	color: blue;
}
.wrn {
	background-color: red;
	color: white;	
	text-align: center;
} 
.updt {
	background-color: orange;
}

</style>
<script>
function test() {
	x=document.getElementById('selrep');
	y=document.getElementById('seltab');
	z=document.getElementById('selsched');
	f=document.getElementById('selfnc');
	c=document.getElementById('selchg');
	if (y) {
		y.value='None';
	}	
	if (z) {
		z.value='None';
	}
	if (f) {
		f.value='None';
	}	
	if (c) {
		c.value='None';
	}	
	document.getElementById("subm").submit();
	//selchg
}
</script>
</head>
<body>

<form method="post" id='subm' action="<?php echo $PHP_SELF;?>"> 
<?php
//<a href="filename.html">Link Text</a>
//<link rel="stylesheet" href="css/main.css">
///////// T1 ///////////////
$selrep = $_POST["selrep"];
$filrep = $_POST["filrep"];
$filters = $_POST["filters"];
//$seltype = $_POST["seltype"];
$selsched = $_POST["selsched"];
$selcomp = $_POST["selcomp"];
$selfnc = $_POST["selfnc"];
$seltag = $_POST["seltag"];
$selchg = $_POST["selchg"];
$selsql = $_POST["selsql"];
$seltab = $_POST["seltab"];
$updtsch = $_POST["updtsch"];
$updtfnc = $_POST["updtfnc"];
$updtsql = $_POST["updtsql"];
$updttag = $_POST["updttag"];
$remtag = $_POST["remtag"];
$taglnk = $_POST["taglnk"];
$subrep = $_POST["subrep"];
$selsbr = $_POST["selsbr"];
$selpub = $_POST["selpub"];
$seldb = $_POST["seldb"];
$selsrc = $_POST["selsrc"];
$selnam = $_POST["selnam"];
$timestl = $_POST["timestl"];
// update or add report* ///////////////////////
$status = $_POST["status"];
$type = $_POST["type"];
$source = $_POST["source"];
$description = $_POST["description"];
$filter = $_POST["filter"];
$fltrep = $_POST["fltrep"];
$newtype = $_POST["newtype"];
$newpath = $_POST["newpath"];
$path = $_POST["path"];
//table actions
$remtab = $_POST["remtab"];
// Filters ////////////////////////////////////
$filtype = $_POST["filtype"];
$fildet = $_POST["fildet"];
// Schedules //////////////////////////////////// sched*
$destType = $_POST["destType"];
$recurrence = $_POST["recurrence"];
$runtime = $_POST["runtime"];
$filtersched = $_POST["filtersched"];
$parameters = $_POST["parameters"];
$destdet = $_POST["destdet"];
$zipped = $_POST["zipped"];
$mergedPDF = $_POST["mergedPDF"];
$format = $_POST["format"];
$destreport = $_POST["destreport"];
$newrecurrence = $_POST["newrecurrence"];
$updtsched = $_POST["updtsched"];		
//Add db
$db = $_POST["db"];	
$ip = $_POST["ip"];	
$server = $_POST["server"];	
$dbType = $_POST["dbType"];	
$newDBtype = $_POST["newDBtype"];	
$description = $_POST["description"];	
$addDB = $_POST["addDB"];
// Table
$newtab = $_POST["newtab"];	
$updttab = $_POST["updttab"];	
//filters
$subfil = $_POST["subfil"];
$fdestd = $_POST["fdestd"];
$fdestr = $_POST["fdestr"];
$fpath = $_POST["fpath"];
$ftstt = $_POST["ftstt"];
$fts = $_POST["fts"];
//fdestd
$repc = mysql_connect('192.168.110.17', 'crystal', '#Cry001#')
	or die('Could not connect to .17: ' . mysql_error());
mysql_select_db('Reports',$repc) or die('Could not select mor db');

$ad ="";

if ($addDB) {
	$ad.="db= $db &#13";
	$ad.="ip= $ip &#13";
	$ad.="server= $server &#13";
	$ad.="dbType= $dbType &#13";
	$ad.="description= $description &#13";
	$ins="insert into DatabaseDet (DB,Type,IP,Server,Descr) 
			values('$db','$dbType','$ip','$server','$description')";
	$inq = mysql_query($ins,$repc);
}

if ($newtab) {
	$ins="insert into TableDet (TableName,dbID) values('$newtab','$seldb')";
	$inq = mysql_query($ins,$repc);
}
$ru="";

if ($subrep) {
	$ru.="status &#13";
	$ru.="$status &#13";
	$ru.="type &#13";
	$ru.="$type &#13";
	$ru.="source &#13";
	$ru.="$source &#13";
	$ru.="description &#13";
	$ru.="$description &#13";
	$ru.="filter &#13";
	$ru.="$filter  &#13";
	if ($subrep=="Edit Report") {
		$updts="update Reports set 
				Description='$description',
				Status='$status',
				ReportType='$type',
				Source='$source',
				Path='$path',
				Filters='$filter'
			where repID='$selrep'";
		$updq = mysql_query($updts,$repc);	
		//echo "$updts <br>";
	}
}

$su ="";
if ($updtsched) {
	$su.="destType &#13";
	$su.="$destType &#13";
	$su.="recurrence &#13";
	$su.="$recurrence &#13";
	$su.="runtime &#13";
	$su.="$runtime &#13";
	$su.="filtersched &#13";
	$su.="$filtersched &#13";
	$su.="parameters &#13";
	$su.="$parameters &#13";
	$su.="destdet &#13";
	$su.="$destdet  &#13";
	$su.="zipped &#13";
	$su.="$zipped  &#13";
	$su.="mergedPDF &#13";
	$su.="$mergedPDF  &#13";
	$su.="format &#13";
	$su.="$format  &#13";	
	$su.="destreport &#13";
	$su.="$destreport  &#13";
	$su.="newrecurrence &#13";
	$su.="$newrecurrence  &#13";
	$su.="&#13 selsrc= $selsrc ";
	//echo "$updtsched $selsched<br>";	
	if ($updtsched=="Update Schedule") {
		$za=0;
		if ($zipped) {
			$za=1;
		}
		$ma=0;
		if ($mergedPDF) {
			$ma=1;
		}	
		if (!$selsrc || $selsrc=="None") {
			$updts1="update Schedules set 
						Formats='$format',
						DestReport='$destreport'	
					where schedID='$selsched'";
			//$updq = mysql_query($updts,$repc);
		} else {
			$updts2="update SourceLink set 
						DestRepName='$destreport',
						Format='$format'
					where RepID=$selsrc and schID='$selsched'";					
			//$updq = mysql_query($updts,$repc);			
		}

		$updts="update Schedules set 
					DestType='$destType',
					Recurrence='$recurrence',
					runtime='$runtime',
					Filters='$filtersched',
					Parameters='$parameters',
					DestDetail='$destdet',
					Zipped=$za,
					MergedPDF=$ma	
				where schedID='$selsched'";
			
		//$updq = mysql_query($updts,$repc);	
	}
}
//echo "$taglnk <br>";
session_start();

$cb="";
//echo "1 selrep= $selrep filtype= $filtype fildet= $fildet <br>";

$flts="select * from ReportFilter";
$fltq = mysql_query($flts,$repc);
$fltr = mysql_fetch_array($fltq , MYSQL_ASSOC);
$st="";
if ($subfil=="Apply Filter") {
	$upds="update ReportFilter set ";
	if ($fltr['Report'] != $filrep) {
		$st.= $st ? " ,Report='$filrep'" : "Report='$filrep'";		
	} if ($fltr['destDetail'] != $fdestd) {
		$st.= $st ? " ,destDetail='$fdestd'" : "destDetail='$fdestd'";		
	} else if ($fltr['destReport'] != $fdestr) {
		$st.= $st ? " ,destDetail='$fdestr'" : "destDetail='$fdestr'";		
	} 
	if ($fltr['Path'] != $fpath) {
		$st.= $st ? " ,Path='$fpath'" : "Path='$fpath'";				
	}
	if ($fltr['timestampType'] != $ftstt) {
		$st.= $st ? " ,timestampType='$ftstt'" : "timestampType='$ftstt'";				
	}
	if ($fltr['Timestamp'] != $fts) {
		$st.= $st ? " ,Timestamp='$fts'" : "Timestamp='$fts'";				
	}
	if ($st) {
		$upds.=$st;
		
		$updq = mysql_query($upds,$repc);
		$selrep='';
	}
}

$fltq = mysql_query($flts,$repc);
$fltr = mysql_fetch_array($fltq , MYSQL_ASSOC);	
$tpeList='';
$tpes="select ReportType from Reports group by ReportType";
$tpeq = mysql_query($tpes,$repc);

function lists() {
	global $repc,$lstRepType,$lstPath,$lstStatus
			,$lstDB,$lstdbType,$lstServer,$lstFormat,$lstTabInput,$lstRecurrence,$lstSource;

	$lsts="select 
		r.ReportType
		,r.Path
		,r.Status
		,d.DB
		,d.dbID
		,d.Type
		,d.Server
		,s.Formats
		,l.Input
		,s.Recurrence
		,r.Source
		from Reports r 
		left join TableLinks l on l.repID=r.repID 
		left join TableDet t on t.tabID=l.tabID 
		left join Schedules s on s.repID=r.repID 
		left join Functions f on f.repID=r.repID 
		left join RepChanges c on c.repID=r.repID 
		left join SQLstatements q on q.repID=r.repID 
		left join TagLink g on g.repID=r.repID 
		left join Tags tg on tg.tagID=g.tagID 
		left join DatabaseDet d on d.dbID=t.dbID 
		group by 
		r.ReportType
		,r.Path
		,r.Status 
		,d.DB
		,d.dbID
		,d.Type
		,d.Server
		,s.Formats
		,l.Input
		,s.Recurrence
		,r.Source";	
	$lstq = mysql_query($lsts,$repc);
	$lstRepType=[];
	$lstPath=[];
	$lstStatus=[];
	$lstDB=[];
	$lstdbType=[];
	$lstServer=[];
	$lstFormat=[];
	$lstTabInput=[];
	$lstRecurrence=[];
	$lstSource=[];
	while ($lstr = mysql_fetch_array($lstq , MYSQL_ASSOC)) {
		if (!in_array($lstr['ReportType'], $lstRepType)) {
			array_push($lstRepType, $lstr['ReportType']);	
		}
		if ($lstr['Path'] && !in_array($lstr['Path'], $lstPath)) {
			array_push($lstPath, $lstr['Path']);	
		}	
		if ($lstr['Status'] && !in_array($lstr['Status'], $lstStatus)) {
			array_push($lstStatus, $lstr['Status']);	
		}	
		if ($lstr['dbID'] && !in_array($lstr['dbID'], $lstDB)) {
			array_push($lstDB, $lstr['dbID']);	
		}	
		if ($lstr['Type'] && !in_array($lstr['Type'], $lstdbType)) {
			array_push($lstdbType, $lstr['Type']);	
		}	
		if ($lstr['Server'] && !in_array($lstr['Server'], $lstServer)) {
			array_push($lstServer, $lstr['Server']);	
		}	
		if ($lstr['Formats'] && !in_array($lstr['Formats'], $lstFormat)) {
			array_push($lstFormat, $lstr['Formats']);	
		}
		if ($lstr['Input'] && !in_array($lstr['Input'], $lstTabInput)) {
			array_push($lstTabInput, $lstr['Input']);	
		}	
		if ($lstr['Recurrence'] && !in_array($lstr['Recurrence'], $lstRecurrence)) {
			array_push($lstRecurrence, $lstr['Recurrence']);	
		}	
		if ($lstr['Source'] && !in_array($lstr['Source'], $lstSource)) {
			array_push($lstSource, $lstr['Source']);	
		}		
	}
	
}
lists();
//echo "** count ".count($lstSource)." -- {$lstSource[0]}<br>"; 
function freport($n) {
	////////////  Building Report filter  
	
	global $fltr;
	$wr="";
	$sl="select r.repID,Report,Path,ReportType,r.Status,r.Source,r.Filters,r.Description,r.timestamp from Reports r 
		left join TableLinks l on l.repID=r.repID 
		left join TableDet t on t.tabID=l.tabID 
		left join Schedules s on s.repID=r.repID 
		left join Functions f on f.repID=r.repID
		left join RepChanges c on c.repID=r.repID
		left join SQLstatements q on q.repID=r.repID
		left join TagLink g on g.repID=r.repID
		left join Tags tg on tg.tagID=g.tagID
		left join DatabaseDet d on d.dbID=t.dbID";
	$rs=" group by r.repID,Report,ReportType,Path,r.Status order by Report";


	//if ($seltype) {
		//$wr.=" where ReportType = '$seltype' ";
		$wr.=" where ReportType = '{$fltr['reportType']}' ";
		if ($fltr['Report']) {
			if ($wr) {
				$wr.=" and Report like '%{$fltr['Report']}%' ";
			} else {
				$wr.=" where Report like '%{$fltr['Report']}%' ";
			}
		} else if ($fltr['destDetail']) {
			if ($wr) {
				$wr.=" and DestDetail like '%{$fltr['destDetail']}%' ";
			} else {
				$wr.=" where DestDetail like '%{$fltr['destDetail']}%' ";
			}
		} else if ($fltr['destReport']) {
			if ($wr) {
				$wr.=" and DestReport like '%{$fltr['destReport']}%' ";
			} else {
				$wr.=" where DestReport like '%{$fltr['destReport']}%' ";
			}			
		} 
	//destDetail
	//}	else {
	//	$wr.=" where ReportType = 'Crystal' ";
	//}
		
	if ($fltr['timestampType']) {
	
		$sts=$fltr['timestampType']; 
		if ($sts=="Reports") {	
	
			if ($wr) {
				$wr .= " and r.timestamp like '{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where r.timestamp like '{$fltr['Timestamp']}%' ";
			}	
		} 	 else if ($sts=="Schedules") {
			if ($wr) {
				$wr .= " and s.timestamp like '{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where s.timestamp like '{$fltr['Timestamp']}%' ";
			}			
		}  else if ($sts=="Functions") {
			
			if ($wr) {
				$wr .= " and f.timestamp like '{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where f.timestamp like '{$fltr['Timestamp']}%' ";
			}		
		} else if ($sts=="RepChanges") {
			
			if ($wr) {
				$wr .= " and c.Date like '{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where c.Date like '{$fltr['Timestamp']}%' ";
			}
		
		} else if ($sts=="DatabaseDet") {
			
			if ($wr) {
				$wr .= " and d.timestamp like '%{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where d.timestamp like '%{$fltr['Timestamp']}%' ";
			}
		
		} else if ($sts=="TableDet") {
			
			if ($wr) {
				$wr .= " and t.timestamp like '{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where t.timestamp like '{$fltr['Timestamp']}%' ";
			}
		
		} else if ($sts=="SQLstatements") {
			
			if ($wr) {
				$wr .= " and q.timestamp like '{$fltr['Timestamp']}%' ";
			} else {
				$wr = " where q.timestamp like '{$fltr['Timestamp']}%' ";
			}
	
		}

	}
		

	if ($fltr['Path']) {
		if ($wr) {
			$wr .= " and Path like '%{$fltr['Path']}%' ";
		} else {
			$wr = " where Path like '%{$fltr['Path']}%' ";
		}
	} 	
	if ($fltr['DB']) {
		if ($wr) {
			$wr .= " and t.dbID = {$fltr['DB']} ";
		} else {
			$wr = " where t.dbID = {$fltr['DB']} ";
		}
	}	
	

	if ($fltr['Recurrence']) {
		if ($wr) {
			$wr .= " and Recurrence = '{$fltr['Recurrence']}' ";
		} else {
			$wr = " where Recurrence = '{$fltr['Recurrence']}' ";
		}
	} 	

	if ($fltr['Tag']) {
		if ($wr) {
			$wr .= " and Tag = '{$fltr['Tag']}' ";
		} else {
			$wr = " where Tag = '{$fltr['Tag']}' ";
		}
	} 

	if ($fltr['Status']) {
		if ($wr) {
			if ($fltr['Status']=='Active') {
				$wr .= " and (r.Status = 'Active' or s.Status = 'Active') ";
			} else {
				$wr .= " and (r.Status <> 'Active' or s.Status <> 'Active') ";
			}
		} else {
			if ($fltr['Status']=='Active') {
				$wr = " where (r.Status = 'Active' or s.Status = 'Active') ";
			} else {
				$wr = " where (r.Status <> 'Active' or s.Status <> 'Active') ";
			}
		}

	} 	
	$reps=$sl.$wr.$rs;
	//echo "n = $n <br>";
	if ($n) {
		$reps=$sl.$rs;
	} else {
		$reps=$sl.$wr.$rs;	
	}
	
	//echo "*** $reps <br>";

	return $reps;
}

$reps=freport(0);

//echo "$reps <br>";
$repq = mysql_query($reps,$repc);
$rows=mysql_num_rows($repq);
//echo "$rows * <br>";
$cnt=0;
echo "<div class='d0'>";

// <<<<<<<<<<<<<<<<< d1 <<<<<<<<<<<<<
echo "<div class='d1'><table class='list'><thead>";

$ch="";
if ($selrep=='filters') {
	$ch='checked';
}
echo "";

echo "</th></tr>";
echo "<tr><th>▽<input $ch type='radio' name='selrep' value='filters' onchange='this.form.submit()' />Filter Reportecho <textarea>$upds</textarea>";

echo "</thead>";
//echo "<tr><th><span title='$ti'>Report Filter:</span> <select name='filtype' id='filtype'  onchange='test()'>$wa</td></tr>";
/////////////////////////////////////////////////// end FILTERS ////////////////////////////////////////

$tpes="select r.ReportType from Reports r group by r.ReportType order by r.ReportType";
$tpeq = mysql_query($tpes,$repc);

echo "</thead><tbody>";
while ($repr = mysql_fetch_array($repq , MYSQL_ASSOC)) {
	$selected="";
	$cnt++;
	if ($selrep==$repr['repID']) {
		$selected="checked";
	}
	echo "<tr><td>$cnt<input type='radio' name='selrep' id='selrep' value='{$repr['repID']}' $selected onchange='test()' />{$repr['Report']}</td></tr>";
}

echo "</tbody></table></div>"; // <<<<<<<<<<<<<<<< div d1 <<<<<<<<<<<<<<

echo "<div class='d2'>"; // <<<<<<<<<<<<<<<<< div d2 <<<<<<<<<<<<<<<<<<<	
	

if ($selrep) {
	
	/////// Report ///////////////////////////////////////////////////////////////////////////////////////////////////////
	if ($selrep=='filters') {
		echo "<table class='rep'><thead>";
		echo "<tr><th colspan='2'>Filters</th></tr></thead><tbody>";
		//$fltr
		if (!$fltr['destDetail'] && !$fltr['destReport']) {
			echo "<tr><th>Report</th><td><input type='text' name='filrep' value='{$fltr['Report']}' /></td></tr>";
		}
		if (!$fltr['Report'] && !$fltr['destReport']) {
			echo "<tr><th>destDetail</th><td><input type='text' name='fdestd' value='{$fltr['destDetail']}' /></td></tr>";
		}
		if (!$fltr['Report'] && !$fltr['destDetail']) {
			echo "<tr><th>destReport</th><td><input type='text' name='fdestr' value='{$fltr['destReport']}' /></td></tr>";
		}
		echo "<tr><th>Path</th><td><input type='text' name='fpath' value='{$fltr['Path']}' /></td></tr>";
		echo "<tr><th>Recurrence</th><td>{$fltr['Recurrence']}</td></tr>";
		
		$tstl=['Reports','Schedules','Functions','RepChanges','DatabaseDet','TableDet','SQLstatements'];
		
		$wa="<select name='ftstt'>";
		
		for ($i=0;$i<count($tstl);$i++) {
			if ($fltr['timestampType']==$tstl[$i]) {
				$wa.="<option selected>{$tstl[$i]}</option>";
			} else {
				$wa.="<option>{$tstl[$i]}</option>";
			}
		}
		
		$wa.="</select>"; 
		
		echo "<tr><th>timestampType</th><td>$wa</td></tr>";
		echo "<tr><th>Timestamp</th><td><input type='text' name='fts' value='{$fltr['Timestamp']}' /></td></tr>";
		//echo "<tr><th>Timestamp</th><td>{$fltr['Timestamp']}</td></tr>";
		echo "<tr><th>reportType</th><td>{$fltr['reportType']}</td></tr>";
		echo "<tr><th>Status</th><td>{$fltr['Status']}</td></tr>";
		echo "<tr><th>Tag</th><td>{$fltr['Tag']}</td></tr>";
		echo "<tr><th>DB</th><td>{$fltr['DB']}</td></tr>";
		echo "<tr><th>Table</th><td>{$fltr['Table']}</td></tr>";
		//echo "<tr><th>Filter</th><td>{$fltr['Filter']}</td></tr>";		
		echo "</tbody><tfoot>";
		echo "<tr><th colspan='2'>$upds</th></tr>";
		echo "<tr><th colspan='2'><input type='submit' name='subfil' value='Apply Filter' /></th></tr>";
		echo"</tfoot></table>";
	} else {
		$rsel="select * from Reports where repID='$selrep'";
		$rselq = mysql_query($rsel,$repc);
		if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
			echo "<table class='rep'><thead>";
			if ($selcomp !='Add Report') {
				echo "<tr><th>ID</th><td>$selrep</td></tr>";
			}
			
			if ($selcomp=='Edit Report' || $selcomp=='Add Report' ) { // add report*
				echo "<tr><th colspan='2'><input size='60' type='text' name='report' value='{$rselr['Report']}' /></th></tr></thead><tbody class='updt'>";
				$wa= "<select name='status'>"; 
				//Status changes will effect all linked schedules of reports  //////////////////////////////////
				$stals="select r.Status from Reports r group by r.Status order by r.Status";
				$stalq = mysql_query($stals,$repc);
				while ($stalr = mysql_fetch_array($stalq , MYSQL_ASSOC)) {
					if ($stalr['Status'] == $rselr['Status']) {
						$wa.="<option selected>{$stalr['Status']}</option>";
					} else {
						$wa.="<option>{$stalr['Status']}</option>";
					}
				}
				$wa.="</select>";
				echo "<tr><th>Status</th><td>$wa</td></tr>";
				
				//Type changes will effect linked reports of publications  //////////////////////////////////
				if ($newtype) {
					$wa="<input type='text' name='type' value='$type' />";
				} else {			
					$wa= "<select name='type'>"; 		
					$stals="select r.ReportType from Reports r group by r.ReportType order by r.ReportType";
					$stalq = mysql_query($stals,$repc);
					while ($stalr = mysql_fetch_array($stalq , MYSQL_ASSOC)) {
						if ($stalr['ReportType'] == $rselr['ReportType']) {
							$wa.="<option selected>{$stalr['ReportType']}</option>";
						} else {
							$wa.="<option>{$stalr['ReportType']}</option>";
						}
					}
					$wa.="</select>";	

				}
				$ch="";
				if ($newtype) {
					$ch='checked';
				}				
				$wa.= "<input type='checkbox' name='newtype' $ch onchange='this.form.submit()' />";			
				echo "<tr><th>Type</th><td>$wa</td></tr>";
				
				$wa= "<select name='source'>"; 
				$stals="select r.Source from Reports r group by r.Source order by r.Source";
				$stalq = mysql_query($stals,$repc);
				while ($stalr = mysql_fetch_array($stalq , MYSQL_ASSOC)) {
					if ($stalr['Source'] == $rselr['Source']) {
						$wa.="<option selected>{$stalr['Source']}</option>";
					} else {
						$wa.="<option>{$stalr['Source']}</option>";
					}
				}
				$wa.="</select>";					
				
				echo "<tr><th>Source</th><td>$wa</td></tr>";
			
				if ($newpath) {
					$wa="<input type='text' size='40' name='path' value='$path' />";
				} else {			
					$wa= "<select name='path'>"; 
					$stals="select r.Path from Reports r group by r.Path order by r.Path";
					$stalq = mysql_query($stals,$repc);
					while ($stalr = mysql_fetch_array($stalq , MYSQL_ASSOC)) {
						if ($stalr['Path'] == $rselr['Path']) {
							$wa.="<option selected>{$stalr['Path']}</option>";
						} else {
							$wa.="<option>{$stalr['Path']}</option>";
						}
					}
					$wa.="</select>";	
				}	
				$ch="";
				if ($newpath) {
					$ch='checked';
				}				
				$wa.= "<input type='checkbox' name='newpath' $ch onchange='this.form.submit()' />";				
				echo "<tr><th>Path</th><td>$wa</td></tr>";
				echo "<tr><th>Description</th><td><textarea name='description'>{$rselr['Description']}</textarea></td></tr>";
				echo "<tr><th>Filters</th><td><textarea name='filter'>{$rselr['Filters']}</textarea></td></tr></tbody>";
				echo "<tfoot>";
			} else {
				echo "<tr><th colspan='2'>{$rselr['Report']}</th></tr></thead><tbody>";
				$cl = "class=''";
				if ($rselr['Status']!="Active") {
					$cl = " class='red' ";
				}
				echo "<tr><th>Status</th><td $cl>{$rselr['Status']}</td></tr>";
				echo "<tr><th>Path</th><td>{$rselr['Path']}</td></tr>";
				echo "<tr><th>Source</th><td>{$rselr['Source']}</td></tr>";
				echo "<tr><th>Description</th><td><textarea>{$rselr['Description']}</textarea></td></tr>";
				echo "<tr><th>Filters</th><td><textarea>{$rselr['Filters']}</textarea></td></tr></tbody>";
				echo "<tfoot><tr><th>Timestamp</th><th>{$rselr['timestamp']}</th></tr>";
			}
			
			$srcs= "select r.Report,r.repID,l.DestRepName,l.Format,r.ReportType,s.Recurrence from SourceLink l 
					inner join Schedules s on s.schedID=l.schID
					inner join Reports r on r.repID=s.repID
					where l.RepID='$selrep'";
			$srcq = mysql_query($srcs,$repc);
	//$rselr['ReportType']	
			//echo "<tr><th>seltype $seltype - reporttype {$rselr['ReportType']} cnt ".count($rselr)". ************ </th></tr>";		/////////////////////////////
			//echo "<tr><th> xxx $selcomp **** $fildet yyyy {$rselr['ReportType']} aaa</th></tr
			if (!$selsched) {
				$selsched="None";
			}
			if ($rselr['ReportType']=='Crystal') {
				$complist=['Schedules','Functions','Tags','Changes','SQLstatement','Tables'];
				if ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {	
					array_push($complist, 'Publications');	
				}
				if (!$selcomp) {
					$selcomp='Schedules';
				}				
			} else if ($rselr['ReportType']=='PHP')  {
				$complist=['Schedules','Tags','Changes','Tables'];
				if (!$selcomp) {
					$selcomp='Schedules';
				}			
			} else if ($rselr['ReportType']=='Publication' || $rselr['ReportType']=='sh')  {
				$complist=['Schedules','Tags','Changes','Linked Reports'];
				if (!$selcomp) {
					$selcomp='Schedules';
				}			
			} else if ($rselr['ReportType']=='Recipients')  {
				$complist=['Functions','Tags','Changes','Tables'];
				if ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {	
					array_push($complist, 'Publications');	
				}			
				if (!in_array($selcomp, $complist)) {
					$selcomp='Functions';
				}	
				if (!$selcomp) {
					$selcomp='Functions';
				}
			} else if ($selcomp=="Edit Report") {
				$complist=['Schedules','Functions','Tags','Changes','SQLstatement','Tables','Edit Report'];
				if (!in_array($selcomp, $complist)) {
					$selcomp='Schedules';
				}				
			} 
			//sh, recipients, html
			echo "<tr><th></th><td><select name='selcomp' onchange='this.form.submit()'>";
					echo "<optgroup class='blue' label='Select Component'>";
					for ($i=0;$i<count($complist);$i++) {
						if ($selcomp==$complist[$i]) {
							echo "<option selected>{$complist[$i]}</option>";
						} else {
							echo "<option>{$complist[$i]}</option>";
						}
					}
					echo "</optgroup>";
					echo "<optgroup class='red' label='Action'>";
					if ($selcomp=='Edit Report') {
						echo "<option selected>Edit Report</option>";
					} else {
						echo "<option>Edit Report</option>";
					}
					if ($selcomp=='Add Report') {
						echo "<option selected>Add Report</option>";
					} else {
						echo "<option>Add Report</option>";
					}	
					if ($selcomp=='Remove Report') {
						echo "<option selected>Remove Report</option>";
					} else {
						echo "<option>Remove Report</option>";
					}	
					echo "</optgroup>";
			echo "</select>";
			if ($selcomp=='Linked Reports') {
				echo "🔷<input type='text' name='fltrep' value='$fltrep' onchange='this.form.submit()' />";
			}
			
			if ($selcomp=='Edit Report' || $selcomp=='Add Report' ) {
				echo "🔷<input type='submit' name='subrep' title='$ru' value='$selcomp' onclick='this.form.submit()' /></td></tr>";
			}
	//		if ($subrep) {
	//			echo "<tr><th colspan='2'>$updts</th></tr>";
	//		}
			//echo "</table>";
			if ($selcomp=='Remove Report') {
				//echo "<table>";
				echo "<tr><th colspan='2' class='wrn'>$selcomp</th></tr>";
				$rmvs="select * from Functions where repID=$selrep";
				$rmvq = mysql_query($rmvs,$repc);
				$wa="";
				if ($rmvr = mysql_fetch_array($rmvq , MYSQL_ASSOC)) {
					$wa="<tr><th colspan='2' class='wrn'>Function will be delinked</th></tr>";
				}
				$rsel="select * from Schedules where repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>Schdules will be deleted</th></tr>";
				}	
				$rsel="select * from TagLink where repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>Tags will be delinked</th></tr>";
				}	
				$rsel="select * from RepChanges where repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>RepChanges will be deleted</th></tr>";
				}	
				$rsel="select * from SQLstatements where repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>SQLstatements will be deleted</th></tr>";
				}		
				$rsel="select * from SubreportLink where repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>Subreports will be deleted</th></tr>";
				}	
				$rsel="select * from TableLinks where repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>Tables will be delinked</th></tr>";
				}	
				$rsel="select * from Reports r 
					inner join Schedules s on s.repID=r.repID 
					inner join SourceLink l on l.schID=s.schedID
					where r.repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>Source reports will be delinked</th></tr>";
				}
				$rsel="select * from Reports.Reports r 
					inner join nTwineSum.nTwineRecipients n on r.Report=n.Report where r.repID=$selrep";
				$rselq = mysql_query($rsel,$repc);
				if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
					$wa.="<tr><th colspan='2' class='wrn'>Report recipients will be deleted</th></tr>";
				}	
				$wa.="<tr><th colspan='2'><input class='wrn' type='submit' name='procrepdel' value='Confirm: $selcomp' /></th></tr>";
				echo "$wa";

			}
			
		
		
	///////////////////// Schedules selections ///////////////////////////////////////////////////////////////
			//echo "*** $selcomp ****";
			
			// Add sh reports as well   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
			
			if ($selcomp=='Publications') {
				echo "🔷<select name='selpub' onchange='this.form.submit()'>";
				
				$srcq = mysql_query($srcs,$repc);
				if ($selpub=="None" || !$selpub) {
					echo "<option selected>None</option>";
					$selpub="None";
				} else {
					echo "<option>None</option>";
				}
				while ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {
				
					if ($selpub==$srcr['repID']) {
						echo "<option value='{$srcr['repID']}' selected>{$srcr['Report']}</option>";
					} else {
						echo "<option value='{$srcr['repID']}'>{$srcr['Report']}</option>";
					}		
				}
				echo "</select></td></tr>";
			
			} 	
			if ($selcomp=='Schedules') {
				$schs="select * from Schedules where repID='$selrep'";
				$schq = mysql_query($schs,$repc);			
				//$selsch1=array('None','Add Schedule'); 
				$selsch1=array('Add Schedule'); 
				$selsch2=[];
				while ($schr = mysql_fetch_array($schq , MYSQL_ASSOC)) {
					array_push($selsch2, $schr['schedID']);	
				}

				echo "🔷<select name='selsched' id='selsched' onchange='this.form.submit()'>";
					if (!$selsched || $selsched=="None") {
						echo "<option selected>None</option>";
						$selsched="None";
					} else {
						echo "<option>None</option>";
					}
					echo "<optgroup class='blue' label='Select Schedule'>";
					for ($i=0;$i<count($selsch2);$i++) {
						if ($selsched==$selsch2[$i]) {
							echo "<option selected>{$selsch2[$i]}</option>";
						} else {
							echo "<option>{$selsch2[$i]}</option>";
						}		
					}	
					echo "</optgroup>";
					echo "<optgroup class='red' label='Action'>";
					
					for ($i=0;$i<count($selsch1);$i++) {
						if ($selsched==$selsch1[$i]) {
							//$sw=1;
							echo "<option selected>{$selsch1[$i]}</option>";
						} else {
							echo "<option>{$selsch1[$i]}</option>";
						}		
					}
					//if (!$sw) {
					//	$selsched="None";
					//}
					
					echo "</optgroup></select>";				
				echo "</td></tr>";
				if (($fltr['reportType']=="Publication" || $fltr['reportType']=="sh") && $selsched>0) {
					
					$srcs="select r.repID,r.Report,r.ReportType from Reports r 
							inner join SourceLink l on l.RepID=r.repID
							where l.srcID=$selrep";
					$srcq = mysql_query($srcs,$repc);
					$wa = "<tr><th>Reports</th><td><select name='selsrc' onchange='this.form.submit()'>";
					if ($selsrc=="None" || !$selsrc) {
						$wa.= "<option selected>None</option>";
					} else {
						$wa.=  "<option>None</option>";
					}			
					$tpeList=[];
						$wa.=  "<optgroup class='blue' label='Select Source Report'>";				while ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {
						if (!in_array($srcr['ReportType'], $tpeList)) {
							array_push($tpeList,$srcr['ReportType']);
						}
						$cl="";
						$ti="";
						if ($srcr['ReportType']=='Recipients') {
							$cl='red';
							$ti="Recipients";
						}
						if ($selsrc==$srcr['repID']) {
							$wa.=  "<option class='$cl' title='$ti' value='{$srcr['repID']}' selected>{$srcr['Report']}</option>";
						} else {
							$wa.=  "<option class='$cl'  title='$ti' value='{$srcr['repID']}'>{$srcr['Report']}</option>";
						}		
					}
					$wa.= "</optgroup>";
					$wa.= "</select></td></tr>";	
					if (in_array('Recipients',$tpeList)) {
						echo $wa;
					}
					//$cntl = count($tpeList);
				}
				
			} 
		
		
			///////////////////// Functions selections ////////////////////////////////////////////////////////////////////////////////	
			
			
			if ($selcomp=='Functions') {
				$fncs="select fncID,`Name` as Funcn 
						from Functions 
						where repID='$selrep'
						Group by fncID,Funcn";
				$fncq = mysql_query($fncs,$repc);			
				$selfunc=array('None','Add Functions');
				//echo "$fncs <br>";
				echo "🔷<select name='selfnc' id='selfnc' onchange='this.form.submit()'>";
					
					if ($selfnc=="None") {
						echo "<option selected value='None'>None</option>";
					} else {
						echo "<option value='None'>None</option>";
					}
					
					echo "<optgroup class='blue' label='Select Function'>";
					while ($fncr = mysql_fetch_array($fncq , MYSQL_ASSOC)) {	
						if ($selfnc==$fncr['fncID']) {
							echo "<option value='{$fncr['fncID']}' selected>{$fncr['Funcn']}</option>";
						} else {
							echo "<option value='{$fncr['fncID']}'>{$fncr['Funcn']}</option>";
						}		
					}
					echo "</<optgroup>";
					echo "<optgroup class='red' label='Action'>";
					if ($selfnc=="Add Function") {
						echo "<option class='red' selected value='Add Function'>Add Function</option>";
					} else {
						echo "<option class='red' value='Add Function'>Add Function</option>";
					}
					echo "</<optgroup>";
				echo "</select></td></tr>";			
			} 	
			
			///////////// Changes selecttons ////////////////////////////////////////////////////////////////////////////////////////////////
			
			if ($selcomp=='Changes') {
				$chgs="select chgID,Date,Done,r.Report from RepChanges c
						inner join Reports r on r.repID=c.repID
					where c.repID='$selrep' 
					group by chgID,Date,Done,r.Report order by Date,Report";
				$chgq = mysql_query($chgs,$repc);	
				
				echo "🔷<select name='selchg' id='selchg' onchange='this.form.submit()'>";
					
					if ($selchg=="None") {
						echo "<option selected value='None'>None</option>";
					} else {
						echo "<option value='None'>None</option>";
					}
					echo "<optgroup class='red' label='Action'>";
					if ($selchg=="Add Change") {
						echo "<option selected value='Add Change'>Add Function</option>";
					} else {
						echo "<option value='Add Change'>Add Change</option>";
					}	
					echo "<optgroup class='blue' label='Select Change'>";
					while ($chgr = mysql_fetch_array($chgq , MYSQL_ASSOC)) {
						if ($selchg==$chgr['chgID']) {
							echo "<option value='{$chgr['chgID']}' selected>{$chgr['Date']}</option>";
						} else {
							echo "<option value='{$chgr['chgID']}'>{$chgr['Date']}</option>";
						}
					}
				echo "</select></td></tr>";
			}	
			
			///////////// Table selections

				
			if ($selcomp=='Tables') {
				echo "🔷  $seltab<select name='seltab' id='seltab' onchange='this.form.submit()'>";
					if ($seltab=="None") {
						echo "<option selected value='None'>None</option>";
					} else {
						echo "<option value='None'>None</option>";
					}
					echo "<optgroup class='red' label='Action'>";
					if ($seltab=="View DB") {
						echo "<option selected>View DB</option>";
					} else {
						echo "<option>View DB</option>";
					}				
					if ($seltab=="Link Table") {
						echo "<option selected value='Link Table'>Link Table</option>";
					} else {
						echo "<option value='Link Table'>Link Table</option>";
					}
					

					$tabs="select t.tabID,t.TableName,d.Server,d.DB from TableLinks l
							inner join TableDet t on t.tabID=l.tabID
							inner join DatabaseDet d on d.dbID=t.dbID
							where repID='$selrep'
							order by d.Server,d.DB,t.TableName";
					$tabq = mysql_query($tabs,$repc);
					$co=15;
					$l=0;
					$wa="";
					echo "<optgroup class='blue' label='Table Name 🔹 Server 🔹 Database'>";
					while ($tabr = mysql_fetch_array($tabq , MYSQL_ASSOC)) {

						if ($seltab==$tabr['tabID']) {
							echo "<option value='{$tabr['tabID']}' selected>{$tabr['TableName']} 🔹 {$tabr['Server']} 🔹 {$tabr['DB']}</option>";
						} else {
							echo "<option value='{$tabr['tabID']}'>{$tabr['TableName']} 🔹 {$tabr['Server']} 🔹 {$tabr['DB']}</option>";
						}
					}
				echo "</select></th></tr>";
			}
			
			///////////// SQL selections		
			if ($selcomp=='SQLstatement') {

				$schrs="select s.sqlID,d.Type,DB,Statement,s.timestamp,Server from SQLstatements s 
						inner join DatabaseDet d on d.dbID = s.dbID
						where s.repID='$selrep'";
				$schrq = mysql_query($schrs,$repc);
				if (!$schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					echo "🔷<select name='selsql' onchange='this.form.submit()'>";
						if ($selsql=="None") {
							echo "<option selected value='None'>None</option>";
						} else {
							echo "<option value='None'>None</option>";
						}
						if ($selsql=="Add SQL statement") {
							echo "<option class='red' selected value='Add SQL statement'>Add SQL statement</option>";
						} else {
							echo "<option class='red' value='Add SQL statement'>Add SQL statement</option>";
						}		
					echo "</select></td></tr>";				
				}
			}

		}
		
		echo "</tfoot>";
		echo "</table>";	
		
	//////////////////  Show item components ////////////////////////////////////////////////////	
			
	///////////////////// Schedules show ///////////////////////////////////////////////////////////////	
		if ($selsched=="Add Schedule") { /// // sched*
			echo "<table class='sched'><thead>";
			echo "<tr><th colspan='2'>$selsched</th></tr></thead><tbody class='updt'>";
			$dtls="select s.DestType from Schedules s group by s.DestType";
			$dtlq = mysql_query($dtls,$repc);
			$wa="<select name='destType'>";
			while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
				if ($destType==$dtlr['DestType']) {
					$wa.="<option selected>{$dtlr['DestType']}</option>";
				} else {
					$wa.="<option>{$dtlr['DestType']}</option>";
				}
			}
			$wa.="</select>";
			echo "<tr><th>Destination Type</th><td>$wa</td></tr>";
			echo "<tr><th>runTime</th><td><input type='time' name='runtime' value='{$schr['runTime']}' /></td></tr>";
			$ch="";
			if ($newrecurrence) {
				$ch='checked';
			}
			if ($newrecurrence) {
				$wa="<input type='text' size='60' name='recurrence' value='$recurrence' />";
			} else {
				$dtls="select s.Recurrence from Schedules s group by s.Recurrence order by Recurrence";
				$dtlq = mysql_query($dtls,$repc);
				$wa="<select name='recurrence'>";
				while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
					if ($recurrence==$dtlr['Recurrence']) {
						$wa.="<option selected>{$dtlr['Recurrence']}</option>";
					} else {
						$wa.="<option>{$dtlr['Recurrence']}</option>";
					}
				}

				$wa.="</select>";
			}
			$wa.="<input $ch type='checkbox' name='newrecurrence' onchange='this.form.submit()' />";
			echo "<tr><th>Recurrence</th><td>$wa</td></tr>";
			echo "<tr><th>Filters</th><td><textarea name='filtersched'>{$schr['Filters']}</textarea></td></tr>";					
			echo "<tr><th>Parameters</th><td><textarea name='parameters'>{$schr['Parameters']}</textarea></td></tr>";			
			$dtls="select s.Status from Schedules s group by s.Status order by Status";
			$dtlq = mysql_query($dtls,$repc);
			$wa="<select name='status'>";
			while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
				if ($status==$dtlr['Status']) {
					$wa.="<option selected>{$dtlr['Status']}</option>";
				} else {
					$wa.="<option>{$dtlr['Status']}</option>";
				}
			}
			$wa.="</select>";
			echo "<tr><th>Status</th><td>$wa</td></tr>";	
			echo "<tr><th>Destination Detail</th><td><textarea name='destdet'>{$schr['DestDetail']}</textarea></td></tr>";
			$wa="";
			if ($schr['Zipped']) {
				$wa="checked";
			}					
			echo "<tr><th>Zipped</th><td><input $wa type='checkbox' name='zipped' /></td></tr>";
			$wa="";
			if ($schr['MergedPDF']) {
				$wa="checked";
			}					
			echo "<tr><th>Merged PDF</th><td><input $wa type='checkbox' name='mergedPDF' /></td></tr>";					
			$dtls="select s.Formats from Schedules s group by s.Formats order by Formats";
			$dtlq = mysql_query($dtls,$repc);
			$wa="<select name='format'>";
			while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
				if ($format==$dtlr['Formats']) {
					$wa.="<option selected>{$dtlr['Formats']}</option>";
				} else {
					$wa.="<option>{$dtlr['Formats']}</option>";
				}
			}
			$wa.="</select>";
			echo "<tr><th>Format</th><td>$wa</td></tr>";
			echo "<tr><th>Destination Report</th><td><textarea name='destreport'>$destsrc</textarea></td></tr>";					
			echo "</tbody><tfoot><tr><th></th><th colspan='2'><input type='submit' title='$su' name='updtsched' value='Add Schedule' </th></tr>";
			echo "</tfoot></table>";	
			
		}  	
		if ($selcomp=='Schedules' && $selsched && $selsched != 'None') {
			if (!$selsrc) {
				$selsrc="None";
			}
			$destsrc="";
			$destrpty="";
			$destfmt="";
			$srcs="select l.*,r.Report,r.ReportType from Reports r 
					inner join SourceLink l on l.RepID=r.repID
					inner join Reports sr on sr.repID=l.srcID
					where l.RepID=$selsrc and l.srcID=$selrep";
			$srcq = mysql_query($srcs,$repc);
			if ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {
				$destsrc=$srcr['DestRepName'];
				$destrpty=$srcr['ReportType'];
				$destfmt=$srcr['Format'];
			}
			
			if ($destrpty == "Recipients") {
				echo "<table class='tags'>";
				$dbcs="select DB from TableLinks l 
						inner join TableDet t on t.tabID=l.tabID
						inner join DatabaseDet d on d.dbID=t.dbID
						where l.repID=$selsrc";
				//echo "$dbcs <br>";
				$dbcq = mysql_query($dbcs,$repc);
				if ($dbcr = mysql_fetch_array($dbcq , MYSQL_ASSOC)) {
					$pers="select 
							case when Recurrence like '%mo%' then 'mo'
								 when Recurrence like '%we%' then 'we'
								 when Recurrence like '%da%' or Recurrence like '%mtd%' then 'da'
								 else Recurrence
								 end as period
							from Schedules s 
							inner join Reports r on r.repID=s.repID and r.ReportType='Publication'
							where r.repID=$selrep";
					$perq = mysql_query($pers,$repc);
					$perr = mysql_fetch_array($perq , MYSQL_ASSOC);
					
					if ($dbcr['DB']=="IOtel") { 
					
						$wa=" (period like '%{$perr['period']}%'";
						
						if ($perr['period']=='da') {
							$wa.=" or period like '%mtd%'";
							
						}
						
						$wa.=")";
						
						$recs="select Name as nme,contact_email,period as frequency,runDate,Report,IsActive from IOtel.recipients where Report='{$srcr['repGroup']}' and $wa";
						
					} else if ($dbcr['DB']=="nTwineSum") {
						$recs="select Name as nme,contact_email,frequency,runDate,Report,IsActive from nTwineSum.nTwineRecipients where Report='{$srcr['repGroup']}' and frequency like '%{$perr['period']}%'";
					} else {
						$recs="select concat(firstname,' ',lastname) as nme,email,am.id from nTwineSum.accountmanager am order by lastname, am.firstname";
					}
					
				}	
				$recq = mysql_query($recs,$repc);
				
				echo "<thead>";	
				
					
				$ls="";
				while ($recr = mysql_fetch_array($recq , MYSQL_ASSOC)) {
					$wa = $recr['IsActive'] ? ' 😊 Active' : ' 😒 Incative';
					if ($selsrc==31) {
						if (!$selnam || $selnam==$recr['id']) {
							$selnam=$recr['id'];
							$ls.= "<option value='{$recr['id']}' selected>{$recr['nme']} $wa</option>";
						} else {
							$ls.=  "<option value='{$recr['id']}'>{$recr['nme']} $wa</option>";
						}
					} else {
						if (!$selnam || $selnam==$recr['nme']) {
							$selnam=$recr['nme'];
							$emls=explode(',',$recr['contact_email']);
							$ls.=  "<option value='{$recr['nme']}' selected>{$recr['nme']} $wa</option>";
						} else {
							$ls.=  "<option value='{$recr['nme']}'>{$recr['nme']} $wa</option>";
						}					
					}
						
				}	
				
				echo  "<tr><th><select name='selnam' onchange='this.form.submit()'>$ls</select></th></tr></thead>";
				
				echo "<tbody>";	
				
				
				if ($selsrc==31) {
					//echo "<tr><th>$selsrc **</th></tr>";
					$csts="select * from nTwineSum.tenant c where c.acmaid=$selnam order by name";
					$cstq = mysql_query($csts,$repc);
					while ($cstr = mysql_fetch_array($cstq , MYSQL_ASSOC)) {
						echo "<tr><th>{$cstr['name']}</th></tr>";
					}
				} else {
					forEach($emls as $v) {
						echo "<tr><th>$v</th></tr>";
					}				
				}
				echo "</tbody>";

			} else  { // sched*
				
				echo "<table class='sched'><thead>";
				if ($selsched=='Add Schedule') { 
					echo "<tr><th>$selsched</th></tr>";
				}
				$schrs="select * from Schedules where schedID='$selsched'";
				//echo "<tr><th colspan='2'>selsched $selsched updtsch $updtsch</th></tr>";
				$schrq = mysql_query($schrs,$repc);	
				
				if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					if ($selsrc == "None") {
						$destsrc=$schr['DestReport'];
						$format=$destfmt=$schr['Formats'];
					}
					if (!$destType) {
						$destType=$schr['DestType'];
					}
					if (!$recurrence) {
						$recurrence=$schr['Recurrence'];
					}
					if (!$format) {
						$format=$schr['Formats'];
					}	
					$cl="";
					if ($updtsch=="Edit Schedule") {
						$cl=" class='updt' ";
					}					
					//echo "<thead><tr><th colspan='2'>updtsch $updtsch - destType $destType</th></tr>";				
					echo "<tr><th>ID</th><th>$selsched</th></tr></thead><tbody $cl>";
					if ($updtsch=="Edit Schedule") {

						$dtls="select s.DestType from Schedules s group by s.DestType";
						$dtlq = mysql_query($dtls,$repc);
						$wa="<select name='destType'>";
						while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
							if ($destType==$dtlr['DestType']) {
								$wa.="<option selected>{$dtlr['DestType']}</option>";
							} else {
								$wa.="<option>{$dtlr['DestType']}</option>";
							}
						}
						$wa.="</select>";
						echo "<tr><th>Destination Type</th><td>$wa</td></tr>";
						echo "<tr><th>runTime</th><td><input type='time' name='runtime' value='{$schr['runTime']}' /></td></tr>";
						$ch="";
						if ($newrecurrence) {
							$ch='checked';
						}
						if ($newrecurrence) {
							$wa="<input type='text' size='60' name='recurrence' value='$recurrence' />";
						} else {					
							$dtls="select s.Recurrence from Schedules s group by s.Recurrence order by Recurrence";
							$dtlq = mysql_query($dtls,$repc);
							$wa="<select name='recurrence'>";
							while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
								if ($recurrence==$dtlr['Recurrence']) {
									$wa.="<option selected>{$dtlr['Recurrence']}</option>";
								} else {
									$wa.="<option>{$dtlr['Recurrence']}</option>";
								}
							} 
							$wa.="</select>";
						}
						$wa.="<input $ch type='checkbox' name='newrecurrence' onchange='this.form.submit()' />";
						echo "<tr><th>Recurrence Type</th><td>$wa</td></tr>";
						echo "<tr><th>Filters</th><td><textarea name='filtersched'>{$schr['Filters']}</textarea></td></tr>";					
						echo "<tr><th>Parameters</th><td><textarea name='parameters'>{$schr['Parameters']}</textarea></td></tr>";			
						$dtls="select s.Status from Schedules s group by s.Status order by Status";
						$dtlq = mysql_query($dtls,$repc);
						$wa="<select name='status'>";
						while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
							if ($status==$dtlr['Status']) {
								$wa.="<option selected>{$dtlr['Status']}</option>";
							} else {
								$wa.="<option>{$dtlr['Status']}</option>";
							}
						}
						$wa.="</select>";
						echo "<tr><th>Status</th><td>$wa</td></tr>";	
						echo "<tr><th>Destination Detail</th><td><textarea name='destdet'>{$schr['DestDetail']}</textarea></td></tr>";
						$wa="";
						if ($schr['Zipped']) {
							$wa="checked";
						}					
						echo "<tr><th>Zipped</th><td><input $wa type='checkbox' name='zipped' /></td></tr>";
						$wa="";
						if ($schr['MergedPDF']) {
							$wa="checked";
						}					
						echo "<tr><th>Merged PDF</th><td><input $wa type='checkbox' name='mergedPDF' /></td></tr>";					
						$dtls="select s.Formats from Schedules s group by s.Formats order by Formats";
						$dtlq = mysql_query($dtls,$repc);
						$wa="<select name='format'>";
						while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
							if ($format==$dtlr['Formats']) {
								$wa.="<option selected>{$dtlr['Formats']}</option>";
							} else {
								$wa.="<option>{$dtlr['Formats']}</option>";
							}
						}
						$wa.="</select>";
						echo "<tr><th>Format</th><td>$wa</td></tr>";
						echo "<tr><th>Destination Report</th><td><textarea name='destreport'>$destsrc</textarea></td></tr>";	
						//echo "<tr><th colspan='2'><textarea>$updts</textarea><th><tr>";
						//echo "<tr><th colspan='2'><textarea>$updts1</textarea><th><tr>";
						//echo "<tr><th colspan='2'><textarea>$updts2</textarea><th><tr>";
						echo "</tbody><tfoot><tr><th></th><th colspan='2'><input title='$su' type='submit' name='updtsched' value='Update Schedule' </th></tr>";
						echo "<tr><th>Action</th><td><select name='updtsch' onchange='this.form.submit()'>";
						if ($updtsch=="None") {
							echo "<option selected>None</option>";
						} else {
							echo "<option>None</option>";
						}			
						if ($updtsch=="Edit Schedule") {
							echo "<option class='red' selected>Edit Schedule</option>";
						} else {
							echo "<option class='red'>Edit Schedule</option>";
						}
						if ($updtsch=="Remove Schedule") {
							echo "<option class='red' selected>Remove Schedule</option>";
						} else {
							echo "<option class='red'>Remove Schedule</option>";
						}	
						echo "</select></td></tr></tfoot>";						
					} else {
						echo "<tr><th>Destination Type</th><td>{$schr['DestType']}</td></tr>";
						echo "<tr><th>runTime</th><td>{$schr['runTime']}</td></tr>";
						echo "<tr><th>Recurrence</th><td>{$schr['Recurrence']}</td></tr>";
						echo "<tr><th>Filters</th><td><textarea>{$schr['Filters']}</textarea></td></tr>";
						echo "<tr><th>Parameters</th><td><textarea>{$schr['Parameters']}</textarea></td></tr>";			
						echo "<tr><th>Status</th><td>{$schr['Status']}</td></tr>";
						echo "<tr><th>Destination Detail</th><td><textarea>{$schr['DestDetail']}</textarea></td></tr>";
						$wa = $schr['Zipped'] ? 'Yes' : 'No';
						echo "<tr><th>Zipped</th><td>$wa</td></tr>";
						$wa = $schr['MergedPDF'] ? 'Yes' : 'No';
						echo "<tr><th>Merged PDF</th><td>$wa</td></tr>";			
						echo "<tr><th>Format</th><td>$destfmt</td></tr>";
						echo "<tr><th>Destination Report</th><td><textarea>$destsrc</textarea></td></tr>";
						echo "</tbody><tfoot><tr><th>Timestamp</th><td>{$schr['timestamp']}</td></tr>";
						echo "<tr><th>Action</th><td><select name='updtsch' onchange='this.form.submit()'>";
						if ($updtsch=="None") {
							echo "<option selected>None</option>";
						} else {
							echo "<option>None</option>";
						}		
						//if (!$selsrc || $selsrc=="None") {
							if ($updtsch=="Edit Schedule") {
								echo "<option class='red' selected>Edit Schedule</option>";
							} else {
								echo "<option class='red'>Edit Schedule</option>";
							}
							if ($updtsch=="Remove Schedule") {
								echo "<option class='red' selected>Remove Schedule</option>";
							} else {
								echo "<option class='red'>Remove Schedule</option>";
							}	
						//}
						echo "</select></td></tr>";				
					}
					
					

					echo "</tfoot>";	
				}
				
			}
			echo "</table>";
		}		
	///////////////////// Link Reports
		$wr="";
		if ($rselr['ReportType']=='sh') {
			$wr .="ReportType='php'";		
		} else {
			$wr .="(ReportType='Crystal' or ReportType='Recipients')";
		}
		if ($fltrep) {
			 $wr .= " and Report like '%$fltrep%'";
		}
		if ($selcomp=='Linked Reports') {
			$rpts="select * from Reports t
					where $wr order by Report";
			$rptq = mysql_query($rpts,$repc);	
			echo "<table class='replnk'>";
			//echo "<tr><th>{$rselr['ReportType']} -- $rpts</th><tr>";
			while ($rptr = mysql_fetch_array($rptq , MYSQL_ASSOC)) {
			
				$schs="select * from Schedules where repID=$selrep";
				$schq = mysql_query($schs,$repc);
				$schr = mysql_fetch_array($schq , MYSQL_ASSOC);
				$cl="";
					
				$chfs="select r.repID,Report,ReportType,repGroup,DestRepName,Format,Parameters,Filters from SourceLink l
						inner join Reports r on r.repID = l.RepID
						where schID={$schr['schedID']}";
						
				$chfq = mysql_query($chfs,$repc);
				while ($chfr = mysql_fetch_array($chfq , MYSQL_ASSOC)) {
					if ($chfr['repID'] == $rptr['repID']) {
						$cl=" class='red' checked ";
					}
				}

				$wa= "<tr><td $cl style='width: 500px'><input $cl type='checkbox' name='taglnk' value='{$rptr['repID']}' onchange='this.form.submit()' />{$rptr['Report']}</td>";		
				$wa.="<td>{$rptr['ReportType']}</td></tr>";

				echo $wa;
				
			} 
			echo "</table>";
			
		} 
			
		///////////////////// Function show ////////////////////////////////////////////////////////////////////////////////
		


		
		if ($selcomp=='Functions' && $selfnc && $selfnc != 'None') {
			echo "<table class='sched'>";
			$schrs="select f.Name,f.`Function`,f.CustomFunction,f.timestamp,c.Name as custFunc,c.Function as custFunction from Functions f 
					left join Functions c on c.fncID = f.CustomFunction where f.fncID='$selfnc'";
			//echo "<tr><th colspan='2'>$schrs </th></tr>";
			$schrq = mysql_query($schrs,$repc);
			if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
				echo "<thead><tr><th>ID</th><th>$selfnc</th></tr>";
				
				echo "<tr><th>Name</th><th>{$schr['Name']}</th></tr></thead>";
				echo "<tr><th>Function</th><td><textarea>{$schr['Function']}</textarea></td></tr>";	
				
				if ($schr['custFunc']) {
					echo "<tr><th>Custome Function ID</th><td>{$schr['CustomFunction']}</td></tr>";
					echo "<tr><th>Custome Function Name</th><td>{$schr['custFunc']}</td></tr>";
					echo "<tr><th>Custome Function</th><td><textarea>{$schr['custFunction']}</textarea></td></tr>";
				}			
				echo "<tfoot><tr><th>Timestamp</th><th>{$schr['timestamp']}</th></tr>";
				echo "<tr><th>Action</th><td><select name='updtfnc' onchange='this.form.submit()'>";
					if ($updtfnc=="None") {
						echo "<option selected>None</option>";
					} else {
						echo "<option>None</option>";
					}			
					if ($updtfnc=="Edit Function") {
						echo "<option class='red' selected>Edit Function</option>";
					} else {
						echo "<option class='red'>Edit Function</option>";
					}
					if ($updtfnc=="Remove Function") {
						echo "<option class='red' selected value='Remove Function'>Remove Function</option>";
					} else {
						echo "<option class='red' value='Remove Function'>Remove Function</option>";
					}		
					
				echo "</select></td></tr>";
			}
			echo "</tfoot></table>";
		}	


	 
	///////////////////// Tags show

		if ($selcomp=='Tags') {
			$tags="select t.tagID,t.Tag from Tags t
					group by tagID,Tag order by Tag";
			$tagq = mysql_query($tags,$repc);	
			echo "<table class='tags'>";
			while ($tagr = mysql_fetch_array($tagq , MYSQL_ASSOC)) {
				$tls="select * from TagLink where repID='$selrep' and tagID='{$tagr['tagID']}'";
				//echo "$tls <br>";
				$cl="";
				$chfs="select l.repID from Tags t 
						left join TagLink l on l.tagID=t.tagID
						where t.tagID={$tagr['tagID']}";
				$chfq = mysql_query($chfs,$repc);
				if ($chfr = mysql_fetch_array($chfq , MYSQL_ASSOC)) {
					if (!$chfr['repID']) {
						$cl="class='red'";
					}
				}
				$tlq = mysql_query($tls,$repc);
				if ($tlr = mysql_fetch_array($tlq , MYSQL_ASSOC)) {
					$wa= "<tr><td class='blue'><input type='checkbox' name='taglnk' value='{$tagr['tagID']}' checked onchange='this.form.submit()' />{$tagr['Tag']}</td>";		
					//if ($updttag) {
					//	$wa.="<td><input type='radio' name='remtag'  onchange='this.form.submit()' /></td></tr>";
					//} else {
						$wa.="</tr>";
					//}
									
				} else {
					
					$wa= "<tr><td $cl><input type='checkbox' name='taglnk' value='{$tagr['tagID']}' onchange='this.form.submit()'  />{$tagr['Tag']}</td>";		
					if ($updttag) {
						if ($cl) {
							$wa.="<td><input type='radio' name='remtag'  onchange='this.form.submit()' /></td></tr>";
						}
					} else {
						$wa.="</tr>";
					}
										
				}
				echo $wa;
			}
			echo "<tfoot><tr><td>Add Tag: <input type='text' name='newtag' size='40px'  /></td></tr>";
			$ch="";
			if ($updttag) {
					$ch='checked';
			} 
			echo "<tr><td>Remove Tag: <input type='checkbox' $ch name='updttag' value='xx' onchange='this.form.submit()' /></td></tr>";
			echo "</tfoot></table>";
			
		} 

		///////////// Change show ////////////////////////////////////////////////////////////////////////////////////////////////

		if ($selcomp=='Changes') {		
			if ($selchg) {
				echo "<table class='sched'>";
				//$schrs="select * from RepChanges where chgID='$selchg'";
				$schrs="select chgID,Date,Done,r.Report,c.Description from RepChanges c
						inner join Reports r on r.repID=c.repID
							where c.chgID='$selchg'";
				//echo "$schrs <br>";
				$schrq = mysql_query($schrs,$repc);
				if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					echo "<thead><tr><th>ID</th><th>$selchg</th></tr></thead>";
					echo "<tr><th>Report</th><th>{$schr['Report']}</th></tr>";
					$wa = $schr['Done'] ? "Done" : "Not done";
					echo "<tr><th>Completed</th><th>$wa</th></tr>";
					echo "<tr><th>Description</th><td><textarea>{$schr['Description']}</textarea></td></tr>";	

				}
				echo "</table>";
			}	
			
		} 


		///////////// SQL show  

			
		if ($selcomp=='SQLstatement') {
			$schrq = mysql_query($schrs,$repc);
			
			if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
				echo "<table class='sched'>";
				echo "<thead><tr><th>ID</th><th>{$schr['sqlID']}</th></tr></thead>";
				echo "<tr><th>Type DB</th><th>{$schr['Type']}</th></tr>";
				echo "<tr><th>DB</th><th>{$schr['DB']}</th></tr>";
				echo "<tr><th>Server</th><th>{$schr['Server']}</th></tr>";
				echo "<tr><th>Description</th><td><textarea>{$schr['Statement']}</textarea></td></tr>";	
				echo "</tbody><tfoot><tr><th>Timestamp</th><td>{$schr['timestamp']}</td></tr>";
				echo "<tr><th>Action</th><td><select name='updtsql' onchange='this.form.submit()'>";
					if ($updtsql=="None") {
						echo "<option selected>None</option>";
					} else {
						echo "<option>None</option>";
					}			
					if ($updtsql=="Edit SQL") {
						echo "<option class='red' selected>Edit SQL</option>";
					} else {
						echo "<option class='red'>Edit SQL</option>";
					}
					if ($updtsql=="Remove SQL") {
						echo "<option class='red' selected value='Remove SQL'>Remove SQL</option>";
					} else {
						echo "<option class='red' value='Remove SQL'>Remove SQL</option>";
					}				
				echo "</select></td></tr></tfoot>";
				echo "</table>";
			} 
			
			
			
			
		}	

		///////////// Tables show ///////////////////////////

			
		if ($selcomp=='Tables') {
			
			if ($seltab && $seltab != "None" && $seltab != "Link Table" && $seltab  != "View DB") { 
				$schrs="select t.tabID,t.TableName,d.Server,d.DB,d.Type,t.timestamp,Input from TableLinks l
							inner join TableDet t on t.tabID=l.tabID
							inner join DatabaseDet d on d.dbID=t.dbID
							where t.tabID='$seltab'
							order by d.Server,d.DB,t.TableName";
				//echo "<tr><th>$schrs </th></tr>";
				$schrq = mysql_query($schrs,$repc);
				echo "<table class='sched'>";
				if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					
					echo "<thead><tr><th>ID</th><th>{$schr['tabID']}</th></tr></thead>";
					
					echo "<tr><th>Type</th><td>{$schr['Type']}</td></tr>";
					echo "<tr><th>Server</th><td>{$schr['Server']}</td></tr>";
					echo "<tr><th>DB</th><td>{$schr['DB']}</td></tr>";
					echo "<tr><th>Table Name</th><td>{$schr['TableName']}</td></tr>";	
					echo "<tr><th>Process Type</th><td>{$schr['Input']}</td></tr>";	
					echo "</tbody><tfoot><tr><th>Timestamp</th><td>{$schr['timestamp']}</td></tr>";
					
				} 
				echo "<tr><th>Action</th><td><select name='updttab' onchange='this.form.submit()'>";
					if ($updttab=="None") {
						echo "<option selected>None</option>";
					} else {
						echo "<option>None</option>";
					}			
					if ($updttab=="Edit Table") {
						echo "<option class='red' selected>Edit Table</option>";
					} else {
						echo "<option class='red'>Edit Table</option>";
					}
					if ($updttab=="Remove Table") {
						echo "<option class='red' selected value='Remove Table'>Remove Table</option>";
					} else {
						echo "<option class='red' value='Remove Table'>Remove Table</option>";
					}				
				echo "</select></td></tr></tfoot>";	
				echo "</table>";
			}
			
			if ($seltab=="Link Table" || $seltab=="View DB") {
			
				$tls="select t.* from TableLinks l
						inner join TableDet t on t.tabID=l.tabID
						where repID=$selrep";
				$tlq = mysql_query($tls,$repc);
				
				$dbl=[];
				$tbl=[];
				while ($tlr = mysql_fetch_array($tlq , MYSQL_ASSOC)) {
					if (!$seldb) {
						$seldb=$tlr['dbID'];
					}				
					if (!in_array($tlr['dbID'], $dbl)) {
						array_push($dbl, $tlr['dbID']);	
					}
					if (!in_array($tlr['tabID'], $tbl)) {
						array_push($tbl, $tlr['tabID']);	
					}				
				}
				$dbs="select * from DatabaseDet order by Server,DB";
				$dbq = mysql_query($dbs,$repc);
				$cnt= count($tbl);
				echo "<table class='tabl'>";
				echo "<thead>";
				//echo "<tr><th>seldb $seldb - tlr {$tlr['dbID']} - cnt $cnt - tbl {$tlr['tabID']}<th><tr>";
				echo "<tr><td><select name='seldb' onchange='this.form.submit()'>";
				
				// Add database as well   >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
				echo "<optgroup class='red' label='Action'>";
				if ($seldb == "Add DB") {
					echo "<option class='redb' selected>Add DB</option>";
				} else {
					echo "<option class='redb'>Add DB</option>";
				}
				echo "</optgroup>";
				echo "<optgroup class='blue' label='Select DB'>";
				while ($dbr = mysql_fetch_array($dbq , MYSQL_ASSOC)) {
					$cl="";
					if (in_array($dbr['dbID'], $dbl)) {
						$cl="class='red'";
					}
					if ($seldb==$dbr['dbID']) {
						echo "<option $cl value='{$dbr['dbID']}' selected>{$dbr['Server']} 🔹 {$dbr['DB']}</option>";
						$seldb=$dbr['dbID'];
					} else {
						echo "<option $cl value='{$dbr['dbID']}'>{$dbr['Server']} 🔹 {$dbr['DB']}</option>";
					}
				}
				echo "</optgroup>";
				echo "</select></td></tr>";
				
				if ($seldb=="Add DB") {
					echo "</thead>";
					echo "<tbody class='updt'><tr><th>DB</th><td><input type='text' name='db' value='$db' /></td></tr>";
					echo "<tr><th>IP</th><td><input type='text' name='ip' value='$ip' /></td></tr>";
					echo "<tr><th>Server</th><td><input type='text' name='server' value='$server' /></td></tr>";
					echo "<tr><th>Type</th><td>";

					$ch='';
					if ($newDBtype) {
						echo "<input type='text' name='dbType' value='$dbType'";
					} else {
						echo "<select name='dbType'>";
						$dbts="select Type from DatabaseDet group by Type";
						$dbtq = mysql_query($dbts,$repc);
						while ($dbtr = mysql_fetch_array($dbtq , MYSQL_ASSOC)) {
							if(!$dbType || $dbType==$dbtr['Type']) {
								echo "<option selected>{$dbtr['Type']}</option>";
							} else {
								echo "<option>{$dbtr['Type']}</option>";
							}
						}						
						echo "</select>";
					}
					echo "<input $ch type='checkbox' name='newDBtype' onchange='this.form.submit()' /></td></tr>";
					echo "<tr><th>Description</th><td><input type='text' name='description' value='$description' /></td></tr>";
					echo "</tbody><tfoot><tr><th colspan='2'><input title='$ad' type='submit' name='addDB' value='Add DB'</th></tr></tfoot>";
				} else if ($seltab=='View DB') {
					$dbs = "select * from DatabaseDet where dbID='$seldb'";
					$dbq = mysql_query($dbs,$repc);
					$dbr = mysql_fetch_array($dbq , MYSQL_ASSOC);
					echo "<tr><th>DB ID</th><td>{$dbr['dbID']}</td></tr>";
					echo "</thead><tbody>";
					echo "<tr><th>DB</th><td>{$dbr['DB']}</td></tr>";
					echo "<tr><th>IP</th><td>{$dbr['IP']}</td></tr>";
					echo "<tr><th>Server</th><td>{$dbr['Server']}</td></tr>";
					echo "<tr><th>Type</th><td>{$dbr['Type']}</td></tr>";
					echo "<tr><th>Description</th><td>{$dbr['Descr']}</td></tr>";
					
				} else {
					echo "</thead>";
					$tbs="select * from TableDet where dbID=$seldb order by TableName";
					$tbq = mysql_query($tbs,$repc);
					
					//echo "<tr><th>$tbs </th><tr>";
					while ($tbr = mysql_fetch_array($tbq , MYSQL_ASSOC)) {
						$cl="";
						if ($remtab) {
							$lnks="select * from TableDet t 
								left join TableLinks l on l.tabID = t.tabID 
								where l.lnkID is null and t.tabID={$tbr['tabID']}";
							$lnkq = mysql_query($lnks,$repc);
							$wa="";
							if ($lnkr = mysql_fetch_array($lnkq , MYSQL_ASSOC)) {
								if (!$lnkr ['lnkID']) {
									$wa="<input type='radio' name='remtbl' value='{$tbr['tabID']}' />";
								}
							}
						}
						if (in_array($tbr['tabID'], $tbl)) {
							$cl="class='red'";
						}	
						if ($cl) {
							echo "<tr><th $cl><input type='checkbox' checked name='cbtab' value='{$tbr['tabID']}' />{$tbr['TableName']} $wa</th>";
						} else {
							echo "<tr><th $cl><input type='checkbox' name='cbtab' value='{$tbr['tabID']}' />{$tbr['TableName']} $wa</th>";
						}
					}
					
					echo "</tbody>";
					echo "<tfoot>";
					echo "<tr><th>Add Table to selected DB: <input title='$ins' type='text' name='newtab'  onchange='this.form.submit()' /></th></tr>";
					$ch="";
					if ($remtab) {
						$cb="checked";
					}
					echo "<tr><th>Remove Table: <input type='checkbox' $cb name='remtab'  onchange='this.form.submit()' /></th></tr>";
					echo "</tfoot>";
					
				}
				
				echo "</table>";
			} 
			
		}		 
		
		
		if ($selcomp=='Publications' && $selpub != "None") {	
			$pubs="select r.Report,r.repID,l.DestRepName,r.Path,r.ReportType,s.Recurrence from SourceLink l 
					inner join Schedules s on s.schedID=l.schID
					inner join Reports r on r.repID=s.repID 
					where r.repID=$selpub and l.RepID=$selrep";
				
			$pubq = mysql_query($pubs,$repc);
			echo "<table class='sched'>";
			//echo "<tr><th><textarea>$pubs</textarea></th></tr>";
			if ($pubr = mysql_fetch_array($pubq , MYSQL_ASSOC)) {		
				echo "<thead><tr><th>Report ID</th><td>{$pubr['repID']}</td></tr>";
				echo "<tr><th>Report</th><td>{$pubr['Report']}</td></tr></thead>";
				echo "<tr><th>Path</th><td>{$pubr['Path']}</td></tr>";
				echo "<tr><th>Dest Report</th><td><textarea>{$pubr['DestRepName']}</textarea></td></tr>";
				echo "<tr><th>Recurrence</th><td>{$pubr['Recurrence']}</td></tr>";
			}
			echo "</table>";
		}	
	}
}
	

echo "</div>"; // <<<<<<<<<<<<<<<<<< div d2 <<<<<<<<<<<<<<<<

echo "</div>"; // d0
//xxxxxxxxxxxxxxx
?>
</form>
<script>

</script>
</body>
</html>