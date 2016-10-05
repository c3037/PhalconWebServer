@echo off

set PTOOLSPATH="%~dp0\..\.."
set PHPPATH="%~dp0\..\..\..\php7nts\php.exe"
%PHPPATH% %PTOOLSPATH%\phalcon.php %*
