function sortTableBy(tableElement, type, direction) {

  const tableRowArr = Array.from(document.querySelectorAll(`#${tableElement.id} .table-row`));

  tableRowArr.sort((a, b) => {
    const titleA = a.querySelector(`.${type}-title`).textContent.toLowerCase();
    const titleB = b.querySelector(`.${type}-title`).textContent.toLowerCase();
    return titleA.localeCompare(titleB);
  });

  if(direction === 'asc') {
    tableRowArr.reverse();
  }

  tableElement.innerHTML = '';

  tableRowArr.forEach((projectRow) => {
    tableElement.appendChild(projectRow);
  });

  tableElement.setAttribute('data-sort', type);
}

function initSortBtn(sortBtn) {

  const tableElement = document.getElementById(sortBtn.getAttribute('data-table-id'));

  
  sortBtn.addEventListener('click', () => {
    const arrowSpan = sortBtn.querySelector('.arrow-span');
    const allArrowSpans = document.querySelectorAll('.arrow-span');
    allArrowSpans.forEach((span) => {
      span.classList.add('hidden');
    });
  
    arrowSpan.classList.remove('hidden');
    
    const sortType = sortBtn.getAttribute('data-sort-type');    
    const currentSortType = tableElement.getAttribute('data-sort');
    const currentSortDirection = tableElement.getAttribute('data-sort-direction');

    if(currentSortType != sortType) {
      sortTableBy(tableElement, sortType, 'desc')
      tableElement.setAttribute('data-sort-direction', 'desc');
    } else {
      if(currentSortDirection === 'desc') {
        sortTableBy(tableElement, sortType, 'asc');
        arrowSpan.classList.add('rotate');
        tableElement.setAttribute('data-sort-direction', 'asc');
      } else {
        sortTableBy(tableElement, sortType, 'desc');
        arrowSpan.classList.remove('rotate');
        tableElement.setAttribute('data-sort-direction', 'desc');
      }
    } 

    tableElement.setAttribute('data-sort', sortType);
  });
  
}


const allSortBtns = document.querySelectorAll('.sort-btn');
allSortBtns.forEach((sortBtn) => {
  initSortBtn(sortBtn);
});
