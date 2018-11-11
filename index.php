<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 11/11/2018
 * Time: 18:20
 */
$tab=["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"];
echo $tab[date (  "w", mktime(00,00,00,003,03,1993) )];
?>