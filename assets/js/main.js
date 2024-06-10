const projectsList = document.querySelector('.projects-list');
const projectTitleArr = [];

sortTableBy(projectsList, 'course');


function sortTableBy(tableElement, type, direction) {

  const projectRowArr = Array.from(document.querySelectorAll('.project-row'));

  projectRowArr.sort((a, b) => {
    const titleA = a.querySelector(`.${type}-title`).textContent.toLowerCase();
    const titleB = b.querySelector(`.${type}-title`).textContent.toLowerCase();
    return titleA.localeCompare(titleB);
  });

  if(direction === 'asc') {
    projectRowArr.reverse();
  }

  projectsList.innerHTML = '';

  projectRowArr.forEach((projectRow) => {
    projectsList.appendChild(projectRow);
  });

  projectsList.setAttribute('data-sort', type);
}

function initSortBtn(sortBtn) {

  sortBtn.addEventListener('click', () => {
    const sortType = sortBtn.getAttribute('data-sort-type');

    const arrowSpan = sortBtn.querySelector('.arrow-span');
    const allArrowSpans = document.querySelectorAll('.arrow-span');
    allArrowSpans.forEach((span) => {
      span.classList.add('hidden');
    });

    arrowSpan.classList.remove('hidden');

    const currentSortType = projectsList.getAttribute('data-sort');
    const currentSortDirection = projectsList.getAttribute('data-sort-direction');

    if(currentSortType != sortType) {
      sortTableBy(projectsList, sortType, 'desc')
      projectsList.setAttribute('data-sort-direction', 'desc');
    } else {
      if(currentSortDirection === 'desc') {
        sortTableBy(projectsList, sortType, 'asc');
        arrowSpan.classList.add('rotate');
        projectsList.setAttribute('data-sort-direction', 'asc');
      } else {
        sortTableBy(projectsList, sortType, 'desc');
        arrowSpan.classList.remove('rotate');
        projectsList.setAttribute('data-sort-direction', 'desc');
      }
    } 

    projectsList.setAttribute('data-sort', sortType);
  });
  
}


const allSortBtns = document.querySelectorAll('.sort-btn');
allSortBtns.forEach((sortBtn) => {
  initSortBtn(sortBtn);
});
