@echo off
:: Chemin vers le fichier à ajouter
set FILE_PATH=project\public\reservations.json

:: Vérifie si le fichier existe
if not exist "%FILE_PATH%" (
    echo Erreur : Le fichier %FILE_PATH% n'existe pas.
    exit /b 1
)

:: Ajoute le fichier à l'index de Git
git add "%FILE_PATH%"

:: Récupère la date et l'heure actuelles (format: DD-MM-YYYY HH:MM)
for /f "tokens=1-5 delims=/: " %%d in ("%date% %time%") do (
    set CURRENT_DATE=%%d-%%e-%%f %%g:%%h
)

:: Effectue le commit avec un message contenant la date et l'heure
git commit -m "%CURRENT_DATE% : Ajout d'une reservation"

:: Push les changements vers le dépôt distant
git push

:: Affiche un message de confirmation
echo Fichier %FILE_PATH% ajouté, commit et push avec succès.
