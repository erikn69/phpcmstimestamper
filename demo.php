<?php

require_once 'vendor/autoload.php';

use Blobfish\CmsTimestamper;

$originalCmsAsPem = "-----BEGIN CMS-----
MIIFiAYJKoZIhvcNAQcCoIIFeTCCBXUCAQExDTALBglghkgBZQMEAgEwHQYJKoZI
hvcNAQcBoBAEDkhlbGxvIHdvcmxkIQ0KoIIDBzCCAwMwggHroAMCAQICCQDecJGF
xcS6tTANBgkqhkiG9w0BAQsFADAYMRYwFAYDVQQDDA1TYW1wbGUgc2lnbmVyMB4X
DTE3MTAyNDE5NTgzM1oXDTE3MTEyMzE5NTgzM1owGDEWMBQGA1UEAwwNU2FtcGxl
IHNpZ25lcjCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBAMdg2yoQLYsG
fzYT5EApRtBKmvN0iPH+93kLx2IuWurjCuRbDzMOiuqSyFPdyz06xHFGucnunJ16
QEgZ1A59Bydzx7b4HmGQoQO1xS5GYCEtKqCILbucoNKQA7ART/bRkV5M50tOFVMB
rCBWRMszRE8wOJJkhvU6B8EIv00SFFVpcJliAuH3YbkTKiyNW4FoC4m9dNtG+B6I
PclnuLBjXcoV/8nSSbjM2G642ZbYcF78BnBTo4zt0y02gaDPPKRCP+8diy/lNiIN
E8iTZWrJpYf0Bp2+JOSXBgNXZkaUocRsIYJaeGlt7zuOh6g+uTiwMK+1f8EH6Z0r
l90fhWN0M2UCAwEAAaNQME4wHQYDVR0OBBYEFCPPvWDc7mzshVLtOgEq3VpQQUX7
MB8GA1UdIwQYMBaAFCPPvWDc7mzshVLtOgEq3VpQQUX7MAwGA1UdEwQFMAMBAf8w
DQYJKoZIhvcNAQELBQADggEBAKsutI6CAA/eBId9V+z+0e1V6kxW9wEyBmMH5xSA
YbuEAjkIXKSoTOdUT3+I81yU5Z5R8NWc/AllXmty2d/2vON+3sSuARjXYA2D4mKO
vBtEGNyDjfS7skLntbzLotXNwg1SmPCShLk+sEAMbS7bhpEFzhxwm6dS1YGK06Od
3qA8qiHY5XJ0lJ+0BT0MjGllG0/F3Y69CJIizNS3suIzUeyFUzqlhGgXnjuO0zXB
3SAsLVVdzjYR0SbwnfDYdubdrkSTj5JygAlxCWwb873z4BpXKwnYD+6R+Z1sX4nb
Bwz4A0YVORVGxV1o+3Mf0skqWsnQY1+M0rDsxTAZ3kksFqoxggI1MIICMQIBATAl
MBgxFjAUBgNVBAMMDVNhbXBsZSBzaWduZXICCQDecJGFxcS6tTALBglghkgBZQME
AgGggeQwGAYJKoZIhvcNAQkDMQsGCSqGSIb3DQEHATAcBgkqhkiG9w0BCQUxDxcN
MTcxMDI2MTUyNzM2WjAvBgkqhkiG9w0BCQQxIgQgz6TUz85EdYrACGMHYgZhJGvV
y5oQI0dooVMKa2ZT7c4weQYJKoZIhvcNAQkPMWwwajALBglghkgBZQMEASowCwYJ
YIZIAWUDBAEWMAsGCWCGSAFlAwQBAjAKBggqhkiG9w0DBzAOBggqhkiG9w0DAgIC
AIAwDQYIKoZIhvcNAwICAUAwBwYFKw4DAgcwDQYIKoZIhvcNAwICASgwDQYJKoZI
hvcNAQEBBQAEggEAlAHuzUzB2RaxmK/oZgTHHSHigfEfdi/dFBOoSfnX0QLYg4hG
E9G9d0BUhz633nTPlGZXiY6nkIXjF1LcsYet4SoyS0ByONZoKBCJQiSOokK7c62F
u0Ckq368dZSn168bQAfxXa7lcrZ+BRjtIytjBQF4vvXyy2/zSU0kertCxL1INhkI
GQN/Ii/M/Py2SeIa8bREZDVn801ONwKkB454v6itgVGhXw8qy+CjQU6akQcyci0c
3dRZqcy0IrXOJUP96rRu2FNXafjAW1Tw1Gyke8QqfLfwTNTjbVifFEv66D2O32zy
1lUaWopfF7uZf5LXZt2Ru5UPr+51ULJRcEeUTA==
-----END CMS-----";
echo "Updating PKCS #7/CMS...\n";
$updatedCms = CmsTimestamper::addTimestampToCms($originalCmsAsPem, "https://freetsa.org/tsr");
echo "PKCS #7/CMS updated.\n";
echo $updatedCms . "\n";
