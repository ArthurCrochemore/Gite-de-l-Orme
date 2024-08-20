@echo off
:: Chemin vers le fichier de logs 
set LOG_FILE=Application\logs.txt

:: En-tête du fichier de logs avec date et heure
echo ============================= >> %LOG_FILE%
echo Mise à jour du dépôt - %date% %time% >> %LOG_FILE%
echo ============================= >> %LOG_FILE%

:: Inscriptions de l'état du système de fichiers dans les logs 
echo [INFO] Sauvegarde des modifications locales via 'git stash'. >> %LOG_FILE%
git stash >> %LOG_FILE% 2>&1

:: Vérification de la réussite du stash
if errorlevel 1 (
    echo [ERREUR] Échec de la sauvegarde des modifications locales. >> %LOG_FILE%
    exit /b 1
)

:: Mise à jour des fichiers depuis le dépôt distant
echo [INFO] Récupération des dernières modifications du dépôt distant via 'git pull'. >> %LOG_FILE%
git pull >> %LOG_FILE% 2>&1

:: Vérification de la réussite du pull
if errorlevel 1 (
    echo [ERREUR] Échec de la mise à jour des fichiers. >> %LOG_FILE%
    exit /b 1
)

:: Réintégration des modifications locales
echo [INFO] Réintégration des modifications locales via 'git stash pop'. >> %LOG_FILE%
git stash pop >> %LOG_FILE% 2>&1

:: Vérification de la réussite du stash pop
if errorlevel 1 (
    echo [ERREUR] Échec lors de la réintégration des modifications locales. >> %LOG_FILE%
    exit /b 1
)

:: Fin du processus
echo [INFO] Mise à jour et réintégration des modifications locales terminées avec succès. >> %LOG_FILE%
echo ============================= >> %LOG_FILE%