@echo off
:: Chemin vers le fichier de logs 
set LOG_FILE=Application\logs.txt

:: Vérifie si le fichier existe
if not exist "%LOG_FILE%" (
    echo Erreur : Le fichier %LOG_FILE% n'existe pas.
    exit /b 1
)

:: Ajoute le fichier à l'index de Git
git add "%LOG_FILE%"

:: Récupère la date et l'heure actuelles (format: DD-MM-YYYY HH:MM)
for /f "tokens=1-5 delims=/: " %%d in ("%date% %time%") do (
    set CURRENT_DATE=%%d-%%e-%%f %%g:%%h
)

:: Effectue le commit avec un message contenant la date et l'heure
git commit -m "%CURRENT_DATE% : Mise à jour du repository local, push des logs"

:: Push les changements vers le dépôt distant
git push

:: Affiche un message de confirmation
echo Fichier %LOG_FILE% ajouté, commit et push avec succès.