<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Home</title>
</head>	
<body>
	<?php $maVariable="Ma SUPER page";?>
	   <h1><?php echo($maVariable);?></h1> 
	
		<p>
			<?php echo "Le petit pinguin pensait \"j'ai froid sur cette banquise !\"";?>
		</p>
		<span><?php print 'C\'est évident qu\'un "animal" n\'aurait pas 
		pu faire ça...';?></span>
		<p><?="J'ai appris un truc !"?></p>
		<?php $i=1;$j=2;$k=3;
		const PHRASE="Je suis le paragraphe ";?>
		<p><?=PHRASE.$i."."; ?></p>
		<p><?="";?></p>
		<?php $a=0;$b=false;$c="";$d=0x00;$e=FALSE;$f=$e;?>	
		<p>Je suis la variable :<?="\$a, mon type est: ".gettype($a).". Ma valeur est ".$a;?></p>
		<p>Je suis la variable :<?="\$d, mon type est: ".gettype($d).". Ma valeur est ".$d;?></p>
		<p>Je suis la variable :<?="\$b, mon type est: ".gettype($e),". Ma valeur est ",var_dump($e);?></p>
		<?php $x ="14 personnes"; $y= (int)$x;echo $y;const T=1;T+10;echo T;?>	
<p>
<?php 
function lire($nomFichier):array{
    return  $lignes = file($nomFichier);
}
?>
<div>
<link rel="stylesheet" href="style.css">
	<table>
		<thead>
			<tr><th>Nom</th><th>Prénom</th><th>Email</th></tr>
		</thead>
		<tbody>
			<?php $lignes =lire('contact.txt');?>
			<?php foreach($lignes as $ligne):?>
			<?php list($nom,$prenom,$email)=explode(':',$ligne);?>
				<tr><td><?=$nom ?></td>
					<td><?=$prenom ?></td>
					<td><?=$email ?></td>
				</tr>
			<?php endforeach;?>
		</tbody>
	</table>
</div>

</p>
</body>
</html>