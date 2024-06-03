const playBtns = document.querySelectorAll(".play-btn");

playBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    const video = btn.parentElement.querySelector("video");
    
    if(video.paused) {
      video.play();
      btn.innerHTML = "Pause"
    } else {
      btn.innerHTML = "Play"
      video.pause();
    }

    video.addEventListener("ended", () => {
      btn.innerHTML = "Play"
      console.log("video ended");
    })
  });
});


// const searchInput = document.querySelector("#search-input");
// const projectsTable = document.querySelector(".projects-table");
// const resultsTable = document.querySelector(".results-table");

// let typingTimer;
// const typingDelay = 500;


// searchInput.addEventListener("input", () => {
//   const query = searchInput.value;

//   if(query.length > 0) {
//     console.log("jetzt");
//     projectsTable.style.display = "none";  
//   } else {
//     projectsTable.style.display = "block";
//   }

//   clearTimeout(typingTimer);
//   typingTimer = setTimeout(() => {
    
//     if(query.length > 2) {    
//       fetch("/search?q=" + query)
//         .then((response) => response.json())
//         .then((data) => {

//           resultsTable.innerHTML = "";

//           if (data.length > 0) {
//             data.forEach((row) => {
//               resultsTable.innerHTML += `
//                 <a href="${row.url}" class="project-row">
//                   <p>${row.title}</p>
//                 </a>
//               `;
//             });
//           }
//         });
//     }

//   }, typingDelay);
// });