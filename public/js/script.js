let container1=document.getElementById('container1');
let container2=document.getElementById('container2');
console.log(container2)
let admin = document.getElementById('admin');
console.log(admin)
let etudiant=document.getElementById('etudiant');

etudiant.addEventListener('click',function(){
  container1.classList.remove('gg');
  container2.classList.add('gg');
});
admin.addEventListener('click',function(){
  container2.classList.remove('gg');
  container1.classList.add('gg');
});