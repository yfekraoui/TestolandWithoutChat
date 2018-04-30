<?php

/***************************************************************************
 *                            lang_admin.php [Danish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     DK lang_admin.php 1.37.6.0 2006/04/17 01:23:45 AlleyKat
 *
 *     $Id$
 *
 ****************************************************************************/
/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; version 2 of the License.
 *
 ***************************************************************************/

/* CONTRIBUTORS
    Translation done by Ken Christensen (Dalixam) 2.0.4
    Updates, overhauls to 2.0.20 by AlleyKat & users from http://phpbb2.dk
	*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Generel admin.';
$lang['Users'] = 'Brugeradmin.';
$lang['Groups'] = 'Gruppeadmin.';
$lang['Forums'] = 'Forumadmin.';
$lang['Styles'] = 'Layoutadmin.';

$lang['Configuration'] = 'Konfiguration';
$lang['Permissions'] = 'Tilladelser';
$lang['Manage'] = 'Redigering';
$lang['Disallow'] = 'Forbyd bestemte navne';
$lang['Prune'] = 'Besk�r';
$lang['Mass_Email'] = 'Gruppe-email';
$lang['Ranks'] = 'Rang';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Forbyd-kontrol';
$lang['Word_Censor'] = 'Ordcensur';
$lang['Export'] = 'Eksport�r';
$lang['Create_new'] = 'Opret';
$lang['Add_new'] = 'Tilf�j';
$lang['Backup_DB'] = 'Backup database';
$lang['Restore_DB'] = 'Genopret database';


//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'Du er ikke autoriseret til at redigere dette forum';
$lang['Welcome_phpBB'] = 'Velkommen til phpBB';
$lang['Admin_intro'] = 'Tak fordi du valgte phpBB som dit forum. Denne side vil give dig et hurtigt overblik over alle de forskellige statistikker, der er tilg�ngelige for dit forum. Du kan komme tilbage til denne side ved at klikke p� <u>Administrationsindeks</u> linket i venstre side. For at vende tilbage til dit forums indeksside kan du klikke p� linket eller phpBB logoet, der ogs� befinder sig i venstre side. De andre links i venstre side lader dig kontrollere og redigere hver eneste aspekt af dit forum; hver enkelt side indeholder instruktioner om, hvordan du bruger de forskellige v�rkt�jer.';
$lang['Main_index'] = 'Forumindeks';
$lang['Forum_stats'] = 'Forumstatistikker';
$lang['Admin_Index'] = 'Administrationsindeks';
$lang['Preview_forum'] = 'Smugkig p� forummet';

$lang['Click_return_admin_index'] = 'Klik %sher%s for at vende tilbage til Administrationsindekset';

$lang['Statistic'] = 'Statistikker';
$lang['Value'] = 'V�rdi';
$lang['Number_posts'] = 'Antal indl�g';
$lang['Posts_per_day'] = 'Indl�g pr. dag';
$lang['Number_topics'] = 'Antal emner';
$lang['Topics_per_day'] = 'Emner pr. dag';
$lang['Number_users'] = 'Antal brugere';
$lang['Users_per_day'] = 'Brugere pr. dag';
$lang['Board_started'] = 'Forum oprettelse';
$lang['Avatar_dir_size'] = 'Avatar-bibliotekets st�rrelse';
$lang['Database_size'] = 'Database-st�rrelse';
$lang['Gzip_compression'] ='Gzip-komprimering';
$lang['Not_available'] = 'Ikke tilg�ngelig';

$lang['ON'] = 'Sl�et til'; // Dette er for GZip komprimering
$lang['OFF'] = 'Sl�et fra'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Database-v�rkt�jer';

$lang['Restore'] = 'Genopret';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Dette vil genoprette alle phpBB-tabeller fra en gemt fil. Hvis din server underst�tter det, kan du uploade en gzip-komprimeret tekstfil og s� bliver den automatisk dekomprimeret. <b>ADVARSEL</b> Dette vil overskrive alle eksisterende data. Genoprettelsen kan tage lang tid at udf�re, forlad venligst ikke denne side f�r den er fuldf�rt.';
$lang['Backup_explain'] = 'Her kan du lave en backup af alle dine data, der relaterer til phpBB. Hvis du har andre tabeller i din database, som du ogs� �nsker at lave en backup af, skal du indtaste deres navne adskilt af kommaer i Yderligere Tabeller-feltet herunder. Hvis din server underst�tter det, kan du gzip-komprimere filen f�r du downloader den for at reducere dens st�rrelse.';

$lang['Backup_options'] = 'Backupindstillinger';
$lang['Start_backup'] = 'Start backup';
$lang['Full_backup'] = 'Fuld backup';
$lang['Structure_backup'] = 'Kun Struktur-backup';
$lang['Data_backup'] = 'Kun Data-backup';
$lang['Additional_tables'] = 'Yderligere Tabeller';
$lang['Gzip_compress'] = 'Gzip-komprim�r fil';
$lang['Select_file'] = 'V�lg en fil';
$lang['Start_Restore'] = 'Start Genopret';

$lang['Restore_success'] = 'Databasen er blevet korrekt genoprettet.<br /><br />Dit forum skulle nu v�re i den tilstand, det var, da backuppen blev foretaget';
$lang['Backup_download'] = 'Din download vil begynde om kort tid, vent venligst til den begynder';
$lang['Backups_not_supported'] = 'Beklager, backups af databaser fra dit database-system underst�ttes p� nuv�rende tidspunkt ikke';

$lang['Restore_Error_uploading'] = 'Der skete en fejl under upload af backup-filen';
$lang['Restore_Error_filename'] = 'Der er et problem med filens navn, pr�v venligst med en alternativ fil';
$lang['Restore_Error_decompress'] = 'Gzip-filen kan ikke dekomprimeres, upload venligst en ren tekstversion';
$lang['Restore_Error_no_file'] = 'Ingen fil blev uploaded';


//
// Auth pages
//
$lang['Select_a_User'] = 'V�lg en bruger';
$lang['Select_a_Group'] = 'V�lg en gruppe';
$lang['Select_a_Forum'] = 'V�lg et forum';
$lang['Auth_Control_User'] = 'Brugerrettigheder kontrolside'; 
$lang['Auth_Control_Group'] = 'Grupperettigheder kontrolside'; 
$lang['Auth_Control_Forum'] = 'Forumrettigheder kontrolside';
$lang['Look_up_User'] = 'Sl� brugeren op'; 
$lang['Look_up_Group'] = 'Sl� gruppen op'; 
$lang['Look_up_Forum'] = 'Vis forum'; 

$lang['Group_auth_explain'] = 'Her kan du �ndre rettighederne og redakt�rstatus for hver enkelt brugergruppe. Glem ikke n�r du �ndrer grupperettigheder, at individuelle brugerrettigheder m�ske stadig tillader at brugeren har adgang til forummerne, etc. Du bliver advaret, hvis dette er tilf�ldet.';
$lang['User_auth_explain'] = 'Her kan du �ndre rettighederne og redakt�rstatus for hver enkelt bruger. Glem ikke n�r du �ndrer brugerrettigheder, at grupperettigheder m�ske stadig tillader at brugeren har adgang til forummerne, etc. Du bliver advaret, hvis dette er tilf�ldet.';
$lang['Forum_auth_explain'] = 'Her kan du �ndre autoriseringsniveauer for de enkelte fora. Du har b�de en simpel og avanceret metode til r�dighed. Den avancerede metode tillader st�rre kontrol af hvert enkelt forum. Husk, at n�r du �ndrer forummernes autoriseringsniveauerne, p�virker det hvilke brugere der kan udf�re de forskellige ting i dem.';

$lang['Simple_mode'] = 'Simpel metode';
$lang['Advanced_mode'] = 'Avanceret metode';
$lang['Moderator_status'] = 'Redakt�r status';

$lang['Allowed_Access'] = 'Tilladt adgang';
$lang['Disallowed_Access'] = 'N�gtet adgang';
$lang['Is_Moderator'] = 'Er redakt�r';
$lang['Not_Moderator'] = 'Er ikke redakt�r';

$lang['Conflict_warning'] = 'Advarsel om autorisationskonflikt';
$lang['Conflict_access_userauth'] = 'Denne bruger har stadig adgangsrettigheder til dette forum via et gruppemedlemsskab. Du skal nok �ndre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre at vedkommende har adgangsrettigheder. Gruppens rettigheder (og forummerne involveret) er n�vnt herunder.';
$lang['Conflict_mod_userauth'] = 'Denne bruger har stadig redakt�rrettigheder til dette forum via et gruppemedlemsskab. Du skal nok �ndre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre at vedkommende har redakt�rrettigheder. Gruppens rettigheder (og forummerne involveret) er n�vnt herunder.';

$lang['Conflict_access_groupauth'] = 'Den f�lgende bruger (eller brugere) har stadig adgangsrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have adgangsrettigheder. Brugernes rettigheder (og forummerne involveret) er n�vnt herunder.';
$lang['Conflict_mod_groupauth'] = 'Den f�lgende bruger (eller brugere) har stadig redakt�rrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have redakt�rrettigheder. Brugernes rettigheder (og forummerne involveret) er n�vnt herunder.';

$lang['Public'] = 'Offentlig';
$lang['Private'] = 'Privat';
$lang['Registered'] = 'Registeret';
$lang['Administrators'] = 'Administratorer';
$lang['Hidden'] = 'Skjult';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'ALLE';
$lang['Forum_REG'] = 'REG';
$lang['Forum_PRIVATE'] = 'PRIVAT';
$lang['Forum_MOD'] = 'REDAKT�R';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Se';
$lang['Read'] = 'L�se';
$lang['Post'] = 'Indl�g';
$lang['Reply'] = 'Svar';
$lang['Edit'] = '�ndre';
$lang['Delete'] = 'Slet';
$lang['Sticky'] = 'Opslag';
$lang['Announce'] = 'Bekendtg�re'; 
$lang['Vote'] = 'Stem';
$lang['Pollcreate'] = 'Opret afstemning';

$lang['Permissions'] = 'Rettigheder';
$lang['Simple_Permission'] = 'Simpel Rettighed';

$lang['User_Level'] = 'Brugerniveau'; 
$lang['Auth_User'] = 'Bruger';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'Medlemsskaber til brugergrupper';
$lang['Usergroup_members'] = 'Denne gruppe har f�lgende medlemmer';

$lang['Forum_auth_updated'] = 'Forumrettigheder opdateret';
$lang['User_auth_updated'] = 'Brugerrettigheder opdateret';
$lang['Group_auth_updated'] = 'Grupperettigheder opdateret';

$lang['Auth_updated'] = 'Rettigheder er blevet opdateret';
$lang['Click_return_userauth'] = 'Klik %sher%s for at vende tilbage til Brugerrettigheder';
$lang['Click_return_groupauth'] = 'Klik %sher%s for at vende tilbage til Grupperettigheder';
$lang['Click_return_forumauth'] = 'Klik %sher%s for at vende tilbage til Forumrettigheder';


//
// Banning
//
$lang['Ban_control'] = 'Kontrollering af bandlysninger';
$lang['Ban_explain'] = 'Her kan du kontrollere bandlysning af brugere. Du kan opn� dette ved enten at bandlyse en specifik bruger, en eller flere IP-adresser eller dom�nenavne. Disse metoder forhindrer en bruger i overhovedet at f� adgang til dit forums indeksside. For at forhindre at en bruger registrerer sig under en andet brugernavn, kan du ogs� bandlyse en email-adresse. Husk, bandlysning af en emailadresse vil ikke forhindre brugeren i at logge p� eller komme med nye indl�g p� dit forum, du skal bruge en af de f�rn�vnte metoder for at forhindre dette.';
$lang['Ban_explain_warn'] = 'Bem�rk venligst, at hvis du indtaster en r�kke IP-adresser vil dette resultere i, at alle adresserne mellem start og slut bliver tilf�jet listen over bandlyste IP-adresser. Fors�g s� vidt muligt at minimere antallet af adresser tilf�jet til databasen. Hvis du virkelig vil indtaste en r�kke adresser, s� pr�v at minimere r�kken eller endnu bedre, indtast specifikke adresser.';

$lang['Select_username'] = 'V�lg et brugernavn';
$lang['Select_ip'] = 'V�lg en IP-adresse';
$lang['Select_email'] = 'V�lg en email-adresse';

$lang['Ban_username'] = 'Bandlys en eller flere specifikke brugere';
$lang['Ban_username_explain'] = 'Du kan bandlyse flere brugere p� en gang ved at bruge den rette kombination af mus og tastatur for din computer og browser';

$lang['Ban_IP'] = 'Bandlys en eller flere IP-adresser eller dom�nenavne';
$lang['IP_hostname'] = 'IP-adresser eller dom�nenavne';
$lang['Ban_IP_explain'] = 'For at angive flere IP adresser eller dom�nenavne skal du adskille dem med kommaer. For at angive en r�kke IP adresser skal du adskille starten og slutningen med en bindestreg (-), for at angive en joker skal du bruge *';

$lang['Ban_email'] = 'Bandlys en eller flere adresser';
$lang['Ban_email_explain'] = 'For at angive flere email adresser skal du adskille dem med kommaer. For at angive en joker skal du bruge *, for eksempel *@hotmail.com';

$lang['Unban_username'] = 'Oph�v bandlysning p� en eller flere brugere';
$lang['Unban_username_explain'] = 'Du kan oph�ve bandlysning af flere brugere p� en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.';

$lang['Unban_IP'] = 'Oph�v bandlysning p� en eller flere IP-adresser';
$lang['Unban_IP_explain'] = 'Du kan oph�ve bandlysning p� en eller flere IP-adresser p� en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.';

$lang['Unban_email'] = 'Oph�v bandlysning p� en eller flere emailadresser.';
$lang['Unban_email_explain'] = 'Du kan oph�ve bandlysning p� flere emailadresser p� en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.';

$lang['No_banned_users'] = 'Ingen bandlyste brugernavne';
$lang['No_banned_ip'] = 'Ingen bandlyste IP-adresser';
$lang['No_banned_email'] = 'Ingen bandlyste emailadresser';

$lang['Ban_update_sucessful'] = 'Listen med oplysningerne om bandlysninger er korrekt opdateret.';
$lang['Click_return_banadmin'] = 'Klik %sher%s for at vende tilbage til Kontrol af bandlysninger';


//
// Configuration
//
$lang['General_Config'] = 'Generel konfiguration';
$lang['Config_explain'] = 'Nedenst�ende skema giver dig mulighed for at tilpasse alle de generelle forumindstillinger. For Bruger og Forumindstilninger, brug de relaterende links i venstre side.';

$lang['Click_return_config'] = 'Klik %sher%s for at vende tilbage til Generel konfiguration';

$lang['General_settings'] = 'Generelle forumindstillinger';
$lang['Server_name'] = 'Dom�nenavn';
$lang['Server_name_explain'] = 'Dom�net dette forum ligger p�, feks. minside.dk';
$lang['Script_path'] = 'Sti til forummet';
$lang['Script_path_explain'] = 'Stien til phpBB2 p� dom�nenavnet, feks. /forum/ eller /phpBB2/';
$lang['Server_port'] = 'Server Port';
$lang['Server_port_explain'] = 'Porten hvorp� din server k�rer. Det er normalt 80, �ndres kun hvis n�dvendigt';
$lang['Site_name'] = 'Sidens navn';
$lang['Site_desc'] = 'Beskrivelse af siden';
$lang['Board_disable'] = 'Sl� forummet fra';
$lang['Board_disable_explain'] = 'Dette vil g�re forummet utilg�ngeligt for brugere. Du m� ikke logge ud, n�r du har sl�et forummet fra. Du vil ikke kunne logge p� igen! Du kan dog �ndre denne status direkte i databasen og derigennem genaktivere forummet.';
$lang['Acct_activation'] = 'Aktivering af Konto';
$lang['Acc_None'] = 'Ingen'; // These three entries are the type of activation
$lang['Acc_User'] = 'Bruger';
$lang['Acc_Admin'] = 'Administrator';

$lang['Abilities_settings'] = 'Generelle Bruger- og Forumindstillinger';
$lang['Max_poll_options'] = 'Maksimum antal afstemningsmuligheder';
$lang['Flood_Interval'] = 'Sekunder mellem indl�g';
$lang['Flood_Interval_explain'] = 'Antal sekunder en bruger skal vente, f�r et nyt indl�g kan skrives.';
$lang['Board_email_form'] = 'Bruger-email via forum';
$lang['Board_email_form_explain'] = 'Brugere kan sende hinanden email via dette forum';
$lang['Topics_per_page'] = 'Emner pr. side';
$lang['Posts_per_page'] = 'Indl�g pr. side';
$lang['Hot_threshold'] = 'Indl�g for popul�re emner';
$lang['Default_style'] = 'Standard layout';
$lang['Override_style'] = 'Overskriv brugers valg';
$lang['Override_style_explain'] = 'Erstatter brugernes valg med det, der er standard';
$lang['Default_language'] = 'Standard-sprog';
$lang['Date_format'] = 'Dato-format';
$lang['System_timezone'] = 'Tidszone';
$lang['Enable_gzip'] = 'Sl� GZip-komprimering til';
$lang['Enable_prune'] = 'Sl� forumbesk�ring til';
$lang['Allow_HTML'] = 'Tillad HTML';
$lang['Allow_BBCode'] = 'Tillad BBCode';
$lang['Allowed_tags'] = 'Tilladte HTML kommandoer (tags)';
$lang['Allowed_tags_explain'] = 'Adskil kommandoer med kommaer';
$lang['Allow_smilies'] = 'Tillad smilies';
$lang['Smilies_path'] = 'Adressen hvor dine smilies opbevares';
$lang['Smilies_path_explain'] = 'Adressen under din phpBB folder, f.eks. images/smilies';
$lang['Allow_sig'] = 'Tillad underskrifter';
$lang['Max_sig_length'] = 'Maksimal l�ngde p� underskrifter';
$lang['Max_sig_length_explain'] = 'Maksimale antal tegn i brugernes underskrifter';
$lang['Allow_name_change'] = 'Tillad, at brugerne kan �ndre brugernavn';

$lang['Avatar_settings'] = 'Avatar-indstillinger';
$lang['Allow_local'] = 'Sl� galleri-avatars til';
$lang['Allow_remote'] = 'Sl� udefra avatars til';
$lang['Allow_remote_explain'] = 'Avatars, der befinder sig p� en anden hjemmeside';
$lang['Allow_upload'] = 'Sl� uploading af avatar til';
$lang['Max_filesize'] = 'Maksimal st�rrelse p� avatar-filer';
$lang['Max_filesize_explain'] = 'G�lder de avatars, der uploades';
$lang['Max_avatar_size'] = 'Maksimal st�rrelse p� avatars';
$lang['Max_avatar_size_explain'] = '(H�jde x Bredde i pixels)';
$lang['Avatar_storage_path'] = 'Adressen hvor avatars opbevares';
$lang['Avatar_storage_path_explain'] = 'Adressen under din phpBB folder, f.eks. images/avatars';
$lang['Avatar_gallery_path'] = 'Adressen p� avatar-galleriet';
$lang['Avatar_gallery_path_explain'] = 'Adressen under din phpBB folder, f.eks. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA-indstillinger';
$lang['COPPA_fax'] = 'COPPA-faxnummer';
$lang['COPPA_mail'] = 'COPPA-adresse';
$lang['COPPA_mail_explain'] = 'Dette er adressen, hvortil for�ldre kan sende COPPA-blanketterne';

$lang['Email_settings'] = 'Email-indstillinger';
$lang['Admin_email'] = 'Email adresse p� administrator';
$lang['Email_sig'] = 'Email underskrift';
$lang['Email_sig_explain'] = 'Dette tekst vil slutte alle emails, afsendt af forummet';
$lang['Use_SMTP'] = 'Brug en SMTP Server til email';
$lang['Use_SMTP_explain'] = 'V�lg ja hvis du vil, eller skal, sende email via en specifik server istedet for den normale email funktion.';
$lang['SMTP_server'] = 'SMTP server adresse';
$lang['SMTP_username'] = 'SMTP brugernavn';
$lang['SMTP_username_explain'] = 'Indtast kun et brugernavn, hvis din smtp server kr�ver det';
$lang['SMTP_password'] = 'SMTP kodeord';
$lang['SMTP_password_explain'] = 'Indtast kun et kodeord, hvis din smtp server kr�ver det';

$lang['Disable_privmsg'] = 'Private beskeder';
$lang['Inbox_limits'] = 'Maksimale antal indl�g i Indbakke';
$lang['Sentbox_limits'] = 'Maksimale antal indl�g i Sendt-bakken';
$lang['Savebox_limits'] = 'Maksimale antal indl�g i Gemt-bakken';

$lang['Cookie_settings'] = 'Cookie-indstillinger';
$lang['Cookie_settings_explain'] = 'Disse kontrollerer hvordan en cookie defineres af en browser. I de fleste tilf�lde skulle standard indstillingerne v�re gode nok. Hvis du har brug for at �ndre dem, s� pas p�, forkerte indstillinger kan resultere i, at brugere ikke kan logge p�.';
$lang['Cookie_domain'] = 'Cookie dom�ne';
$lang['Cookie_name'] = 'Cookie navn';
$lang['Cookie_path'] = 'Cookie adresse';
$lang['Cookie_secure'] = 'Cookie sikkerhed [ https ]';
$lang['Cookie_secure_explain'] = 'Sl� dette til hvis din server k�rer via SSL, ellers lad det v�re sl�et fra';
$lang['Session_length'] = 'L�ngden p� en Session [ sekunder ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Sl� visuel bekr�ftelse til';
$lang['Visual_confirm_explain'] = 'Kr�ver at brugeren indtaster en kode defineret af et billede ved registrering.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Tillad automatiske logins';
$lang['Allow_autologin_explain'] = 'Afg�r om brugere har lov til at v�lge at blive logget automatisk ind n�r de bes�ger forummet';
$lang['Autologin_time'] = 'Automatisk loginn�gle udl�bstid';
$lang['Autologin_time_explain'] = 'Hvor l�nge en autologin-n�gle er gyldig i dage hvis brugeren ikke bes�ger forummet. S�t til nul for at sl� udl�b fra.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'S�gningsinterval';
$lang['Search_Flood_Interval_explain'] = 'Antal sekunder en bruger skal vente mellem s�gninger';

//
// Forum Management
//
$lang['Forum_admin'] = 'Forumadministration';
$lang['Forum_admin_explain'] = 'Fra denne side kan du tilf�je, slette, �ndre, omorganisere og gensynkronisere kategorier og forummer.';
$lang['Edit_forum'] = '�ndre forum';
$lang['Create_forum'] = 'Opret nyt forum';
$lang['Create_category'] = 'Opret ny kategori';
$lang['Remove'] = 'Fjern';
$lang['Action'] = 'Udf�r';
$lang['Update_order'] = 'Opdat�r sortering';
$lang['Config_updated'] = 'Forumkonfiguration korrekt opdateret';
$lang['Edit'] = '�ndre';
$lang['Delete'] = 'Slet';
$lang['Move_up'] = 'Ryk op';
$lang['Move_down'] = 'Ryk ned';
$lang['Resync'] = 'Re-synkronis�r';
$lang['No_mode'] = 'Ingen metode blev valgt';
$lang['Forum_edit_delete_explain'] = 'Skemaet nedenfor g�r at du kan tilpasse alle de generelle forumindstillinger. For Bruger og det enkelte Forums indstillinger skal du bruge linkene til venstre.';

$lang['Move_contents'] = 'Flyt alt indhold';
$lang['Forum_delete'] = 'Slet Forum';
$lang['Forum_delete_explain'] = 'Skemaet nedenfor lader dig slette et forum (eller en kategori) og bestemme, hvor du vil placere alle emner (eller fora) det/den indeholdt.';

$lang['Status_locked'] = 'L�st';
$lang['Status_unlocked'] = 'L�st op';
$lang['Forum_settings'] = 'Generelle forumindstillinger';
$lang['Forum_name'] = 'Forummets navn';
$lang['Forum_desc'] = 'Beskrivelse';
$lang['Forum_status'] = 'Forum status';
$lang['Forum_pruning'] = 'Automatisk sletning';

$lang['prune_freq'] = 'Tjek for emners alder hver';
$lang['prune_days'] = 'Fjern emner, der ikke er blevet skrevet indl�g til i';
$lang['Set_prune_data'] = 'Du har sl�et automatisk sletning til for dette forum, men du indtastede ikke et antal dage, hvorefter emner skal slettes. G� venligst tilbage og g�r dette.';

$lang['Move_and_Delete'] = 'Flyt og Slet';

$lang['Delete_all_posts'] = 'Slet alle indl�g';
$lang['Nowhere_to_move'] = 'Ingen steder at flytte til';

$lang['Edit_Category'] = '�ndre kategori';
$lang['Edit_Category_explain'] = 'Brug dette skema til at �ndre navnet p� en kategori.';

$lang['Forums_updated'] = 'Forum- og kategoriinformation korrekt opdateret';

$lang['Must_delete_forums'] = 'Du skal slette alle fora, f�r du kan slette denne kategori';

$lang['Click_return_forumadmin'] = 'Klik %sher%s for at vende tilbage til Forumadministration';


//
// Smiley Management
//
$lang['smiley_title'] = 'Smilesv�rkt�jer';
$lang['smile_desc'] = 'Fra denne side kan du tilf�je, slette og �ndre de smileys dine brugere kan bruge i deres indl�g og private beskeder.';

$lang['smiley_config'] = 'Smileyindstillinger';
$lang['smiley_code'] = 'Smileykode';
$lang['smiley_url'] = 'Smiley-billedfil';
$lang['smiley_emot'] = 'Smiley-udtryk';
$lang['smile_add'] = 'Tilf�j en ny smiley';
$lang['Smile'] = 'Smil';
$lang['Emotion'] = 'Udtryk';

$lang['Select_pak'] = 'V�lg pakkefil (.pak)';
$lang['replace_existing'] = 'Erstat eksisterende smiley';
$lang['keep_existing'] = 'Behold eksisterende smiley';
$lang['smiley_import_inst'] = 'Du skal pakke zipfilen ud og uploade alle filerne til den p�g�ldende smiley-folder i din installation.  V�lg herefter de korrekte oplysninger p� dette skema for at importere smileypakken.';
$lang['smiley_import'] = 'Smiley-pakke-import';
$lang['choose_smile_pak'] = 'V�lg en smileypakke-fil (.pak)';
$lang['import'] = 'Import�r smileys';
$lang['smile_conflicts'] = 'Hvad skal g�res i tilf�lde af konflikter';
$lang['del_existing_smileys'] = 'Slet eksisterende smileys inden import';
$lang['import_smile_pack'] = 'Import�r smiley-pakke';
$lang['export_smile_pack'] = 'Opret smiley-pakke';
$lang['export_smiles'] = 'For at oprette en smiley-pakke med dine nuv�rende installerede smileys, klik %sher%s for at downloade smiles.pak filen. Giv den et passende navn og s�rg for at den beholder .pak efternavnet. Lav s� en zipfil der indeholder alle smiley-billederne plus denne .pak konfigurationsfil.';

$lang['smiley_add_success'] = 'Smileyen blev korrekt tilf�jet';
$lang['smiley_edit_success'] = 'Smileyen blev korrekt opdateret';
$lang['smiley_import_success'] = 'Smiley-pakken blev korrekt importeret!';
$lang['smiley_del_success'] = 'Smileyen blev korrekt fjernet';
$lang['Click_return_smileadmin'] = 'Klik %sher%s for at vende tilbage til smileyadministration';

$lang['Confirm_delete_smiley'] = 'Er du sikker p� at du vil slette denne smiley?';

//
// User Management
//
$lang['User_admin'] = 'Brugeradministration';
$lang['User_admin_explain'] = 'Her kan du �ndre dine brugeres informationer og specifikke indstillinger. For at �ndre brugernes rettigheder, brug venligst bruger- og gruppe-indstillingssystemet.';

$lang['Look_up_user'] = 'Sl� bruger op';

$lang['Admin_user_fail'] = 'Brugerens profil kunne ikke opdaters.';
$lang['Admin_user_updated'] = 'Brugerens profil blev korrekt opdateret.';
$lang['Click_return_useradmin'] = 'Klik %sher%s for at vende tilbage til Bruger Administration';

$lang['User_delete'] = 'Slet denne bruger';
$lang['User_delete_explain'] = 'Klik her for at slette denne bruger. Det er permanent.';
$lang['User_deleted'] = 'Brugeren blev korrekt slettet.';

$lang['User_status'] = 'Brugeren er aktiv';
$lang['User_allowpm'] = 'Kan sende private beskeder';
$lang['User_allowavatar'] = 'Kan vise en avatar';

$lang['Admin_avatar_explain'] = 'Her kan du se og slette brugerens nuv�rende avatar.';

$lang['User_special'] = 'Specielle kun-administrator felter';
$lang['User_special_explain'] = 'Disse felter kan ikke �ndres af brugerne. Her kan du bestemme deres status og �ndre indstillinger, de ikke har adgang til.';


//
// Group Management
//
$lang['Group_administration'] = 'Gruppeadministration';
$lang['Group_admin_explain'] = 'Fra dette panel kan du administere alle dine brugergrupper, du kan slette, oprette og �ndre eksisterende grupper. Du kan v�lge redakt�rer, sl� grupper til og fra og bestemme gruppens navn og beskrivelse';
$lang['Error_updating_groups'] = 'Der opstod en fejl under opdateringen af grupperne';
$lang['Updated_group'] = 'Gruppen blev korrekt opdateret';
$lang['Added_new_group'] = 'Den nye gruppe blev korrekt oprettet';
$lang['Deleted_group'] = 'Gruppen blev korrekt slettet';
$lang['New_group'] = 'Opret en ny gruppe';
$lang['Edit_group'] = '�ndre gruppe';
$lang['group_name'] = 'Gruppens navn';
$lang['group_description'] = 'Gruppens beskrivelse';
$lang['group_moderator'] = 'Grupperedakt�r';
$lang['group_status'] = 'Gruppestatus';
$lang['group_open'] = '�ben gruppe';
$lang['group_closed'] = 'Lukket gruppe';
$lang['group_hidden'] = 'Skjult gruppe';
$lang['group_delete'] = 'Slet gruppe';
$lang['group_delete_check'] = 'Slet denne gruppe';
$lang['submit_group_changes'] = 'Tilf�j �ndringer';
$lang['reset_group_changes'] = 'Nulstil �ndringer';
$lang['No_group_name'] = 'Du skal v�lge et navn til denne gruppe';
$lang['No_group_moderator'] = 'Du skal v�lge en redakt�r til denne gruppe';
$lang['No_group_mode'] = 'Du skal v�lge en status for denne gruppe, �ben eller lukket';
$lang['No_group_action'] = 'Ingen metode valgt';
$lang['delete_group_moderator'] = 'Slet den gamle grupperedakt�r?';
$lang['delete_moderator_explain'] = 'Hvis du �ndrer grupperedakt�ren, s�t kryds i dette felt for at slette den gamle redakt�r fra gruppen. Hvis du ikke s�tter kryds, bliver brugeren et normalt medlem af gruppen.';
$lang['Click_return_groupsadmin'] = 'Klik %sher%s for at vende tilbage til Gruppeadministration.';
$lang['Select_group'] = 'V�lg en gruppe';
$lang['Look_up_group'] = 'Vis Gruppe';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Forumbesk�ring';
$lang['Forum_Prune_explain'] = 'Dette vil slette enhvert emne, som der ikke er skrevet indl�g til, i det antal dage du v�lger. Hvis du ikke indtaster et nummer, bliver alle emner slettet. Emner, hvor der stadig er �bne afstemninger, vil ikke blive slettet, ligesom Annonceringer heller ikke slettes. Du skal slette disse emner manuelt.';
$lang['Do_Prune'] = 'Udf�r besk�ring';
$lang['All_Forums'] = 'Alle Fora';
$lang['Prune_topics_not_posted'] = 'Slet emner uden nye indl�g i';
$lang['Topics_pruned'] = 'Emner slettet';
$lang['Posts_pruned'] = 'Indl�g slettet';
$lang['Prune_success'] = 'Vellykket besk�ring af fora';


//
// Word censor
//
$lang['Words_title'] = 'Censurering af ord';
$lang['Words_explain'] = 'Fra denne side kan du tilf�je, �ndre og fjerne ord, der automatisk censureres i dine fora. Folk kan heller ikke registrere med et brugernavn, der indeholder disse ord. Jokere (*) kan bruges i ordfelterne, f.eks. *test* vil matche utestet, test* vil matche tester, *test ville matche utest.';
$lang['Word'] = 'Ord';
$lang['Edit_word_censor'] = '�ndre ordcensur�r';
$lang['Replacement'] = 'Erstatning';
$lang['Add_new_word'] = 'Tilf�j nyt ord';
$lang['Update_word'] = 'Opdat�r ordcensur�r';

$lang['Must_enter_word'] = 'Du skal indtaste et ord og det ords erstatning';
$lang['No_word_selected'] = 'Intet ord er valgt til �ndring';

$lang['Word_updated'] = 'Den valgte ordcensur blev korrekt opdateret';
$lang['Word_added'] = 'Ordcensuren blev korrekt tilf�jet';
$lang['Word_removed'] = 'Den valgte ordcensur blev korrekt fjernet';

$lang['Click_return_wordadmin'] = 'Klik %sher%s for at vende tilbage til Censurering af ord';

$lang['Confirm_delete_word'] = 'Er du sikker p� at du vil slette denne ordcensur?';

//
// Mass Email
//
$lang['Mass_email_explain'] = 'Her kan du sende email til alle dine brugere eller alle brugere i en specifik gruppe. For at g�re dette bliver en email sendt til alle de administrative email adresser, og en kopi sendes til alle modtagere. Hvis du emailer en stor gruppe mennesker, skal du v�re t�lmodig, da det godt kan tage lang tid at sende mailen til en stor gruppe. Stop ikke siden n�r den er halvvejs, da processen vil g� i st�, og ikke alle i den angivne gruppe vil modtage emailen. Du f�r at vide, n�r mailen er f�rdigsendt.';
$lang['Compose'] = 'Skriv';

$lang['Recipients'] = 'Modtagere';
$lang['All_users'] = 'Alle Brugere';

$lang['Email_successfull'] = 'Din besked er afsendt';
$lang['Click_return_massemail'] = 'Klik %sher%s for at vende tilbage til Gruppe-email';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang-administration';
$lang['Ranks_explain'] = 'Ved at bruge denne side kan du tilf�je, �ndre, se og slette rang-niveauer. Du kan ogs� oprette specifikke niveauer, som kan gives til en bruger gennem brugerv�rkt�jerne.';

$lang['Add_new_rank'] = 'Tilf�j ny rang';

$lang['Rank_title'] = 'Rangtitel';
$lang['Rank_special'] = 'Lav til Speciel Rang';
$lang['Rank_minimum'] = 'Minimum Indl�g';
$lang['Rank_maximum'] = 'Maksimum Indl�g';
$lang['Rank_image'] = 'Rang-billede (Relativt ift. phpBB2 hovedfolderen)';
$lang['Rank_image_explain'] = 'Bestem her, om et lille billede skal bruges sammen med rangen.';

$lang['Must_select_rank'] = 'Du skal v�lge en rang';
$lang['No_assigned_rank'] = 'Ingen speciel rang tilvalgt';

$lang['Rank_updated'] = 'Rangen blev korrekt opdateret';
$lang['Rank_added'] = 'Rangen blev korrekt tilf�jet';
$lang['Rank_removed'] = 'Rangen blev korrekt slettet';
$lang['No_update_ranks'] = 'Rangen blev korrekt slettet. Brugerkonti med denne rang blev dog ikke opdateret.  Du er n�dt til manuelt at nulstille rangen for disse konti';

$lang['Click_return_rankadmin'] = 'Klik %sher%s for at vende tilbage til Niveau Administration';

$lang['Confirm_delete_rank'] = 'Er du sikker p� at du vil slette denne rang';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Forbyd Brugernavn V�rkt�jer';
$lang['Disallow_explain'] = 'Her kan du kontrollere, hvilke brugernavne der er tilladt. Forbudte brugernavne m� indeholde en joker, betegnet som et *. Bem�rk venligst, at du ikke kan forbyde et brugernavn, der allerede er registreret, du skal f�rst slette navnet og derefter forbyde det.';

$lang['Delete_disallow'] = 'Slet';
$lang['Delete_disallow_title'] = 'Fjern et forbudt brugernavn';
$lang['Delete_disallow_explain'] = 'Du kan fjerne et forbudt brugernavn ved at v�lge brugernavnet fra denne liste og trykke p� knappen';

$lang['Add_disallow'] = 'Tilf�j';
$lang['Add_disallow_title'] = 'Tilf�j et forbudt brugernavn';
$lang['Add_disallow_explain'] = 'Du kan forbyde et brugernavn ved at bruge jokeren * istedet for et tegn';

$lang['No_disallowed'] = 'Ingen forbudte brugernavne';

$lang['Disallowed_deleted'] = 'Det forbudte brugernavn blev succesfuldt fjernet';
$lang['Disallow_successful'] = 'Det forbudte brugernavn blev korrekt tilf�jet';
$lang['Disallowed_already'] = 'Navnet du indtastede kunne ikke forbydes. Enten eksisterer det allerede i listen, eksisterer i ordcensureringslisten, eller en bruger har det brugernavn';

$lang['Click_return_disallowadmin'] = 'Klik %sher%s for at vende tilbage til Forbyd Brugernavn V�rkt�jer';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Layoutadministration';
$lang['Styles_explain'] = 'Ved brug af disse v�rkt�jer kan du tilf�je, fjerne og �ndre layouts (skabeloner og design), der er tilg�ngelige for dine brugere';
$lang['Styles_addnew_explain'] = 'Den f�lgende liste indeholder alle de designs, der er tilg�ngelige for de skabeloner du har. Navnene p� listen er endnu ikke installeret i phpBB databasen. For at installere skal du bare klikke p� install�r-linket ved siden af navnet';

$lang['Select_template'] = 'V�lg en skabelon';

$lang['Style'] = 'Layout';
$lang['Template'] = 'Skabelon';
$lang['Install'] = 'Install�r';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = '�ndre design';
$lang['Edit_theme_explain'] = 'I skemaet nedenunder kan du �ndre indstillingerne for det valgte design';

$lang['Create_theme'] = 'Opret design';
$lang['Create_theme_explain'] = 'Brug skemaet nedenunder for at oprette et nyt design til den valgte skabelon. N�r du indtaster farver (for hvilket du skal bruge hexadecimal systemet) skal du ikke bruge # tegnet, f.eks. CCCCCC er brugbart, #CCCCCC er ikke';

$lang['Export_themes'] = 'Eksport�r designs';
$lang['Export_explain'] = 'I dette panel kan du eksportere design-dataen for en valgt skabelon. V�lg skabelonen fra listen herunder, og databasen opretter design-konfigurationsfilen og fors�ge at gemme den i den valgte skabelons bibliotek. Hvis den ikke kan gemme filen, vil du f� muligheden for at downloade den. For at databasen kan gemme filen, skal du give den lov til at gemme i biblioteket for den valgte skabelon. For mere information om dette, se phpBB2 Brugerguiden.';

$lang['Theme_installed'] = 'Det valgte design blev korrekt installeret.';
$lang['Style_removed'] = 'Det valgte design blev korrekt fjernet fra databasen. For permanent at fjerne dette design fra dit system, skal du slette designet fra dit skabelon bibliotek (templates).';
$lang['Theme_info_saved'] = 'Design informationen for den valgte skabelon er blevet gemt. Du skal nu give rettighederne tilbage i theme_info.cfg filen (og hvis du �nsker, s�tte den valgte skabelons bibliotek) til skrivebeskyttet (read-only)';
$lang['Theme_updated'] = 'Det valgte design er opdateret. Du skal nu eksportere de nye designindstillinger';
$lang['Theme_created'] = 'Design oprettet. Du skal nu eksportere designet og design-konfigurationsfilen som backup eller til brug andetsteds.';

$lang['Confirm_delete_style'] = 'Er du sikker p� at du vil slette dette layout';

$lang['Download_theme_cfg'] = 'Databasen kunne ikke skrive til design-informationsfilen. Klik p� knappen nedenunder for at downloade filen. N�r den er downloadet skal du uploade den i det bibliotek, der indeholder skabelon-filerne. Du kan s� pakke filerne til distribution eller brug andetsteds, hvis du �nsker.';
$lang['No_themes'] = 'Skabelonen du valgte har ingen designs. For at oprette et nyt design skal du klikke p� Opret nyt design i venstre side';
$lang['No_template_dir'] = 'Skabelon-biblioteket kunne ikke �bnes. Det er muligvis ikke l�seligt af serveren eller ogs� eksisterer det ikke.';
$lang['Cannot_remove_style'] = 'Du kan ikke fjerne layoutet eftersom det p� nuv�rende tidspunkt er det layout, der er standard for forummet. �ndre standardlayoutet og pr�v igen.';
$lang['Style_exists'] = 'Det valgte layout navn eksisterer allerede, g� venligst tilbage og v�lg et andet.';

$lang['Click_return_styleadmin'] = 'Klik %sher%s for at vende tilbage til Layoutadministration';

$lang['Theme_settings'] = 'Designindstillinger';
$lang['Theme_element'] = 'Design-element';
$lang['Simple_name'] = 'Simpelt navn';
$lang['Value'] = 'V�rdi';
$lang['Save_Settings'] = 'Gem indstillinger';

$lang['Stylesheet'] = 'CSS stilark';
$lang['Stylesheet_explain'] = 'Filnavn for CSS stilark der skal bruges til dette layout.';
$lang['Background_image'] = 'Baggrundsbillede';
$lang['Background_color'] = 'Baggrundsfarve';
$lang['Theme_name'] = 'Design-navn';
$lang['Link_color'] = 'Linkfarve';
$lang['Text_color'] = 'Tekstfarve';
$lang['VLink_color'] = 'Bes�gt linkfarve';
$lang['ALink_color'] = 'Aktiv linkfarve';
$lang['HLink_color'] = 'Sv�ve-linkfarve';
$lang['Tr_color1'] = 'Tabelr�kke-farve 1';
$lang['Tr_color2'] = 'Tabelr�kke-farve 2';
$lang['Tr_color3'] = 'Tabelr�kke-farve 3';
$lang['Tr_class1'] = 'Tabelr�kke-klasse 1';
$lang['Tr_class2'] = 'Tabelr�kke-klasse 2';
$lang['Tr_class3'] = 'Tabelr�kke-klasse 3';
$lang['Th_color1'] = 'Tabeltop-farve 1';
$lang['Th_color2'] = 'Tabeltop-farve 2';
$lang['Th_color3'] = 'Tabeltop-farve 3';
$lang['Th_class1'] = 'Tabeltop-klasse 1';
$lang['Th_class2'] = 'Tabeltop-klasse 2';
$lang['Th_class3'] = 'Tabeltop-klasse 3';
$lang['Td_color1'] = 'Tabelcelle-farve 1';
$lang['Td_color2'] = 'Tabelcelle-farve 2';
$lang['Td_color3'] = 'Tabelcelle-farve 3';
$lang['Td_class1'] = 'Tabelcelle-klasse 1';
$lang['Td_class2'] = 'Tabelcelle-klasse 2';
$lang['Td_class3'] = 'Tabelcelle-klasse 3';
$lang['fontface1'] = 'Skrifttype 1';
$lang['fontface2'] = 'Skrifttype 2';
$lang['fontface3'] = 'Skrifttype 3';
$lang['fontsize1'] = 'Skriftst�rrelse 1';
$lang['fontsize2'] = 'Skriftst�rrelse 2';
$lang['fontsize3'] = 'Skriftst�rrelse 3';
$lang['fontcolor1'] = 'Skriftfarve 1';
$lang['fontcolor2'] = 'Skriftfarve 2';
$lang['fontcolor3'] = 'Skriftfarve 3';
$lang['span_class1'] = 'Span-klasse 1';
$lang['span_class2'] = 'Span-klasse 2';
$lang['span_class3'] = 'Span-klasse 3';
$lang['img_poll_size'] = 'Afstemningsbillede st�rrelse [px]';
$lang['img_pm_size'] = 'Private beskeder status st�rrelse [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Velkommen til phpBB 2-installationen';
$lang['Initial_config'] = 'Generel konfiguration';
$lang['DB_config'] = 'Databasekonfiguration';
$lang['Admin_config'] = 'Administratorkonfiguration';
$lang['continue_upgrade'] = 'N�r du har downloadet din config-fil til din harddisk, kan du klikke "Forts�t opgradering"-knappen nedenunder for at forts�tte opgraderingen. Vent venligst med at uploade config-filen indtil opgraderingen er f�rdig.';
$lang['upgrade_submit'] = 'Forts�t opgradering';

$lang['Installer_Error'] = 'En fejl opstod under installationen';
$lang['Previous_Install'] = 'En tidligere installation er fundet';
$lang['Install_db_error'] = 'En fejl opstod under fors�get p� at opgradere databasen';

$lang['Re_install'] = 'Din tidligere installation er stadig aktiv. <br /><br />Hvis du vil geninstallere phpBB 2 skal du klikke p� Ja-knappen herunder. Bem�rk venligst at hvis du g�r det, vil det slette alle eksisterende data. Der laves ingen backups! Det administrator-brugernavn og -kodeord du har brugt til at logge p� forummet vil blive genskabt efter geninstallationen. Ingen andre indstillinger bliver gemt. <br /><br />T�nk dig om inden du trykker Ja!';

$lang['Inst_Step_0'] = 'Tak fordi du valgte phpBB 2. For at f�rdigg�re installationen skal du indtaste de relevante oplysninger herunder. Bem�rk venligst at den database du installerer i, skal v�re oprettet p� forh�nd. Hvis du installerer en database der bruger ODBC, f.eks. MS Access, skal du oprette en DSN for den inden du forts�tter.';

$lang['Start_Install'] = 'Start installation';
$lang['Finish_Install'] = 'F�rdigg�r installation';

$lang['Default_lang'] = 'Standardsproget p� forummet';
$lang['DB_Host'] = 'Database server hostname / DSN';
$lang['DB_Name'] = 'Navnet p� din database';
$lang['DB_Username'] = 'Database brugernavn';
$lang['DB_Password'] = 'Database kodeord';
$lang['Database'] = 'Din database';
$lang['Install_lang'] = 'V�lg sprog for installationen';
$lang['dbms'] = 'Databasetype';
$lang['Table_Prefix'] = 'Pr�fiks for tabeller i databasen';
$lang['Admin_Username'] = 'Administrator-brugernavn';
$lang['Admin_Password'] = 'Administrator-kodeord';
$lang['Admin_Password_confirm'] = 'Administrator-kodeord [ Bekr�ft ]';

$lang['Inst_Step_2'] = 'Dit administrator brugernavn er oprettet.  P� nuv�rende tidspunkt er den basale installation f�rdig. Du bliver nu sendt videre til en side, hvor du kan administrere din nye installation. Tjek venligst de Generelle Konfigurations indstillinger og lav de �nskede �ndringer. Tak fordi du valgte phpBB 2.';

$lang['Unwriteable_config'] = 'Der kan i �jeblikket ikke skrives til din config-fil. En kopi af config-filen vil blive downloadet til dig, n�r du trykker p� knappen nedenunder. Du skal uploade denne fil til det samme bibliotek phpBB 2 ligger i. N�r dette er gjort, skal du logge p� med dit administrator-navn og kodeord du valgte p� det forrige skema, og g� ind p� administrator-kontrolpanelet (et link vil v�re tilg�ngeligt nederst p� hver side, n�r f�rst du er logget p�) for at tjekke den generelle konfiguration. Tak fordi du valgte phpBB 2.';
$lang['Download_config'] = 'Download config-fil';

$lang['ftp_choose'] = 'V�lg download metode';
$lang['ftp_option'] = '<br />Eftersom FTP-udvidelser er tilg�ngelige i denne version af PHP kan du ogs� f�rst pr�ve automatisk at uploade config-filen til det rette bibliotek.';
$lang['ftp_instructs'] = 'Du har valgt automatisk at uploade filen til det bibliotek, der indeholder phpBB 2.  Indtast venligst de kr�vede oplysninger nedenunder, s� den automatiske uploading kan foretages. Bem�rk at FTP adressen skal v�re den n�jagtige adresse via FTP til din phpBB2 installation, som hvis du brugte en FTP klient til at uploade filen.';
$lang['ftp_info'] = 'Indtast din FTP-information';
$lang['Attempt_ftp'] = 'Fors�g at uploade config-filen til det passende bibliotek';
$lang['Send_file'] = 'Bare send filen til mig og s� uploader jeg den manuelt';
$lang['ftp_path'] = 'FTP adresse til phpBB2';
$lang['ftp_username'] = 'Dit FTP-brugernavn';
$lang['ftp_password'] = 'Dit FTP-kodeord';
$lang['Transfer_config'] = 'Start upload';
$lang['NoFTP_config'] = 'Fors�get p� automatisk at uploade config-filen slog fejl. Download venligst filen og upload den manuelt.';

$lang['Install'] = 'Install�r';
$lang['Upgrade'] = 'Opgrad�r';

$lang['Install_Method'] = 'V�lg installationsmetode';

$lang['Install_No_Ext'] = 'Php Konfigurationen p� din server underst�tter ikke den type af database, som du har valgt';

$lang['Install_No_PCRE'] = 'PhpBB2 kr�ver Perl-Compatible Regular Expressions-modulet til PHP, hvilket din php konfiguration ikke lader til at underst�tte!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Din installation er fuldt ud opdateret, der er ingen tilg�ngelige opdateringer til din version af phpBB.';
$lang['Version_not_up_to_date'] = 'Din installation ser <b>ikke</b> ud til at v�re opdateret. Opdateringer er tilg�ngelige til din version af phpBB, bes�g venligst <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> for at hente seneste version.';
$lang['Latest_version_info'] = 'Den senest tilg�ngelige version er <b>phpBB %s</b>. ';
$lang['Current_version_info'] = 'Du bruger <b>phpBB %s</b>. ';
$lang['Connect_socket_error'] = 'Kan ikke �bne en forbindelse til phpBB-serveren, med f�lgende fejlmelding:<br />%s';
$lang['Socket_functions_disabled'] = 'Kan ikke bruge socket funktioner.';
$lang['Mailing_list_subscribe_reminder'] = 'For seneste informationer om opdateringer til phpBB, hvorfor ikke <a href="http://www.phpbb.com/support/" target="_new">abbonnere p� vores mailingliste</a> (engelsk).';
$lang['Version_information'] = 'Versionsinformation';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Tilladte loginfors�g';
$lang['Max_login_attempts_explain'] = 'Antallet af tilladte forum loginfors�g.';
$lang['Login_reset_time'] = 'Login l�sningstid';
$lang['Login_reset_time_explain'] = 'Tid i minutter brugeren skal vente indtil vedkommende igen m� logge ind efter at have overskredet antallet af tilladte loginfors�g.';

//
// That's all Folks!
// -------------------------------------------------

?>