const toggle = document.getElementById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classList.toggle('bi-moon');
    if(this.classList.toggle('bi-brightness-high-fill')){
        body.style.background = '#cbc0d3';
        body.style.color = 'black';
        body.style.transition = '2s';
    }else{
        body.style.background = 'black';
        body.style.color = 'black';
        body.style.transition = '2s';
    }
});


function a(){
    if(confirm("Anda Ingin Memesan Apa?")){
        alert("pesanan segera dibuat")
    }
    else{
        alert("membatalkan pesanan")
    }
}

function layer1(){
    document.getElementById('foto').src="gambar/irenee.jpg";
}

function layer2(){
   document.getElementById('foto').src="gambar/foto1.jpeg";
}
document.getElementById('foto').addEventListener('mouseover', layer1);
document.getElementById('foto').addEventListener('mouseout', layer2);

function zoomIn() {
    var pic = document.getElementById("geeks");
    var width = pic.clientWidth;
    pic.style.width = width + 100 + "px";
    }
function zoomOut() {
var pic = document.getElementById("geeks");
var width = pic.clientWidth;
pic.style.width = width - 100 + "px";
}