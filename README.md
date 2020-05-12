# PHP

## How to install and use two versions of PHP
* Download 5.6.40 and 7.4 (Both Non Thread Safe) from https://windows.php.net/download
* Create the following folders on C:/ (php and php7)
* Inside php7 folder you shouwld rename php.exe to php7.exe
* Go to System Properties > Environment variables > System variables > Path and add the bellow variables
```
c:\php
c:\php7
```
* Run 'php -v' and 'php7 -v' on cmd
* Change the php.ini with configuration bellow
```
date.timezone = America/Sao_paulo
short_open_tag = On

; Directory in which the loadable extensions (modules) reside.
; http://php.net/extension-dir
;extension_dir = "./"
; On windows:
extension_dir = "ext"

;extension=bz2
extension=curl
;extension=ffi
;extension=ftp
extension=fileinfo
extension=gd2
extension=gettext
;extension=gmp
extension=intl
;extension=imap
extension=ldap
;extension=mbstring
;extension=exif      ; Must be after mbstring as it depends on it
extension=mysqli
;extension=oci8_12c  ; Use with Oracle Database 12c Instant Client
extension=odbc
extension=openssl
;extension=pdo_firebird
extension=pdo_mysql
;extension=pdo_oci
;extension=pdo_odbc
;extension=pdo_pgsql
;extension=pdo_sqlite
;extension=pgsql
;extension=shmop
```

* Run php -S localhost:8080
