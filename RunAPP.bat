@echo off
title LAN File Server
cd /d "%~dp0"

echo Starting PHP Web Server...
start /min php -S 192.168.0.148:80

echo Starting FTP Server...
start /min python APPCODE.py

echo.
echo ✅ Server is running! Access it at: http://192.168.0.148
pause
