<?php

/* # DI.FM-Tesla
This is a small wrapper script which lets you add all DI.FM premium channels to your Teslas native music player via TuneIn.
Use the Android/iOS TuneIn App to a the custom URL to this file to your favorites folder. */

define('PLAYLIST', '

************** POST YOUR DI.FM PLAYLIST HERE **************
 OVERWRITE THIS SECTION WITH THE 128K AAC PLS FILE CONTENT
GOTO https://www.di.fm/settings AND CLICK DOWNLOAD PLS FILE
***********************************************************

');

/* ************************************************************************************************************************ */

$images = array(
  '00sclubhits' => '14035b0944a3c2e77852b6d0944f381e',
  'ambient' => 'a9462ff46233f40fe0aa306379ae7cd8',
  'atmosphericbreaks' => '397343ffcf5543b60bba72f393e1c3c0',
  'bassline' => '91996d1fed5b9607c625069bcb8d3b52',
  'bassnjackinhouse' => '4fed8974f4cfbbd0712baa8ae2cc2ed2',
  'bigbeat' => '6f4324c4a776101fd91008d739ac3020',
  'bigroomhouse' => '0412578b5e31cf1b68f23c3cb5377139',
  'breaks' => '21b12909a0618017285f62a5af4b2ce5',
  'chillhop' => 'f2388be364717a3aa33f62411d9e3585',
  'chillntropicalhouse' => '2901ef5c923bb0f9ff856ac4007975f0',
  'chillout' => 'fd96ca5c52508a2755a266ebf506f162',
  'chilloutdreams' => '1d4f3310f94769b4e2f55ee0887eead3',
  'chillstep' => 'ce9bd1666b49921b440ec796653b24f0',
  'chiptunes' => 'ab17e2f15ebe382d78d744726408b668',
  'classiceurodance' => 'a98153e6c9fcee321fd6dff0c8a6d0ba',
  'classiceurodisco' => '010a6648f8afc52654b07c07c68e9cad',
  'oldschooltechnontrance' => '249d182058ac9e5631557eb309efe80f',
  'classictrance' => '4680a3fd0e35f0b2f9bf60c9889d4343',
  'classicvocaltrance' => '1e181a502369be86e3f2e696723c26fe',
  'club' => '2eef98b26e5490acc78ff6ab22e04827',
  'clubdubstep' => '36b5e73f328251b20120a6bc5365777f',
  'cosmic downtempo' => 'e98aea320629ce07814e0546f7c39ba1',
  'darkdnb' => '6e47c1d85f09957d568c9535dda75e58',
  'darkpsytrance' => '0e10b950ca2f3e828becbe3dd3c2d0b3',
  'deephouse' => '9a1b469ae251c084465096038312d506',
  'deepnudisco' => 'b2a715bb711ab06822bcaf07fde74d51',
  'deeptech' => 'd32175a432f823ce84261c01d4b53f57',
  'detroithousentechno' => 'd7b31d5973593af0043fed3f180df702',
  'discohouse' => '279705ae85a4e0f529f6f7fbaa47a646',
  'djmixes' => '13aa08b5dce2525029c6ddfb8e286dc2',
  'downtempolounge' => 'f8336fff9bcb4b01a36f2684ecd150c6',
  'drumandbass' => '19813f3ba29ad66caa06bbee4aba558a',
  'drumstep' => '1c60b9976b4d861ddc90d668f749fe6f',
  'dub' => 'e2c865e92c65cfb91ad0e2d3933234e0',
  'dubstep' => '77c1aec493eeb9e2a5d22951447fbd48',
  'dubtechno' => '19d61084830ef94886b32d847fc5d29e',
  'ebm' => '66cea0d1c0548b2bab45db5473db0fe1',
  'eclectronica' => 'a6986327cf45a01238826449b8209592',
  'electro' => '742380673147770eef642532828dbc6c',
  'electronicpioneers' => '574a3373b242bed1018c5c99e5021c3f',
  'electronics' => '56a42b12df8d27baa163536e7b10d3c7',
  'electropop' => '28c1e8587ae6e0b2589b4d66ccd99324',
  'electroswing' => '3c5d349d25bacd3848286956af3a3806',
  'epictrance' => 'f1fdfea9ba9622ecdee020cc53126e60',
  'eurodance' => '4bb2756bcacce0a2bf44ebaaf743f2ab',
  'exposure_nyc' => 'a6331ceb3c835b545a60824b9daa376a',
  'funkyhouse' => '3370baa3700e4578558dff57c6443a0f',
  'futurebeats' => '1750e893954de9a1e7f3f968fb37d1c7',
  'futuregarage' => '0e904268ec98b8c0521c30da4ac321bb',
  'futuresynthpop_v1' => 'ee8523a0d6165465961cb2d0445c4f27',
  'gabber' => 'dafced37829e69724be99dc375bc5713',
  'glitchhop' => '735abb160f950c98e2bd7caf6843e255',
  'goapsy' => '4eee448424df2768055ee7503f0251e9',
  'handsup' => 'df778eed294536f4e858093124aa2be5',
  'hardcore' => 'e05385cf844ef4884a26c19ed254efbf',
  'harddance' => '59dae529a51feb3f90b542f3d33808ec',
  'hardstyle' => '8b103c03fbf78becf042085552e9ef41',
  'hardtechno' => '5e511d67198b404149e7eaed9858e5d4',
  'house' => '530b699645ddff8d66a2333ae09bb06a',
  'idm' => '43a61fb36b5786b98ab212a32cb8ad99',
  'indiebeats' => '91842b0ec15b8b69e50315dbd3afe03e',
  'indiedance' => '9f70ad76ec13a6123405c6d7a03325f3',
  'jazzhouse' => 'f4b33e8cbd9f0b1776e64f17b9c35abd',
  'jungle' => '41ede7b8b43cffcc42876e6e319b7ef3',
  'latinhouse' => '60176ec05138ad9b621cb92de7f0c8c8',
  'liquiddnb' => '67599a0b4f3575ea5f6a74fe633899d7',
  'liquiddubstep' => '6ef6ced4249faec61c8fbc58b10b6343',
  'liquidtrap' => '6b5bd66a99e46fa1258cb565d988ea7c',
  'lounge' => 'f6eff3e9c3ecf1252201afd1215b55f0',
  'mainstage' => '94ec7cbe0550988bda0cafd2933e5506',
  'melodicprogressive' => '448cf62c2d3c68ede713008015da9bfc',
  'minimal' => 'a91b1414a8712794672e3ea1324ffe92',
  'moombahton' => 'c4f62996c535b4f89ab9fb89e05a76ec',
  'nightcore' => 'ef8fbe63f86e496f0ce514ee2e85c30a',
  'nudisco' => 'f2378a19d61a3063a2a6271a29fb1595',
  'oldschoolacid' => '70a7830bce8d22eb1a7c868773f443e8',
  'oldschoolhouse' => '7d0cefbcb479ce257b24471f3d600eba',
  'oldschoolrave' => 'b10c2672a6a54a8ae5356f3ddb49b4c1',
  'progressive' => '3355314492d633a5330c659cfe98fc1b',
  'progressivepsy' => '5fa5659badbaf1a4ff817323ee5e998a',
  'psybient' => 'a7b0dcee2110e6d01fec96758a639ea3',
  'psychill' => '452d14ab72381941b1bd5f94af15678b',
  'russianclubhits' => '58262e338e405ab82ab92aa55f719f86',
  'sankeyofficial' => 'bbc9497cd0836cc0b4e29269cd59be14',
  'scousehouse' => '6056dc45979766cbbaf3c394bb1b863b',
  'soulfulhouse' => 'e655cd614bd4a1c981273a555081c309',
  'spacedreams' => 'becbe0cb9c3002fc21f97f9e65cf9da1',
  'spacemusic' => 'becbe0cb9c3002fc21f97f9e65cf9da1',
  'synthwave' => 'd8ea647113c8cdec87b4751f20b3360b',
  'techhouse' => '27ba70234566a810d9dd33745195f088',
  'techno' => '7a314a3ff87e31013172e9099d9aa843',
  'trancev1' => 'b10567777ad265dcc63816fa32396654',
  'trap' => '886eb22e09893237ff5a851991543e4b',
  'tribalhouse' => '59d5b064c1bc9e165850a8d9371d32a5',
  'ukgarage' => 'c0ce1fbfe33a144e298d1bbec53406a3',
  'umfradio' => 'b457b9fe45596e28a7c4b7b004c82ce4',
  'undergroundtechno' => '9f710f7f4c2a663bab3ff5551f8669eb',
  'vocalchillout' => '57488ced7c732709c72764636b0065dc',
  'vocallounge' => '8436f9d3338ba7c8de0e88dbe45ea4d5',
  'vocaltrance' => '309f243a8a181ad83e8c5e15cd4b24c3',
);

define('CURRENT_URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http').'://'.$_SERVER['HTTP_HOST'].parse_url($_SERVER['REQUEST_URI'])['path']);

$pls = parse_ini_string(str_replace('&', 'and', PLAYLIST), INI_SCANNER_RAW);
if(empty($pls['playlist'])) die('playlist missing');
$pls = $pls['playlist'];

if(isset($_GET['streamurl']) && !empty($_GET['station'])) {
  foreach($pls as $entry) {
    if(strpos($entry, '/'.$_GET['station'].'?') !== false) {
      
      header('Content-Type: audio/x-mpegurl');
      die($entry);
      
    }
  }
}

if(!empty($_GET['station']) && !empty($_GET['render']) && $_GET['render'] == 'json') {
  
  header('Content-Type: application/json');
  
  die(json_encode(array(
    'head' => array('title' => 'Listening Options', 'status' => '200'), 
    'body' => array(0 => array(
      'element' => 'outline',
      'type' => 'audio',
      'URL' => CURRENT_URL.'?streamurl&station='.$_GET['station'],
      'bitrate' => '128',
      'media_type' => 'AAC'
    ))
  )));
  
}

header('Content-Type: text/xml');

echo '<?xml version="1.0" encoding="UTF-8"?>';
?><opml version="1"><head><status>200</status></head>
<body>
  <outline text="Sender" key="stations">
  <?php for($i = 1; $i <= $pls['NumberOfEntries']; $i++) { $key = substr(parse_url($pls['File'.$i])['path'], 1); ?>
    <outline type="audio" text="<?php echo substr($pls['Title'.$i], 8); ?>" URL="<?php echo CURRENT_URL.'?station='.$key; ?>"<?php
      if(!empty($images[$key])) echo ' image="https://cdn-images.audioaddict.com/'.$images[$key].'.jpg?size=256x256"'; ?> />
  <?php } ?>
  </outline>
</body>
</opml>
