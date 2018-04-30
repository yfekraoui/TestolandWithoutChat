<?php

/***************************************************************************
 *                          lang_faq.php [German formal]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/***************************************************************************
 * German translation by the translation team of phpBB.de:
 *   http://www.phpbb.de/groupcp.php?g=13086
 * Team Lead: Philipp Kordowich (PhilippK [at] phpbb.de)
 * Special Thanks to:
 *   Joel Ricardo Zick (Rici)
 *   Manfred Hoffmann, Ingo K�hler, Ingo Migliarina, Christian Wunsch
 * and all others for their comments and suggestions
 * 
 * Release date: 2008-02-19
 ***************************************************************************/

// 
// To add an entry to your FAQ simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your FAQ entries, if you absolutely must then escape them ie. \"something\";
//
// The FAQ items will appear on the FAQ page in the same order they are listed in this file
//


$faq[] = array("--","Registrieren und Einloggen");
$faq[] = array("Warum kann ich mich nicht einloggen?", "Haben Sie sich registriert? Sie m�ssen sich erst registrieren, bevor Sie sich einloggen k�nnen. Wurden Sie vom Board gebannt (in diesem Fall erhalten Sie eine Nachricht)? Wenn dem so ist, sollten Sie den Webmaster oder den Forumsadministrator kontaktieren, um herauszufinden, warum Sie gebannt wurden. Falls Sie registriert und nicht gebannt sind und sich immer noch nicht einloggen k�nnen, dann �berpr�fen Sie Ihren Benutzernamen und das Passwort. Normalerweise liegt hier der Fehler. Falls nicht, kontaktieren Sie bitte den Forumsadministrator; es k�nnte eine fehlerhafte Forumskonfiguration vorliegen.");
$faq[] = array("Warum muss ich mich �berhaupt registrieren?", "Es kann auch sein, dass Sie das gar nicht m�ssen; das ist die Entscheidung des Administrators. Auf jeden Fall erhalten Sie nach der Registrierung zus�tzliche Funktionen, die G�ste nicht haben, z. B. Avatare, Private Nachrichten, Eintritt in Usergruppen, usw. Es ben�tigt nur wenig Zeit, um sich zu registrieren. Sie sollten es also gleich tun.");
$faq[] = array("Warum werde ich automatisch abgemeldet?", "Sollten Sie die Funktion <i>Automatisch einloggen</i> beim Einloggen nicht aktiviert haben, bleiben Sie nur f�r eine gewisse Zeit eingeloggt. Dadurch wird ein Missbrauch Ihres Accounts verhindert. Um eingeloggt zu bleiben, w�hlen Sie bitte die entsprechende Option beim Einloggen. Dies ist nicht empfehlenswert, wenn Sie an einem fremden Rechner sitzen, z. B. in einer B�cherei oder Universit�t, im Internetcaf� usw.");
$faq[] = array("Wie kann ich verhindern, dass mein Name in der 'Wer ist online?'-Liste auftaucht?", "In Ihrem Profil befindet sich die Option <i>Online-Status verstecken</i>, und wenn Sie diese aktivieren, k�nnen Sie nur noch von Administratoren in der Liste gesehen werden. Sie z�hlen dann als versteckter User.");
$faq[] = array("Ich habe mein Passwort verloren!", "Kein Problem! Sie k�nnen ein neues Passwort anfordern. Klicken Sie dazu auf der Loginseite auf <u>Ich habe mein Passwort vergessen</u>. Folgen Sie den Anweisungen und Sie sollten sich bald wieder einloggen k�nnen.");
$faq[] = array("Ich habe mich registriert, kann mich aber nicht einloggen!", "�berpr�fen Sie erst, ob Sie den richtigen Benutzernamen und/oder Passwort angegeben haben. Falls sie stimmen, gibt es zwei m�gliche Ursachen: Wenn die COPPA-Bestimmungen aktiviert sind und Sie die Option <u>Ich bin unter 12 Jahre alt</u> beim Registrieren gew�hlt haben, m�ssen Sie den erhaltenen Anweisungen folgen. Falls dies nicht der Fall ist, braucht Ihr Account eine Aktivierung. Auf einigen Boards muss eine Registrierung immer erst aktiviert werden, bevor Sie sich einloggen k�nnen - entweder durch Sie selbst oder durch einen Administrator. Bei der Registrierung wird Ihnen gesagt, ob eine Aktivierung erforderlich ist. Falls Ihnen eine E-Mail zugesandt wurde, folgen Sie bitte den enthaltenen Anweisungen; falls Sie diese E-Mail nicht erhalten haben, vergewissern Sie sich bitte, dass die E-Mail-Adresse korrekt war. Ein Grund f�r den Gebrauch der Account-Aktivierungen ist die Verhinderung eines Missbrauchs des Forums. Wenn Sie sich sicher sind, dass die angegebene E-Mail-Adresse richtig ist, kontaktiere Sie bitte den Administrator.");
$faq[] = array("Ich habe mich vor einiger Zeit registriert, kann mich aber nicht mehr einloggen!", "Die Gr�nde daf�r sind meistens, dass Sie entweder einen falschen Benutzernamen oder ein falsches Passwort eingegeben haben (�berpr�fen Sie die E-Mail, die Sie vom Board bekommen haben) oder der Administrator hat Ihren Account gel�scht. Falls Letzteres der Fall ist, haben Sie vielleicht mit dem Account noch keinen Beitrag erstellt? Es ist durchaus �blich, dass Foren regelm��ig User l�schen, die keine Beitr�ge erstellt haben, um die Gr��e der Datenbank zu verringern. Versuche Sie sich erneut zu registrieren und tauchen Sie wieder in die Welt der Diskussionen ein.");


$faq[] = array("--","Benutzerangaben und Einstellungen");
$faq[] = array("Wie �ndere ich meine Einstellungen?", "Ihre Einstellungen (sofern Sie registriert sind) werden in der Datenbank gespeichert. Klicken Sie auf den <u>Profil</u>-Link, um sie zu �ndern (der Link wird normalerweise am oberen Bildschirmrand angezeigt, dies h�ngt aber vom verwendeten Style ab). Damit k�nnen Sie Ihre Einstellungen �ndern");
$faq[] = array("Die Zeiten stimmen nicht!", "Die Zeiten stimmen wahrscheinlich schon, vermutlich haben Sie nur die Zeitzone nicht richtig eingestellt. Falls dem so ist, sollten Sie die Einstellungen Ihres Profils �berpr�fen, um die Zeitzone, die f�r Sie zutreffend ist, zu w�hlen. Bitte beachten Sie, dass Sie die Zeitzone nur wechseln k�nnen, wenn Sie ein registriertes Mitglied sind. Falls Sie noch nicht registriert sind, w�re dies vielleicht ein guter Grund dazu.");
$faq[] = array("Ich habe die Zeitzone gewechselt und die Zeit ist immer noch falsch!", "Wenn Sie sich sicher sind, die richtige Zeitzone gew�hlt zu haben und die Zeiten immer noch nicht stimmen, kann es daran liegen, dass das System auf Sommerzeit steht. Das Board ist nicht dazu geschaffen worden, um zwischen Winter- und Sommerzeit zu wechseln, daher kann es im Sommer zu einer Stunde Differenz zwischen der von Ihnen gew�hlten und der Boardzeit kommen.");
$faq[] = array("Meine Sprache ist nicht verf�gbar!", "Der wahrscheinlichste Grund daf�r ist, dass der Administrator die Sprache nicht installiert hat oder dass das Board noch nicht in Ihre Sprache �bersetzt wurde. Versuchen Sie, den Board-Administrator davon zu �berzeugen, Ihre Sprach-Datei zu installieren oder, falls diese nicht existiert, k�nnen Sie auch gerne selber eine �bersetzung schreiben. Weitere Informationen erhalten Sie auf der Website der phpBB Group (Der Link befindet sich am Ende jeder Seite)");
$faq[] = array("Wie kann ich ein Bild unter meinem Benutzernamen anzeigen?", "Es k�nnen sich zwei Bilder unter dem Benutzernamen befinden. Das erste geh�rt zu Ihrem Rang, z. B. Punkte oder Sterne, die anzeigen, wie viele Beitr�ge Sie geschrieben haben oder welchen Status Sie im Forum haben. Darunter befindet sich meist ein gr��eres Bild, Avatar genannt. Dies ist normalerweise ein Einzelst�ck und an den Benutzer gebunden. Es liegt am Administrator, ob er Avatare erlaubt und ob die Benutzer w�hlen d�rfen, wie sie ihren Avatar zug�nglich machen. Wenn Sie keine Avatare benutzen k�nnen, ist das eine Entscheidung des Administrators. Sie sollten ihn nach dem Grund fragen (Er wird bestimmt einen guten haben).");
$faq[] = array("Wie kann ich meinen Rang �ndern?", "Normalerweise k�nnen Sie nicht direkt den Wortlaut des Ranges �ndern (R�nge erscheinen unter deinem Benutzernamen in Themen und in deinem Profil, abh�ngig davon, welchen Style Sie benutzen). Die meisten Boards benutzen R�nge, um anzuzeigen, wie viele Beitr�ge geschrieben wurden und bestimmte Benutzer, z. B. Moderatoren oder Administratoren, k�nnten einen speziellen Rang haben. Bitte bel�stigen Sie die Mitglieder des Forums nicht mit unn�tigen Beitr�gen, nur um Ihren Rang zu erh�hen, sonst werden Sie auf einen Moderator oder Administrator treffen, der Ihren Rang einfach wieder senkt.");
$faq[] = array("Wenn ich auf den E-Mail-Link eines Benutzers klicke, werde ich aufgefordert, mich einzuloggen!", "Nur registrierte Benutzer k�nnen �ber das Forum E-Mails verschicken (falls der Administrator diese Funktion aktiviert hat). Damit sollen obsz�ne Mails von unbekannten Benutzern unterbunden werden.");


$faq[] = array("--","Beitr�ge schreiben");
$faq[] = array("Wie schreibe ich ein Thema in ein Forum?", "Klicken Sie dazu einfach auf den entsprechenden Button auf der Forums- oder Beitragsseite. Es kann sein, dass Sie sich erst registrieren m�ssen, bevor Sie eine Nachricht schreiben k�nnen - die jeweils zul�ssigen Aktionen werden am Ende der Seite aufgelistet (die <i>Sie k�nnen neue Themen erstellen, Sie k�nnen an Umfragen teilnehmen, usw.</i>-Liste)");
$faq[] = array("Wie editiere oder l�sche ich einen Beitrag?", "Sofern Sie nicht der Boardadministrator oder der Forumsmoderator sind, k�nnen Sie nur Ihre eigenen Beitr�ge l�schen oder editieren. Sie k�nnen einen Beitrag editieren (eventuell nur f�r eine gewisse Zeit) indem Sie auf den <i>Editieren</i>-Button des jeweiligen Beitrages klicken. Sollte jemand bereits auf den Beitrag geantwortet haben, werden Sie einen kleinen Text unterhalb des Beitrags finden k�nnen, der anzeigt, wie oft der Text bearbeitet wurde. Er wird nur erscheinen, wenn jemand geantwortet hat, ferner wird er nicht erscheinen, falls ein Moderator oder Administrator den Beitrag editiert hat (Sie sollten eine Nachricht hinterlassen, warum sie den Beitrag editiert haben). Beachten Sie bitte, dass normale Benutzer keine Beitr�ge l�schen k�nnen, sobald jemand auf sie geantwortet hat.");
$faq[] = array("Wie kann ich eine Signatur anh�ngen?", "Um eine Signatur an einen Beitrag anzuh�ngen, m�ssen Sie zuerst in Ihrem Profil eine anlegen. Wenn Sie eine Signatur erstellt haben, aktivieren Sie die <i>Signatur anh�ngen</i>-Funktion w�hrend der Beitragserstellung. Sie k�nnen auch standardm��ig eine Signatur an alle Beitr�ge anh�ngen, indem Sie im Profil die entsprechende Option ausw�hlen (Sie k�nnen das Anf�gen einer Signatur immer noch unterbinden, indem Sie die Signaturoption beim Schreiben des Beitrags ausschalten).");
$faq[] = array("Wie erstelle ich eine Umfrage?", "Eine Umfrage zu erstellen ist recht einfach: Wenn Sie ein neues Thema erstellen (oder den ersten Beitrag eines Themas editieren, sofern Sie die entsprechende Berechtigung haben), sollten Sie die <i>Umfrage hinzuf�gen</i>-Option unterhalb der Textbox sehen (falls Sie sie nicht sehen k�nnen, haben Sie m�glicherweise nicht die erforderlichen Rechte). Sie sollten einen Titel f�r Ihre Umfrage angeben und mindestens zwei Antwortm�glichkeiten (um eine Antwort anzugeben, klicken Sie bitte auf die <i>Antwort hinzuf�gen</i>-Schaltfl�che. Sie k�nnen auch ein Zeitlimit f�r die Umfrage festlegen, 0 steht dabei f�r eine unbegrenzt dauernde Umfrage. Es gibt eine Grenze bei der Anzahl an Antwortoptionen, diese wird vom Administrator festgelegt.");
$faq[] = array("Wie editiere oder l�sche ich eine Umfrage?", "Genau wie bei den Beitr�gen k�nnen Umfragen nur vom Verfasser, Forumsmoderator oder Administrator editiert oder gel�scht werden. Um eine Umfrage zu �ndern, editieren Sie bitte den ersten Beitrag im Thema (die Umfrage ist immer damit verbunden). Wenn noch niemand bei der Umfrage teilgenommen hat, k�nnen Benutzer die Umfrage editieren oder l�schen; falls jedoch schon jemand abgestimmt hat, k�nnen sie nur Moderatoren oder Administratoren l�schen oder �ndern. Damit soll verhindert werden, dass Personen ihre Umfragen beeinflussen, indem sie die Antworten ver�ndern.");
$faq[] = array("Warum kann ich ein Forum nicht betreten?", "Manche Foren k�nnen nur von bestimmten Benutzern oder Gruppen betreten werden. Um dort hineinzugelangen, Beitr�ge zu lesen oder zu schreiben usw., k�nnten Sie eine spezielle Erlaubnis ben�tigen. Nur der Forumsmoderator und der Boardadministrator k�nnen Ihnen entsprechende Zugangsrechte  geben; Sie sollten sie um Zugang bitten, sofern Sie einen berechtigten Grund daf�r haben.");
$faq[] = array("Warum kann ich bei Abstimmungen nicht teilnehmen?", "Nur registrierte Benutzer k�nnen an Umfragen teilnehmen. Dadurch wird eine Beeinflussung des Ergebnisses verhindert. Falls Sie sich registriert haben und immer noch nicht abstimmen k�nnen, haben Sie vermutlich nicht die erforderlichen Rechte dazu.");


$faq[] = array("--","Was man in und mit Beitr�gen tun kann");
$faq[] = array("Was ist BBCode?", "BBCode ist eine spezielle Art von HTML. Ob Sie BBCode benutzen k�nnen, wird vom Administrator festgelegt. Sie k�nnen es auch in einzelnen Beitr�gen deaktivieren. BBCode selbst ist HTML sehr �hnlich, die Tags sind von den Klammern [ und ] umschlossen und bieten Ihnen gro�e Kontrolle dar�ber, was und wie etwas angezeigt wird. F�r weitere Informationen �ber BBCode sollten Sie die Anleitung lesen, die Sie von der Beitrag schreiben-Seite aus erreichen k�nnen.");
$faq[] = array("Darf ich HTML benutzen?", "Das h�ngt davon ab, ob es vom Administrator erlaubt wurde. Falls Sie es nicht d�rfen, werden Sie nachher nur ein Klammer-Wirrwarr wieder finden. Dies ist eine <i>Sicherung</i>, um Leute davon abzuhalten, das Forum mit unn�tigen Tags zu �berschwemmen, die das Layout zerst�ren oder andere St�rungen hervorrufen k�nnen. Falls HTML aktiviert wurde, k�nnen Sie es immer noch manuell f�r jeden Beitrag deaktivieren, indem Sie beim Schreiben die entsprechende Option aktivieren.");
$faq[] = array("Was sind Smilies?", "Smilies sind kleine Bilder, die benutzt werden k�nnen, um Gef�hle auszudr�cken. Es werden nur kurze Codes ben�tigt, z. B. zeigt :) Freude und :( Traurigkeit an. Die komplette Liste der Smilies kann auf der Beitrag schreiben-Seite gesehen werden. �bertreiben Sie es nicht mit zu vielen Smilies; es kann schnell passieren, dass ein Beitrag dadurch v�llig un�bersichtlich wird. Ein Moderator k�nnte sich entschlie�en, den Beitrag zu bearbeiten oder sogar komplett zu l�schen.");
$faq[] = array("Darf ich Bilder einf�gen?", "Bilder k�nnen tats�chlich im Beitrag angezeigt werden. Allerdings gibt es noch keine M�glichkeit, Bilder direkt auf das Board hochzuladen. Deshalb m�ssen Sie zu einem bestehenden Bild verlinken, welches sich auf einem f�r die �ffentlichkeit zug�nglichen Server befindet. Z. B. http://www.meineseite.de/meinbild.gif. Sie k�nnen weder zu Bildern linken, die sich auf Ihrer Festplatte befinden (au�er es handelt sich um einen �ffentlich verf�gbaren Server) noch zu Bildern, die einen speziellen Zugang brauchen, um sie anzuzeigen (z. B. E-Mail-Konten, Passwort-gesch�tzte Seiten usw). Um das Bild anzuzeigen, benutzen Sie entweder den BB-Code [img] oder HMTL (sofern erlaubt).");
$faq[] = array("Was sind Ank�ndigungen?", "Ank�ndigungen beinhalten meistens wichtige Informationen, und Sie sollten sie so fr�h wie m�glich lesen. Ank�ndigungen erscheinen immer am Anfang des jeweiligen Forums. Ob Sie eine Ank�ndigung erstellen k�nnen oder nicht, h�ngt davon ab, was f�r Befugnisse eingestellt wurden. Diese legt der Board-Administrator fest.");
$faq[] = array("Was sind Wichtige Themen?", "Wichtige Themen erscheinen unterhalb der Ank�ndigungen in der Forumsansicht. Sie enthalten auch meistens wichtige Informationen, die Sie gelesen haben sollten. Genau wie mit den Ank�ndigungen entscheidet auch bei den Wichtigen Themen der Administrator, wer sie erstellen darf.");
$faq[] = array("Was sind geschlossene Themen?", "Themen werden entweder vom Forumsmoderator oder dem Board-Administrator geschlossen. Man kann auf geschlossene Beitr�ge nicht antworten. Falls eine Umfrage angef�gt wurde, wird diese damit auch beendet. Es gibt verschiedene Gr�nde, warum ein Thema geschlossen wird.");


##End Check##
$faq[] = array("--","Benutzerebenen und Gruppen");
$faq[] = array("Was sind Administratoren?", "Administratoren haben die h�chste Kontrollebene im gesamten Forum. Sie haben das Recht, jede Forumsaktion zu unterbinden und spezielle Aktionen durchzuf�hren, wie die Vergabe von Befugnissen, das Bannen von Benutzern, Benutzergruppen erstellen, Moderatoren ernennen usw. Sie haben au�erdem in jedem Forum die vollen Moderatorenrechte.");
$faq[] = array("Was sind Moderatoren?", "Moderatoren sind Personen (oder Gruppen), die auf das t�gliche Geschehen in dem jeweiligen Forum achten. Sie haben die M�glichkeit, Beitr�ge zu editieren und zu l�schen, Themen zu schlie�en, zu �ffnen, zu verschieben oder zu l�schen. Moderatoren haben die Aufgabe, Benutzer davon abzuhalten, unpassende Themen in einen Beitrag zu schreiben oder sonstigen Bl�dsinn in das Forum zu setzen.");
$faq[] = array("Was sind Benutzergruppen?", "In Benutzergruppen werden einige Benutzer vom Administrator zusammengefasst. Jeder Benutzer kann zu mehreren Gruppen geh�ren und jeder Gruppe k�nnen spezielle Zugangsrechte erteilt werden. So ist es f�r den Administrator einfacher, mehrere Benutzer zu Moderatoren eines bestimmten Forums zu machen, ihnen Rechte f�r ein privates Forum zu geben und so weiter.");
$faq[] = array("Wie kann ich einer Benutzergruppe beitreten?", "Um einer Benutzergruppe beizutreten, klicken Sie auf den Benutzergruppen-Link im Men�. Sie erhalten dann einen �berblick �ber alle Benutzergruppen. Nicht alle Gruppen haben <i>offenen Zugang</i>, manche sind geschlossen und andere k�nnten versteckt sein. Falls die Gruppe neue Mitglieder zul�sst, k�nnen Sie eine Mitgliedschaft beantragen, indem Sie auf den Beitreten-Button klicken. Der Gruppenmoderator muss noch seine Zustimmung geben; eventuell gibt es R�ckfragen, warum Sie der Gruppe beitreten m�chten. Bitte bel�stigen Sie die Gruppenmoderatoren nicht, nur weil sie Sie nicht in die Gruppe aufnehmen wollen. Sie werden ihre Gr�nde haben.");
$faq[] = array("Wie werde ich ein Gruppenmoderator?", "Benutzergruppen werden vom Board-Administrator erstellt, er bestimmt ebenfalls den Moderator. Falls Sie daran interessiert sind, eine Benutzergruppe zu erstellen, sollten Sie zuerst den Administrator kontaktieren, zum Beispiel mit einer Privaten Nachricht.");


$faq[] = array("--","Private Nachrichten");
$faq[] = array("Ich kann keine Privaten Nachrichten verschicken!", "Es gibt drei m�gliche Gr�nde daf�r: Sie sind nicht registriert bzw. eingeloggt, der Board-Administrator hat das Private Nachrichten-System f�r das gesamte Board abgeschaltet oder der Administrator hat Ihnen das Schreiben von Privaten Nachrichten untersagt. Falls das letztere zutreffen sollte, sollten Sie ihn fragen, warum.");
$faq[] = array("Ich erhalte dauernd ungewollte Private Nachrichten!", "In sp�teren Versionen wird es ein Ignorieren-System f�r Private Nachrichten geben. Im Moment m�ssen Sie, falls Sie ununterbrochen unerw�nschte Nachrichten von einer Person erhalten, den Administrator informieren. Er kann das Versenden von Privaten Nachrichten durch den jeweiligen Benutzer unterbinden.");
$faq[] = array("Ich habe eine Spam- oder perverse E-Mail von jemandem auf diesem Board erhalten!", "Das E-Mail-System dieses Boards enth�lt Sicherheitsvorkehrungen, um solche Aktionen eines Benutzers zu verhindern. Sie sollten dem Board-Administrator eine Kopie der erhaltenen E-Mail schicken; wichtig dabei ist, dass die Kopfzeilen angef�gt bleiben (die Details �ber den Benutzer, der die E-Mail schickte). Erst dann kann er handeln.");

//
// DIE DREI UNTEN STEHENDEN FRAGEN DER FAQ SOLLEN UN�BERSETZT BLEIBEN, DA ES SICH UM INTERNATIONALES RECHT HANDELT - LASST DIE DREI EINTR�GE BITTE ENGLISCH!
//
$faq[] = array("--","phpBB 2 Issues");
$faq[] = array("Who wrote this bulletin board?", "This software (in its unmodified form) is produced, released and is copyright  <a href=\"http://www.phpbb.com/\" target=\"_blank\">phpBB Group</a>. It is made available under the GNU General Public Licence and may be freely distributed, see link for more details");
$faq[] = array("Why isn't X feature available?", "This software was written by and licensed through phpBB Group. If you believe a feature needs to be added then please visit the phpbb.com website and see what phpBB Group have to say. Please do not post feature requests to the board at phpbb.com, the Group uses sourceforge to handle tasking of new features. Please read through the forums and see what, if any, our position may already be for a feature and then follow the procedure given there.");
$faq[] = array("Who do I contact about abusive and/or legal matters related to this board?", "You should contact the administrator of this board. If you cannot find who this you should first contact one of the forum moderators and ask them who you should in turn contact. If still get no response you should contact the owner of the domain (do a whois lookup) or, if this is running on a free service (e.g. yahoo, free.fr, f2s.com, etc.), the management or abuse department of that service. Please note that phpBB Group has absolutely no control and cannot in any way be held liable over how, where or by whom this board is used. It is absolutely pointless contacting phpBB Group in relation to any legal (cease and desist, liable, defamatory comment, etc.) matter not directly related to the phpbb.com website or the discrete software of phpBB itself. If you do email phpBB Group about any third party use of this software then you should expect a terse response or no response at all.");

//
// This ends the FAQ entries
//

?>