<?php
// 05/07/2015
function Solti_BR()
{
  echo "<br/>\r\n";
}

// Sans trafiquer le lien
function Solti_ArrayLine9($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9)
{
    $Str = '<tr><td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col3.'</td><td>'.$col4.'</td><td>'.$col5.'</td><td>'.$col6.'</td><td>'.$col7.'</td><td>'.$col8.'</td><td>'.$col9.'</td></tr>'."\n";
    return $Str;
}

// Complete l'adresse pour en faire un lien HTML
function GotoLink($LIEN_WEB)
{
    if (strstr($LIEN_WEB,"http") == false)
    {
      $LIEN_WEB = 'http://'.$LIEN_WEB;
    }
    $LIEN_WEB = '<a href="'.$LIEN_WEB.'" target="_blank">Lien</a>';
    return $LIEN_WEB;
}

// On trafique le lien
function Solti_ArrayLine9_AJAX($col1, $col2, $col3, $col4, $col5, $col6, $col7, $LIEN_WEB, $col9)
{
    $Str = '<tr><td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col3.'</td><td>'.$col4.'</td><td>'.$col5.'</td><td>'.$col6.'</td><td>'.$col7.'</td>';
    $LIEN_WEB = GotoLink($LIEN_WEB);
    $Str = $Str.'<td>'.$LIEN_WEB.'</td>';
    $Str = $Str.'<td>'.$col9.'</td></tr>'."\n";
    return $Str;
}

// On trafique le lien
function Solti_ArrayLine8_AJAX($col1, $col2, $col3, $col4, $col5, $col6, $LIEN_WEB, $col8)
{

        $Str = '<tr><td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col3.'</td><td>'.$col4.'</td><td>'.$col5.'</td><td>'.$col6.'</td>';
    $LIEN_WEB = GotoLink($LIEN_WEB);
    $Str = $Str.'<td>'.$LIEN_WEB.'</td>';
    $Str = $Str.'<td>'.$col8.'</td></tr>'."\n";
    return $Str;
}

function Solti_ArrayHeader8($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8)
{
    $Str = '<TR>';
    $Str = $Str.'<th>'.$col1.'</th>';    $Str = $Str.'<th>'.$col2.'</th>';    $Str = $Str.'<th>'.$col3.'</th>';    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';    $Str = $Str.'<th>'.$col6.'</th>';    $Str = $Str.'<th>'.$col7.'</th>';    $Str = $Str.'<th>'.$col8.'</th>';
    $Str = $Str.'</TR>'."\n";
    return $Str;
}

function Solti_ArrayHeader9($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9)
{
    $Str = '<TR>';
    $Str = $Str.'<th>'.$col1.'</th>';    $Str = $Str.'<th>'.$col2.'</th>';    $Str = $Str.'<th>'.$col3.'</th>';    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';    $Str = $Str.'<th>'.$col6.'</th>';    $Str = $Str.'<th>'.$col7.'</th>';    $Str = $Str.'<th>'.$col8.'</th>';
    $Str = $Str.'<th>'.$col9.'</th>';
    $Str = $Str.'</TR>'."\n";
    return $Str;
}






function Solti_ArrayHeader9_AJAX($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9)
{
    $Str = '<thead><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';    $Str = $Str.'<th>'.$col2.'</th>';    $Str = $Str.'<th>'.$col3.'</th>';    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';    $Str = $Str.'<th>'.$col6.'</th>';    $Str = $Str.'<th>'.$col7.'</th>';    $Str = $Str.'<th>'.$col8.'</th>';
    $Str = $Str.'<th>'.$col9.'</th>';
    $Str = $Str.'</TR></thead>'."\n";
    return $Str;
}

function Solti_ArrayFooter9_AJAX($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9)
{
    $Str = '<tfoot><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';    $Str = $Str.'<th>'.$col2.'</th>';    $Str = $Str.'<th>'.$col3.'</th>';    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';    $Str = $Str.'<th>'.$col6.'</th>';    $Str = $Str.'<th>'.$col7.'</th>';    $Str = $Str.'<th>'.$col8.'</th>';
    $Str = $Str.'<th>'.$col9.'</th>';
    $Str = $Str.'</TR></tfoot>'."\n";
    return $Str;
}

function Solti_ArrayHeader8_AJAX($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8)
{
    $Str = '<thead><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';    $Str = $Str.'<th>'.$col2.'</th>';    $Str = $Str.'<th>'.$col3.'</th>';    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';    $Str = $Str.'<th>'.$col6.'</th>';    $Str = $Str.'<th>'.$col7.'</th>';    $Str = $Str.'<th>'.$col8.'</th>';
    $Str = $Str.'</TR></thead>'."\n";
    return $Str;
}

function Solti_ArrayFooter8_AJAX($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8)
{
    $Str = '<tfoot><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';    $Str = $Str.'<th>'.$col2.'</th>';    $Str = $Str.'<th>'.$col3.'</th>';    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';    $Str = $Str.'<th>'.$col6.'</th>';    $Str = $Str.'<th>'.$col7.'</th>';    $Str = $Str.'<th>'.$col8.'</th>';
    $Str = $Str.'</TR></tfoot>'."\n";
    return $Str;
}

function Solti_Connection()
{
    try
    {
        $bdd = new PDO('mysql:host=grenoblebpadmin.mysql.db;dbname=grenoblebpadmin', 'grenoblebpadmin','Rugby111');
        $bdd->exec("SET CHARACTER SET utf8");
    }
    catch(Exception $e)
    {
	    echo  $e->getMessage();
    }
    return $bdd;
}

// GET TABLES /////////////////////////////////////////////////////////

function Solti_ArrayHeader5($col1, $col2, $col3, $col4, $col5)
{
      $Str = '<thead><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';
    $Str = $Str.'<th>'.$col2.'</th>';
    $Str = $Str.'<th>'.$col3.'</th>';
    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';
    $Str = $Str.'</TR></thead>'."\n";

    return $Str;
}

function Solti_ArrayFooter5($col1, $col2, $col3, $col4, $col5)
{
    $Str = '<tfoot><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';
    $Str = $Str.'<th>'.$col2.'</th>';
    $Str = $Str.'<th>'.$col3.'</th>';
    $Str = $Str.'<th>'.$col4.'</th>';
    $Str = $Str.'<th>'.$col5.'</th>';
    $Str = $Str.'</TR></tfoot>'."\n";

    return $Str;
}

function Solti_ArrayLine5($col1, $col2, $col3, $col4, $LIEN_WEB)
{
    $Str = '<tr><td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col3.'</td><td>'.$col4.'</td>';

    if (strstr($LIEN_WEB,"http") == false) {
      $LIEN_WEB = 'http://'.$LIEN_WEB;
    }
    $Str = $Str.'<td><a href="'.$LIEN_WEB.'" target="_blank">Lien</a></td>';
    $Str = $Str.'</tr>'."\n";
    return $Str;
}






function Solti_GetTable_Salles($Table, $c1, $c2, $c3, $c4, $c5,$condition)
{
    echo Solti_ArrayHeader5($c1, $c2, $c3, $c4, $c5);
    echo Solti_ArrayFooter5($c1, $c2, $c3, $c4, $c5);
   $bdd = SOLTI_Connection();

    $question = 'select * from '. $Table;
    $question = $question. ' ' . $condition;

 $req = $bdd->query($question);
    while ($data = $req->fetch())
    {
        echo Solti_ArrayLine5($data[$c1],$data[$c2],$data[$c3],$data[$c4],$data[$c5]);
    }
    $req->closeCursor();
}

// Affiche 9 champs + condition avec le lien en clair
function Solti_GetTable9_MODIF($Table, $c1, $c2, $c3, $c4, $c5, $c6,$c7,$c8,$c9,$condition)
{
    echo Solti_ArrayHeader9_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8,$c9);
    echo Solti_ArrayFooter9_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8,$c9);
    $bdd = SOLTI_Connection();

    $question = 'select * from '. $Table;
    $question = $question. ' ' . $condition;
    $req = $bdd->query($question);

    while ($data = $req->fetch())
    {
        echo Solti_ArrayLine9($data[$c1],$data[$c2],$data[$c3],$data[$c4],$data[$c5],$data[$c6],$data[$c7],$data[$c8],$data[$c9]);
    }
    $req->closeCursor();
}

// Affiche 9 champs + condition avec le lien "LIEN"
function Solti_GetTable8_AJAX($Table, $c1, $c2, $c3, $c4, $c5, $c6,$c7,$c8,$condition)
{
    echo Solti_ArrayHeader8_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8);
    echo Solti_ArrayFooter8_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8);
    $bdd = SOLTI_Connection();

    $question = "select *, DATE_FORMAT(date,'%d/%m/%Y') as date_fr from ". $Table;
    $question = $question. ' ' . $condition;
    $req = $bdd->query($question);
    while ($data = $req->fetch())
    {
        $MyDate = $data['date_fr'];
        echo Solti_ArrayLine8_AJAX($data[$c1],$MyDate,$data[$c3],$data[$c4],$data[$c5],$data[$c6],$data[$c7],$data[$c8]);
    }
    $req->closeCursor();
}

// Pour le PDF
function Solti_ArrayLinePDF($col1, $col2, $col3, $col4, $col5, $col6, $LIEN_WEB, $col8)
{
    return $Str;
}

// Pour le PDF
function Solti_GetPDF($Table, $c1, $c2, $c3, $c4, $c5, $c6,$c7,$c8,$condition)
{
    $Str = "";
    $bdd = SOLTI_Connection();
    $question = "select * from ". $Table;
    $question = $question. ' ' . $condition;
    $req = $bdd->query($question);

  //  echo $req;
    while ($data = $req->fetch())
    {
        $Str = $Str.' '.$data[$c1].' '.$data[$c2].' '.$data[$c3].' '.$data[$c4].' '.$data[$c5].' '.$data[$c6].' ';
        $Str = $Str.' '.$data[$c7].' ';
        $Str = $Str.' '.$data[$c8].' '."\r"."\n";
    }
    $req->closeCursor();

  //  echo $Str;
    return $Str;
//   return $question;

}

function Solti_GetTable8_FUTUR($Table, $c1, $c2, $c3, $c4, $c5, $c6,$c7,$c8,$condition)
{
   echo Solti_ArrayHeader8_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8);
   echo Solti_ArrayFooter8_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8);
   $bdd = SOLTI_Connection();

    $question = "select *, DATE_FORMAT(date,'%d/%m/%Y') as date_fr from ". $Table;
    $question = $question. ' ' . $condition;
    $req = $bdd->query($question);

    while ($data = $req->fetch())
    {
        $MyDate = $data['date_fr'];
        echo Solti_ArrayLine8_AJAX($MyDate,$data[$c2],$data[$c3],$data[$c4],$data[$c5],$data[$c6],$data[$c7],$data[$c8]);
    }
    $req->closeCursor();
}
/***************
    $question = "select *, DATE_FORMAT(date,'%Y/%m/%d') as date_fr from ". $Table;
********/
function Solti_EffacerRegistre($result)
{
	$bdd = SOLTI_Connection($result);
    $bdd ->query($result);
}
function Solti_Execute($req){
	$bdd = SOLTI_Connection();
 $result = $bdd->query($req);
}
// Affiche 9 champs + condition
function Solti_GetTable9_Salle($Table, $c1, $c2, $c3, $c4, $c5, $c6,$c7,$c8,$c9,$salle)
{
    echo Solti_ArrayHeader9_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8,$c9);
        echo Solti_ArrayFooter9_AJAX($c1, $c2, $c3, $c4, $c5,$c6,$c7,$c8,$c9);
   $bdd = SOLTI_Connection();

   $salle = mysql_real_escape_string($salle);   // Protection
$condition = "WHERE salle LIKE '%$salle%'";  // Bien!

    $question = 'select * from '. $Table;
    $question = $question. ' ' . $condition;
    $req = $bdd->query($question);



    while ($data = $req->fetch())
    {
        echo Solti_ArrayLine9_AJAX($data[$c1],$data[$c2],$data[$c3],$data[$c4],$data[$c5],$data[$c6],$data[$c7],$data[$c8],$data[$c9]);
    }
    $req->closeCursor();
}

// Affiche 9 champs + condition
function Solti_GetArray9($Table, $c1, $c2, $c3, $c4, $c5, $c6,$c7,$c8,$c9,$condition)
{
    $bdd = SOLTI_Connection();
    $question = 'select * from '. $Table;
    $question = $question. ' ' . $condition;
    $req = $bdd->query($question);

    while ($data = $req->fetch())
    {
        return $data;
    }
    return '?';
}

// Affiche 5 champs avec clause Where
function Solti_GetTableWhere($Table, $col1, $col2, $col3, $col4, $col5, $Where)
{
    echo Solti_ArrayHeader($col1, $col2, $col3, $col4, $col5);
    $bdd = SOLTI_Connection();
    $question = 'select * from '. $Table .' ' . $Where;
    $req = $bdd->query($question);
    while ($data = $req->fetch())
    {
        echo Solti_ArrayLine($data[$col1],$data[$col2],$data[$col3],$data[$col4],$data[$col5]);
    }
    $req->closeCursor();
}

// Execute Non Query
function Solti_Request($question)
{
    $bdd = SOLTI_Connection();
    $bdd->query($question);
    $req->closeCursor();
}


// Affiche 8 champs avec clause Where
function Solti_GetTableWhere8($Table, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $Where)
{
    echo Solti_ArrayHeader8($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8);
    $bdd = SOLTI_Connection();
    $question = 'select * from '. $Table .' ' . $Where;

    $req = $bdd->query($question);

    while ($data = $req->fetch())
    {
      echo 'STEP3';
        Solti_BR();
        echo Solti_ArrayLine8($data[$col1],$data[$col2],$data[$col3],$data[$col4],$data[$col5],$data[$col6],$data[$col7],$data[$col8]);
        echo 'STEP4';
        Solti_BR();
    }
    $req->closeCursor();
        echo 'OK';
        Solti_BR();
}

// Affiche 9 champs avec clause Where
function Solti_GetTableWhere9($Table, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $Where)
{
    echo Solti_ArrayHeader9($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9);
    $bdd = SOLTI_Connection();
    $question = 'select * from '. $Table .' ' . $Where;
    $req = $bdd->query($question);
    while ($data = $req->fetch())
    {
        echo Solti_ArrayLine8($data[$col1],$data[$col2],$data[$col3],$data[$col4],$data[$col5],$data[$col6],$data[$col7],$data[$col8],$data[$col9]);
    }
    $req->closeCursor();
}


// Affiche 5 champs sans clause Where
function Solti_GetTable($Table, $col1, $col2, $col3, $col4, $col5)
{
    Solti_GetTableWhere($Table, $col1, $col2, $col3, $col4, $col5, '');
}

// Affiche 8 champs sans clause Where
function Solti_GetTable8($Table, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8)
{
    Solti_GetTableWhere8($Table, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, '');
}

// Affiche 9 champs sans clause Where
function Solti_GetTable9($Table, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9)
{
    Solti_GetTableWhere9($Table, $col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, '');
}

// Léo modif
function Solti_ArrayLine3($col1, $col2, $col3)
{
    $Str = '<tr><td>'.$col1.'</td><td>'.$col2.'</td><td>'.$col3.'</td>';
    return $Str;
}

function Solti_ArrayHeader3($col1, $col2, $col3)
{
    $Str = '<thead><TR>';
    $Str = $Str.'<th>'.$col1.' </th>';
       $Str = $Str.'<th>'.$col2.' </th>';
         $Str = $Str.'<th>'.$col3.' </th>';
    $Str = $Str.'</TR></thead><tbody>'."\n";
    return $Str;
}
function Solti_ArrayFooter3($col1, $col2, $col3)
{
    $Str = '<tfoot><TR>';
    $Str = $Str.'<th>'.$col1.'</th>';
    $Str = $Str.'<th>'.$col2.'</th>';
    $Str = $Str.'<th>'.$col3.'</th>';
    $Str = $Str.'</TR></tfoot>'."\n";

    return $Str;
}

function E4_ConnectBDD()
{
    try
    {
    $bdd = new PDO('mysql:host=localhost;dbname=epoka_e4','root','');

    $bdd->exec("SET CHARACTER SET utf8");
    }
    catch(Exception $e)
    {
	    echo  $e->getMessage();
    }
    return $bdd;
}


function E4_GetTable($Table, $c1, $c2, $c3,$condition)
{
    echo Solti_ArrayHeader3($c1, $c2, $c3);
    $bdd =  E4_ConnectBDD();

    $question = 'select * from '. $Table;
    $question = $question. ' ' . $condition;


    $req = $bdd->query($question);
    while ($data = $req->fetch())
    {
        echo Solti_ArrayLine3($data[$c1],$data[$c2],$data[$c3]);
    }

    $req->closeCursor();
}




?>
