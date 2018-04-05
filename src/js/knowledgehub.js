export function grid() {
  (function ($) {
    $('.o-knowledgeHubGrid').masonry({
      itemSelector: '.o-knowledgeHubCell',
      percentPosition: true,
      horizontalOrder: true,
      gutter: 15
    });
  })(jQuery);
}

export function cellHeight() {
  let knowledgeHubCells = document.getElementsByClassName('o-knowledgeHubCell');

  for (var i = 0; i < knowledgeHubCells.length; i++) {
    let knowledgeHubCell = document.getElementById('cell-' + i);
    if (knowledgeHubCell.getAttribute('data-imgprops') == 0) {
      knowledgeHubCell.style.height = 'auto';
    } else {
      knowledgeHubCell.style.height = knowledgeHubCell.getAttribute('data-imgprops') * knowledgeHubCell.offsetWidth + 'px';
    }
  }
}

export function menu() {
  let buttons = document.getElementsByClassName('a-knowledgeHubMenuItem');
  let dropdowns = document.getElementsByClassName('o-knowledgeHubMenuDropdown');

  // Convert buttons variable from HTMLCollection to an Array
  buttons = Array.from(buttons);

  buttons.map((button, index) => {
    button.addEventListener('click', () => {
      for (var i = 0; i < buttons.length; i++) {
        if(i != index) {
          dropdowns[i].classList.remove('display');
          buttons[i].classList.remove('activeKnowHubMenu');
        }
      }

      button.classList.toggle('activeKnowHubMenu');
      dropdowns[index].classList.toggle('display');
    });
  });
}
