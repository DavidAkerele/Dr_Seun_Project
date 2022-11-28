// var xhttp = new XMLHttpRequest();
// xhttp.onreadystatechange = function(){
//     if (xhttp.readyState == 4 && xhttp.status == 200){
//         document.body.innerHTML += xhttp.responseText; // you can change the target. As long as you append xhttp.responseText. It will work fine.
//     }
// };
// xhttp.open('GET', 'partial/footer.html', true); // note: link the footer.html
// xhttp.send();

$(function(){
    $("footer").load("footer.html");
});