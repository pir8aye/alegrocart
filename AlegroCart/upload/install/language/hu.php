<?php
// Heading
$_['heading_title']    = 'AlegroCart Telepítés';
$_['heading_step1']    = '1/3 Lépés - Az Adatbázis Részletei';
$_['heading_step2']    = '2/3 Lépés - Adminisztráció';
$_['heading_step3']    = 'Kész!';

// Error
$_['error_not_found']  = '%s nem található! (Ellenőrizze, hogy feltöltötte-e!)';
$_['error_not_777']    = '%s nem írható! (chmod a+w vagy chmod 777)';
$_['error_not_666']    = '%s nem írható! (chmod a+w vagy chmod 666)';
$_['error_php']        = 'PHP 5.0 vagy későbbi változat kell az AlegroCart telepítéséhez';
$_['error_session']    = 'Le kell tiltania a session.auto_start-ot a php.ini-ben az AlegroCart használatához';
$_['error_mysql']      = 'MySql kiterjesztés szükséges az AlegroCart futtatásához';
$_['error_gd']         = 'GD kiterjesztés szükséges az AlegroCart futtatásához';
$_['error_upload']     = 'A fájl feltöltést engedélyezni kell az AlegroCart futtatásához';
$_['error_zlib']       = 'ZLIB-et be kell tölteni a php.ini-ben az AlegroCart működéséhez';
$_['error']            = 'A következő hibák léptek fel:';
$_['error_fix']        = 'Kérjük, javítsa ki a fenti hibá(ka)t, a telepítés megszakadt!';
$_['error_dbhost']     = 'Az Adatbázis Helyét meg kell adni!';
$_['error_dbuser']     = 'Az Adatbázis Felhasználónevét meg kell adni!';
$_['error_dbname']     = 'Az Adatbázis Nevét meg kell adni!';
$_['error_dbconnect']  = 'A megadott felhasználónévvel és jelszóval nem lehetett kapcsolódni az adatbázis szerverhez.';
$_['error_dbperm']     = 'Az adatbázist nem lehet elérni. Ellenőrizze, hogy van-e jogosultsága, illetve létezik-e az adatbázis a szerveren.';
$_['error_sql']        = 'A telepító SQL fájl %s nem található.';
$_['error_new_admin_name']= 'Az admin könyvtár új nevét meg kell adni!';
$_['error_admin_uname']= 'Az Adminisztrátor nevét meg kell adni!';
$_['error_admin_passw']= 'Az Adminisztrátor jelszavát meg kell adni!';
$_['error_write']      = 'Nem lehet a(z) %s fájlba írni.';
$_['error_open']       = 'Nem lehet a(z) %s fájlt írásra megnyitni.';
$_['error_rename']     = 'Az admin könyvtárat nem sikerült átnevezni. Nevezze át manuálisan, pl. FTP kapcsolaton keresztül, majd frissítse az oldalt.';
$_['error_alphanumeric']= 'Az admin könyvtár új nevében csak az angol abc kisbetűi, az aláhúzás jel, a kötőjel és a számok engedélyezettek, szóköz használata nélkül.';
$_['error_length']     = 'Az admin könyvtár új neve legalább 5, de legfeljebb 15 karakterből álljon.';
$_['error_restricted'] = 'A \'%s\' nem engedélyezett név.';
$_['error_dir']        = 'Hiba a könyvtárszerkezetben.';
$_['error_post']       = 'A megadott könyvtárnév nem egyezik az átnevezettel.';

// Text
$_['ac']               = 'AlegroCart';
$_['acforum']          = 'AlegroCart Fórum';
$_['fresh']            = 'EZ ÚJ TELEPÍTÉSHEZ VALÓ! AZ ADATBÁZISA EL LESZ TÁVOLÍTVA!';
$_['database_details'] = 'Kérjük, adja meg adatbázis kapcsolatának részleteit.';
$_['dbhost']           = 'Adatbázis Helye:';
$_['dbuser']           = 'Adatbázis Felhasználóneve:';
$_['dbpassw']          = 'Adatbázis Jelszava:';
$_['dbname']           = 'Adatbázis Neve:';
$_['continue']         = 'Tovább';
$_['rename']           = 'Azért, hogy az adminisztrációs felületét elrejthessük a káros támadásoktól, kérjük adjon meg egy új nevet a fő admin könyvtár számára. E könyvtár nevének különböznie kell az \'admin\' vagy \'administration\' szavaktól, mivel ezek nem megengedettek ebben az új biztonsági rendszerben. A feltöltött admin könyvtár nevét átnevezzük erre a névre, így ez a könyvtár tartalmazza majd az adminisztártori felület minden fájlját.';
$_['new_admin']        = 'Az admin könyvtár új neve:';
$_['admin_details']    = 'Kérjük, adja meg az Adminisztrátor felhasználónevét és jelszavát.';
$_['uname']            = 'Felhasználónév:';
$_['passw']            = 'Jelszó:';
$_['success']          = 'A %s sikeresen frissítve lett.';
$_['config']           = 'Tegye a \'config.php\'-t nem írhatóvá (chmod go-w vagy chmod 644).';
$_['htaccess']         = 'Tegye a \'.htaccess\'-t nem írhatóvá (chmod vagy-w 644).';
$_['congrat']          = 'Gratulálunk! Sikeresen telepítette az AlegroCart-ot.';
$_['congrat_upg']      = 'Gratulálunk! Sikeresen frissítette az AlegroCart-ot.';
$_['shop']             = 'Online webáruház';
$_['admin']            = 'Adminisztrációs felület';
$_['method']           = 'A telepítés módja:';
$_['default_install']  = 'Alapértelmezett telepítés';
$_['clean_install']    = 'Tiszta telepítés';
$_['default_expl']     = 'Ez a módszer minta termékeket, kategóriákat, gyártókat, képeket és értékeléseket is telepíteni fog. Az AlegroCart teszteléséhez ajánljuk.';
$_['clean_expl']       = 'Ez a módszer minden terméket és minden termékkel kapcsolatos dolgot eltávolít. Egy üres, termékek nélküli webáruházat eredményez.';
$_['rename_expl']      = 'Csak az angol abc kisbetűi, az aláhúzás jel, a kötőjel és a számok engedélyezettek, szóköz használata nélkül. Az új név legalább 5, de legfeljebb 15 karakterből álljon.';
?>
