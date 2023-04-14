let container1=document.getElementById('container1');
let admin = document.getElementById('admin');
// console.log(container1);
let etudiant=document.getElementById('etudiant');

etudiant.addEventListener('click',function(){
  container1.classList.remove('gg');
});
admin.addEventListener('click',function(){
  container1.classList.add('gg');
  console.log(document.querySelector('#videinput').value= null)
});

function show(id){

    document.querySelector("#commentaire-"+id).setAttribute('class', 'd-none');
    document.querySelector("#input-"+id).value = document.querySelector("#commentaire-"+id).innerHTML
    document.querySelector("#form-"+id).setAttribute('class', 'd-block');
    // console.log(document.querySelector("#cmt-input-"+cmtID).value)

}


