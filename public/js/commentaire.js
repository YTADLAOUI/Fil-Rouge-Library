// function displayData(){
//   var id = $('#idLivre').val();
//   $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });

//   $.ajax({
//     url:'/blog-single/'+id+'/comments',
//     type:'get',
//     headers : { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
//     data :{id:id},
//     success: function(data){
//       var get = $('#getComment');
//       // get.Html('');
//       for (let index = 0; index < data.length; index++) {
//         get.append(`<div>
//         <a class="pull-left"href="#"><img class="rounded-circle me-3" style="width:80px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt=""></a>
//       </div>

//       <div class="media">
//           <div class="media-body">
//               <h4 class="media-heading">${data[index]['']}</h4>
//               <div class="ms-2">
                
//                 <p class=''>cont</p></div> 
                
                
//               <ul class="list-unstyled list-inline media-detail pull-left">
//                   <li><i class="fa fa-calendar me-1"></i>27/02/2014</li>
//               </ul>
//               <ul class="list-unstyled list-inline media-detail pull-right">
//                   <li class="fa fa-pencil-square-o"><a href=""></a></li>
//                   <li class="fa fa-trash-o"><a href=""></a></li>
//               </ul>
//           </div>
//       </div>
//       </div>`);
        
//       }
//     }
//   })
  
// }

// desplayComments()

// function saveComments(id){
//   var msg = $('#message').val();
//   $.ajaxSetup({
//     headers: {
//       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
//   });

//   $.ajax({
//     url:'/blog-single/'+id+'/comments',
//     type:'post',
//     headers : { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') },
//     data :{id:id,comment:msg},
//     success: function(){
//       desplayComments()
//     }
//   })
  
// }
