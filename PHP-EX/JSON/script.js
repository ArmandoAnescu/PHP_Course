var root='https://jsonplaceholder.typicode.com';
$(function(){
$.ajax({
    url: root + '/posts',
    method:'GET',
}).then(function(data){
    var ul=document.createElement('ul');
    for(var i=0;i<data.length;i++){
        var user=data[i];
        var li=document.createElement('li');
        li.innerHTML=user.title;
        ul.appendChild(li);
      
    }
    document.body.appendChild(ul);
});
});