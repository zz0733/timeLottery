<?
$api = 'http://129kai.net/index.php?c=api&a=updateinfo&cp=tjssc&uptime=1488040736&chtime=36005&catid=126&modelid=1';
$resource = file_get_contents( $api );  
$data = json_decode( $resource , 1 );

$ct = $data['c_t'];

$cd = $data['c_d'];

$cr = $data['l_r'];

header('Content-Type: text/xml;charset=utf8');
$limit=strlen($ct)-0;

$ct=substr($ct,2,$limit).''.substr($ct,$limit,$limit+0);

echo '<xml>
<row expect="'.$ct.'" opencode="'.$cr.'" opentime="'.str_replace('/','-',$cd).'"/>
</xml>';