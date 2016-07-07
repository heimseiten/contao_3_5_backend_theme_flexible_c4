# Backend-Theme "flexible_c4" für Contao 3.5

Ergänzt das "fexbile" Backend-Theme von Contao 3.5 indem die Icons und das Erscheinungsbild an das Backend-Theme von Contao 4.2 angeglichen wurden.

##Screenshot
![alt tag](http://share.heimseiten.de/flexible_c4.png)
http://share.heimseiten.de/flexible_c4.png

##Installation
flexible_c4.css + icons =>  /system/theme/

dcaconfig.php + initconfig.php  =>  /system/config/


Die Datei "flexible_c4.css" und der Ordner "icons" (entspricht dem Ordner "icons" aus dem Contao 4.2 Backend-Theme) müssen ins Verzeichnis /system/theme/ kopiert werden. Die Datei dcaconfig.php und initconfig.php in das Verzeichnis /system/config/.

Falls die vorhandenen Dateien dcaconfig.php und initconfig.php schon Anpassungen enthalten, sollten nur die Inhalte der Dateien übernommen werden.


##Besonderheiten
In den letzen Zeilen der flexible_c4.css wird der **Hintergrund dunkel** gestellt. Dies kann durch das löschen der Zeilen geändert werden.

Außerdem wird in den letzten Zeilen der flexible_c4.css die Artikelansicht in Contao so eingestellt, dass die **Seitennamen nicht mehr anklickbar** sind. Diese original Funktionalität von Contao führt bei den meisten meiner Kunden zu Verwirrungen. 
