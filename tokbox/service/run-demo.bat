:: Why? because windows can't do an OR within the conditional
IF NOT DEFINED API_KEY GOTO defkeysecret
IF NOT DEFINED API_SECRET GOTO defkeysecret
GOTO skipdef

:defkeysecret

SET API_KEY=45622782
SET API_SECRET=79d603a5cb388eadcc3345bb9621a6a55622fdd2

:skipdef

RD /q /s storage

php.exe -S localhost:8080 -t web web/index.php
