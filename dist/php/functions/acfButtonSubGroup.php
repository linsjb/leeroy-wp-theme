<?php
function acfButtonSubGroup($type, $acfObject, $acfGroupObject = null) {

  switch($type) {
    case 'textColor':
      switch(get_sub_field($acfObject)[$acfGroupObject]) {
        case 'black':
        return 'a-textColor--black';
        break;

        case 'purple':
        return 'a-textColor--purple';
        break;

        case 'white':
        return 'a-textColor--white';
        break;

        case 'blue':
        return 'a-textColor--blue';
        break;

        case 'gold':
        return 'a-textColor--gold';
        break;

        default:
        return 'a-textColor--black';
        break;
      }
      break;

    case 'textAlignment':
      switch(get_sub_field($acfObject)[$acfGroupObject]) {
        case 'left':
          return 'a-title--left';
          break;

        case 'center':
          return 'a-title--center';
          break;

        case 'right':
          return 'a-title--right';
          break;

        default:
          return 'a-title--left';
          break;
      }
      break;

    case 'fontSize':
      switch(get_sub_field($acfObject)[$acfGroupObject]) {
        case 20:
          return 'a-fontSize--20';
          break;

        case 25:
          return 'a-fontSize--25';
          break;

        case 30:
          return 'a-fontSize--30';
          break;

        case 35:
          return 'a-fontSize--35';
          break;

        case 40:
          return 'a-fontSize--40';
          break;

        default:
          return 'a-fontSize--20';
          break;
      }
      break;
  }
}
?>
