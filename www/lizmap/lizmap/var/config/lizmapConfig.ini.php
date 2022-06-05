;<?php die(''); ?>
;for security reasons , don't remove or modify the first line

;Services
;list the different map services (servers, generic parameters, etc.)
[services]
;Wms map server
wmsServerURL="http://localhost/qgis/qgis_mapserv.fcgi.exe"

onlyMaps=off

; cache configuration for tiles
cacheStorageType=file
;cacheStorageType=sqlite => store cached images in one sqlite file per repo/project/layer
;cacheStorageType=file => store cached images in one folder per repo/project/layer. The root folder is /tmp/
;cacheStorageType=redis => store cached images through redis
cacheRedisHost=localhost
cacheRedisPort=6379

; default cache expiration : the default time to live of data, in seconds.
; 0 means no expiration, max : 2592000 seconds (30 days)
cacheExpiration=0

; debug mode
; on = print debug messages in lizmap/var/log/messages.log
; off = no lizmap debug messages
debugMode=0
; cache root directory where cache files will be stored
; must be writable
cacheRootDirectory="C:\WINDOWS"

; path to find repositories
;rootRepositories="path"
; Does the server use relative path from root folder? 0/1
;relativeWMSPath=0

appName=Sidick
qgisServerVersion=3.0
wmsMaxWidth=3000
wmsMaxHeight=3000
projectSwitcher=off
relativeWMSPath=0
requestProxyEnabled=0
requestProxyType=http
requestProxyNotForDomain="localhost,127.0.0.1"
uploadedImageMaxWidthHeight=1920

rootRepositories=r
adminContactEmail="diab.aboubacar.s@gmail.com"

[repository:montp]
label=Diab
path="../install/qgis/"
allowUserDefinedThemes=1

[repository:2]
label=deuxième
path="../install/qgis/dx/"
allowUserDefinedThemes=1
