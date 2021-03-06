<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verlier Startup System</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div style="color:#fff">
    <?php /*
    echo 'Hola <br>';
    $file = 'http://fabulaser.com/mirror/test.xml';
    if(!$xml = simplexml_load_file($file))
    exit('Failed to open '.$file);
    //print_r($xml);
    //var_dump($xml);
    $peliculas = $xml;
    foreach ($peliculas->pelicula->personajes->personaje as $personaje) {
      echo $personaje->nombre, ' interpretado por ', $personaje->actor, PHP_EOL . '<br>';
    }
    */
    ?>
  </div>

 <div id="framing">
    <div id="wrapper">
      <div id="bigClock" class="mainColor" class="clock" onload="showTime()">
        <img class="clocktitleimg" src="src/clock-title.png" alt="">
        <span id="clockHour"></span>
        <span class="clockSeparator minute">:</span>
        <span id="clockMinute"></span>
        <span class="clockSeparator seconds">:</span>
        <span id="clockSecond"></span>
      </div>
      <div id="session">
        <img id="timeSession" src="" alt="">
      </div>
      <div id="databoxes">
        <div class="bottombox">
          STOP
        </div>
        <div class="bottombox">
          SLOW
        </div>
        <div class="bottombox">
          NORMAL
        </div>
        <div class="bottombox">
          RACING
        </div>
      </div>
      <svg id="clock-main-shape" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 903 551">
        <defs>
        </defs>
        <g id="clock-frame">
          <polygon points="165.16 178.62 101.82 386.22 142.66 410.31 169.32 328.76 194.32 328.76 194.32 177.69 165.16 178.62"/>
          <polygon points="99 396 47.74 551 110.24 551 140.16 419.58 99 396"/>
          <path d="M210.63,402.86H763.54L762.8,327H631.18v50.27a21.47,21.47,0,0,1-5.51,14.53,17.25,17.25,0,0,1-12.76,5.75l-417.57-1.82L169.51,550.21h733V-.79H-.49v551H34.06V40h6.45V550.21h2.33L42.75,40.89A16.8,16.8,0,0,1,46.89,30c2.67-3,6.32-4.69,11.28-9l803.75.83c2.08,4.36,5.19,5.86,7.43,8.49,2.09,2.47,1.25,5.72,1.26,9.11l2.71,276.42.48,90.13a2.49,2.49,0,0,1-2.4,2.58H210.63a1.52,1.52,0,0,1-1.46-1.56v-2.52A1.52,1.52,0,0,1,210.63,402.86Z" transform="translate(0.49 0.79)"/>
          <polygon points="762.16 326.14 192.99 326.14 192.99 177.85 165.49 177.85 166.32 107.42 297.99 107.42 305.91 126.88 762.16 126.88 762.16 326.14"/>
          <path d="M180.19,175l-21.84-18.39a11.7,11.7,0,0,1-4-8.93V110.6a3.48,3.48,0,0,1,3.29-3.65h22.54Z" transform="translate(0.49 0.79)"/>
        </g>
        <g id="deco-black">
          <g>
            <rect x="208.41" y="330.61" width="1" height="8.34"/>
            <rect x="212.57" y="330.61" width="1" height="8.34"/>
          </g>
          <g>
            <rect x="617.57" y="330.61" width="1" height="8.34"/>
            <rect x="621.74" y="330.61" width="1" height="8.34"/>
          </g>
          <g>
            <rect x="617.57" y="383.44" width="1" height="8.34"/>
            <rect x="621.74" y="383.44" width="1" height="8.34"/>
          </g>
          <g>
            <rect x="523.49" y="378.8" width="2.5" height="5.56"/>
            <rect x="593.49" y="378.8" width="2.5" height="5.56"/>
          </g>
          <rect x="414.32" y="378.8" width="2.5" height="5.56"/>
          <rect x="495.99" y="378.8" width="2.5" height="5.56"/>
          <rect x="386.82" y="378.8" width="2.5" height="5.56"/>
          <rect x="320.99" y="378.8" width="2.5" height="5.56"/>
          <rect x="293.49" y="378.8" width="2.5" height="5.56"/>
          <rect x="230.16" y="378.8" width="2.5" height="5.56"/>
          <rect x="46.25" y="431.26" width="1" height="7.5" transform="translate(-387.77 482.55) rotate(-90)"/>
          <rect x="46.25" y="352.48" width="1" height="7.5" transform="translate(-308.99 403.78) rotate(-90)"/>
          <rect x="46.25" y="274.63" width="1" height="7.5" transform="translate(-231.14 325.93) rotate(-90)"/>
          <rect x="46.25" y="195.85" width="1" height="7.5" transform="translate(-152.36 247.15) rotate(-90)"/>
          <rect x="46.25" y="118" width="1" height="7.5" transform="translate(-74.51 169.3) rotate(-90)"/>
          <rect x="46.25" y="39.23" width="1" height="7.5" transform="translate(4.26 90.52) rotate(-90)"/>
          <rect x="89.58" y="26.76" width="1" height="8.34" transform="translate(180.66 62.65) rotate(180)"/>
          <rect x="192.08" y="26.76" width="1" height="8.34" transform="translate(385.66 62.65) rotate(180)"/>
          <rect x="293.75" y="26.76" width="1" height="8.34" transform="translate(588.99 62.65) rotate(180)"/>
          <rect x="396.25" y="26.76" width="1" height="8.34" transform="translate(793.99 62.65) rotate(180)"/>
          <rect x="498.75" y="26.76" width="1" height="8.34" transform="translate(998.99 62.65) rotate(180)"/>
          <rect x="601.25" y="26.76" width="1" height="8.34" transform="translate(1203.99 62.65) rotate(180)"/>
          <rect x="702.92" y="26.76" width="1" height="8.34" transform="translate(1407.33 62.65) rotate(180)"/>
          <rect x="639.58" y="117.58" width="1" height="7.41" transform="translate(1280.66 243.38) rotate(180)"/>
          <rect x="476.25" y="117.58" width="1" height="7.41" transform="translate(953.99 243.38) rotate(180)"/>
          <rect x="307.92" y="120.36" width="1" height="4.63" transform="translate(617.33 246.16) rotate(180)"/>
          <rect x="293.75" y="99.97" width="1" height="5.56" transform="translate(588.99 206.3) rotate(180)"/>
          <rect x="166.99" y="97.4" width="1" height="5.56" transform="translate(335.48 201.15) rotate(180)"/>
          <rect x="157.83" y="97.4" width="1" height="5.56" transform="translate(317.14 201.15) rotate(180)"/>
          <rect x="148.66" y="110.37" width="1" height="5.56" transform="translate(298.81 227.1) rotate(180)"/>
          <rect x="148.66" y="138.17" width="1" height="5.56" transform="translate(298.81 282.7) rotate(180)"/>
          <rect x="155.33" y="168.76" width="1" height="7.41" transform="translate(312.14 345.72) rotate(180)"/>
          <rect x="159.48" y="168.75" width="1" height="7.41" transform="translate(320.44 345.71) rotate(180)"/>
          <line class="cls-1" x1="100.5" y1="384.5" x2="93" y2="380"/>
          <line class="cls-1" x1="153.5" y1="416.5" x2="146" y2="412"/>
          <line class="cls-1" x1="96.5" y1="394.5" x2="89" y2="390"/>
          <line class="cls-1" x1="149.5" y1="426.5" x2="142" y2="422"/>
          <line class="cls-1" x1="79.61" y1="445.6" x2="72.11" y2="441.1"/>
        </g>
        <g id="deco-bg-lines">
          <rect class="cls-2" x="26.69" y="432.86" width="1.27" height="4.1" transform="translate(-407.09 463.03) rotate(-90)"/>
          <rect class="cls-2" x="26.69" y="355.24" width="1.27" height="4.1" transform="translate(-329.48 385.42) rotate(-90)"/>
          <rect class="cls-2" x="26.69" y="276.43" width="1.27" height="4.1" transform="translate(-250.66 306.61) rotate(-90)"/>
          <rect class="cls-2" x="26.69" y="198.87" width="1.27" height="4.1" transform="translate(-173.1 229.04) rotate(-90)"/>
          <rect class="cls-2" x="26.69" y="120.06" width="1.27" height="4.1" transform="translate(-94.29 150.23) rotate(-90)"/>
          <rect class="cls-2" x="26.69" y="42.5" width="1.27" height="4.1" transform="translate(-16.73 72.67) rotate(-90)"/>
          <g>
            <rect class="cls-2" x="85.11" y="18.53" width="1.19" height="4.38"/>
            <rect class="cls-2" x="94.48" y="18.53" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="186.94" y="18.58" width="1.19" height="4.38"/>
            <rect class="cls-2" x="196.31" y="18.58" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="289.24" y="18.51" width="1.19" height="4.38"/>
            <rect class="cls-2" x="298.61" y="18.51" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="391.36" y="18.51" width="1.19" height="4.38"/>
            <rect class="cls-2" x="400.73" y="18.51" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="494.11" y="18.51" width="1.19" height="4.38"/>
            <rect class="cls-2" x="503.48" y="18.51" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="595.75" y="18.51" width="1.19" height="4.38"/>
            <rect class="cls-2" x="605.12" y="18.51" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="698.46" y="18.51" width="1.19" height="4.38"/>
            <rect class="cls-2" x="707.83" y="18.51" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="202.35" y="398.54" width="1.19" height="4.38"/>
            <rect class="cls-2" x="211.72" y="398.54" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="304.17" y="398.6" width="1.19" height="4.38"/>
            <rect class="cls-2" x="313.54" y="398.6" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="406.47" y="398.53" width="1.19" height="4.38"/>
            <rect class="cls-2" x="415.84" y="398.53" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="508.59" y="398.53" width="1.19" height="4.38"/>
            <rect class="cls-2" x="517.96" y="398.53" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="611.35" y="398.53" width="1.19" height="4.38"/>
            <rect class="cls-2" x="620.72" y="398.53" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="712.98" y="398.53" width="1.19" height="4.38"/>
            <rect class="cls-2" x="722.36" y="398.53" width="1.19" height="4.38"/>
          </g>
          <g>
            <rect class="cls-2" x="202.34" y="414.05" width="1.19" height="4.38"/>
            <polyline class="cls-2" points="212.91 418.43 211.72 418.43 211.72 414.05 212.91 414.05"/>
          </g>
          <rect class="cls-2" x="301.24" y="414.73" width="1.19" height="4.38"/>
          <rect class="cls-2" x="403.54" y="414.66" width="1.19" height="4.38"/>
          <rect class="cls-2" x="505.66" y="414.66" width="1.19" height="4.38"/>
          <rect class="cls-2" x="608.42" y="414.66" width="1.19" height="4.38"/>
          <rect class="cls-2" x="710.05" y="414.66" width="1.19" height="4.38"/>
        </g>
        <g id="clock-lines">
          <polygon class="cls-3" points="762.24 326.44 193.07 326.44 193.07 178.16 165.57 178.16 166.41 107.72 298.07 107.72 305.99 127.18 762.24 127.18 762.24 326.44"/>
          <g>
            <rect class="cls-4" x="217.57" y="330.61" width="1" height="8.34"/>
            <rect class="cls-4" x="221.74" y="330.61" width="1" height="8.34"/>
          </g>
          <g>
            <rect class="cls-4" x="305.91" y="330.61" width="1" height="8.34"/>
            <rect class="cls-4" x="310.07" y="330.61" width="1" height="8.34"/>
          </g>
          <g>
            <rect class="cls-4" x="399.24" y="330.61" width="1" height="8.34"/>
            <rect class="cls-4" x="403.41" y="330.61" width="1" height="8.34"/>
          </g>
          <g>
            <rect class="cls-4" x="508.41" y="330.61" width="1" height="8.34"/>
            <rect class="cls-4" x="512.57" y="330.61" width="1" height="8.34"/>
          </g>
          <g>
            <rect class="cls-4" x="605.91" y="330.61" width="1" height="8.34"/>
            <rect class="cls-4" x="610.07" y="330.61" width="1" height="8.34"/>
          </g>
          <text class="cls-5" transform="translate(397.66 240.25) scale(0.94 1)"><tspan class="cls-6">o</tspan><tspan class="cls-7" x="4.07" y="0">v</tspan><tspan x="7.6" y="0">e</tspan><tspan class="cls-8" x="11.36" y="0">r</tspan><tspan x="14.04" y="0">fl</tspan><tspan class="cls-9" x="17.97" y="0">o</tspan><tspan class="cls-10" x="22.04" y="0">w</tspan><tspan x="27.74" y="0">: hidden</tspan></text>
          <text class="cls-5" transform="translate(397.66 240.25) scale(0.94 1)"><tspan class="cls-6">o</tspan><tspan class="cls-7" x="4.07" y="0">v</tspan><tspan x="7.6" y="0">e</tspan><tspan class="cls-8" x="11.36" y="0">r</tspan><tspan x="14.04" y="0">fl</tspan><tspan class="cls-9" x="17.97" y="0">o</tspan><tspan class="cls-10" x="22.04" y="0">w</tspan><tspan x="27.74" y="0">: hidden</tspan></text>
          <text class="cls-5" transform="translate(397.66 240.25) scale(0.94 1)"><tspan class="cls-6">o</tspan><tspan class="cls-7" x="4.07" y="0">v</tspan><tspan x="7.6" y="0">e</tspan><tspan class="cls-8" x="11.36" y="0">r</tspan><tspan x="14.04" y="0">fl</tspan><tspan class="cls-9" x="17.97" y="0">o</tspan><tspan class="cls-10" x="22.04" y="0">w</tspan><tspan x="27.74" y="0">: hidden</tspan></text>
        </g>
      </svg>
      <div class="newsticker news1 js-newsticker">
        <!-- https://xchile.cl/?cat=147&feed=rss2 -->
        <ul class="js-frame">
          <?php  $feed = simplexml_load_file('https://xchile.cl/?feed=rss2');
          foreach ($feed->channel->item as $item) {   $title       = (string) $item->title;
              $description = (string) $item->description;
              $link = (string) $item->link;
                print '<li class="js-item">';
                printf(     '<a href="%s" target="_blank">%s</a>',      $link,$title   );
                echo '</li>';
          }
          ?>
        </ul>
      </div>
      <div class="newsticker news2 js-newsticker">
        <ul class="js-frame">
          <?php   $feed = simplexml_load_file('https://xchile.cl/?feed=rss2');

          foreach ($feed->channel->item as $item) {    $title       = (string) $item->title;
              $description = (string) $item->description;
              $link = (string) $item->link;
                print '<li class="js-item">';
                printf(      '<a href="%s" target="_blank">%s</a>',       $link,$title    );
                echo '</li>';
            }?></ul>
        </div>
        <div class="newsticker news3 js-newsticker">
          <ul class="js-frame">
            <?php   $feed = simplexml_load_file('https://xchile.cl/?feed=rss2');
            
            foreach ($feed->channel->item as $item) {    $title       = (string) $item->title;
                $description = (string) $item->description;
                $link = (string) $item->link;
                  print '<li class="js-item">';
                  printf(      '<a href="%s" target="_blank">%s</a>',       $link,$title    );
                  echo '</li>';
              }?></ul>
          </div>
        </div>



    
    
    </div
      </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="main.js"></script>
    <script src="newsticker.js"></script>
    </html>