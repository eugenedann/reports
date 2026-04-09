<!DOCTYPE html>
<html>
<head>
<title>Reports</title> 
<style type="text/css"> 
	input[type=radio], input[type=checkbox], input[type=submit] {
		cursor: pointer;
	}
	input[type=button], input[type=submit], input[type=reset] {
	  background-color: corn;
		border-radius: 20px;
		box-shadow: 2px 2px 2px #eee;
	  color: white;
	  padding: 3px 3px;
	  text-decoration: none;
	  margin: 3px 3px;
	  cursor: pointer;
	  color: navy;
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
	top: 300px;
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


.tabl {
	background-color: lightgreen;
	position: fixed;
	top: 290px;
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
.yel {
	color: yellow;
}
.ora {
	background-color: orange;
	color: black;
}
.grn {
	color: green;	
}
.hlph {
	color: red;
	background-color: lightblue;
	text-align: center;
}
.wrn {
	background-color: red;
	color: white;	
	text-align: center;
} 
.updt {
	background-color: orange;
}
.rem {
	color: white;
	background-color: red;
}
.mrk {
	color: white;
	background-color: blue;	
}
</style>
<script>
//taglnk

//element.addEventListener('click', function, useCapture);
function fcmpsel(n) {
	let c=document.getElementById('cmpsel');
	let t=document.getElementById('selcomp');
	if (t && n) {
		t.value="";
	}
	if (c) {
		c.value='None';
	}	

	document.getElementById("subm").submit();
	//cmpsel
}
</script>
</head>
<body>

<form method="post" id='subm' action="<?php echo $PHP_SELF;?>"> 
<?php
	//<a href="filename.html">Link Text</a>
	//<link rel="stylesheet" href="css/main.css">
// Reports
	$selrep = $_POST["selrep"];
	$filrep = $_POST["filrep"];
	$subrep = $_POST["subrep"];
	$report = $_POST["report"];
	$status = $_POST["status"];
	$type = $_POST["type"];
	$source = $_POST["source"];
	$description = $_POST["description"];
	$filter = $_POST["filter"];
	$fltrep = $_POST["fltrep"];
	$newtype = $_POST["newtype"];
	$newpath = $_POST["newpath"];
	$path = $_POST["path"];
	$procrepdel = $_POST["procrepdel"];
	$rptlnk = $_POST["rptlnk"];
	$replst = $_POST["replst"];
	$cmpsel = $_POST["cmpsel"];
	$cbapplfil = $_POST["cbapplfil"];
	
	//cbapplfil
//Schedules

	$updtsch = $_POST["updtsch"];
	$selsrc = $_POST["selsrc"];
	$selnam = $_POST["selnam"];
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
	$subsrc = $_POST["subsrc"];
	$remsrc = $_POST["remsrc"];
// Components 
	$selcomp = $_POST["selcomp"];
// Functions

	$updtfnc = $_POST["updtfnc"];
	$isFnc = $_POST["isFnc"];
	$fname = $_POST["fname"];
	$cfunction = $_POST["cfunction"];
	$function = $_POST["function"];
	$subfnc = $_POST["subfnc"];
// Changes
	$date = $_POST["date"];	
	$done = $_POST["done"];	
	$subchg = $_POST["subchg"];	
	$reminder = $_POST["reminder"];	
	$dnechg = $_POST["dnechg"];	
	
// SQL
	$updtsql = $_POST["updtsql"];
// Tables
	$remtab = $_POST["remtab"];
// Publications
	$selpub = $_POST["selpub"];
// DB
	$seldb = $_POST["seldb"];
	$db = $_POST["db"];	
	$ip = $_POST["ip"];	
	$server = $_POST["server"];	
	$dbType = $_POST["dbType"];	
	$newDBtype = $_POST["newDBtype"];	
	$addDB = $_POST["addDB"];
	$actdb = $_POST["actdb"];
	$remdb = $_POST["remdb"];
// Filters ////////////////////////////////////
	$filclr = $_POST["filclr"];
	$subfil = $_POST["subfil"];
	$fdestd = $_POST["fdestd"];
	$fdestr = $_POST["fdestr"];
	$fpath = $_POST["fpath"];
	$ftstt = $_POST["ftstt"];
	$fts = $_POST["fts"];
	$filrpty = $_POST["filrpty"];
	$fstatus = $_POST["fstatus"];
	$ftag = $_POST["ftag"];
	$fdb = $_POST["fdb"];
	$frecurrence = $_POST["frecurrence"];
// Tags 
	$updttag = $_POST["updttag"];
	$remtag = $_POST["remtag"];
	$taglnk = $_POST["taglnk"];
	$newtag = $_POST["newtag"];	
// Table
	$newtab = $_POST["newtab"];	
	$updttab = $_POST["updttab"];
	$lnktab = $_POST["lnktab"];
	$updtby = $_POST["updtby"];
	$replnk = $_POST["replnk"];
	$selinp = $_POST["selinp"];
	$subtab = $_POST["subtab"];
	$seltab = $_POST["seltab"];
	$tablnk = $_POST["tablnk"];
	$ftable = $_POST["ftable"];
// SQL
	$sql = $_POST["sql"];	
	$sqlID = $_POST["sqlID"];	
	$addsql = $_POST["addsql"];
// Linked reports
	$repGroup = $_POST["repGroup"];
//echo "cmpsel $cmpsel <br>"; 
if (!$actdb) {
	$actdb="None";
}
if (!$seltab) {
	$seltab="None";
}
if (!$cmpsel) {
	$cmpsel="None";
}
//repGroup
$repc = mysql_connect('192.168.110.17', 'crystal', '#Cry001#')
	or die('Could not connect to .17: ' . mysql_error());
mysql_select_db('Reports',$repc) or die('Could not select mor db');

// >>>> Change updates 
	if ($subchg=="Add Change") {
		$r=$reminder ? 0 : $selrep;
		$ins="insert into RepChanges (repID,Done,Date,Description,Item)
				values('$r','0','$date','$description','Report')";
		//echo "$ins <br>";
		$inq = mysql_query($ins,$repc);
		$cmpsel="";
	}
	if ($dnechg) {
		$ups="update RepChanges set Done='1' where chgID='$dnechg'";
		//echo "$ups <br>";
		$upq = mysql_query($ups,$repc);
		$cmpsel="";
	}
// >>>> Tag updates <<<<

	if ($taglnk) {
		$tlks="select * from TagLink where repID=$selrep and tagID=$taglnk";
		$tlkq = mysql_query($tlks,$repc);
		if ($tlkr = mysql_fetch_array($tlkq , MYSQL_ASSOC)) {
			$dels="delete from TagLink where  repID=$selrep and tagID=$taglnk";
			$delq = mysql_query($dels,$repc);
		} else {
			$ins="insert into TagLink values($taglnk,$selrep)";
			$inq = mysql_query($ins,$repc);
		}
	}
	if ($newtag) {
		$incs="select * Tags where Tag='$newtag'";
		$incq = mysql_query($incs,$repc);
		if (!$repr = mysql_fetch_array($incq , MYSQL_ASSOC)) {
			$ins="insert into Tags (Type,Tag) values('Report','$newtag')";
			$inq = mysql_query($ins,$repc);
		}
	}
	if ($remtag) {
			$dels="delete from Tags where tagID=$remtag";
			$delq = mysql_query($dels,$repc);
			$updttag="";
	}
$ad ="";

// >>>> DB updates <<<<
	if ($addDB) {
		$ad.="db= $db &#13";
		$ad.="ip= $ip &#13";
		$ad.="server= $server &#13";
		$ad.="dbType= $dbType &#13";
		$ad.="description= $description &#13";
		$ins="insert into DatabaseDet (DB,Type,IP,Server,Descr) 
				values('$db','$dbType','$ip','$server','$description')";
		//$inq = mysql_query($ins,$repc);
		echo "$ins <br>";
	}


// >>>> Table updates <<<<
	if ($newtab) {
		$ins="insert into TableDet (TableName,dbID) values('$newtab','$cmpsel')";
		$inq = mysql_query($ins,$repc);
			}
	//echo "** $lnktab <br>";
	if ($lnktab) {
		$tlks="select * from TableLinks where repID=$selrep and tabID=$lnktab";
		$tlkq = mysql_query($tlks,$repc);
		if ($tlkr = mysql_fetch_array($tlkq , MYSQL_ASSOC)) {
			$dels="delete from TableLinks where  repID=$selrep and tabID=$lnktab";
			$delq = mysql_query($dels,$repc);
			//echo "$dels <br>";
		} else {
			$ins="insert into TableLinks (tabID,repID,Input) values('$lnktab','$selrep','Inp')";
			$inq = mysql_query($ins,$repc);
			//echo "$ins <br>";
			
		}
		//$cmpsel="";
	}
	if ($subtab) {
		$ups="update TableLinks set Input='$selinp' where tabID='$seltab' and repID='$selrep'";
		//echo "$ups <br>";
		$upq = mysql_query($ups,$repc);
		$updttab="None";
	}
	if ($replnk) {
		$tlks="select * from updateLinks where repID=$replnk and tabID= '$seltab'";
		//echo "$tlks <br>";
		$tlkq = mysql_query($tlks,$repc);
		if ($tlkr = mysql_fetch_array($tlkq , MYSQL_ASSOC)) {
			$dels="delete from updateLinks where  repID=$replnk and tabID=$seltab";
			$delq = mysql_query($dels,$repc);
			//echo "$dels <br>";
		} else {
			$ins="insert into updateLinks (tabID,repID) values('$seltab','$replnk')";
			$inq = mysql_query($ins,$repc);
			//echo "$ins <br>";
			
		}
		//$cmpsel="";
	}
// >>>> SQL updates <<<<
	if ($sql) {
		$sql=str_replace("'","\'",$sql);
		$ups= "update SQLstatements set Statement='$sql' where sqlID='$sqlID'";
		$upq = mysql_query($ups,$repc);
		$updtsql="None";
	}
	if ($addsql) {
		$addsql=str_replace("'","\'",$addsql);
		$ins="insert into SQLstatements (dbID,Statement,repID) values('0','$addsql','$selrep')";
		$inq = mysql_query($ins,$repc);
		echo "$ins <br>";
		$updtsql="None";				
	}
	
// >>>> Report updates <<<<
	$ru="";

	if ($subrep) {
		$ru.="report=$report &#13";
		$ru.="status=$status &#13";
		$ru.="type=$type &#13";
		$ru.="source=$source &#13";
		$ru.="description=$description &#13";
		$ru.="filter=$filter  &#13";
		$ru.="path=$path  &#13";
		if ($subrep=="Edit Report") {
			$updts="update Reports set 
					Report='$report',
					Description='$description',
					Status='$status',
					ReportType='$type',
					Source='$source',
					Path='$path',
					Filters='$filter'
				where repID='$selrep'";
			$updq = mysql_query($updts,$repc);	
			$selcomp="";
			//echo "$updts <br>";
		} else if ($subrep=="Add Report") {
			$ins="insert into Reports (Report,ReportType,Status,Source,Path,Description,Filters)
					values('$report','$type','$status','$source','$path','$description','$filter')";
			$inq = mysql_query($ins,$repc);
			//echo "<p>$ins </p>";
			$selrep='';
			$subfil="Apply Filter";
			$filrpty=$type;
		} 
	}
	if ($procrepdel) {
		$dels="delete from Reports where repID=$selrep";
		$delq = mysql_query($dels,$repc);
		//echo "dels $dels <br>";
		$selrep="";
	}
// >>>> Schedule updates <<<<
	$su ="";
	if ($updtsched) {
		$su.="status $status &#13";
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
			
		$za=0;
		if ($zipped) {
			$za=1;
		}
		$ma=0;
		if ($mergedPDF) {
			$ma=1;
		}			
		//status
		if ($updtsched=="Update Schedule") {

			if (!$selsrc || $selsrc=="None") {
				$updts1="update Schedules set 
							Formats='$format',
							DestReport='$destreport'	
						where schedID='$cmpsel'";
				$updq = mysql_query($updts1,$repc);
			} else {
				$updts2="update SourceLink set 
							DestRepName='$destreport',
							Format='$format'
						where RepID=$selsrc and schID='$cmpsel'";					
				$updq = mysql_query($updts2,$repc);			
			}
			$filtersched=str_replace("'","\'",$filtersched);
			$updts="update Schedules set 
						DestType='$destType',
						Recurrence='$recurrence',
						runtime='$runtime',
						Filters='$filtersched',
						Parameters='$parameters',
						DestDetail='$destdet',
						Status='$status',
						Zipped=$za,
						MergedPDF=$ma	
					where schedID='$cmpsel'";
				
			$updq = mysql_query($updts,$repc);
			//echo "<p>$updts</p>";
		}
		if ($updtsched == "Add Schedule") {
			$ins="insert into Schedules (repID,Formats,DestDetail,DestReport,DestType,Recurrence,runTime,
						Parameters,Filters,Status,Zipped,MergedPDF)
					values('$selrep','$format','$destdet','$destreport','$destType','$recurrence',
						'$runtime','$parameters','$filtersched','$status','$za','$ma')";
			//echo "$ins <br>";
			$inq = mysql_query($ins,$repc);
			$cmpsel="None";
		}
		if ($updtsched == "Remove Schedule") {
			//echo "Remove Schedule $cmpsel<br>";
			$dels="delete from Schedules where schedID=$cmpsel";
			$delq = mysql_query($dels,$repc);
			$cmpsel="None";
		}

	}
	if ($selcomp=="Linked Reports") {
		if ($subsrc=="Add Source") {
			$ins="insert into SourceLink (DestRepName,RepID,Format,repGroup,srcID) 
					values('$destreport','$replst','$format','$repGroup','$selrep')";
			//echo "$ins<br>";			
			//echo "$subsrc reports $replst to $selrep repGroup $repGroup format $format destreport $destreport<br>";					
			$inq = mysql_query($ins,$repc);
			$replst="None";
		//$updtsch="None";	
		}
		if ($remsrc=="Remove Source") {
			$dels="delete from SourceLink where Repid='$replst' and srcID='$selrep'";
			$delq = mysql_query($dels,$repc);
			$replst="None";			
		}
	}
// >>>> Function updates <<<<	

	if ($subfnc) {
		$fn=0;
		if ($isFnc) {
			$fn=1;
		}
		$cf=$selrep;
		if ($fn) {
			$cf=0;
		}		
		if ($subfnc=="Add Function") {
			$ins="insert into Functions (repID,Name,`Function`,CustomFunction,IsCF)
				values('$cf','$fname','$function','$cfunction','$fn')";
			//echo "$ins <br>";
			$inq = mysql_query($ins,$repc);
		}
		if ($subfnc=="Update Function") {
			$fncn=str_replace("'","\'",$function);
			//$fncn=$function;
			$ups="update Functions 
				set Name='$fname',
					`Function`='$fncn',
					CustomFunction='$cfunction',
					isCF='$fn'
				where fncID=$cmpsel";
			//echo "$ups <br>";
			$upq = mysql_query($ups,$repc);
		}
		if ($subfnc=="Remove Function") {
			$dels="delete from Functions where fncID='$cmpsel'";
			$delq = mysql_query($dels,$repc);
			//echo "$dels <br>";
		}
		$cmpsel="None";
	}
//echo "$taglnk <br>";
//session_start();

$cb="";

// >>>> Filter updates <<<<
	$flts="select * from ReportFilter";
	$fltq = mysql_query($flts,$repc);
	$fltr = mysql_fetch_array($fltq , MYSQL_ASSOC);



	$st="";
	if ($subfil=="Apply Filter") {
		$upds="update ReportFilter set ";
		if ($fltr['Report'] != $filrep) {
			$st.= $st ? " ,Report='$filrep'" : "Report='$filrep'";	
			if ($filrep) {
				$fdestd=$fdestr='';
			}
		} 
		if ($fltr['destDetail'] != $fdestd) {
			$st.= $st ? " ,destDetail='$fdestd'" : "destDetail='$fdestd'";	
			if ($fdestd) {
				$filrep=$fdestr='';
			}		
		} 
		if ($fltr['destReport'] != $fdestr) {
			$st.= $st ? " ,destDetail='$fdestr'" : "destDetail='$fdestr'";	
			if ($fdestr) {
				$filrep=$fdestd='';
			}		
		} 
		if ($fltr['Path'] != $fpath) {
			$st.= $st ? " ,Path='$fpath'" : "Path='$fpath'";				
		}
		if ($fltr['timestampType'] != $ftstt) {
			$st.= $st ? " ,timestampType='$ftstt'" : "timestampType='$ftstt'";	
			if ($ftstt=="None") {
				$fts='';
			}
		}
		if ($fltr['Timestamp'] != $fts) {
			$st.= $st ? " ,Timestamp='$fts'" : "Timestamp='$fts'";				
		}
		if ($fltr['reportType'] != $filrpty) {
			$st.= $st ? " ,reportType='$filrpty'" : "reportType='$filrpty'";				
		}	
		if ($fltr['Status'] != $fstatus) {
			$st.= $st ? " ,Status='$fstatus'" : "Status='$fstatus'";				
		}	
		if ($fltr['Tag'] != $ftag) {
			$st.= $st ? " ,Tag='$ftag'" : "Tag='$ftag'";				
		}	
		if ($fltr['DB'] != $fdb) {
			$st.= $st ? " ,DB='$fdb'" : "DB='$fdb'";				
		}
		if ($fltr['Table'] != $ftable) {
			$st.= $st ? " ,`Table`='$ftable'" : "`Table`='$ftable'";				
		}		
		if ($fltr['Recurrence'] != $frecurrence) {
			$st.= $st ? " ,Recurrence='$frecurrence'" : "Recurrence='$frecurrence'";				
		}
		if ($st) {
			$upds.=$st. " where `Filter`>''";
			$updq = mysql_query($upds,$repc);
			//echo "$upds <br>";
			if (!$cbapplfil) {
				$selrep='';
			}
		}
		
	}
	if ($filclr) {
		$upds="update ReportFilter 
		set reportType='Crystal'
		, Report=''
		, destDetail=''
		, destReport=''
		, Path=''
		, Recurrence=''
		, timestampType='None'
		, Timestamp=''
		, Status='Active'
		, Tag='None'
		, DB=''
		, `Table`=''
		, Filter='reportType'";
		$updq = mysql_query($upds,$repc);
		//$filtype='reportType';	
		//$fildet='Crystal';
		//$selcomp="Schedules";
		$selrep='';
	}  
	$fltq = mysql_query($flts,$repc);
	$fltr = mysql_fetch_array($fltq , MYSQL_ASSOC);	

	$fi="Report={$fltr['Report']} &#13";
	$fi.="destDetail={$fltr['destDetail']} &#13";
	$fi.="destReport={$fltr['destReport']} &#13";
	$fi.="Path={$fltr['Path']} &#13";
	$fi.="timestampType={$fltr['timestampType']} &#13";
	$fi.="Timestamp={$fltr['Timestamp']} &#13";
	$fi.="reportType={$fltr['reportType']} &#13";
	$fi.="Status={$fltr['Status']} &#13";
	$fi.="Tag={$fltr['Tag']} &#13";
	$fi.="DB={$fltr['DB']} &#13";
	$tpeList='';
	//$tpes="select ReportType from Reports group by ReportType";
	//$tpeq = mysql_query($tpes,$repc);

// >>>> Functions <<<<
//echo "cmpsel $cmpsel ** subfnc $subfnc <br>";
 
	function lists() {
		global $repc,$lstRepType,$lstPath,$lstStatus
				,$lstDB,$lstdbType,$lstServer,$lstFormat,$lstTabInput,$lstRecurrence,$lstSource,$lstTag;

		$lsts="select 
			r.ReportType
			,r.Path
			,r.Status
			,d.DB
			,d.dbID
			,t.TableName
			,t.tabID
			,d.Type
			,d.Server
			,s.Formats
			,l.Input
			,s.Recurrence
			,r.Source
			,tg.Tag
			from Reports r 
			left join TableLinks l on l.repID=r.repID 
			left join TableDet t on t.tabID=l.tabID 
			left join Schedules s on s.repID=r.repID 
			left join Functions f on f.repID=r.repID 
			left join SQLstatements q on q.repID=r.repID 
			left join TagLink g on g.repID=r.repID 
			left join Tags tg on tg.tagID=g.tagID 
			left join DatabaseDet d on d.dbID=t.dbID 
			group by 
			r.ReportType
			,r.Path
			,r.Status 
			,d.DB
			,t.TableName
			,t.tabID
			,d.dbID
			,d.Type
			,d.Server
			,s.Formats
			,l.Input
			,s.Recurrence
			,r.Source
			,tg.Tag";	
//left join RepChanges c on c.repID=r.repID 
		$lstq = mysql_query($lsts,$repc);
		$lstRepType=['All'];
		$lstPath=[];
		$lstStatus=[];
		$lstDB=[];
		$lstdbType=[];
		$lstServer=[];
		$lstFormat=[];
		$lstTabInput=[];
		$lstRecurrence=[];
		$lstSource=[];
		$lstTag=[];
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
			if ($lstr['Tag'] && !in_array($lstr['Tag'], $lstTag)) {
				array_push($lstTag, $lstr['Tag']);	
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
			left join SQLstatements q on q.repID=r.repID
			left join TagLink g on g.repID=r.repID
			left join Tags tg on tg.tagID=g.tagID
			left join DatabaseDet d on d.dbID=t.dbID";
//left join RepChanges c on c.repID=r.repID			
		$rs=" group by r.repID,Report,ReportType,Path,r.Status order by Report";


		//if ($seltype) {
			//$wr.=" where ReportType = '$seltype' ";
			if ($fltr['reportType'] !="All") {
				$wr.=" where ReportType = '{$fltr['reportType']}' ";
			} 
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
			
		if ($fltr['timestampType'] && $fltr['timestampType'] != 'None') {
		
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
		//	} else if ($sts=="RepChanges") {
		//		
		//		if ($wr) {
		//			$wr .= " and c.Date like '{$fltr['Timestamp']}%' ";
		//		} else {
		//			$wr = " where c.Date like '{$fltr['Timestamp']}%' ";
		//		}
			
			} else if ($sts=="DatabaseDet") {
				
				if ($wr) {
					$wr .= " and d.timestamp like '%{$fltr['Timestamp']}%'";
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
		if ($fltr['DB'] && $fltr['DB'] != 'None') {
			if ($wr) {
				$wr .= " and t.dbID = {$fltr['DB']} ";
			} else {
				$wr = " where t.dbID = {$fltr['DB']} ";
			}
		}	
		if (is_numeric($fltr['Table'])) {
			if ($wr) {
				$wr .= " and t.tabID = {$fltr['Table']} ";
			} else {
				$wr = " where t.tabID = {$fltr['Table']} ";
			}
		}			

		if ($fltr['Recurrence'] && $fltr['Recurrence'] != 'None') {
			if ($wr) {
				$wr .= " and Recurrence = '{$fltr['Recurrence']}' ";
			} else {
				$wr = " where Recurrence = '{$fltr['Recurrence']}' ";
			}
		} 	

		if ($fltr['Tag'] && $fltr['Tag'] != 'None') {
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

// >>>> Start of Report List Table <<<<
	$repq = mysql_query($reps,$repc);
	//$rows=mysql_num_rows($repq);
	$cnt=0;
	echo "<div class='d0'>";

	// <<<<<<<<<<<<<<<<< d1 <<<<<<<<<<<<<
	$rmds="select * from RepChanges where not done";
	$rmdq = mysql_query($rmds,$repc);
	$cl="";
	if ($rmdr = mysql_fetch_array($rmdq , MYSQL_ASSOC)) {
		$cl='rem';
	}
	echo "<div class='d1'><table class='list'><thead>";

	$ch="";
	if ($selrep=='filters') {
		$ch='checked';
	}
	$hp="";
	if ($selrep=='hlptpe') {
		$hp='checked';
	}

//	echo "</th></tr>";
	echo "<tr><th title='$fi' class='$cl'>▽<input $ch type='radio' name='selrep' value='filters' onchange='this.form.submit()' />Filter Report <span class='yel'>- ({$fltr['reportType']})</span></th><th class='hlph'>?<input type='radio' name='selrep' value='hlptpe' $hp onchange='this.form.submit()' /></th></tr>";

	echo "</thead>";

	/////////////////////////////////////////////////// end FILTERS ////////////////////////////////////////

	//$tpes="select r.ReportType from Reports r group by r.ReportType order by r.ReportType";
	//$tpeq = mysql_query($tpes,$repc);

	echo "</thead><tbody>";
	while ($repr = mysql_fetch_array($repq , MYSQL_ASSOC)) {
		$selected= ($selrep==$repr['repID']) ? "checked" : "";
		$cl= ($selrep==$repr['repID']) ? "mrk" : "";
		$cnt++;
		$rt = ($fltr['reportType'] == "All") ? $repr['ReportType'] : "";
		echo "<tr class='$cl'><td>$cnt<input type='radio' name='selrep' id='selrep' value='{$repr['repID']}' $selected onchange='fcmpsel(1)' />{$repr['Report']}</td><td>$rt</td></tr>";
	}

	echo "</tbody></table></div>"; // <<<<<<<<<<<<<<<< div d1 <<<<<<<<<<<<<<

echo "<div class='d2'>"; // <<<<<<<<<<<<<<<<< div d2 <<<<<<<<<<<<<<<<<<<	
	

if ($selrep) {

	/////// Report ///////////////////////////////////////////////////////////////////////////////////////////////////////
	if ($selrep=='hlptpe') {
	// >>>> Report Type Help <<<<
		echo "<table class='rep'><thead>";
		echo "<tr><th colspan='2'>Report Types</th></tr></thead>";
		echo "<tr><th colspan='2'><iframe src='https://docs.google.com/document/d/e/2PACX-1vS-UEMJNpN9tFUoJna7rbMLYBjEXf9-Dy5-xtkgDNex-xWL3EyEf_VZhBx312_FiLaNAjNT3voVn88-/pub?embedded=true' width='800' height='600'></iframe></th></tr></thead><tbody>";
		
		echo "</tbody></table>";
	}
	
	// >>>> Filters <<<<
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
		//echo "<tr><th>Recurrence</th><td>{$fltr['Recurrence']}</td></tr>";
		echo "<tr><th>Recurrence</th><td><select name='frecurrence'>";
		if (!$fltr['Recurrence'] || $fltr['Recurrence']=='None') {
			echo "<option selected>None</option>";
		} else {
			echo "<option>None</option>";
		}	
		echo "<optgroup class='blue' label='Select Recurrence'>";			
		for($i=0;$i<count($lstRecurrence);$i++) {
			if ($fltr['Recurrence']==$lstRecurrence[$i]) {
				
				echo "<option selected>{$lstRecurrence[$i]}</option>";
			} else {
				echo "<option>{$lstRecurrence[$i]}</option>";
			}
		}		
		echo "</select></td></tr>";		
		$tstl=['Reports','Schedules','Functions','RepChanges','DatabaseDet','TableDet','SQLstatements'];
		$wa="<select name='ftstt'>";
		if (!$fltr['timestampType'] || $fltr['timestampType']=='None') {
			$wa.= "<option selected>None</option>";
		} else {
			$wa.= "<option>None</option>";
		}		
		$wa.= "<optgroup class='blue' label='Select Timestamp Type'>";					
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
		echo "<tr><th>reportType</th><td><select name='filrpty'>";
		echo "<optgroup class='blue' label='Select Report Type'>";
		for($i=0;$i<count($lstRepType);$i++) {
			if ($fltr['reportType']==$lstRepType[$i]) {
				echo "<option selected>{$lstRepType[$i]}</option>";
			} else {
				echo "<option>{$lstRepType[$i]}</option>";
			}
		}
		echo "</select></td></tr>";
		echo "<tr><th>Status</th><td><select name='fstatus'>";
		echo "<optgroup class='blue' label='Select Status'>";
		for($i=0;$i<count($lstStatus);$i++) {
			if ($fltr['Status']==$lstStatus[$i]) {
				echo "<option selected>{$lstStatus[$i]}</option>";
			} else {
				echo "<option>{$lstStatus[$i]}</option>";
			}
		}	
		echo "</select></td></tr>";		
		echo "<tr><th>Tag</th><td><select name='ftag'>";
		if (!$fltr['Tag'] || $fltr['Tag']=='None') {
			echo "<option selected>None</option>";
		} else {
			echo "<option>None</option>";
		}	
		echo "<optgroup class='blue' label='Select Tag'>";
		for($i=0;$i<count($lstTag);$i++) {
			if ($fltr['Tag']==$lstTag[$i]) {
				echo "<option selected>{$lstTag[$i]}</option>";
			} else {
				echo "<option>{$lstTag[$i]}</option>";
			}
		}	
		echo "</select></td></tr>";
		echo "<tr><th>DB</th><td><select name='fdb'>";
		if (!$fltr['DB'] || $fltr['DB']=='None') {
			echo "<option selected>None</option>";
		} else {
			echo "<option>None</option>";
		}	
		echo "<optgroup class='blue' label='Select Database'>";			
		for($i=0;$i<count($lstDB);$i++) {
			$dbls="select * from DatabaseDet where dbID='{$lstDB[$i]}'";
			$dblq = mysql_query($dbls,$repc);
			$dblr = mysql_fetch_array($dblq , MYSQL_ASSOC);
			if ($fltr['DB']==$lstDB[$i]) {
				
				echo "<option selected value='{$dblr['dbID']}'>{$dblr['DB']} - {$dblr['Server']}</option>";
			} else {
				echo "<option value='{$dblr['dbID']}'>{$dblr['DB']} - {$dblr['Server']}</option>";
			}
		}		
		echo "</select></td></tr>";	
	$wr = is_numeric($fltr['DB']) ? " where d.dbID={$fltr['DB']} " : "";
		$tbs="select tabID,TableName,Server from TableDet t 
			left join DatabaseDet d on d.dbID=t.dbID
			$wr
			order by t.TableName,d.Server";		
		echo "<tr><th>Table</th><td><select name='ftable'>";
		if (!$fltr['Table'] || $fltr['Table']=='None') {
			echo "<option selected>None</option>";
		} else {
			echo "<option>None</option>";
		}	
		

		
		$tbq = mysql_query($tbs,$repc);			
		echo "<optgroup class='blue' label='Select Table'>";			
		while ($tbr = mysql_fetch_array($tbq , MYSQL_ASSOC)) {
			if ($fltr['Table']==$tbr['tabID']) {				
				echo "<option selected value='{$tbr['tabID']}'>{$tbr['TableName']} - {$tbr['Server']}</option>";
			} else {
				echo "<option value='{$tbr['tabID']}'>{$tbr['TableName']} - {$tbr['Server']}</option>";
			}
		}		
		echo "</select></td></tr>";			
		echo "</tbody><tfoot>";
		echo "<tr><th colspan='2'><input type='submit' name='subfil' value='Apply Filter' />";
		$ch = $cbapplfil ? "checked" : "";
		echo "<input $ch title='To apply filter without closing the filter screen.' type='checkbox' name='cbapplfil' />";
		echo "<input type='submit' name='filclr' value='Reset Filters' /></th></tr>";
		echo"</tfoot></table>";
	} else {
	
	// >>>> Start of Report List Table <<<<
		$rsel="select * from Reports where repID='$selrep'";
		$rselq = mysql_query($rsel,$repc);
		// >>>> Report processes <<<<
		if ($rselr = mysql_fetch_array($rselq , MYSQL_ASSOC)) {
				
			echo "<table class='rep'><thead>";
			if ($selcomp !='Add Report') {
				echo "<tr><th>ID</th><td>$selrep</td></tr>";
			}
			
			if ($selcomp=='Edit Report' || $selcomp=='Add Report' ) { // add report*
				if (!$report && $selcomp=='Edit Report') {
					$report=$rselr['Report'];
				}
				echo "<tr><th>Report</th><td><input size='60' type='text' name='report' value='$report' required /></td></tr></thead><tbody class='updt'>";
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
				//input
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
				echo "<tr><th>Status</th><td class='red'>{$rselr['Status']}</td></tr>";
				echo "<tr><th>Path</th><td>{$rselr['Path']}</td></tr>";
				echo "<tr><th>Source</th><td>{$rselr['Source']}</td></tr>";
				echo "<tr><th>Description</th><td><textarea>{$rselr['Description']}</textarea></td></tr>";
				echo "<tr><th>Filters</th><td><textarea>{$rselr['Filters']}</textarea></td></tr></tbody>";
				echo "<tfoot><tr><th>Timestamp</th><th>{$rselr['timestamp']}</th></tr>";
			}
			//source link
			$srcs= "select r.Report,r.repID,l.DestRepName,l.Format,r.ReportType,s.Recurrence,s.schedID 
						from SourceLink l 
						inner join Reports r on r.repID=l.srcID
						inner join Schedules s on s.repID=r.repID
						where l.RepID='$selrep'";
			$srcq = mysql_query($srcs,$repc);
			$srcr = mysql_fetch_array($srcq , MYSQL_ASSOC);
			$compact=['Add Report','Edit Report','Remove Report'];
			if ($rselr['ReportType']=='Crystal') {
				$complist=['Schedules','Functions','Tags','Changes','SQLstatement','Databases','Tables'];
				
				if ($srcr['ReportType']) {
					array_push($complist, 'Publications');	
				}
			
			} else if ($rselr['ReportType']=='PHP')  {
				$complist=['Schedules','Tags','Changes','Databases','Tables','SQLstatement'];
				if ($srcr['ReportType']) {
					array_push($complist, 'SH');	
				}				
			} else if ($rselr['ReportType']=='Publication' || $rselr['ReportType']=='sh')  {
				$complist=['Schedules','Tags','Changes','Linked Reports'];		
			} else if ($rselr['ReportType']=='Recipients')  {
				$complist=['Functions','Tags','Changes','Databases','Tables'];
				if ($srcr['ReportType']) {
					array_push($complist, 'Publications');	
				}
			}				
			echo "<tr><td colspan='2'><select name='selcomp' id='selcomp' onchange='fcmpsel(0)'>";
					echo "<optgroup class='blue' label='Select Component'>";
					for ($i=0;$i<count($complist);$i++) {
						if (!$selcomp) {
							$selcomp=$complist[$i];
						}
						
						if ($selcomp==$complist[$i]) {
							echo "<option selected>{$complist[$i]}</option>";
						} else {
							echo "<option>{$complist[$i]}</option>";
						}
					}
					echo "</optgroup>";
					echo "<optgroup class='red' label='Action'>";
					for ($i=0;$i<count($compact);$i++) {
						if ($selcomp==$compact[$i]) {
							echo "<option selected>{$compact[$i]}</option>";
						} else {
							echo "<option>{$compact[$i]}</option>";
						}
					}
					echo "</optgroup>";					

			echo "</select>";  
			if ($selcomp=='Linked Reports') {
				echo "🔷<input type='text' name='fltrep' value='$fltrep' onchange='this.form.submit()' /></td></tr>";
				echo "<tr><th colspan='2'><select name='replst' onchange='this.form.submit()'>";

				$wr="";
				if ($rselr['ReportType']=='sh') {
					$wr .="ReportType='php'";		
				} else {
					$wr .="(ReportType='Crystal' or ReportType='Recipients')";
				}
				if ($fltrep) {
					 $wr .= " and Report like '%$fltrep%'";
				}
				$rpts="select * from Reports t
						left join (select * from SourceLink where srcID=$selrep) s  on s.Repid=t.repID 
						where ($wr)  or s.RepID>0 order by Report";
				$rptq = mysql_query($rpts,$repc);	
				if ($replst=="None") {
					echo "<option selected>None</option>";
				} else {
					echo "<option>None</option>";
				}
				//select
				echo "<optgroup class='blue' label='Select a Report'>";
				while ($rptr = mysql_fetch_array($rptq , MYSQL_ASSOC)) {
					$rps="select * from SourceLink where srcID='$selrep' and RepID='{$rptr['repID']}'";
					$rpq = mysql_query($rps,$repc);
					$cl="";
					if ($rpr = mysql_fetch_array($rpq , MYSQL_ASSOC)) {
						$cl="ora";
					}
					$ti = "{$rptr['Path']}";
					if ($replst==$rptr['repID']) {	
						echo "<option title='$ti' class='$cl' selected value='{$rptr['repID']}'>{$rptr['Report']} - {$rptr['ReportType']}</option>";
					} else {
						echo "<option title='$ti' class='$cl'  value='{$rptr['repID']}'>{$rptr['Report']} - {$rptr['ReportType']}</option>";
					}
				}
				echo "</optgroup>";

				
				echo "</select></th></tr></thead>";
			}
			
			if ($selcomp=='Edit Report' || $selcomp=='Add Report' ) {
				echo "🔷<input type='submit' name='subrep' title='$ru' value='$selcomp' onclick='this.form.submit()' /></td></tr>";
			}
			if ($selcomp=='Remove Report') {
				//echo "<table>";
				echo "<tr><th colspan='2'>$selcomp</th></tr></thead>";
				$rmvs="select 
							r.repID
							,r.Report 
							,s.schedID
							,p.RepID as prid
							,sl.RepID as slrid
							,sl.repGroup as slrg
							,f.fncID
							,c.chgID
							,q.sqlID
							,tl.tabID as tabid
							,t.tagID
							,sr.srID
							,u.tabID as utabid
						from Reports r
						left join Schedules s on s.repID=r.repID
						left join SourceLink p on p.RepID=r.repID
						left join SourceLink sl on sl.srcID=r.repID
						left join Functions f on f.repID=r.repID
						left join RepChanges c on c.repID=r.repID
						left join SQLstatements q on q.repID=r.repID 
						left join TableLinks tl on tl.repID=r.repID
						left join TagLink t on t.repID=r.repID
						left join SubreportLink sr on sr.repID=r.repID
						left join updateLinks u on u.repID=r.repID
						where r.repID=$selrep
						order by sl.repGroup desc		
						limit 1";
				$rmvq = mysql_query($rmvs,$repc);
				$wa="";
				if ($rmvr = mysql_fetch_array($rmvq , MYSQL_ASSOC)) {
					$sw=1;
					//$wa.="<tr><th colspan='2' class='wrn'>This {$rmvr['Report']} will be deleted</th></tr>";
					if ($rmvr['prid']) {
						$wa.="<tr><th colspan='2' class='wrn'>Publication Report</th></tr>";
						$sw=0;
					} 
					if ($rmvr['slrid']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delink reports</th></tr>";
						$sw=0;
					} 					
					if ($rmvr['slrg']) {
						$wa.="<tr><th colspan='2' class='wrn'>Recipients still linked to this report</th></tr>";
						$sw=0;
					} 
					if ($rmvr['fncID']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delete Functions</th></tr>";
						$sw=0;
					} 
					if ($rmvr['schedID']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delete Schedules</th></tr>";
						$sw=0;
					} 
					if ($rmvr['tagID']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delink Tags</th></tr>";	
						$sw=0;						
					} 
					if ($rmvr['chgID']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delete Changes</th></tr>";
						$sw=0;
					} 
					if ($rmvr['sqlID']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delete SQLstatements</th></tr>";
						$sw=0;
					} 
					if ($rmvr['srID']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delink Subreports</th></tr>";
						$sw=0;
					} 
					if ($rmvr['tabid']) {
						$wa.="<tr><th colspan='2' class='wrn'>Delink Tables</th></tr>";
						$sw=0;
					}
					if ($rmvr['utabid']) {
						$wa.="<tr><th colspan='2' class='wrn'>This report updates tables</th></tr>";
						$sw=0;
					}
				}				
				if ($sw==1) {
					$wa.="<tr><th colspan='2'><input class='wrn' type='submit' name='procrepdel' value='Confirm: $selcomp' /></th></tr>";
				}
				echo "$wa";
				

			}
			
		
		
	///////////////////// Schedules selections ///////////////////////////////////////////////////////////////
			
			if ($selcomp=='Publications' || $selcomp=='SH') {
				echo "🔷<select name='selpub' onchange='this.form.submit()'>";
				
				$srcq = mysql_query($srcs,$repc);
				if ($selpub=="None" || !$selpub) {
					echo "<option selected>None</option>";
					$selpub="None";
				} else {
					echo "<option>None</option>";
				}
				while ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {
				
					if ($selpub==$srcr['schedID']) {
						echo "<option value='{$srcr['schedID']}' selected>{$srcr['Report']} - {$srcr['schedID']}</option>";
					} else {
						echo "<option value='{$srcr['schedID']}'>{$srcr['Report']} - {$srcr['schedID']}</option>";
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
				
				echo "🔷<select name='cmpsel' id='cmpsel' onchange='this.form.submit()'>";
					if ($cmpsel=="None") {
						echo "<option selected>None</option>";
					} else {
						echo "<option>None</option>";
					}
					echo "<optgroup class='blue' label='Select Schedule'>";
					for ($i=0;$i<count($selsch2);$i++) {
						if ($cmpsel==$selsch2[$i]) {
							echo "<option selected>{$selsch2[$i]}</option>";
						} else {
							echo "<option>{$selsch2[$i]}</option>";
						}		
					}	
					echo "</optgroup>";
					echo "<optgroup class='red' label='Action'>";
					
					for ($i=0;$i<count($selsch1);$i++) {
						if ($cmpsel==$selsch1[$i]) {
							//$sw=1;
							echo "<option selected>{$selsch1[$i]}</option>";
						} else {
							echo "<option>{$selsch1[$i]}</option>";
						}		
					}
					//if (!$sw) {
					//	$cmpsel="None";
					//}
					
					echo "</optgroup></select>";				
					echo "</td></tr>";
				if (($fltr['reportType']=="Publication" || $fltr['reportType']=="sh" || $fltr['reportType']=="All") && is_numeric($cmpsel)) {
					
					$srcs="select r.repID,r.Report,r.ReportType from Reports r 
							inner join SourceLink l on l.RepID=r.repID
							where l.srcID=$selrep";
						//inner join SourceLink l on l.RepID=r.repID
					//echo "<tr><th><textarea>$srcs</textarea></th></tr>";
					$srcq = mysql_query($srcs,$repc);
					$wa = "<tr><th>Reports</th><td><select name='selsrc' onchange='this.form.submit()'>";
					if ($selsrc=="None" || !$selsrc) {
						$wa.= "<option selected>None</option>";
					} else {
						$wa.=  "<option>None</option>";
					}			
					$tpeList=[];		
					while ($srcr = mysql_fetch_array($srcq , MYSQL_ASSOC)) {
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
					//if (in_array('Recipients',$tpeList)) {
						echo $wa;
					//}
					//$cntl = count($tpeList);
				}
				
			} 
		
		
			///////////////////// Functions selections ////////////////////////////////////////////////////////////////////////////////	
			
			
			if ($selcomp=='Functions') {
				$fncs="select repID,fncID,`Name` as Funcn 
						from Functions 
						where repID='$selrep' or repID='0'
						Group by repID,fncID,Funcn
						Order by Funcn";
				$fncq = mysql_query($fncs,$repc);			
				$selfunc=array('None','Add Functions');
				//echo "$fncs <br>";
				echo "🔷<select name='cmpsel' id='cmpsel' onchange='this.form.submit()'>";
	
					if ($cmpsel=="None") {
						echo "<option selected value='None'>None</option>";
					} else {
						echo "<option value='None'>None</option>";
					}
					
					echo "<optgroup class='blue' label='Select Function'>";
					while ($fncr = mysql_fetch_array($fncq , MYSQL_ASSOC)) {
						$gn='grn';
						if ($fncr['repID']) {
							$gn='';	
						} 						
						if ($cmpsel==$fncr['fncID']) {
							echo "<option class='$gn' value='{$fncr['fncID']}' selected>{$fncr['Funcn']}</option>";
						} else {
							echo "<option class='$gn' value='{$fncr['fncID']}'>{$fncr['Funcn']}</option>";
						}		
					}
					echo "</<optgroup>";
					echo "<optgroup class='red' label='Action'>";
					if ($cmpsel=="Add Function") {
						echo "<option class='red' selected value='Add Function'>Add Function</option>";
					} else {
						echo "<option class='red' value='Add Function'>Add Function</option>";
					}
					echo "</<optgroup>";
				echo "</select></td></tr>";			
			} 	
			
			///////////// Changes selections ////////////////////////////////////////////////////////////////////////////////////////////////
			
			if ($selcomp=='Changes') {
				$chgs="select c.repID,chgID,Date,Done,r.Report,c.Description from RepChanges c
						left join Reports r on r.repID=c.repID
						where c.repID='$selrep' or c.Done=0";
				//where c.repID='$selrep' or (c.repID=0 and c.Done=0)";
				$chgq = mysql_query($chgs,$repc);	
				
				echo "🔷<select name='cmpsel' id='cmpsel' onchange='this.form.submit()'>";
		
					if ($cmpsel=="None") {
						echo "<option selected value='None'>None</option>";
					} else {
						echo "<option value='None'>None</option>";
					}
					echo "<optgroup class='red' label='Action'>";
					if ($cmpsel=="Add Change") {
						echo "<option selected value='Add Change'>Add Change</option>";
					} else {
						echo "<option value='Add Change'>Add Change</option>";
					}	
					echo "<optgroup class='blue' label='Select Change'>";
					while ($chgr = mysql_fetch_array($chgq , MYSQL_ASSOC)) {
						$cl = "";
						if (!$chgr['repID']) {
							$cl='ora';
						} else if (!$chgr['Done']) {
							$cl='grn';
						}						
						if ($cmpsel==$chgr['chgID']) {
							echo "<option class='$cl' value='{$chgr['chgID']}' selected>{$chgr['Date']}</option>";
						} else {
							echo "<option class='$cl' value='{$chgr['chgID']}'>{$chgr['Date']}</option>";
						}
					}
				echo "</select></td></tr>";
			}	
			
			///////////// Database and Table selections

			
			if ($selcomp=='Databases' || $selcomp=='Tables') {
				echo "🔷 <select name='cmpsel' id='cmpsel' onchange='this.form.submit()'>";

				
				if ($selcomp=='Databases') { 
					echo "<optgroup class='red' label='Action'>";
				
					if ($cmpsel=="Add DB") {
						echo "<option selected>Add DB</option>";
					} else {
						echo "<option>Add DB</option>";
					}	
				}
									
				$dbs="select d.dbID,d.DB,d.Server,
						 sum(
								case
								when l.tabID > 0 then 1 else 0
								end
						)  as tble
						from DatabaseDet d 
						left join TableDet t on t.dbID=d.dbID
						left join TableLinks l on l.tabID=t.tabID and l.repID=$selrep
						group by d.dbID,d.DB,d.dbID,d.Server
						order by DB";
				$dbq = mysql_query($dbs,$repc);
				$wa="";
				echo "<optgroup class='blue' label='Database Name 🔹 Server '>";
				while ($dbr = mysql_fetch_array($dbq , MYSQL_ASSOC)) {
					$cl = $dbr['tble'] ? 'ora' : '';
					$cmpsel = ($cl=="ora" && $cmpsel=="None") ? $dbr['dbID'] : $cmpsel;
					if ($cmpsel==$dbr['dbID']) {
						echo "<option class='$cl' value='{$dbr['dbID']}' selected>{$dbr['DB']} 🔹 {$dbr['Server']}</option>";
					} else {
						echo "<option class='$cl'  value='{$dbr['dbID']}'>{$dbr['DB']} 🔹 {$dbr['Server']}</option>";
					}
				}
					
				echo "</select></th></tr>";
				if ($selcomp=='Tables') {
					$ch= $tablnk ? "checked" : "";
					$wa="Select Table: <select name='seltab' onchange='this.form.submit()'>";
					$tbs="select t.tabID,t.TableName,l.tabID as ltab,d.Server from TableDet t
							left join TableLinks l on l.tabID=t.tabID and l.repID=$selrep
							left join DatabaseDet d on d.dbID=t.dbID
							where t.dbID=$cmpsel
							order by TableName";
					$tbq = mysql_query($tbs,$repc);
					if (is_numeric($seltab)) {
						$chs="select * from TableDet t 
								left join TableLinks l on t.tabID=l.tabID
								where dbID=$cmpsel and t.tabID=$seltab ";
						//echo "<tr><th>$chs</th></tr>";
						$chq = mysql_query($chs,$repc);
						if (!$chr = mysql_fetch_array($chq , MYSQL_ASSOC)) {
							$seltab="None";
						}
					}

					$wa.= "<optgroup class='red' label='Action'>";
					if ($seltab=="Link Tables") {
						$wa.="<option selected>Link Tables</option>";
					} else {
						$wa.="<option>Link Tables</option>";
					}
					$wid="";
					$wa.=  "</optgroup>";
					$wa.=  "<optgroup class='blue' label='Select Table'>";
					$sr="";
					while ($tbr = mysql_fetch_array($tbq , MYSQL_ASSOC)) {
						$cl = $tbr['ltab'] ? 'ora' : '';
						$seltab = ($cl=="ora" && $seltab=="None") ? $tbr['tabID'] : $seltab;
						$sr = ($tbr['Server']=="Warehouse" && !$sr) ? $tbr['Server'] : $tbr['Server'];
						if ($seltab==$tbr['tabID']) {
							$wa.= "<option class='$cl' value='{$tbr['tabID']}' selected>{$tbr['TableName']}</option>";
						} else {
							$wa.=  "<option class='$cl'  value='{$tbr['tabID']}'>{$tbr['TableName']}</option>";
						}
					}			
					$wa.=  "</optgroup>";					
					$wa.= "</select>";
					if (is_numeric($seltab)  && $sr=='Warehouse') { // updated by  <<<<<<<<<<<<<<<<<<
						$ch="";
						if ($updtby) {
							$ch="checked";
						}
						$wa.="<input title='To link reports updating selected warehouse table' $ch type='checkbox' name='updtby'value='x' onchange='this.form.submit()' />";
					}
					echo "<tr><td colspan='2'>$wa</td></tr>";
				}
				
			}

			///////////// SQL selections		
			if ($selcomp=='SQLstatement') {

				$schrs="select s.sqlID,Statement,s.timestamp from SQLstatements s 
						where s.repID='$selrep'";
				$schrq = mysql_query($schrs,$repc);
				if (!$schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					echo "🔷<select name='cmpsel' onchange='this.form.submit()'>";
						if ($cmpsel=="None") {
							echo "<option selected value='None'>None</option>";
						} else {
							echo "<option value='None'>None</option>";
						}
						if ($cmpsel=="Add SQL") {
							echo "<option class='red' selected value='Add SQL'>Add SQL</option>";
						} else {
							echo "<option class='red' value='Add SQL'>Add SQL</option>";
						}		
					echo "</select></td></tr>";				
				}
			}

		}
		
		echo "</tfoot>";
		echo "</table>";	
		
		
	// >>>> End of Report List table <<<<		
	// >>>> Start of Schedules Table <<<<
		if ($selcomp=="Schedules") {
			if ($cmpsel=="Add Schedule") { 
				echo "<table class='sched'><thead>";
				echo "<tr><th colspan='2'>$cmpsel</th></tr></thead><tbody class='updt'>";
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
				echo "<tr><th>runTime</th><td><input type='time' name='runtime' value='{$schr['runTime']}' required /></td></tr>";
				$ch= $newrecurrence ? "checked" : "";
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
				echo "<tr><th>Destination Detail</th><td><textarea name='destdet' required>{$schr['DestDetail']}</textarea></td></tr>";
				$wa= $schr['Zipped'] ? "checked" : "";					
				echo "<tr><th>Zipped</th><td><input $wa type='checkbox' name='zipped' /></td></tr>";
				$wa = $schr['MergedPDF'] ? "checked" : "";					
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
			if ($cmpsel && $cmpsel != 'None') {
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
							$wa="";
							if ($perr['period'] != "Ad-hoc") {
								$wa=" and (period like '%{$perr['period']}%'";
							}
							
							if ($perr['period']=='da' && $wa) {
								$wa.=" or period like '%mtd%')";
							} else if ($perr['period']=='da') {
								$wa.=" and period like '%mtd%')";
							} 
							
							
							
							$recs="select Name as nme,contact_email,period as frequency,runDate,Report,IsActive from IOtel.recipients where Report='{$srcr['repGroup']}' $wa";
							
						} else if ($dbcr['DB']=="nTwineSum") {
							$recs="select Name as nme,contact_email,frequency,runDate,Report,IsActive from nTwineSum.nTwineRecipients where Report='{$srcr['repGroup']}' and frequency like '%{$perr['period']}%'";
						} else {
							$recs="select concat(firstname,' ',lastname) as nme,email,am.id from nTwineSum.accountmanager am order by lastname, am.firstname";
						}
						
					}	
					$recq = mysql_query($recs,$repc);
					
					echo "<thead>";	
					echo "<tr><th colspan='2'><textarea>$recs</textarea></th></tr>";
						
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
					
					echo  "<tr><th><select name='selnam' onchange='this.form.submit()'>$ls</select></th></tr>";
					
					echo "</thead><tbody>";	
					
					
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
					if ($cmpsel=='Add Schedule') { 
						echo "<tr><th>$cmpsel</th></tr>";
					}
					$schrs="select * from Schedules where schedID='$cmpsel'";
					//echo "<tr><th colspan='2'>cmpsel $cmpsel updtsch $updtsch</th></tr>";
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
						echo "<tr><th>ID</th><th>$cmpsel</th></tr></thead><tbody $cl>";
						if ($updtsch=="Edit Schedule") {

							$dtls="select s.DestType from Schedules s group by s.DestType";
							$dtlq = mysql_query($dtls,$repc);
							$wa="<select name='destType'>";
							while ($dtlr = mysql_fetch_array($dtlq , MYSQL_ASSOC)) {
								if ($schr['DestType']==$dtlr['DestType']) {
									$wa.="<option selected>{$dtlr['DestType']}</option>";
								} else {
									$wa.="<option>{$dtlr['DestType']}</option>";
								}
							}
							$wa.="</select>";
							echo "<tr><th>Destination Type</th><td>$wa</td></tr>";
							echo "<tr><th>runTime</th><td><input type='time' name='runtime' value='{$schr['runTime']}' required /></td></tr>";
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
									if ($schr['Recurrence']==$dtlr['Recurrence']) {
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
								if ($schr['Status']==$dtlr['Status']) {
									$wa.="<option selected>{$dtlr['Status']}</option>";
								} else {
									$wa.="<option>{$dtlr['Status']}</option>";
								}
							}
							$wa.="</select>";
							echo "<tr><th>Status</th><td>$wa</td></tr>";	
							echo "<tr><th>Destination Detail</th><td><textarea name='destdet' required>{$schr['DestDetail']}</textarea></td></tr>";
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
								if ($schr['Formats']==$dtlr['Formats']) {
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
					//	} else if ($updtsch=="Remove Schedule") {
					//		echo "</tbody><tfoot><tr><th></th><th colspan='2'><input type='submit' name='updtsched' value='Remove Schedule' </th></tr>";
						} else {
							echo "<tr><th>Destination Type</th><td>{$schr['DestType']}</td></tr>";
							echo "<tr><th>runTime</th><td>{$schr['runTime']}</td></tr>";
							echo "<tr><th>Recurrence</th><td>{$schr['Recurrence']}</td></tr>";
							echo "<tr><th>Filters</th><td><textarea>{$schr['Filters']}</textarea></td></tr>";
							echo "<tr><th>Parameters</th><td><textarea>{$schr['Parameters']}</textarea></td></tr>";			
							echo "<tr><th>Status</th><td class='red'>{$schr['Status']}</td></tr>";
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
							if ($updtsch=="Remove Schedule") {
								echo "<tr><th></th><th colspan='2'><input type='submit' name='updtsched' value='Remove Schedule' </th></tr>";		
							}
						}
						
						

						echo "</tfoot>";	
					}
					
				}
				echo "</table>";
			}
		}
	// >>>> End of Schedules Table <<<<
	// >>>> Start of Link Reports Table <<<<
		

		if ($selcomp=="Linked Reports") {
			if ($replst && $replst !="None") {
				$rps="select * from Reports r
						left join SourceLink l on l.RepID=r.repID and l.srcID='$selrep'
						where r.repID='$replst'";
				$rpq = mysql_query($rps,$repc);
				echo "<table class='sched'><tbody>";
				if ($rpr = mysql_fetch_array($rpq , MYSQL_ASSOC)) {				
					echo "<tr><th>$replst -- Destination Report</th><td><input size='50' type='text' name='destreport' value='{$rpr['DestRepName']}' /></td></tr>";
					$wa="<select name='format'>";
					for ($i=0;$i<count($lstFormat);$i++) {
						if (!$rpr['Format']) {
							$rpr['Format']="None";
						}
						if ($rpr['Format']==$lstFormat[$i]) {
							$wa.="<option selected>{$lstFormat[$i]}</option>";
						} else {
							$wa.="<option>{$lstFormat[$i]}</option>";
						}
						
					}
					$wa.="</select>";
					echo "<tr><th>Format</th><td>$wa</td></tr>";				
					//echo "<tr><th>Format</th><td><input type='text' name='format' value='{$rpr['Format']}' /></td></tr>";
					echo "<tr><th>Parameters</th><td><textarea name='parameter'>{$rpr['Parameters']}</textarea></td></tr>";
					$rgs="select DB,s.repGroup from TableLinks l 
							left join TableDet t on t.tabID=l.tabID 
							left join DatabaseDet d on d.dbID=t.dbID 
							left join Reports r on r.repID=l.repID 
							left join SourceLink s on s.RepID=r.repID and s.srcID=$selrep 
							where l.repID=$replst limit 1";
					$rgq = mysql_query($rgs,$repc);
					$rgr = mysql_fetch_array($rgq , MYSQL_ASSOC);
					//echo "<tr><th colspan='2'><textarea>{$rgr['repGroup']} ** $rgs</textarea></th></tr>";
					if ($rpr['ReportType']=="Recipients") {
						
						if ($rgr['DB']=='nTwineSum') {
							$rls="select Report from nTwineSum.nTwineRecipients group by Report order by Report";
							//
						} else if ($rgr['DB']=='IOtel') {
							$rls="select Report from IOtel.recipients group by Report order by Report";
						}
						//echo "<tr><th colspan='2'><textarea>$rls</textarea></th></tr>";
						$rlq = mysql_query($rls,$repc);
						$wa="<select name='repGroup'>";
						if (!$rgr['repGroup']) {
							$wa.="<option selected></option>";
						} else {
							$wa.="<option></option>";
						}
						
						while ($rlr = mysql_fetch_array($rlq , MYSQL_ASSOC)) {
							if ($rgr['repGroup']==$rlr['Report']) {
								$wa.="<option selected>{$rlr['Report']}</option>";
							} else {
								$wa.="<option>{$rlr['Report']}</option>";
							}
						}
						$wa.="</select>";
						echo "<tr><th>Report Group</th><td>$wa</td></tr>";
					
					} 
					if ($rpr['RepID']) {
						$act="Update Source";
					} else {
						$act="Add Source";
					}
					echo "<tbody><tfoot><tr><th colspan='2'><input type='submit' name='subsrc' value='$act' /><input type='submit' name='remsrc' value='Remove Source' /></th></tr></tfoot>";
				} 

				
				echo "</table";
			}			
		}
	// >>>> End of Link Reports Table <<<<
	// >>>> Start of Function Table <<<<	
		if ($selcomp=="Functions") {
			$wa="<select name='cfunction'>";
			$cfs="select * from Functions f where IsCF";
			$wa.="<option selected value='0'>None</option>";
			$cfq = mysql_query($cfs,$repc);
			while ($cfr = mysql_fetch_array($cfq , MYSQL_ASSOC)) {
				//if ($cfr['fncID']==$cfunction) {
				//	$wa.="<option selected value='{$cfr['fncID']}'>{$cfr['Name']}</option>";
				//} else {
					$wa.="<option value='{$cfr['fncID']}'>{$cfr['Name']}</option>";
				//}
			}
			$wa.="</select>";
			echo "<table class='sched'><thead>";
			
			if ($cmpsel && $cmpsel != 'None') {

				if ($cmpsel=="Add Function") {
					
					echo "<tr><th>Function Name</th><td><input type='text' name='fname' required /></td></tr>";
					echo "</thead><tbody class='updt'>";
					echo "<tr><th>Function</th><td><textarea required name='function'></textarea></td></tr>";
					echo "<tr><th>Custom Function</th><td>$wa</td></tr>";
					echo "<tr><th>Is a Custom Function</th><td><input type='checkbox' name='isFnc' /></td></tr>";
					echo "</tbody><tfoot>";
					echo "<tr><th></th><td><input type='submit' name='subfnc' value='Add Function' /></td></tr>";
				} else {
				
					$schrs="select f.fncID,f.IsCF,f.Name,f.`Function`,f.CustomFunction,f.timestamp,c.Name as custFunc,c.Function as custFunction from Functions f 
							left join Functions c on c.fncID = f.CustomFunction where f.fncID='$cmpsel'";
					//echo "<tr><th colspan='2'>$schrs </th></tr>";
					$schrq = mysql_query($schrs,$repc);
					if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					
						if ($updtfnc=="Edit Function") {
							
							$cfq = mysql_query($cfs,$repc);
							$wa="<select name='cfunction'>";
							if (!$cfq['fncID']) {
								echo "<option selected>None</option>";
							} else {
								echo "<option>None</option>";
							}
							$wa.="<option selected value='0'>None</option>";						
							while ($cfr = mysql_fetch_array($cfq , MYSQL_ASSOC)) {
								if ($cfr['fncID']==$schr['CustomFunction']) {
									$wa.="<option selected value='{$cfr['fncID']}'>{$cfr['Name']}</option>";
								} else {
									$wa.="<option value='{$cfr['fncID']}'>{$cfr['Name']}</option>";
								}
							}		
							$wa.= "</select>";
							echo "<tr><th>ID</th><td>$cmpsel</td></tr>";
							echo "</thead><tbody class='updt'>";
							echo "<tr><th>Function Name</th><td><input type='text' name='fname' required value='{$schr['Name']}' /></td></tr>";
							echo "<tr><th>Function</th><td><textarea required name='function'>{$schr['Function']}</textarea></td></tr>";
							echo "<tr><th>Custom Function</th><td>$wa</td></tr>";
							$cb='';
							if ($schr['IsCF']) {
								$cb='checked';
							}
							echo "<tr><th>Is a Custom Function</th><td><input $cb type='checkbox' name='isFnc' /></td></tr>";
							echo "</tbody><tfoot>";
							echo "<tr><th></th><td><input type='submit' name='subfnc' value='Update Function' /></td></tr>";
							//echo "<tr><th>$updtfnc</th></tr>";
							echo "</tbody>";

							
						} else {
							
							echo "<tr><th>ID</th><th>$cmpsel</th></tr>";
							
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
							if ($updtfnc=="Remove Function") {
								$sw=1;
								//echo "<tr><td><textarea>{$schr['IsCF']}</textarea></td></tr>";
								if ($schr['IsCF']) {
									$chs="select * from Functions f where f.CustomFunction = $cmpsel";
									$chq = mysql_query($chs,$repc);
									if ($chr = mysql_fetch_array($chq , MYSQL_ASSOC)) {
										$sw=0;
									}
								}
								if ($sw) {
									//echo "<tr><td><textarea>$chs</textarea></td></tr>";
									echo "<tr><th colspan='2'><input type='submit' name='subfnc' value='Remove Function' /></th></tr>";
								} else {
									echo "<tr><th colspan='2' class='wrn'><input type='submit' value='This function is linked to other reports' name='subfnc' /></th></tr>";
								}
							}
						}
						
					}
					
				}
				
			}	
			echo "</tfoot></table>";
			
		}
	// >>>> End of Function Table <<<<
	// >>>> Start of Tags Table <<<<	 

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
					$wa= "<tr><td class='ora'><input type='radio' name='taglnk' value='{$tagr['tagID']}'  onchange='this.form.submit()' />{$tagr['Tag']}</td>";		
				} else {
					$wa= "<tr><td $cl><input type='radio' name='taglnk' value='{$tagr['tagID']}' onchange='this.form.submit()'  />{$tagr['Tag']}</td>";		
					if ($updttag) {
						if ($cl) {
							$wa.="<td><input type='radio' name='remtag' value='{$tagr['tagID']}' onchange='this.form.submit()' /></td></tr>";
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
	// >>>> End of Tags Table <<<<
	// >>>> Start of Change Table <<<<

		if ($selcomp=='Changes') {	
			$dte=date_create(date("Y-m-d"));
			$date = date_format($dte, 'Y-m-d');
			echo "<table class='sched'><thead>";
			if ($cmpsel) {
				if ($cmpsel=="Add Change") {
					echo "<tr><th colspan='2'>Add Change</th></tr></thead><tbody class='updt'>";
					echo "<tr><th>Add Change</th><td><input type='date' name='date' value='$date' /></td></tr>";
					echo "<tr><th>Description</th><td><textarea name='description'></textarea></td></tr>";
					echo "<tr><th>Is a Reminder</th><td><input type='checkbox' name='reminder'  /></td></tr>";
					echo "<tr><th>Action/th><td><input type='submit' name='subchg' value='Add Change' /></td></tr>";
				} else {
					
					//$schrs="select * from RepChanges where chgID='$cmpsel'";
					$schrs="select chgID,Date,Done,r.Report,c.Description from RepChanges c
							left join Reports r on r.repID=c.repID
								where c.chgID='$cmpsel'";
					//echo "$schrs <br>";
					$schrq = mysql_query($schrs,$repc);
					if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
						echo "<thead><tr><th>ID</th><th>$cmpsel</th></tr></thead>";
						$p=$schr['Report'] ? $schr['Report'] : "Reminder";
						echo "<tr><th>Report</th><th>$p</th></tr>";
						$wa = $schr['Done'] ? "checked" : "";
						echo "<tr><th>Completed</th><th><input name='dnechg' type='checkbox' $wa value='$cmpsel' onchange='this.form.submit()' /></th></tr>";
						echo "<tr><th>Description</th><td><textarea>{$schr['Description']}</textarea></td></tr>";						

					}
					echo "</table>";
				}
			}	
			
		} 
	// >>>> End of Change Table <<<<
	// >>>> Start of SQL Table <<<<

		if ($selcomp=='SQLstatement') {
		
			echo "<table class='sched'>";
			if ($cmpsel=="Add SQL") {
				echo "<thead><tr><th colspan='2'>Add SQL</th><tr></thead><tbody class='updt'>";
				echo "<tr><th>Description</th><td><textarea name='addsql' onchange='this.form.submit()'></textarea></td></tr><tfoot>";	
			} else {
				$schrq = mysql_query($schrs,$repc);
				
				if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					echo "<thead><tr><th>ID</th><th><input type='text' readonly name='sqlID' value='{$schr['sqlID']}' /></th></tr></thead>";
					if ($updtsql=="Edit SQL") {
						echo "<tbody class='updt'>";
					} else {
						echo "<tbody>";
					}
					//echo "<tr><th>Type DB</th><th>{$schr['Type']}</th></tr>";
					//echo "<tr><th>DB</th><th>{$schr['DB']}</th></tr>";
					//echo "<tr><th>Server</th><th>{$schr['Server']}</th></tr>";					
					if ($updtsql=='Edit SQL') {
						echo "<tr><th>Description</th><td><textarea name='sql' onchange='this.form.submit()'>{$schr['Statement']}</textarea></td></tr><tfoot>";	
					} else {
						echo "<tr><th>Description</th><td><textarea readonly>{$schr['Statement']}</textarea></td></tr>";	
						echo "</tbody><tfoot><tr><th>Timestamp</th><td>{$schr['timestamp']}</td></tr>";
					}
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
						if ($updtsql !="Edit SQL") {
							if ($updtsql=="Remove SQL") {
								echo "<option class='red' selected value='Remove SQL'>Remove SQL</option>";
							} else {
								echo "<option class='red' value='Remove SQL'>Remove SQL</option>";
							}	
						}						
					echo "</select></td></tr></tfoot>";
					
					
				} 
				
			}
			echo "</table>";
		}	
		// >>>> End of SQL Table <<<<
		// >>>> Start of Databases Table <<<<	

		if ($selcomp=='Databases') {
			
			if (is_numeric($cmpsel)) {
			
				echo "<table class='sched'>";
				$dbs="select * from DatabaseDet d where d.dbID=$cmpsel";
				$dbq = mysql_query($dbs,$repc);
				echo "<thead>";

				if ($dbr = mysql_fetch_array($dbq , MYSQL_ASSOC)) {
					echo "<tr><th>DB ID</th><td>{$dbr['dbID']}</td></tr></thead>";
					if ($actdb=="None") {
						
						echo "<tbody>";
						echo "<tr><th>DB</th><td>{$dbr['DB']}</td></tr>";
						echo "<tr><th>IP</th><td>{$dbr['IP']}</td></tr>";
						echo "<tr><th>Server</th><td>{$dbr['Server']}</td></tr>";
						echo "<tr><th>Type</th><td>{$dbr['Type']}</td></tr>";
						echo "<tr><th>Description</th><td>{$dbr['Descr']}</td></tr>";					
						echo "</thead>";
					} else {
						if (!$dbType) {
							$dbType=$dbr['Type'];
						}
						echo "<tbody class='updt'>";
						echo "<tr><th>DB</th><td><input type='text' value='{$dbr['DB']}' name='db' /></td></tr>";
						echo "<tr><th>IP</th><td><input type='text' value='{$dbr['IP']}' name='ip' /></td></tr>";
						echo "<tr><th>Server</th><td><input type='text' value='{$dbr['Server']}' name='server' /></td></tr>";
						$wa= "<select name='dbType'>";
						$dbts="select Type from DatabaseDet group by Type";
						$dbtq = mysql_query($dbts,$repc);
						while ($dbtr = mysql_fetch_array($dbtq , MYSQL_ASSOC)) {
							if ($dbType==$dbtr['Type']) {
								$wa.="<option selected>{$dbtr['Type']}</option>";
							} else {
								$wa.= "<option>{$dbtr['Type']}</option>";
							}
						}						
						$wa.= "</select>";						
						echo "<tr><th>Type</th><td>$wa</td></tr>";
						echo "<tr><th>Description</th><td><input type='text' name='description' value='{$dbr['Descr']}' /></td></tr>";
						//echo "<tr><th>Type</th><td><input type='submit' name='upddb' value='Update DB' /></td></tr>";
					}
					
				}					
				
				
				$actl=['None','Edit','Remove'];
				$wa="<select name='actdb'  onchange='this.form.submit()'>";
				for ($i=0;$i<count($actl);$i++) {
					if ($actdb==$actl[$i]) {
						$wa.="<option selected>{$actl[$i]}</option>";
					} else {
						$wa.="<option>{$actl[$i]}</option>";
					}
				}
				$wa.="</select>";
				echo "<tfoot><tr><th>Action</th><td>$wa</td></tr>";
				if ($actdb=="Edit") {
					echo "<tr><th></th><td><input type='submit' name='upddb' value='Update DB' /></td></tr>";
				}
				echo "</tfoot>";
			}
					
			if ($cmpsel=="Add DB") {
				echo "<table class='sched'>";
				echo "<tbody class='updt'>";
				
				echo "<tr><th>DB</th><td><input type='text' name='db' value='$db' /></td></tr>";
				echo "<tr><th>IP</th><td><input type='text' name='ip' value='$ip' /></td></tr>";
				echo "<tr><th>Server</th><td><input type='text' name='server' value='$server' /></td></tr>";
				echo "<tr><th>Type</th><td>";

				$ch='';
				if ($newDBtype) {
					echo "<input type='text' name='dbType' value='$dbType' />";
					$ch="checked";
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
			} 
			echo "</table>";		
		}
		// >>>> End of Databases Table <<<<
		// >>>> Start of Tables Table <<<<
		
		if ($selcomp=='Tables') {
			if (is_numeric($seltab) && !$updtby) { 			
				$schrs="select t.tabID,t.TableName,d.Server,d.DB,d.Type,t.timestamp,Input 
							from TableDet t
							left join TableLinks l on t.tabID=l.tabID   and l.repID=$selrep
							left join DatabaseDet d on d.dbID=t.dbID
							where t.tabID='$seltab'
							order by d.Server,d.DB,t.TableName";
				$schrq = mysql_query($schrs,$repc);
				echo "<table class='sched'>";
				if ($schr = mysql_fetch_array($schrq , MYSQL_ASSOC)) {
					if (!$updttab || $updttab=="None") {
						echo "<thead><tr><th>ID</th><th>{$schr['tabID']}</th></tr></thead>";
						
						echo "<tr><th>Type</th><td>{$schr['Type']}</td></tr>";
						echo "<tr><th>Server</th><td>{$schr['Server']}</td></tr>";
						echo "<tr><th>DB</th><td>{$schr['DB']}</td></tr>";
						echo "<tr><th>Table Name</th><td>{$schr['TableName']}</td></tr>";	
						echo "<tr><th>Process Type</th><td>{$schr['Input']}</td></tr>";	
						$ubs="select r.Report from updateLinks u 
								left join Reports r on r.repID=u.repID
								where 	u.tabID='{$schr['tabID']}'";
						$ubq = mysql_query($ubs,$repc);
						$wa="<select>";
						while ($ubr = mysql_fetch_array($ubq , MYSQL_ASSOC)) {
							$wa.="<option>{$ubr['Report']}</option>";
						}
						if ($wa != "<select>") {
							$wa.="</select>";
							echo "<tr><th>Updated By</th><td>$wa</td></tr>";
						}
						echo "</tbody><tfoot><tr><th>Timestamp</th><td>{$schr['timestamp']}</td></tr>";
					} else if (!$updttab || $updttab=="Edit Table") {
						echo "<thead><tr><th>ID</th><th>{$schr['tabID']}</th></tr></thead>";
						echo "<tbody class='updt' ><tr><th>Type</th><td>{$schr['Type']}</td></tr>";
						echo "<tr><th>Server</th><td>{$schr['Server']}</td></tr>";
						echo "<tr><th>DB</th><td>{$schr['DB']}</td></tr>";
						echo "<tr><th>Table Name</th><td>{$schr['TableName']}</td></tr>";	
						$ipl=['Inp','Out','IO'];
						$wa="<select name='selinp'  onchange='this.form.submit()'>";
						for ($i=0;$i<count($ipl);$i++) {	
							if ($selinp==$ipl[$i]) {
								$wa.="<option selected>{$ipl[$i]}</option>";
							} else {
								$wa.="<option>{$ipl[$i]}</option>";
							}
						}
						$wa.="</select";
						echo "<tr><th>Process Type</th><td>$wa</td></tr></tbody>";
						
					}
				} 
				echo "<tfoot><tr><th>Action</th><td><select name='updttab' onchange='this.form.submit()'>";
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
	
					//if ($updttab=="Remove Table") {
					//	echo "<option class='red' selected value='Remove Table'>Remove Table</option>";
					//} else {
					//	echo "<option class='red' value='Remove Table'>Remove Table</option>";
					//}				
				echo "</select></td></tr>";	
				if ($updttab=="Edit Table") {
					echo "<tr><th colspan='2'><input type='submit' name='subtab' value='Update Table' /></th></tr></tbody>";					
				}		
				echo "</tfoot>";
			} else if ($seltab=="Link Tables") {
					echo "<table class='tabl'>";
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

					$tbs="select * from TableDet where dbID=$cmpsel order by TableName";
					$tbq = mysql_query($tbs,$repc);
					$wa="";
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
									$wa="<input title='Remove this table!!' type='radio' name='remtbl' value='{$tbr['tabID']}' />";
								}
							}
						}
						
						if (in_array($tbr['tabID'], $tbl)) {
							$cl="class='ora'";
						}	
						echo "<tr><th $cl><input type='radio' name='lnktab' value='{$tbr['tabID']}' onchange='this.form.submit()' />{$tbr['TableName']} $wa</th>";
					}
					
					echo "</tbody>";
					echo "<tfoot>";
					echo "<tr><th>Add Table to selected DB: <input title='$ins' type='text' name='newtab'  onchange='this.form.submit()' /></th></tr>";
					$cb="";
					if ($remtab) {
						$cb="checked";
					}
					echo "<tr><th>Remove Table: <input title='Enable tables to be removed not linked to reports' type='checkbox' $cb name='remtab'  onchange='this.form.submit()' /></th></tr>";
					echo "</tfoot>";
					
				//}
				
				
			} else if ($updtby) {
				echo "<table class='tabl'>";
				echo "<tr><th>update by</th></tr>";
				$wr="";
				if ($filphp) {
					$wr=" and Report like '%$wr%'";
				}
				$phps="select r.repID,r.Report,u.tabID from Reports r
					left join updateLinks u on u.repID=r.repID and u.tabID=$seltab
					where ReportType = 'PHP' $wr order by r.Report";
				$phpq = mysql_query($phps,$repc);
				while ($phpr = mysql_fetch_array($phpq , MYSQL_ASSOC)) {
					$cl= $phpr['tabID'] ? 'ora' : '';
					if ($phpr['repID']==$lnkupd) {
						$wa="<input checked type='radio' name='replnk' value='{$phpr['repID']}' onchange='this.form.submit()' />";
					} else {
						$wa="<input type='radio' name='replnk' value='{$phpr['repID']}' onchange='this.form.submit()' />";
					}
					echo "<tr><td class='$cl' colspan='2'>$wa{$phpr['Report']}</td></tr>";
				}
			
				
			}
			echo "</table>";
		
		}
		// >>>> End of Tables Table <<<<
		// >>>> Start of Publications or SH Table <<<<
		
		if ($selcomp=='Publications' || $selcomp=='SH') {
			if ($selpub != "None") {	
				// source link
				$pubs="select s.schedID,r.Report,r.repID,s.DestDetail,l.DestRepName,l.Format,r.Path,r.ReportType,s.Recurrence,s.Zipped
						from SourceLink l 
						inner join Reports r on r.repID=l.srcID 
						inner join Schedules s on s.repID=r.repID	 
						where s.schedID=$selpub and l.RepID=$selrep";
					
				$pubq = mysql_query($pubs,$repc);
				echo "<table class='sched'>";
				//echo "<tr><th><textarea>$pubs</textarea></th></tr>";
				if ($pubr = mysql_fetch_array($pubq , MYSQL_ASSOC)) {		
					echo "<thead><tr><th>Publication ID</th><td>{$pubr['repID']}</td></tr>";
					echo "<tr><th>Publication</th><td>{$pubr['Report']}</td></tr>";
					echo "<tr><th>schedID</th><td>{$pubr['schedID']}</td></tr></thead>";
					echo "<tr><th>Path</th><td>{$pubr['Path']}</td></tr>";
					echo "<tr><th>Dest Detail</th><td><textarea>{$pubr['DestDetail']}</textarea></td></tr>";
					echo "<tr><th>Dest Report</th><td><textarea>{$pubr['DestRepName']}</textarea></td></tr>";
					echo "<tr><th>Dest Format</th><td>{$pubr['Format']}</td></tr>";
					$z = $pubr['Zipped'] ? "Yes" : "No";
					echo "<tr><th>Dest Zipped</th><td>$z</td></tr>";
					echo "<tr><th>Recurrence</th><td>{$pubr['Recurrence']}</td></tr>";
				}
				echo "</table>";
			}	
		
		}
		// >>>> End of Publications or SH Table <<<<
	}
	
}
	

echo "</div>"; // <<<<<<<<<<<<<<<<<< div d2 <<<<<<<<<<<<<<<<

echo "</div>"; // d0

?>
</form>
<script>


</script>
</body>
</html>