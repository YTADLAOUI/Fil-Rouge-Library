let container1=document.getElementById('container1');
let admin = document.getElementById('admin');
console.log(container1);
let etudiant=document.getElementById('etudiant');

etudiant.addEventListener('click',function(){
  container1.classList.remove('gg');
});
admin.addEventListener('click',function(){
  container1.classList.add('gg');
  console.log(document.querySelector('#videinput').value= null)
});