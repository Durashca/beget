let materialElem = document.querySelectorAll('.list-lessons a.lesson'); // 10 уроков (a.lesson )
let progress = document.getElementById('progress');
// console.log(progress.textContent);
tot = Math.floor(progress.textContent / 10); 
for (let i = 0; i < tot; i++){
  materialElem[i].classList.remove('disabled');
}