FIGlet project home page: http://www.figlet.org/
You can download FIGlet fonts from: ftp://ftp.figlet.org/pub/figlet/fonts/
Project home page (Russian): http://bolk.exler.ru/files/figlet/

Notes:
1. There is no support of vertical smushing.
2. But horizontal smushing is supported.
3. Default character (0x00) is supported.
4. German symbols are supported.
5. It is supported pseudo-Unicode as %uHHHH, HHHH - a code of a character.
7. RTL and LTR text directions are suppoted.
8. Windows and Unix font formats are supported.
9. Incomplete fonts are supported (for example dwhistled.flf).
10. GZip-compressed font supported (if zlib extension was installed)

Usage:

    include_once 'Text/Figlet.php';

    $figlet = new Text_Figlet();
    if (PEAR::isError($error = $figlet->LoadFont('slant.flf'))) {
        echo 'Error: ', $error->getMessage();
    } else {
        echo $figlet->LineEcho("Hello, world!");
    }