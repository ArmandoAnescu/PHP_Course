var postsJSON='[{"userId": 1,"id": 1,'+
        '"title": "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",'+
        '"body": "quia et suscipit suscipit recusandae consequuntur expedita et cum reprehenderit molestiae ut ut quas totam nostrum rerum est autem sunt rem eveniet architecto"}]';


var posts=JSON.parse(postsJSON);
var post=posts[0];
console.log(post.userId);
var secondJson=JSON.stringify(posts);//converte il JSON in una stringa JSON
console.log(secondJson);