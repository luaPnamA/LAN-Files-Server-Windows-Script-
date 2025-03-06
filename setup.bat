@echo off
title LAN File Server Setup
echo ===================================
echo 🚀 LAN File Server - One Click Setup
echo ===================================
echo.
echo [1/4] Installing Python Dependencies...
python -m pip install --upgrade pip
pip install pyftpdlib

echo.
echo [2/4] Setting Up Server Files...
:: Ask for user’s IP address
set /p userip=Enter your local network IP (e.g., 192.168.0.100): 

:: Replace IP address in APPCODE.py and RunAPP.bat
powershell -Command "(Get-Content APPCODE.py) -replace '192.168.0.148', '%userip%' | Set-Content APPCODE.py"
powershell -Command "(Get-Content RunAPP.bat) -replace '192.168.0.148', '%userip%' | Set-Content RunAPP.bat"

echo.
echo [3/4] Creating Uploads Folder...
mkdir uploads

echo.
echo [4/4] Setup Complete! 🚀
echo Start the server by running "RunAPP.bat".
pause
