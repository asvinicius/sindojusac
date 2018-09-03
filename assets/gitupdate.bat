:inicio
echo off 
cls
echo Atualizar repositorios
echo.:
echo Escolha a acao: 
echo (1) Pull
echo (2) Push
echo.:
set /p acao=
if %acao% == 1 goto pull
if %acao% == 2 goto push
if %acao% == 3 goto exit

:pull
cls
cd\xampp\htdocs\sindojusac
git pull
cls
cd\xampp\htdocs\manager
git pull
pause
goto exit

:push
cls
cd\xampp\htdocs\sindojusac
git add application/
git add assets/
git add system/
git commit -m "Versao 1.0.1.%date:~6,4%%date:~3,2%%date:~0,2%"
git push
cls
cd\xampp\htdocs\manager
git add application/
git add assets/
git add system/
git commit -m "Versao 1.0.1.%date:~6,4%%date:~3,2%%date:~0,2%"
git push
pause
goto exit

:exit
exit