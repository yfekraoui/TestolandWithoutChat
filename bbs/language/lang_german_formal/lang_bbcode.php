<?php

/***************************************************************************
 *                           lang_bbcode.php [German formal]
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
 *   Manfred Hoffmann, Ingo Köhler, Ingo Migliarina, Christian Wunsch
 * and all others for their comments and suggestions
 * 
 * Release date: 2008-02-19
 ***************************************************************************/

// 
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\";
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//
  
$faq[] = array("--","Einführung");
$faq[] = array("Was ist BBCode?", "BBCode ist eine spezielle Eigenart von HTML. Ob Sie BBCode in Ihren Beiträgen benutzen können, entscheidet allein der Systemadministrator. Zusätzlich können Sie den BBCode auch für einzelne Beiträge abschalten. BBCode ist dem HTML-Stil sehr ähnlich, Tags werden mit den Klammern [ und ] geöffnet und geschlossen. Es gibt Ihnen die Möglichkeit, das Aussehen dessen, was Sie geschrieben haben, deutlich zu verändern. Je nachdem, welchen Style Sie benutzen, finden Sie vielleicht eine Menüliste mit Instand-BBCode bei der Beitragserstellung. Aber auch dann werden Sie die folgende Liste interessant finden.");

$faq[] = array("--","Textformatierung");
$faq[] = array("Wie erstelle ich fetten, unterstrichenen oder kursiven Text?", "BBCode verwendet Tags, die es Ihnen erlauben, das Aussehen Ihres Textes recht einfach zu verändern. Dies geschieht folgendermaßen: <ul><li>Um einen Text fett darzustellen, umschließen Sie ihn mit <b>[b][/b]</b>, z. B. <br /><br /><b>[b]</b>Hallo<b>[/b]</b><br /><br /> wird zu <b>Hallo</b></li><li>Zum Unterstreichen benutzen Sie <b>[u][/u]</b>, zum Beispiel:<br /><br /><b>[u]</b>Guten Morgen<b>[/u]</b><br /><br />wird zu <u>Guten Morgen</u></li><li>Um kursiv zu schreiben, benutzen Sie <b>[i][/i]</b>, z. B.<br /><br />Das ist <b>[i]</b>Toll!<b>[/i]</b><br /><br />würde so aussehen: Das ist <i>Toll!</i></li></ul>");
$faq[] = array("Wie verändere ich die Schriftfarbe oder Größe?", "Um die Farbe oder Größe Ihres Textes zu ändern, können Sie die folgenden Tags benutzen. Bedenken Sie jedoch, dass das Resultat auf den Browser des jeweiligen Benutzers ankommt: <ul><li>Um einen Text in einer bestimmten Farbe darzustellen, umschließen Sie ihn mit <b>[color=][/color]</b>. Sie können entweder einen allgemeinen Farbnamen angeben (z. B. red, blue, yellow, usw.) oder den Hexadezimalcode, z. B. #FFFFFF, #000000. Um beispielsweise einen roten Text zu schreiben, könnten Sie Folgendes schreiben:<br /><br /><b>[color=red]</b>Hallo!<b>[/color]</b><br /><br />oder<br /><br /><b>[color=#FF0000]</b>Hallo!<b>[/color]</b>, <br /><br />beides ergibt <span style=\"color:red\">Hallo!</span></li><li>Das Ändern der Textgröße geschieht ähnlich, benutzen Sie dazu den Tag <b>[size=][/size]</b>. Dieser Tag hängt vom Style ab, das Sie benutzen. Für gewöhnlich wird die Textgröße als Zahlenwert eingegeben, der die Höhe in Pixel angibt, beginnend mit 1 (so klein, Sie werden es kaum sehen) bis zu 29 (riesengroß). Zum Beispiel:<br /><br /><b>[size=9]</b>KLEIN<b>[/size]</b><br /><br />wird grundsätzlich <span style=\"font-size:9px\">KLEIN</span><br /><br />wohingegen:<br /><br /><b>[size=24]</b>RIESIG!<b>[/size]</b><br /><br />zu <span style=\"font-size:24px\">RIESIG!</span> wird.</li></ul>");
$faq[] = array("Kann ich verschiedene Tags kombinieren?", "Natürlich geht das, ein Text, der gesehen werden soll, könnte beispielsweise so aussehen: <br /><br /><b>[size=18][color=red][b]</b>SCHAU MICH AN<b>[/b][/color][/size]</b><br /><br />ergibt <span style=\"color:red;font-size:18px\"><b>SCHAU MICH AN!</b></span><br /><br />Es ist nicht zu empfehlen, größere Mengen Text so aussehen zu lassen! Denken Sie daran, es ist Ihre Aufgabe, dafür zu sorgen, dass alle Tags auch wieder richtig geschlossen werden. Das hier zum Beispiel geht nicht: <br /><br /><b>[b][u]</b>Das ist falsch<b>[/b][/u]</b>");

$faq[] = array("--","Zitate und Code-Angaben");
$faq[] = array("Zitate in Antworten verwenden", "Es gibt zwei Möglichkeiten, einen Text zu zitieren.<ul><li>Wenn Sie die Zitatfunktion zum Antworten auf einen Beitrag verwenden, werden Sie merken, dass der zitierte Text in <b>[quote=\"\"][/quote]</b>-Tags steht. So ist es Ihnen möglich, den Text des Benutzers, oder wo auch immer Sie ihn her haben, wortgetreu wiederzugeben! Ein Beispiel: Um einen Teil des Textes zu zitieren, den Herr Meier geschrieben hat, würden Sie schreiben:<br /><br /><b>[quote=\"Herr Meier\"]</b>Der Text von Herrn Meier würde hier erscheinen<b>[/quote]</b><br /><br />Der Text 'Herr Meier schrieb:' erscheint automatisch vor dem Zitat. Bedenken Sie, dass Sie die Zeichen \"\" um den Autorennamen schreiben <b>müssen</b>, sie dienen nicht nur der Verschönerung.</li><li>Mit der zweiten Möglichkeit erstellen Sie ein blindes Zitat. Um dies durchzuführen, schließen Sie den Text in <b>[quote][/quote]</b>-Tags ein. Wenn Sie sich den Beitrag dann anschauen, wird einfach nur 'Zitat:' vor dem Beitrag angezeigt.</li></ul>");
$faq[] = array("Code-Angaben", "Wenn Sie den Teil eines Codes oder etwas, was einfach eine fixe Länge hat, ausgeben möchten, sollten Sie den Text in <b>[code][/code]</b>-Tags setzen, z. B <br /><br /><b>[code]</b>echo \"Dies ist ein Code\";<b>[/code]</b><br /><br />Alle Formatierungen, die Sie in diesen <b>[code][/code]</b>-Tags verwenden, werden nachher nicht ausgeführt.");

$faq[] = array("--","Listenerstellung");
$faq[] = array("Eine ungeordnete Liste einfügen", "BBCode unterstützt zwei Typen von Listen, geordnete und ungeordnete. Sie sind im Wesentlichen die gleichen Listen wie ihre Gegenstücke in der HTML-Umgebung. Eine ungeordnete Liste zeigt jedes Objekt in der Liste an, alle mit einem Bullet-Symbol davor. Um eine ungeordnete Liste zu erstellen, benutzen Sie die <b>[list][/list]</b>-Tags und geben Sie jeden Punkt innerhalb der Liste an, indem Sie einen <b>[*]</b> nutzen. Um zum Beispiel Ihre Lieblingsfarben aufzuzählen, könnten Sie schreiben:<br /><br /><b>[list]</b><br /><b>[*]</b>Rot<br /><b>[*]</b>Blau<br /><b>[*]</b>Gelb<br /><b>[/list]</b><br /><br />Das würde folgende Liste ergeben: <ul><li>Rot</li><li>Blau</li><li>Gelb</li></ul>");
$faq[] = array("Eine geordnete Liste einfügen", "Die zweite Listenart, die geordnete Liste, gibt Ihnen die Möglichkeit, anzugeben, was vor jedem Punkt steht. Um eine geordnete Liste zu erstellen, benutzen Sie den <b>[list=1][/list]</b>-Tag, um eine nummerierte Liste zu erstellen, oder alternativ <b>[list=a][/list]</b> für eine alphabetische Liste. Genau wie der bei ungeordneten Liste werden die Punkte mit dem <b>[*]</b> spezifiziert. Zum Beispiel:<br /><br /><b>[list=1]</b><br /><b>[*]</b>In den Laden gehen<br /><b>[*]</b>Einen neuen Computer kaufen<br /><b>[*]</b>Den Computer verfluchen, wenn er nicht mehr geht<br /><b>[/list]</b><br /><br />ergibt das Folgende:<ol type=\"1\"><li>In den Laden gehen</li><li>Einen neuen Computer kaufen</li><li>Den Computer verfluchen, wenn er nicht mehr geht</li></ol>Für eine alphabetische Liste wiederum würden Sie das Folgende eingeben:<br /><br /><b>[list=a]</b><br /><b>[*]</b>Die erste Möglichkeit<br /><b>[*]</b>Die zweite Möglichkeit<br /><b>[*]</b>Die dritte Möglichkeit<br /><b>[/list]</b><br /><br />was<ol type=\"a\"><li>Die erste Möglichkeit</li><li>Die zweite Möglichkeit</li><li>Die dritte Möglichkeit</li>ergibt</ol>");

$faq[] = array("--", "Links erstellen");
$faq[] = array("Das Linken zu einer Site", "phpBB BBCode unterstützt eine Menge verschiedener Möglichkeiten, wie man Internet-Adressen (URLs) einfügen kann.<ul><li>Die erste Möglichkeit ist die Verwendung des<b>[url=][/url]</b>-Tag. Was auch immer Sie hinter das = Zeichen schreiben, wird als Inhalt der URL gewertet. Ein Beispiel: einen Link zu phpBB.com erstellen Sie so:<br /><br /><b>[url=http://www.phpbb.com/]</b>Besucht phpBB!<b>[/url]</b><br /><br />Das würde den folgenden Link erstellen: <a href=\"http://www.phpbb.com/\" target=\"_blank\">Besucht phpBB!</a>. Sie werden bemerken, dass sich der Link in einem neuen Fenster öffnet, so dass der Benutzer weiter im Forum surfen kann, sofern er dies wünscht.</li><li>Falls Sie möchten, dass die URL automatisch als Link angezeigt wird, könnn Sie das folgendermaßen schreiben:<br /><br /><b>[url]</b>http://www.phpbb.com/<b>[/url]</b><br /><br />Dies wird den folgenden Link erzeugen: <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Zusätzlich verfügt phpBB über die so genannten <i>Magic Links</i>, was automatisch korrekt angegebene URLs in Links umwandelt, ohne dass Sie Tags schreiben müssen. Wenn Sie zum Beispiel www.phpbb.com in einen Beitrag schreiben, wird daraus automatisch <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a>, wenn jemand die Nachricht liest.</li><li>Dies funktioniert übrigens auch mit E Mail-Adressen, Sie können entweder eine Adresse gesondert eingeben, z. B.:<br /><br /><b>[email]</b>webmaster@phpbb.com<b>[/email]</b><br /><br />was das Folgende ergibt <a href=\"mailto:webmaster@phpbb.com\">webmaster@phpbb.com</a> oder Sie schreiben einfach webmaster@phpbb.com in Ihren Beitrag und es wird automatisch in einen Link umgewandelt.</li></ul>Wie die meisten anderen BBCode-Tags, können Sie auch den URL-Tag mit anderen Tags kombinieren, z. B. <b>[img][/img]</b> (siehe nächsten Punkt), <b>[b][/b]</b>, usw. Es ist wie immer Ihre Aufgabe, dass alle geöffneten Tags auch wieder richtig geschlossen werden, z. B.<br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/url][/img]</b><br /><br />ist <u>nicht</u> richtig und wird einen Fehler in Ihrem Beitrag auslösen.");

$faq[] = array("--", "Bilder in Beiträgen anzeigen");
$faq[] = array("Ein Bild einfügen", "Der phpBB BBCode unterstützt ebenfalls das Einfügen von Bildern in Beiträgen. Es gibt zwei wichtige Regeln, was das Anzeigen von Bildern betrifft: Die meisten User finden es einfach furchtbar, wenn endlos Bilder in den Beiträgen stehen (Stichwort Ladezeiten) und zum anderen muss das Bild bereits irgendwo im Internet hochgeladen sein (es bringt also nichts, wenn die Datei nur auf Ihrer Festplatte liegt, sofern Sie keinen Webserver haben!). Momentan gibt es noch keine Möglichkeit, Bilder mit Hilfe von phpBB lokal zu speichern (das könnte sich mit der nächsten Version von phpBB 2 natürlich ändern). Um ein Bild anzuzeigen, muss die URL des Bildes mit den <b>[img][/img]</b>-Tags umschlossen werden. Zum Beispiel:<br /><br /><b>[img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img]</b><br /><br />Wie bei der URL-Erklärung bereits erwähnt, können Sie Bilder in <b>[url][/url]</b>-Tags einschließen, wenn Sie möchten, z. B. <br /><br /><b>[url=http://www.phpbb.com/][img]</b>http://www.phpbb.com/images/phplogo.gif<b>[/img][/url]</b><br /><br />würde Folgendes ergeben:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"templates/subSilver/images/logo_phpBB_med.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Andere Codes");
$faq[] = array("Kann ich meine eigenen Tags hinzufügen?", "Nein, nicht mit phpBB 2.0 direkt! Wir versuchen, eine Möglichkeit dafür zu finden und diese mit dem nächsten Main-Release von phpBB anzubieten.");

//
// This ends the BBCode guide entries
//

?>