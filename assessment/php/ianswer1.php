<?php
class XmlToJson
{
    public function Parse()
    {
        $url = 'http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml';
        $xmlObject = simplexml_load_file($url);
        $jsonData = json_encode($xmlObject, JSON_PRETTY_PRINT);

        print_r($jsonData);
    }
}
