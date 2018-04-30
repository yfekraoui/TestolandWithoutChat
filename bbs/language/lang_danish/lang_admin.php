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
$lang['Prune'] = 'Beskær';
$lang['Mass_Email'] = 'Gruppe-email';
$lang['Ranks'] = 'Rang';
$lang['Smilies'] = 'Smilies';
$lang['Ban_Management'] = 'Forbyd-kontrol';
$lang['Word_Censor'] = 'Ordcensur';
$lang['Export'] = 'Eksportér';
$lang['Create_new'] = 'Opret';
$lang['Add_new'] = 'Tilføj';
$lang['Backup_DB'] = 'Backup database';
$lang['Restore_DB'] = 'Genopret database';


//
// Index
//
$lang['Admin'] = 'Administration';
$lang['Not_admin'] = 'Du er ikke autoriseret til at redigere dette forum';
$lang['Welcome_phpBB'] = 'Velkommen til phpBB';
$lang['Admin_intro'] = 'Tak fordi du valgte phpBB som dit forum. Denne side vil give dig et hurtigt overblik over alle de forskellige statistikker, der er tilgængelige for dit forum. Du kan komme tilbage til denne side ved at klikke på <u>Administrationsindeks</u> linket i venstre side. For at vende tilbage til dit forums indeksside kan du klikke på linket eller phpBB logoet, der også befinder sig i venstre side. De andre links i venstre side lader dig kontrollere og redigere hver eneste aspekt af dit forum; hver enkelt side indeholder instruktioner om, hvordan du bruger de forskellige værktøjer.';
$lang['Main_index'] = 'Forumindeks';
$lang['Forum_stats'] = 'Forumstatistikker';
$lang['Admin_Index'] = 'Administrationsindeks';
$lang['Preview_forum'] = 'Smugkig på forummet';

$lang['Click_return_admin_index'] = 'Klik %sher%s for at vende tilbage til Administrationsindekset';

$lang['Statistic'] = 'Statistikker';
$lang['Value'] = 'Værdi';
$lang['Number_posts'] = 'Antal indlæg';
$lang['Posts_per_day'] = 'Indlæg pr. dag';
$lang['Number_topics'] = 'Antal emner';
$lang['Topics_per_day'] = 'Emner pr. dag';
$lang['Number_users'] = 'Antal brugere';
$lang['Users_per_day'] = 'Brugere pr. dag';
$lang['Board_started'] = 'Forum oprettelse';
$lang['Avatar_dir_size'] = 'Avatar-bibliotekets størrelse';
$lang['Database_size'] = 'Database-størrelse';
$lang['Gzip_compression'] ='Gzip-komprimering';
$lang['Not_available'] = 'Ikke tilgængelig';

$lang['ON'] = 'Slået til'; // Dette er for GZip komprimering
$lang['OFF'] = 'Slået fra'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Database-værktøjer';

$lang['Restore'] = 'Genopret';
$lang['Backup'] = 'Backup';
$lang['Restore_explain'] = 'Dette vil genoprette alle phpBB-tabeller fra en gemt fil. Hvis din server understøtter det, kan du uploade en gzip-komprimeret tekstfil og så bliver den automatisk dekomprimeret. <b>ADVARSEL</b> Dette vil overskrive alle eksisterende data. Genoprettelsen kan tage lang tid at udføre, forlad venligst ikke denne side før den er fuldført.';
$lang['Backup_explain'] = 'Her kan du lave en backup af alle dine data, der relaterer til phpBB. Hvis du har andre tabeller i din database, som du også ønsker at lave en backup af, skal du indtaste deres navne adskilt af kommaer i Yderligere Tabeller-feltet herunder. Hvis din server understøtter det, kan du gzip-komprimere filen før du downloader den for at reducere dens størrelse.';

$lang['Backup_options'] = 'Backupindstillinger';
$lang['Start_backup'] = 'Start backup';
$lang['Full_backup'] = 'Fuld backup';
$lang['Structure_backup'] = 'Kun Struktur-backup';
$lang['Data_backup'] = 'Kun Data-backup';
$lang['Additional_tables'] = 'Yderligere Tabeller';
$lang['Gzip_compress'] = 'Gzip-komprimér fil';
$lang['Select_file'] = 'Vælg en fil';
$lang['Start_Restore'] = 'Start Genopret';

$lang['Restore_success'] = 'Databasen er blevet korrekt genoprettet.<br /><br />Dit forum skulle nu være i den tilstand, det var, da backuppen blev foretaget';
$lang['Backup_download'] = 'Din download vil begynde om kort tid, vent venligst til den begynder';
$lang['Backups_not_supported'] = 'Beklager, backups af databaser fra dit database-system understøttes på nuværende tidspunkt ikke';

$lang['Restore_Error_uploading'] = 'Der skete en fejl under upload af backup-filen';
$lang['Restore_Error_filename'] = 'Der er et problem med filens navn, prøv venligst med en alternativ fil';
$lang['Restore_Error_decompress'] = 'Gzip-filen kan ikke dekomprimeres, upload venligst en ren tekstversion';
$lang['Restore_Error_no_file'] = 'Ingen fil blev uploaded';


//
// Auth pages
//
$lang['Select_a_User'] = 'Vælg en bruger';
$lang['Select_a_Group'] = 'Vælg en gruppe';
$lang['Select_a_Forum'] = 'Vælg et forum';
$lang['Auth_Control_User'] = 'Brugerrettigheder kontrolside'; 
$lang['Auth_Control_Group'] = 'Grupperettigheder kontrolside'; 
$lang['Auth_Control_Forum'] = 'Forumrettigheder kontrolside';
$lang['Look_up_User'] = 'Slå brugeren op'; 
$lang['Look_up_Group'] = 'Slå gruppen op'; 
$lang['Look_up_Forum'] = 'Vis forum'; 

$lang['Group_auth_explain'] = 'Her kan du ændre rettighederne og redaktørstatus for hver enkelt brugergruppe. Glem ikke når du ændrer grupperettigheder, at individuelle brugerrettigheder måske stadig tillader at brugeren har adgang til forummerne, etc. Du bliver advaret, hvis dette er tilfældet.';
$lang['User_auth_explain'] = 'Her kan du ændre rettighederne og redaktørstatus for hver enkelt bruger. Glem ikke når du ændrer brugerrettigheder, at grupperettigheder måske stadig tillader at brugeren har adgang til forummerne, etc. Du bliver advaret, hvis dette er tilfældet.';
$lang['Forum_auth_explain'] = 'Her kan du ændre autoriseringsniveauer for de enkelte fora. Du har både en simpel og avanceret metode til rådighed. Den avancerede metode tillader større kontrol af hvert enkelt forum. Husk, at når du ændrer forummernes autoriseringsniveauerne, påvirker det hvilke brugere der kan udføre de forskellige ting i dem.';

$lang['Simple_mode'] = 'Simpel metode';
$lang['Advanced_mode'] = 'Avanceret metode';
$lang['Moderator_status'] = 'Redaktør status';

$lang['Allowed_Access'] = 'Tilladt adgang';
$lang['Disallowed_Access'] = 'Nægtet adgang';
$lang['Is_Moderator'] = 'Er redaktør';
$lang['Not_Moderator'] = 'Er ikke redaktør';

$lang['Conflict_warning'] = 'Advarsel om autorisationskonflikt';
$lang['Conflict_access_userauth'] = 'Denne bruger har stadig adgangsrettigheder til dette forum via et gruppemedlemsskab. Du skal nok ændre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre at vedkommende har adgangsrettigheder. Gruppens rettigheder (og forummerne involveret) er nævnt herunder.';
$lang['Conflict_mod_userauth'] = 'Denne bruger har stadig redaktørrettigheder til dette forum via et gruppemedlemsskab. Du skal nok ændre gruppens rettigheder eller fjerne denne bruger fra gruppen, for at forhindre at vedkommende har redaktørrettigheder. Gruppens rettigheder (og forummerne involveret) er nævnt herunder.';

$lang['Conflict_access_groupauth'] = 'Den følgende bruger (eller brugere) har stadig adgangsrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have adgangsrettigheder. Brugernes rettigheder (og forummerne involveret) er nævnt herunder.';
$lang['Conflict_mod_groupauth'] = 'Den følgende bruger (eller brugere) har stadig redaktørrettigheder til dette forum via deres brugerrettigheder. Du skal nok brugerrettighederne for at forhindre dem i, at have redaktørrettigheder. Brugernes rettigheder (og forummerne involveret) er nævnt herunder.';

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
$lang['Forum_MOD'] = 'REDAKTØR';
$lang['Forum_ADMIN'] = 'ADMIN';

$lang['View'] = 'Se';
$lang['Read'] = 'Læse';
$lang['Post'] = 'Indlæg';
$lang['Reply'] = 'Svar';
$lang['Edit'] = 'Ændre';
$lang['Delete'] = 'Slet';
$lang['Sticky'] = 'Opslag';
$lang['Announce'] = 'Bekendtgøre'; 
$lang['Vote'] = 'Stem';
$lang['Pollcreate'] = 'Opret afstemning';

$lang['Permissions'] = 'Rettigheder';
$lang['Simple_Permission'] = 'Simpel Rettighed';

$lang['User_Level'] = 'Brugerniveau'; 
$lang['Auth_User'] = 'Bruger';
$lang['Auth_Admin'] = 'Administrator';
$lang['Group_memberships'] = 'Medlemsskaber til brugergrupper';
$lang['Usergroup_members'] = 'Denne gruppe har følgende medlemmer';

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
$lang['Ban_explain'] = 'Her kan du kontrollere bandlysning af brugere. Du kan opnå dette ved enten at bandlyse en specifik bruger, en eller flere IP-adresser eller domænenavne. Disse metoder forhindrer en bruger i overhovedet at få adgang til dit forums indeksside. For at forhindre at en bruger registrerer sig under en andet brugernavn, kan du også bandlyse en email-adresse. Husk, bandlysning af en emailadresse vil ikke forhindre brugeren i at logge på eller komme med nye indlæg på dit forum, du skal bruge en af de førnævnte metoder for at forhindre dette.';
$lang['Ban_explain_warn'] = 'Bemærk venligst, at hvis du indtaster en række IP-adresser vil dette resultere i, at alle adresserne mellem start og slut bliver tilføjet listen over bandlyste IP-adresser. Forsøg så vidt muligt at minimere antallet af adresser tilføjet til databasen. Hvis du virkelig vil indtaste en række adresser, så prøv at minimere rækken eller endnu bedre, indtast specifikke adresser.';

$lang['Select_username'] = 'Vælg et brugernavn';
$lang['Select_ip'] = 'Vælg en IP-adresse';
$lang['Select_email'] = 'Vælg en email-adresse';

$lang['Ban_username'] = 'Bandlys en eller flere specifikke brugere';
$lang['Ban_username_explain'] = 'Du kan bandlyse flere brugere på en gang ved at bruge den rette kombination af mus og tastatur for din computer og browser';

$lang['Ban_IP'] = 'Bandlys en eller flere IP-adresser eller domænenavne';
$lang['IP_hostname'] = 'IP-adresser eller domænenavne';
$lang['Ban_IP_explain'] = 'For at angive flere IP adresser eller domænenavne skal du adskille dem med kommaer. For at angive en række IP adresser skal du adskille starten og slutningen med en bindestreg (-), for at angive en joker skal du bruge *';

$lang['Ban_email'] = 'Bandlys en eller flere adresser';
$lang['Ban_email_explain'] = 'For at angive flere email adresser skal du adskille dem med kommaer. For at angive en joker skal du bruge *, for eksempel *@hotmail.com';

$lang['Unban_username'] = 'Ophæv bandlysning på en eller flere brugere';
$lang['Unban_username_explain'] = 'Du kan ophæve bandlysning af flere brugere på en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.';

$lang['Unban_IP'] = 'Ophæv bandlysning på en eller flere IP-adresser';
$lang['Unban_IP_explain'] = 'Du kan ophæve bandlysning på en eller flere IP-adresser på en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.';

$lang['Unban_email'] = 'Ophæv bandlysning på en eller flere emailadresser.';
$lang['Unban_email_explain'] = 'Du kan ophæve bandlysning på flere emailadresser på en gang, ved at bruge den passende kombination af mus og tastatur til din computer og browser.';

$lang['No_banned_users'] = 'Ingen bandlyste brugernavne';
$lang['No_banned_ip'] = 'Ingen bandlyste IP-adresser';
$lang['No_banned_email'] = 'Ingen bandlyste emailadresser';

$lang['Ban_update_sucessful'] = 'Listen med oplysningerne om bandlysninger er korrekt opdateret.';
$lang['Click_return_banadmin'] = 'Klik %sher%s for at vende tilbage til Kontrol af bandlysninger';


//
// Configuration
//
$lang['General_Config'] = 'Generel konfiguration';
$lang['Config_explain'] = 'Nedenstående skema giver dig mulighed for at tilpasse alle de generelle forumindstillinger. For Bruger og Forumindstilninger, brug de relaterende links i venstre side.';

$lang['Click_return_config'] = 'Klik %sher%s for at vende tilbage til Generel konfiguration';

$lang['General_settings'] = 'Generelle forumindstillinger';
$lang['Server_name'] = 'Domænenavn';
$lang['Server_name_explain'] = 'Domænet dette forum ligger på, feks. minside.dk';
$lang['Script_path'] = 'Sti til forummet';
$lang['Script_path_explain'] = 'Stien til phpBB2 på domænenavnet, feks. /forum/ eller /phpBB2/';
$lang['Server_port'] = 'Server Port';
$lang['Server_port_explain'] = 'Porten hvorpå din server kører. Det er normalt 80, ændres kun hvis nødvendigt';
$lang['Site_name'] = 'Sidens navn';
$lang['Site_desc'] = 'Beskrivelse af siden';
$lang['Board_disable'] = 'Slå forummet fra';
$lang['Board_disable_explain'] = 'Dette vil gøre forummet utilgængeligt for brugere. Du må ikke logge ud, når du har slået forummet fra. Du vil ikke kunne logge på igen! Du kan dog ændre denne status direkte i databasen og derigennem genaktivere forummet.';
$lang['Acct_activation'] = 'Aktivering af Konto';
$lang['Acc_None'] = 'Ingen'; // These three entries are the type of activation
$lang['Acc_User'] = 'Bruger';
$lang['Acc_Admin'] = 'Administrator';

$lang['Abilities_settings'] = 'Generelle Bruger- og Forumindstillinger';
$lang['Max_poll_options'] = 'Maksimum antal afstemningsmuligheder';
$lang['Flood_Interval'] = 'Sekunder mellem indlæg';
$lang['Flood_Interval_explain'] = 'Antal sekunder en bruger skal vente, før et nyt indlæg kan skrives.';
$lang['Board_email_form'] = 'Bruger-email via forum';
$lang['Board_email_form_explain'] = 'Brugere kan sende hinanden email via dette forum';
$lang['Topics_per_page'] = 'Emner pr. side';
$lang['Posts_per_page'] = 'Indlæg pr. side';
$lang['Hot_threshold'] = 'Indlæg for populære emner';
$lang['Default_style'] = 'Standard layout';
$lang['Override_style'] = 'Overskriv brugers valg';
$lang['Override_style_explain'] = 'Erstatter brugernes valg med det, der er standard';
$lang['Default_language'] = 'Standard-sprog';
$lang['Date_format'] = 'Dato-format';
$lang['System_timezone'] = 'Tidszone';
$lang['Enable_gzip'] = 'Slå GZip-komprimering til';
$lang['Enable_prune'] = 'Slå forumbeskæring til';
$lang['Allow_HTML'] = 'Tillad HTML';
$lang['Allow_BBCode'] = 'Tillad BBCode';
$lang['Allowed_tags'] = 'Tilladte HTML kommandoer (tags)';
$lang['Allowed_tags_explain'] = 'Adskil kommandoer med kommaer';
$lang['Allow_smilies'] = 'Tillad smilies';
$lang['Smilies_path'] = 'Adressen hvor dine smilies opbevares';
$lang['Smilies_path_explain'] = 'Adressen under din phpBB folder, f.eks. images/smilies';
$lang['Allow_sig'] = 'Tillad underskrifter';
$lang['Max_sig_length'] = 'Maksimal længde på underskrifter';
$lang['Max_sig_length_explain'] = 'Maksimale antal tegn i brugernes underskrifter';
$lang['Allow_name_change'] = 'Tillad, at brugerne kan ændre brugernavn';

$lang['Avatar_settings'] = 'Avatar-indstillinger';
$lang['Allow_local'] = 'Slå galleri-avatars til';
$lang['Allow_remote'] = 'Slå udefra avatars til';
$lang['Allow_remote_explain'] = 'Avatars, der befinder sig på en anden hjemmeside';
$lang['Allow_upload'] = 'Slå uploading af avatar til';
$lang['Max_filesize'] = 'Maksimal størrelse på avatar-filer';
$lang['Max_filesize_explain'] = 'Gælder de avatars, der uploades';
$lang['Max_avatar_size'] = 'Maksimal størrelse på avatars';
$lang['Max_avatar_size_explain'] = '(Højde x Bredde i pixels)';
$lang['Avatar_storage_path'] = 'Adressen hvor avatars opbevares';
$lang['Avatar_storage_path_explain'] = 'Adressen under din phpBB folder, f.eks. images/avatars';
$lang['Avatar_gallery_path'] = 'Adressen på avatar-galleriet';
$lang['Avatar_gallery_path_explain'] = 'Adressen under din phpBB folder, f.eks. images/avatars/gallery';

$lang['COPPA_settings'] = 'COPPA-indstillinger';
$lang['COPPA_fax'] = 'COPPA-faxnummer';
$lang['COPPA_mail'] = 'COPPA-adresse';
$lang['COPPA_mail_explain'] = 'Dette er adressen, hvortil forældre kan sende COPPA-blanketterne';

$lang['Email_settings'] = 'Email-indstillinger';
$lang['Admin_email'] = 'Email adresse på administrator';
$lang['Email_sig'] = 'Email underskrift';
$lang['Email_sig_explain'] = 'Dette tekst vil slutte alle emails, afsendt af forummet';
$lang['Use_SMTP'] = 'Brug en SMTP Server til email';
$lang['Use_SMTP_explain'] = 'Vælg ja hvis du vil, eller skal, sende email via en specifik server istedet for den normale email funktion.';
$lang['SMTP_server'] = 'SMTP server adresse';
$lang['SMTP_username'] = 'SMTP brugernavn';
$lang['SMTP_username_explain'] = 'Indtast kun et brugernavn, hvis din smtp server kræver det';
$lang['SMTP_password'] = 'SMTP kodeord';
$lang['SMTP_password_explain'] = 'Indtast kun et kodeord, hvis din smtp server kræver det';

$lang['Disable_privmsg'] = 'Private beskeder';
$lang['Inbox_limits'] = 'Maksimale antal indlæg i Indbakke';
$lang['Sentbox_limits'] = 'Maksimale antal indlæg i Sendt-bakken';
$lang['Savebox_limits'] = 'Maksimale antal indlæg i Gemt-bakken';

$lang['Cookie_settings'] = 'Cookie-indstillinger';
$lang['Cookie_settings_explain'] = 'Disse kontrollerer hvordan en cookie defineres af en browser. I de fleste tilfælde skulle standard indstillingerne være gode nok. Hvis du har brug for at ændre dem, så pas på, forkerte indstillinger kan resultere i, at brugere ikke kan logge på.';
$lang['Cookie_domain'] = 'Cookie domæne';
$lang['Cookie_name'] = 'Cookie navn';
$lang['Cookie_path'] = 'Cookie adresse';
$lang['Cookie_secure'] = 'Cookie sikkerhed [ https ]';
$lang['Cookie_secure_explain'] = 'Slå dette til hvis din server kører via SSL, ellers lad det være slået fra';
$lang['Session_length'] = 'Længden på en Session [ sekunder ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Slå visuel bekræftelse til';
$lang['Visual_confirm_explain'] = 'Kræver at brugeren indtaster en kode defineret af et billede ved registrering.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Tillad automatiske logins';
$lang['Allow_autologin_explain'] = 'Afgør om brugere har lov til at vælge at blive logget automatisk ind når de besøger forummet';
$lang['Autologin_time'] = 'Automatisk loginnøgle udløbstid';
$lang['Autologin_time_explain'] = 'Hvor længe en autologin-nøgle er gyldig i dage hvis brugeren ikke besøger forummet. Sæt til nul for at slå udløb fra.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Søgningsinterval';
$lang['Search_Flood_Interval_explain'] = 'Antal sekunder en bruger skal vente mellem søgninger';

//
// Forum Management
//
$lang['Forum_admin'] = 'Forumadministration';
$lang['Forum_admin_explain'] = 'Fra denne side kan du tilføje, slette, ændre, omorganisere og gensynkronisere kategorier og forummer.';
$lang['Edit_forum'] = 'Ændre forum';
$lang['Create_forum'] = 'Opret nyt forum';
$lang['Create_category'] = 'Opret ny kategori';
$lang['Remove'] = 'Fjern';
$lang['Action'] = 'Udfør';
$lang['Update_order'] = 'Opdatér sortering';
$lang['Config_updated'] = 'Forumkonfiguration korrekt opdateret';
$lang['Edit'] = 'Ændre';
$lang['Delete'] = 'Slet';
$lang['Move_up'] = 'Ryk op';
$lang['Move_down'] = 'Ryk ned';
$lang['Resync'] = 'Re-synkronisér';
$lang['No_mode'] = 'Ingen metode blev valgt';
$lang['Forum_edit_delete_explain'] = 'Skemaet nedenfor gør at du kan tilpasse alle de generelle forumindstillinger. For Bruger og det enkelte Forums indstillinger skal du bruge linkene til venstre.';

$lang['Move_contents'] = 'Flyt alt indhold';
$lang['Forum_delete'] = 'Slet Forum';
$lang['Forum_delete_explain'] = 'Skemaet nedenfor lader dig slette et forum (eller en kategori) og bestemme, hvor du vil placere alle emner (eller fora) det/den indeholdt.';

$lang['Status_locked'] = 'Låst';
$lang['Status_unlocked'] = 'Låst op';
$lang['Forum_settings'] = 'Generelle forumindstillinger';
$lang['Forum_name'] = 'Forummets navn';
$lang['Forum_desc'] = 'Beskrivelse';
$lang['Forum_status'] = 'Forum status';
$lang['Forum_pruning'] = 'Automatisk sletning';

$lang['prune_freq'] = 'Tjek for emners alder hver';
$lang['prune_days'] = 'Fjern emner, der ikke er blevet skrevet indlæg til i';
$lang['Set_prune_data'] = 'Du har slået automatisk sletning til for dette forum, men du indtastede ikke et antal dage, hvorefter emner skal slettes. Gå venligst tilbage og gør dette.';

$lang['Move_and_Delete'] = 'Flyt og Slet';

$lang['Delete_all_posts'] = 'Slet alle indlæg';
$lang['Nowhere_to_move'] = 'Ingen steder at flytte til';

$lang['Edit_Category'] = 'Ændre kategori';
$lang['Edit_Category_explain'] = 'Brug dette skema til at ændre navnet på en kategori.';

$lang['Forums_updated'] = 'Forum- og kategoriinformation korrekt opdateret';

$lang['Must_delete_forums'] = 'Du skal slette alle fora, før du kan slette denne kategori';

$lang['Click_return_forumadmin'] = 'Klik %sher%s for at vende tilbage til Forumadministration';


//
// Smiley Management
//
$lang['smiley_title'] = 'Smilesværktøjer';
$lang['smile_desc'] = 'Fra denne side kan du tilføje, slette og ændre de smileys dine brugere kan bruge i deres indlæg og private beskeder.';

$lang['smiley_config'] = 'Smileyindstillinger';
$lang['smiley_code'] = 'Smileykode';
$lang['smiley_url'] = 'Smiley-billedfil';
$lang['smiley_emot'] = 'Smiley-udtryk';
$lang['smile_add'] = 'Tilføj en ny smiley';
$lang['Smile'] = 'Smil';
$lang['Emotion'] = 'Udtryk';

$lang['Select_pak'] = 'Vælg pakkefil (.pak)';
$lang['replace_existing'] = 'Erstat eksisterende smiley';
$lang['keep_existing'] = 'Behold eksisterende smiley';
$lang['smiley_import_inst'] = 'Du skal pakke zipfilen ud og uploade alle filerne til den pågældende smiley-folder i din installation.  Vælg herefter de korrekte oplysninger på dette skema for at importere smileypakken.';
$lang['smiley_import'] = 'Smiley-pakke-import';
$lang['choose_smile_pak'] = 'Vælg en smileypakke-fil (.pak)';
$lang['import'] = 'Importér smileys';
$lang['smile_conflicts'] = 'Hvad skal gøres i tilfælde af konflikter';
$lang['del_existing_smileys'] = 'Slet eksisterende smileys inden import';
$lang['import_smile_pack'] = 'Importér smiley-pakke';
$lang['export_smile_pack'] = 'Opret smiley-pakke';
$lang['export_smiles'] = 'For at oprette en smiley-pakke med dine nuværende installerede smileys, klik %sher%s for at downloade smiles.pak filen. Giv den et passende navn og sørg for at den beholder .pak efternavnet. Lav så en zipfil der indeholder alle smiley-billederne plus denne .pak konfigurationsfil.';

$lang['smiley_add_success'] = 'Smileyen blev korrekt tilføjet';
$lang['smiley_edit_success'] = 'Smileyen blev korrekt opdateret';
$lang['smiley_import_success'] = 'Smiley-pakken blev korrekt importeret!';
$lang['smiley_del_success'] = 'Smileyen blev korrekt fjernet';
$lang['Click_return_smileadmin'] = 'Klik %sher%s for at vende tilbage til smileyadministration';

$lang['Confirm_delete_smiley'] = 'Er du sikker på at du vil slette denne smiley?';

//
// User Management
//
$lang['User_admin'] = 'Brugeradministration';
$lang['User_admin_explain'] = 'Her kan du ændre dine brugeres informationer og specifikke indstillinger. For at ændre brugernes rettigheder, brug venligst bruger- og gruppe-indstillingssystemet.';

$lang['Look_up_user'] = 'Slå bruger op';

$lang['Admin_user_fail'] = 'Brugerens profil kunne ikke opdaters.';
$lang['Admin_user_updated'] = 'Brugerens profil blev korrekt opdateret.';
$lang['Click_return_useradmin'] = 'Klik %sher%s for at vende tilbage til Bruger Administration';

$lang['User_delete'] = 'Slet denne bruger';
$lang['User_delete_explain'] = 'Klik her for at slette denne bruger. Det er permanent.';
$lang['User_deleted'] = 'Brugeren blev korrekt slettet.';

$lang['User_status'] = 'Brugeren er aktiv';
$lang['User_allowpm'] = 'Kan sende private beskeder';
$lang['User_allowavatar'] = 'Kan vise en avatar';

$lang['Admin_avatar_explain'] = 'Her kan du se og slette brugerens nuværende avatar.';

$lang['User_special'] = 'Specielle kun-administrator felter';
$lang['User_special_explain'] = 'Disse felter kan ikke ændres af brugerne. Her kan du bestemme deres status og ændre indstillinger, de ikke har adgang til.';


//
// Group Management
//
$lang['Group_administration'] = 'Gruppeadministration';
$lang['Group_admin_explain'] = 'Fra dette panel kan du administere alle dine brugergrupper, du kan slette, oprette og ændre eksisterende grupper. Du kan vælge redaktører, slå grupper til og fra og bestemme gruppens navn og beskrivelse';
$lang['Error_updating_groups'] = 'Der opstod en fejl under opdateringen af grupperne';
$lang['Updated_group'] = 'Gruppen blev korrekt opdateret';
$lang['Added_new_group'] = 'Den nye gruppe blev korrekt oprettet';
$lang['Deleted_group'] = 'Gruppen blev korrekt slettet';
$lang['New_group'] = 'Opret en ny gruppe';
$lang['Edit_group'] = 'Ændre gruppe';
$lang['group_name'] = 'Gruppens navn';
$lang['group_description'] = 'Gruppens beskrivelse';
$lang['group_moderator'] = 'Grupperedaktør';
$lang['group_status'] = 'Gruppestatus';
$lang['group_open'] = 'Åben gruppe';
$lang['group_closed'] = 'Lukket gruppe';
$lang['group_hidden'] = 'Skjult gruppe';
$lang['group_delete'] = 'Slet gruppe';
$lang['group_delete_check'] = 'Slet denne gruppe';
$lang['submit_group_changes'] = 'Tilføj ændringer';
$lang['reset_group_changes'] = 'Nulstil ændringer';
$lang['No_group_name'] = 'Du skal vælge et navn til denne gruppe';
$lang['No_group_moderator'] = 'Du skal vælge en redaktør til denne gruppe';
$lang['No_group_mode'] = 'Du skal vælge en status for denne gruppe, åben eller lukket';
$lang['No_group_action'] = 'Ingen metode valgt';
$lang['delete_group_moderator'] = 'Slet den gamle grupperedaktør?';
$lang['delete_moderator_explain'] = 'Hvis du ændrer grupperedaktøren, sæt kryds i dette felt for at slette den gamle redaktør fra gruppen. Hvis du ikke sætter kryds, bliver brugeren et normalt medlem af gruppen.';
$lang['Click_return_groupsadmin'] = 'Klik %sher%s for at vende tilbage til Gruppeadministration.';
$lang['Select_group'] = 'Vælg en gruppe';
$lang['Look_up_group'] = 'Vis Gruppe';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Forumbeskæring';
$lang['Forum_Prune_explain'] = 'Dette vil slette enhvert emne, som der ikke er skrevet indlæg til, i det antal dage du vælger. Hvis du ikke indtaster et nummer, bliver alle emner slettet. Emner, hvor der stadig er åbne afstemninger, vil ikke blive slettet, ligesom Annonceringer heller ikke slettes. Du skal slette disse emner manuelt.';
$lang['Do_Prune'] = 'Udfør beskæring';
$lang['All_Forums'] = 'Alle Fora';
$lang['Prune_topics_not_posted'] = 'Slet emner uden nye indlæg i';
$lang['Topics_pruned'] = 'Emner slettet';
$lang['Posts_pruned'] = 'Indlæg slettet';
$lang['Prune_success'] = 'Vellykket beskæring af fora';


//
// Word censor
//
$lang['Words_title'] = 'Censurering af ord';
$lang['Words_explain'] = 'Fra denne side kan du tilføje, ændre og fjerne ord, der automatisk censureres i dine fora. Folk kan heller ikke registrere med et brugernavn, der indeholder disse ord. Jokere (*) kan bruges i ordfelterne, f.eks. *test* vil matche utestet, test* vil matche tester, *test ville matche utest.';
$lang['Word'] = 'Ord';
$lang['Edit_word_censor'] = 'Ændre ordcensurér';
$lang['Replacement'] = 'Erstatning';
$lang['Add_new_word'] = 'Tilføj nyt ord';
$lang['Update_word'] = 'Opdatér ordcensurér';

$lang['Must_enter_word'] = 'Du skal indtaste et ord og det ords erstatning';
$lang['No_word_selected'] = 'Intet ord er valgt til ændring';

$lang['Word_updated'] = 'Den valgte ordcensur blev korrekt opdateret';
$lang['Word_added'] = 'Ordcensuren blev korrekt tilføjet';
$lang['Word_removed'] = 'Den valgte ordcensur blev korrekt fjernet';

$lang['Click_return_wordadmin'] = 'Klik %sher%s for at vende tilbage til Censurering af ord';

$lang['Confirm_delete_word'] = 'Er du sikker på at du vil slette denne ordcensur?';

//
// Mass Email
//
$lang['Mass_email_explain'] = 'Her kan du sende email til alle dine brugere eller alle brugere i en specifik gruppe. For at gøre dette bliver en email sendt til alle de administrative email adresser, og en kopi sendes til alle modtagere. Hvis du emailer en stor gruppe mennesker, skal du være tålmodig, da det godt kan tage lang tid at sende mailen til en stor gruppe. Stop ikke siden når den er halvvejs, da processen vil gå i stå, og ikke alle i den angivne gruppe vil modtage emailen. Du får at vide, når mailen er færdigsendt.';
$lang['Compose'] = 'Skriv';

$lang['Recipients'] = 'Modtagere';
$lang['All_users'] = 'Alle Brugere';

$lang['Email_successfull'] = 'Din besked er afsendt';
$lang['Click_return_massemail'] = 'Klik %sher%s for at vende tilbage til Gruppe-email';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Rang-administration';
$lang['Ranks_explain'] = 'Ved at bruge denne side kan du tilføje, ændre, se og slette rang-niveauer. Du kan også oprette specifikke niveauer, som kan gives til en bruger gennem brugerværktøjerne.';

$lang['Add_new_rank'] = 'Tilføj ny rang';

$lang['Rank_title'] = 'Rangtitel';
$lang['Rank_special'] = 'Lav til Speciel Rang';
$lang['Rank_minimum'] = 'Minimum Indlæg';
$lang['Rank_maximum'] = 'Maksimum Indlæg';
$lang['Rank_image'] = 'Rang-billede (Relativt ift. phpBB2 hovedfolderen)';
$lang['Rank_image_explain'] = 'Bestem her, om et lille billede skal bruges sammen med rangen.';

$lang['Must_select_rank'] = 'Du skal vælge en rang';
$lang['No_assigned_rank'] = 'Ingen speciel rang tilvalgt';

$lang['Rank_updated'] = 'Rangen blev korrekt opdateret';
$lang['Rank_added'] = 'Rangen blev korrekt tilføjet';
$lang['Rank_removed'] = 'Rangen blev korrekt slettet';
$lang['No_update_ranks'] = 'Rangen blev korrekt slettet. Brugerkonti med denne rang blev dog ikke opdateret.  Du er nødt til manuelt at nulstille rangen for disse konti';

$lang['Click_return_rankadmin'] = 'Klik %sher%s for at vende tilbage til Niveau Administration';

$lang['Confirm_delete_rank'] = 'Er du sikker på at du vil slette denne rang';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Forbyd Brugernavn Værktøjer';
$lang['Disallow_explain'] = 'Her kan du kontrollere, hvilke brugernavne der er tilladt. Forbudte brugernavne må indeholde en joker, betegnet som et *. Bemærk venligst, at du ikke kan forbyde et brugernavn, der allerede er registreret, du skal først slette navnet og derefter forbyde det.';

$lang['Delete_disallow'] = 'Slet';
$lang['Delete_disallow_title'] = 'Fjern et forbudt brugernavn';
$lang['Delete_disallow_explain'] = 'Du kan fjerne et forbudt brugernavn ved at vælge brugernavnet fra denne liste og trykke på knappen';

$lang['Add_disallow'] = 'Tilføj';
$lang['Add_disallow_title'] = 'Tilføj et forbudt brugernavn';
$lang['Add_disallow_explain'] = 'Du kan forbyde et brugernavn ved at bruge jokeren * istedet for et tegn';

$lang['No_disallowed'] = 'Ingen forbudte brugernavne';

$lang['Disallowed_deleted'] = 'Det forbudte brugernavn blev succesfuldt fjernet';
$lang['Disallow_successful'] = 'Det forbudte brugernavn blev korrekt tilføjet';
$lang['Disallowed_already'] = 'Navnet du indtastede kunne ikke forbydes. Enten eksisterer det allerede i listen, eksisterer i ordcensureringslisten, eller en bruger har det brugernavn';

$lang['Click_return_disallowadmin'] = 'Klik %sher%s for at vende tilbage til Forbyd Brugernavn Værktøjer';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Layoutadministration';
$lang['Styles_explain'] = 'Ved brug af disse værktøjer kan du tilføje, fjerne og ændre layouts (skabeloner og design), der er tilgængelige for dine brugere';
$lang['Styles_addnew_explain'] = 'Den følgende liste indeholder alle de designs, der er tilgængelige for de skabeloner du har. Navnene på listen er endnu ikke installeret i phpBB databasen. For at installere skal du bare klikke på installér-linket ved siden af navnet';

$lang['Select_template'] = 'Vælg en skabelon';

$lang['Style'] = 'Layout';
$lang['Template'] = 'Skabelon';
$lang['Install'] = 'Installér';
$lang['Download'] = 'Download';

$lang['Edit_theme'] = 'Ændre design';
$lang['Edit_theme_explain'] = 'I skemaet nedenunder kan du ændre indstillingerne for det valgte design';

$lang['Create_theme'] = 'Opret design';
$lang['Create_theme_explain'] = 'Brug skemaet nedenunder for at oprette et nyt design til den valgte skabelon. Når du indtaster farver (for hvilket du skal bruge hexadecimal systemet) skal du ikke bruge # tegnet, f.eks. CCCCCC er brugbart, #CCCCCC er ikke';

$lang['Export_themes'] = 'Eksportér designs';
$lang['Export_explain'] = 'I dette panel kan du eksportere design-dataen for en valgt skabelon. Vælg skabelonen fra listen herunder, og databasen opretter design-konfigurationsfilen og forsøge at gemme den i den valgte skabelons bibliotek. Hvis den ikke kan gemme filen, vil du få muligheden for at downloade den. For at databasen kan gemme filen, skal du give den lov til at gemme i biblioteket for den valgte skabelon. For mere information om dette, se phpBB2 Brugerguiden.';

$lang['Theme_installed'] = 'Det valgte design blev korrekt installeret.';
$lang['Style_removed'] = 'Det valgte design blev korrekt fjernet fra databasen. For permanent at fjerne dette design fra dit system, skal du slette designet fra dit skabelon bibliotek (templates).';
$lang['Theme_info_saved'] = 'Design informationen for den valgte skabelon er blevet gemt. Du skal nu give rettighederne tilbage i theme_info.cfg filen (og hvis du ønsker, sætte den valgte skabelons bibliotek) til skrivebeskyttet (read-only)';
$lang['Theme_updated'] = 'Det valgte design er opdateret. Du skal nu eksportere de nye designindstillinger';
$lang['Theme_created'] = 'Design oprettet. Du skal nu eksportere designet og design-konfigurationsfilen som backup eller til brug andetsteds.';

$lang['Confirm_delete_style'] = 'Er du sikker på at du vil slette dette layout';

$lang['Download_theme_cfg'] = 'Databasen kunne ikke skrive til design-informationsfilen. Klik på knappen nedenunder for at downloade filen. Når den er downloadet skal du uploade den i det bibliotek, der indeholder skabelon-filerne. Du kan så pakke filerne til distribution eller brug andetsteds, hvis du ønsker.';
$lang['No_themes'] = 'Skabelonen du valgte har ingen designs. For at oprette et nyt design skal du klikke på Opret nyt design i venstre side';
$lang['No_template_dir'] = 'Skabelon-biblioteket kunne ikke åbnes. Det er muligvis ikke læseligt af serveren eller også eksisterer det ikke.';
$lang['Cannot_remove_style'] = 'Du kan ikke fjerne layoutet eftersom det på nuværende tidspunkt er det layout, der er standard for forummet. Ændre standardlayoutet og prøv igen.';
$lang['Style_exists'] = 'Det valgte layout navn eksisterer allerede, gå venligst tilbage og vælg et andet.';

$lang['Click_return_styleadmin'] = 'Klik %sher%s for at vende tilbage til Layoutadministration';

$lang['Theme_settings'] = 'Designindstillinger';
$lang['Theme_element'] = 'Design-element';
$lang['Simple_name'] = 'Simpelt navn';
$lang['Value'] = 'Værdi';
$lang['Save_Settings'] = 'Gem indstillinger';

$lang['Stylesheet'] = 'CSS stilark';
$lang['Stylesheet_explain'] = 'Filnavn for CSS stilark der skal bruges til dette layout.';
$lang['Background_image'] = 'Baggrundsbillede';
$lang['Background_color'] = 'Baggrundsfarve';
$lang['Theme_name'] = 'Design-navn';
$lang['Link_color'] = 'Linkfarve';
$lang['Text_color'] = 'Tekstfarve';
$lang['VLink_color'] = 'Besøgt linkfarve';
$lang['ALink_color'] = 'Aktiv linkfarve';
$lang['HLink_color'] = 'Svæve-linkfarve';
$lang['Tr_color1'] = 'Tabelrække-farve 1';
$lang['Tr_color2'] = 'Tabelrække-farve 2';
$lang['Tr_color3'] = 'Tabelrække-farve 3';
$lang['Tr_class1'] = 'Tabelrække-klasse 1';
$lang['Tr_class2'] = 'Tabelrække-klasse 2';
$lang['Tr_class3'] = 'Tabelrække-klasse 3';
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
$lang['fontsize1'] = 'Skriftstørrelse 1';
$lang['fontsize2'] = 'Skriftstørrelse 2';
$lang['fontsize3'] = 'Skriftstørrelse 3';
$lang['fontcolor1'] = 'Skriftfarve 1';
$lang['fontcolor2'] = 'Skriftfarve 2';
$lang['fontcolor3'] = 'Skriftfarve 3';
$lang['span_class1'] = 'Span-klasse 1';
$lang['span_class2'] = 'Span-klasse 2';
$lang['span_class3'] = 'Span-klasse 3';
$lang['img_poll_size'] = 'Afstemningsbillede størrelse [px]';
$lang['img_pm_size'] = 'Private beskeder status størrelse [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Velkommen til phpBB 2-installationen';
$lang['Initial_config'] = 'Generel konfiguration';
$lang['DB_config'] = 'Databasekonfiguration';
$lang['Admin_config'] = 'Administratorkonfiguration';
$lang['continue_upgrade'] = 'Når du har downloadet din config-fil til din harddisk, kan du klikke "Fortsæt opgradering"-knappen nedenunder for at fortsætte opgraderingen. Vent venligst med at uploade config-filen indtil opgraderingen er færdig.';
$lang['upgrade_submit'] = 'Fortsæt opgradering';

$lang['Installer_Error'] = 'En fejl opstod under installationen';
$lang['Previous_Install'] = 'En tidligere installation er fundet';
$lang['Install_db_error'] = 'En fejl opstod under forsøget på at opgradere databasen';

$lang['Re_install'] = 'Din tidligere installation er stadig aktiv. <br /><br />Hvis du vil geninstallere phpBB 2 skal du klikke på Ja-knappen herunder. Bemærk venligst at hvis du gør det, vil det slette alle eksisterende data. Der laves ingen backups! Det administrator-brugernavn og -kodeord du har brugt til at logge på forummet vil blive genskabt efter geninstallationen. Ingen andre indstillinger bliver gemt. <br /><br />Tænk dig om inden du trykker Ja!';

$lang['Inst_Step_0'] = 'Tak fordi du valgte phpBB 2. For at færdiggøre installationen skal du indtaste de relevante oplysninger herunder. Bemærk venligst at den database du installerer i, skal være oprettet på forhånd. Hvis du installerer en database der bruger ODBC, f.eks. MS Access, skal du oprette en DSN for den inden du fortsætter.';

$lang['Start_Install'] = 'Start installation';
$lang['Finish_Install'] = 'Færdiggør installation';

$lang['Default_lang'] = 'Standardsproget på forummet';
$lang['DB_Host'] = 'Database server hostname / DSN';
$lang['DB_Name'] = 'Navnet på din database';
$lang['DB_Username'] = 'Database brugernavn';
$lang['DB_Password'] = 'Database kodeord';
$lang['Database'] = 'Din database';
$lang['Install_lang'] = 'Vælg sprog for installationen';
$lang['dbms'] = 'Databasetype';
$lang['Table_Prefix'] = 'Præfiks for tabeller i databasen';
$lang['Admin_Username'] = 'Administrator-brugernavn';
$lang['Admin_Password'] = 'Administrator-kodeord';
$lang['Admin_Password_confirm'] = 'Administrator-kodeord [ Bekræft ]';

$lang['Inst_Step_2'] = 'Dit administrator brugernavn er oprettet.  På nuværende tidspunkt er den basale installation færdig. Du bliver nu sendt videre til en side, hvor du kan administrere din nye installation. Tjek venligst de Generelle Konfigurations indstillinger og lav de ønskede ændringer. Tak fordi du valgte phpBB 2.';

$lang['Unwriteable_config'] = 'Der kan i øjeblikket ikke skrives til din config-fil. En kopi af config-filen vil blive downloadet til dig, når du trykker på knappen nedenunder. Du skal uploade denne fil til det samme bibliotek phpBB 2 ligger i. Når dette er gjort, skal du logge på med dit administrator-navn og kodeord du valgte på det forrige skema, og gå ind på administrator-kontrolpanelet (et link vil være tilgængeligt nederst på hver side, når først du er logget på) for at tjekke den generelle konfiguration. Tak fordi du valgte phpBB 2.';
$lang['Download_config'] = 'Download config-fil';

$lang['ftp_choose'] = 'Vælg download metode';
$lang['ftp_option'] = '<br />Eftersom FTP-udvidelser er tilgængelige i denne version af PHP kan du også først prøve automatisk at uploade config-filen til det rette bibliotek.';
$lang['ftp_instructs'] = 'Du har valgt automatisk at uploade filen til det bibliotek, der indeholder phpBB 2.  Indtast venligst de krævede oplysninger nedenunder, så den automatiske uploading kan foretages. Bemærk at FTP adressen skal være den nøjagtige adresse via FTP til din phpBB2 installation, som hvis du brugte en FTP klient til at uploade filen.';
$lang['ftp_info'] = 'Indtast din FTP-information';
$lang['Attempt_ftp'] = 'Forsøg at uploade config-filen til det passende bibliotek';
$lang['Send_file'] = 'Bare send filen til mig og så uploader jeg den manuelt';
$lang['ftp_path'] = 'FTP adresse til phpBB2';
$lang['ftp_username'] = 'Dit FTP-brugernavn';
$lang['ftp_password'] = 'Dit FTP-kodeord';
$lang['Transfer_config'] = 'Start upload';
$lang['NoFTP_config'] = 'Forsøget på automatisk at uploade config-filen slog fejl. Download venligst filen og upload den manuelt.';

$lang['Install'] = 'Installér';
$lang['Upgrade'] = 'Opgradér';

$lang['Install_Method'] = 'Vælg installationsmetode';

$lang['Install_No_Ext'] = 'Php Konfigurationen på din server understøtter ikke den type af database, som du har valgt';

$lang['Install_No_PCRE'] = 'PhpBB2 kræver Perl-Compatible Regular Expressions-modulet til PHP, hvilket din php konfiguration ikke lader til at understøtte!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Din installation er fuldt ud opdateret, der er ingen tilgængelige opdateringer til din version af phpBB.';
$lang['Version_not_up_to_date'] = 'Din installation ser <b>ikke</b> ud til at være opdateret. Opdateringer er tilgængelige til din version af phpBB, besøg venligst <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> for at hente seneste version.';
$lang['Latest_version_info'] = 'Den senest tilgængelige version er <b>phpBB %s</b>. ';
$lang['Current_version_info'] = 'Du bruger <b>phpBB %s</b>. ';
$lang['Connect_socket_error'] = 'Kan ikke åbne en forbindelse til phpBB-serveren, med følgende fejlmelding:<br />%s';
$lang['Socket_functions_disabled'] = 'Kan ikke bruge socket funktioner.';
$lang['Mailing_list_subscribe_reminder'] = 'For seneste informationer om opdateringer til phpBB, hvorfor ikke <a href="http://www.phpbb.com/support/" target="_new">abbonnere på vores mailingliste</a> (engelsk).';
$lang['Version_information'] = 'Versionsinformation';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Tilladte loginforsøg';
$lang['Max_login_attempts_explain'] = 'Antallet af tilladte forum loginforsøg.';
$lang['Login_reset_time'] = 'Login låsningstid';
$lang['Login_reset_time_explain'] = 'Tid i minutter brugeren skal vente indtil vedkommende igen må logge ind efter at have overskredet antallet af tilladte loginforsøg.';

//
// That's all Folks!
// -------------------------------------------------

?>