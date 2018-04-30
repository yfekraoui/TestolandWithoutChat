<?php 
#################################
# FONCTION XAJAX		
#################################

# Code des fonctions xajax :
function lien($lien)
{
        $reponse = new xajaxResponse();// Création d'une instance de xajaxResponse pour traiter les réponses serveur.
        $chat = '';// Initialisation de la variable $chat.
        $reponse->assign('page', 'innerHTML', $chat);// Enfin, on remplace le contenu du div 'block' par le contenu de $chat
        return $reponse;
}

#---------------------------


require_once('./xajax_core/xajax.inc.php');
$xajax = new xajax();
#Listes des fonctions xajax :

# ---------------------------
$xajax->processRequest();
?>