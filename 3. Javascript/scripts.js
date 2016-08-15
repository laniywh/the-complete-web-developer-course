function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

var clickedTime;
var createdTime;
var reactionTime;


function makeBox() {
    var time=Math.random();
    time=time*3000;

    setTimeout(function() {
        // move box
        document.getElementById("box").style.left=Math.random()*800 + "px";
        document.getElementById("box").style.top=Math.random()*500 + "px";

        // change box's shape
        if (Math.random() > 0.5) {
            document.getElementById("box").style.borderRadius="50px";
        } else {
            document.getElementById("box").style.borderRadius="0";
        }

        // change box color
        document.getElementById("box").style.backgroundColor=getRandomColor();

        // display box
        document.getElementById("box").style.display="block";
        createdTime=Date.now();
    }, time);

}


document.getElementById("box").onclick=function() {
    clickedTime=Date.now();
    reactionTime=(clickedTime-createdTime)/1000;

    document.getElementById("time").innerHTML=reactionTime;

    this.style.display="none";
    makeBox();
}
makeBox();
