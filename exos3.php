<?php
/*$chaine = "Vous êtes ";$chaine2="très ";$chaine3="beau.";
echo $chaine.$chaine2.$chaine3;
$a=1;$b=50;
if($a<$b){echo "hello";}else if($a>$b){echo"Nooooo!";}
while($a<=100){
    echo $a;
    $a=$a+9;
}
$maVariable ="truc";
switch($maVariable){
    case is_string($maVariable):
        echo "string";
        break;
}
$age=50;
switch($age){
    case $age <18:
        echo "trop jeune!";
        break;
    case $age >=18:
        echo "tu peux voter!";
        break;
}
?>
<link rel="styleSheet" href="style.css">

<p><table>
	<tr><th>A</th>	<th>B</th>	<th>A ou B</th>	<th>A et B</th>	<th>A ou exclusif B</th></tr>
	
	<tr><td><?php $b1=1;echo $b1;?></td><td><?php $b2=1; echo $b2?></td><td><?php if($b1 || $b2)echo $b1;?></td><td><?php if($b1 && $b2)echo $b1; ?></td><td><?php if($b1 XOR $b2)echo 0; else{ echo "nut";} ?></td></tr>
	<tr><td><?php $b1=1;echo $b1;?></td><td><?php $b2=0; echo $b2?></td><td><?php if($b1 || $b2)echo $b1;?></td><td><?php if($b1 && $b2)echo $b1; ?></td><td><?php if($b1 XOR $b2)echo 0; else{ echo "nut";} ?></td></tr>
	<tr><td><?php $b1=0;echo $b1;?></td><td><?php $b2=1; echo $b2?></td><td><?php if($b1 || $b2)echo $b1;?></td><td><?php if($b1 && $b2)echo $b1; ?></td><td><?php if($b1 XOR $b2)echo 0; else{ echo "nut";} ?></td></tr>
	<tr><td><?php $b1=0;echo $b1;?></td><td><?php $b2=0; echo $b2?></td><td><?php if($b1 || $b2)echo $b1;?></td><td><?php if($b1 && $b2)echo $b1; ?></td><td><?php if($b1 XOR $b2)echo 0; else{ echo "nut";} ?></td></tr>
</table></p>
<p>
	
	<?php
	   echo "<br>";
	   $y=0;$colonnes=8;
	   while($y<8){
	       for($j=1;$j<$y+1;$j++){
	           echo $y;
	       }
	      
	       for($zero=1;$zero<8-$y;$zero++){
	           echo 0;
	       } $y++;
	       echo "<br>";
	   }
	   
	   
	   
	   
	   
	   echo "<br>";
	   $t=20;$o=1;
	   while($t>0){
	       echo $t.' ';
	       $t--;
	       $o++;
	       if($o%3 ===1)
	           echo "<br>";
	   }
	   
	?>
	<?php 
	$mess=" message";


    */
	       function operation(int $a, int $b,$oper='+'){
	           switch ($oper){
	               case '-':
	                   return $a-$b;
	                   break;
	               case '*':
	                   return $a*$b;
	                   break;
	               case '/':
	                   if($b===0){
	                       echo "divison par 0!";
                            return;
                         }
                        return $a/$b;
	               case '+':
	                   return $a+$b;
	           }
	       }
  	echo operation(1,1,"/");
  	$az = 1; $bz=5;
  	echo "<br>";
  	function swap($a,$b){
  	    $c=$b;
  	    $b=$a;
  	    $a=$c;
  	    echo "a=".$a . "b=".$b;
  	}
  	swap($az,$bz);
  	echo "<br>";
  	
  	function double($x):int{
  	    return $x*2;
  	}
  	$double=function($x):int{echo 2*$x;};
      	
  	function recur($x,$p){
  	    if($p===1)
  	        return;
  	    $temp=$x;
  	    echo "<br>";
  	    echo $temp;
  	    recur($temp*$x,$p-1);
  	}
  	recur(5,4);
  	?>
</p>
<p>
<?php 
$bonjour=function ($message){
    echo $message;
};
$bonjour("votre altesse"."<br>");
$carre=function ($int){echo $int*=$int;};
$carre(5);

$a=2;$b=3;
$add=function()use ($a,$b):int{return $a+$b;};
echo $add($a,$b);
echo '<br>';


$boucle=function($messageA="",$messageB=""):void{
    for($i=0;$i<=10;$i++){
        echo $messageA.$i.$messageB;
    }
};
/*$boucle("",' ');
echo'<br>';
$boucle('<p>','</p>');
$boucle('','<br>');
echo '<ul>';
$boucle('<li>','</li>');
echo'</ul>';*/

$tableau=["Jean"=>20, "Jacques"=>30,"Louis"=>18];
echo "Jacques a :".$tableau["Jacques"];
$tableau[1]=45;
echo '<br>';
echo "A nouveau :".$tableau["Jacques"];
foreach ($tableau as $nom => $age)
    if($nom==="Jacques")
        echo $age;
$personnes=array(
    'personne1'=>array('nom'=>'dupuis','prénom'=>'jean','âge'=>20),
    'personne2'=>array('nom'=>'durant','prénom'=>'simon','âge'=>60),
    'personne3'=>array('nom'=>'michel','prénom'=>'philippe','âge'=>45),
);
$personnes['personne4']=['nom'=>'larue','prénom'=>'etienne','âge'=>46];       
foreach($personnes as $indices =>$personne){
    echo $personne['prénom']. '<br>';    
}
?>
</p>
<p>
<?php 


function affiche_mois($date)
{
    
    $mois = [1 => 'janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre'];
    $timestamp = strtotime($date);
    
    echo date('m', $timestamp), '<br/>';
    echo $mois[intval(date('m', $timestamp))], '<br/>';
    echo ucfirst($mois[intval(date('m', $timestamp))]), '<br/>';
}
affiche_mois('2023-12-02');

$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
);
function lire($tab){foreach($tab as $pays => $habitants ){
                if($habitants>20000000)
            echo $pays.' : '.$habitants;
}
}
lire($pays_population);
echo '<br>';

function remplir($a,$b):array{
    $i=1; 
    while($i<=10){
        $temp=rand($a,$b);
        $tab[$i]=$temp;
        echo '['.$temp.']';
        $i++;
    }
    return $tab;
}

function recherche($nbr,array $tab){
    if(in_array($nbr, $tab))
        echo "trouvé";
        else
            echo "42 n'est pas présent";
}
function trier($tab):array{
    $t1=array();
    $t2=array();
    for($i=0;$i<=count($tab);$i++){
        if($tab[$i]<50){
            $t1[]=$tab[$i];
        }
        else if($tab[$i]>=50)
           $t2[]=$tab[$i];
    }
    sort($t1);sort($t2);
    $t3[0]=$t1;$t3[1]=$t2;
   
    return $t3;
}

$tableau=remplir(1,150);
echo '<br>';
recherche(42,$tableau);
echo '<br>';
function moyenne($t){
    $temp;
    foreach($t as $n)
        $temp+=$n;
    $temp/=count($t);
    echo "moyenne=".$temp;
    }
moyenne($tableau);
$t=trier($tableau);
echo '<br>';
//var_dump($t);
for($int=0;$int<10;$int++)
        echo $t[0][$int].' ';
    echo '<br>';
for($int2=0;$int2<10;$int2++)
        echo $t[1][$int2].' ';

?></p>
<p>
<?php 
echo '<br>';

echo ucwords(strtolower('TransFOrmeZ unE ChaîNE écRITe dans des cASses diFFéreNTes afiN qUe
chAQue MOT ait une inITiale en MAJUSCULE'));
echo '<br>';
echo(htmlspecialchars('<input type="text"
    name="nom" />'));
$char=array(80,72,80,56);
foreach($char as $nb)
    echo chr($nb);
echo '<br>';
$string = 'PHP8';
    for($i=0;$i<strlen($string);$i++){
            echo $string[$i].'<br>';
    }
echo '<br>'; 
$string='exercice5.php';
function getFileInfo($string):array{
    $array= array(substr($string, 0, strpos($string, '.')-1),
               substr($string, strpos($string,'.'),strlen($string))
           );
           return $array;
}
var_dump(getFileInfo($string));
echo '<br>';

$string='Et zut de flute, c\'est vraiment beurk ce truc là';

function censure($string):string{
    $dico=array('flute','beurk','zut');
    $propre='@#!$%';
    $temp=explode(' ', $string);
    for($y=0;$y< count($temp);$y++){
        if(in_array($temp[$y], $dico))
                $temp[$y]=$propre;
        
    }
    return implode(' ',$temp);
}
echo censure($string);echo '<br>';
$languages=['PHP','Java','Python','Perl','C++'];

function reg($array):array{
    $ret=array();
    foreach($array as $language)
       if(preg_match("/P/i", $language))
           $ret[]=$language;
            
    return $ret;
}
var_dump(reg($languages));

echo '<br>';
$date='1975-03-16'; 
function reg2($d):string{
    $fin= substr($d,8);
    preg_replace("[0-9]{4}", $fin, $d);
    
}
function espace($st):string{
    preg_replace("  ",' ',$st);
    echo $st;
    return $st;
}
espace('le PHP est un langage de programmation');

?>