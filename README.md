# Backend-Theme "flexible_c4" für Contao 3.5

Ergänzt das "fexbile" Backend-Theme von Contao 3.5 indem die Icons und das Erscheinungsbild an das Backend-Theme von Contao 4.4 angeglichen wurden.

## Screenshot
![alt tag](http://share.heimseiten.de/flexible_c44.png)

## Installation
flexible_c4.css + icons + images =>  /system/themes/

initconfig.php  =>  /system/config/


Die Datei "flexible_c4.css", der Ordner "icons" (entspricht dem Ordner "icons" aus dem Contao 4.4 Backend-Theme) und der Ordner "images" (entspricht dem Ordner "images" aus dem Ordner /assets/contao/images in Contao 4.4) müssen ins Verzeichnis /system/themes/ kopiert werden. Die Datei initconfig.php in das Verzeichnis /system/config/.

Falls die vorhandene Datei initconfig.php schon Anpassungen enthält, sollten nur die Inhalte der Dateien übernommen werden ( if(TL_MODE == 'BE') { $GLOBALS['TL_CSS'][] = 'system/themes/flexible_c4.css'; } ).
