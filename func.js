function appending(sub,lecture, name){
    for(let i=0;i < name.length - 1 ;i++)
    $(sub).append("<a href = " + name[i] + ">" + lecture[i] + "</a>"+"<br><br>");
}