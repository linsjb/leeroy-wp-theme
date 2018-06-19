<?php

function acfButtonGroup($type, $acfObject, $acfGroupObject = null, $options = null, $subfield = false) {

  if($subfield) {
    if($acfGroupObject != null) {
      if($options != null) {
        $field = get_sub_field($acfObject, get_option($options))[$acfGroupObject];
      } else {
        $field = get_sub_field($acfObject)[$acfGroupObject];
      }
    } else {
      if($options != null) {
        $field = get_sub_field($acfObject, get_option($options));
      } else {
        $field = get_sub_field($acfObject);
      }
    }
  } else {
    if($acfGroupObject != null) {
      if($options != null) {
        $field = get_field($acfObject, get_option($options))[$acfGroupObject];
      } else {
        $field = get_field($acfObject)[$acfGroupObject];
      }
    } else {
      if($options != null) {
        $field = get_field($acfObject, get_option($options));
      } else {
        $field = get_field($acfObject);
      }
    }
  }

  switch($type) {
    case 'textColor':
      return textColor($field);
      break;

    case 'textAlignment':
      return textAlignment($field);
      break;

    case 'fontSize':
      return fontSize($field);
      break;

    case 'backgroundColor':
      return backgroundColor($field);
      break;

    case 'titleType':
      return titleType($field);
      break;

    case 'height':
      return height($field);
      break;

    case 'width':
      return width($field);
      break;

    case 'buttonColor':
      return buttonColor($field);
      break;

    case 'opacity':
      return opacity($field);
      break;
  }
}

function textColor($field) {
  switch($field) {
    case 'black':
      return '-textColorBlack';
      break;

    case 'grey':
      return '-textColorGrey';
      break;

    case 'purple':
      return '-textColorPurple';
      break;

    case 'white':
      return '-textColorWhite';
      break;

    case 'blue':
      return '-textColorBlue';
      break;

    case 'gold':
      return '-textColorGold';
      break;

    default:
      return '-textColorBlack';
      break;
  }
}

function textAlignment($field) {
  switch($field) {
    case 'left':
      return '-leftAlignment';
      break;

    case 'center':
      return '-centerAlignment';
      break;

    case 'right':
      return '-rightAlignment';
      break;

    default:
      return '-leftAlignment';
      break;
  }
}

function fontSize($field) {
  switch($field) {
    case 8:
      return '-fontSize8';
      break;

    case 10:
      return '-fontSize10';
      break;

    case 12:
      return '-fontSize12';
      break;

    case 14:
      return '-fontSize14';
      break;

    case 16:
      return '-fontSize16';
      break;

    case 18:
      return '-fontSize18';
      break;

    case 20:
      return '-fontSize20';
      break;

    case 22:
      return '-fontSize22';
      break;

    case 24:
      return '-fontSize24';
      break;

    case 26:
      return '-fontSize26';
      break;


    default:
      return '-fontSize16';
      break;
  }
}

// function backgroundColor($field) {
//   switch($field) {
//     case 'black':
//       return '#2F2F2F';
//       break;
//
//     case 'grey':
//       return '#f4f4f4';
//       break;
//
//     case 'purple':
//       return '#442D5E';
//       break;
//
//     case 'white':
//       return '#FDFDFD';
//       break;
//
//     case 'blue':
//       return '#0B4F6C';
//       break;
//
//     case 'gold':
//       return '#C9AD74';
//       break;
//
//     default:
//       return '#2F2F2F';
//       break;
//   }
// }

function backgroundColor($field) {
  switch($field) {
    case 'black':
      return '-backgroundColorBlack';
      break;

    case 'grey':
      return '-backgroundColorGrey';
      break;

    case 'purple':
      return '-backgroundColorPurple';
      break;

    case 'white':
      return '-backgroundColorWhite';
      break;

    case 'blue':
      return '-backgroundColorBlue';
      break;

    case 'gold':
      return '-backgroundColorGold';
      break;

    default:
      return '-backgroundColorWhite';
      break;
  }
}

function titleType($field) {
  switch($field) {
    case 'h1':
      return 'h1';
      break;

    case 'h2':
      return 'h2';
      break;

    case 'h3':
      return 'h3';
      break;

    case 'h4':
      return 'h4';
      break;

    case 'h5':
      return 'h5';
      break;

    case 'h6':
      return 'h6';
      break;

    default:
      return 'h1';
      break;

  }
}

function height($field) {
  switch($field) {
    case '20':
      return '-verticalHeight20';
      break;

    case '40':
      return '-verticalHeight40';
      break;

    case '60':
      return '-verticalHeight60';
      break;

    case '80':
      return '-verticalHeight80';
      break;

    case '100':
      return '-verticalHeight100';
      break;
  }
}

function width($field) {
  switch($field) {
    case '20':
      return '-widtht20';
      break;

    case '40':
      return '-width40';
      break;

    case '60':
      return '-width60';
      break;

    case '80':
      return '-widtht80';
      break;

    case '100':
      return '-width100';
      break;
  }
}

function buttonColor($field) {
  switch($field) {
    case 'purple':
      return '-btnPurple';
      break;

    default;
      return '-btnPurple';
      break;
  }
}

function opacity($field) {
  switch($field) {
    case 20:
      return '-opacity20';
      break;

    case 40:
      return '-opacity40';
      break;

    case 60:
      return '-opacity60';
      break;

    case 80:
      return '-opacity80';
      break;

    case 100:
      return '-opacity100';
      break;

    default:
      return '-opacity20';
      break;
  }
}
?>
