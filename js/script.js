var d = document
var votosCont = '';
function PediClave() {
    var password = prompt("Ingresa tu contraseña");
    if (password != 'votacion') {
        alert("Contraseña Incorrecta");
        PediClave()
    }
}

$('#votar').click(function(event) {
  event.preventDefault()
  cambiarVista('.ops-init','#candidatos-sec')
});
$("#ver-resultados").click(function(event) {
  event.preventDefault()
  //verStats()
  cambiarVista('.ops-init','#resultados-sec')
});
function cambiarVista(esconde,mostrar){
  $(esconde).fadeOut(400)
  $(mostrar).fadeIn(900)
}
function verStats(){
  var canditat1 = localStorage.getItem('candidato1')
    $("#candidat-1").text(canditat1+" Votos")
  var canditat2 = localStorage.getItem('candidato2')
    $("#candidat-2").text(canditat2+" Votos")
  var canditat3 = localStorage.getItem('candidato3')
    $("#candidat-3").text(canditat3+" Votos")
  var canditat4 = localStorage.getItem('candidato4')
    $("#candidat-4").text(canditat4+" Votos")
  var canditat5 = localStorage.getItem('candidato5')
    $("#candidat-5").text(canditat5+" Votos")
  var canditat6 = localStorage.getItem('candidato6')
    $("#candidat-6").text(canditat5+" Votos")
}
function IniciarDatos(){
  var v = JSON.parse(localStorage.getItem('voto'))
  var voto = [{op: 0}]
  if (v == null) {
    var vtos = JSON.stringify(voto)
    localStorage.setItem('voto'+1,vtos)
  }
}
function asignarVoto(evento){
  evento.preventDefault()
  var voto = parseInt(evento.target.alt)
  if (voto == 1) {
    var cont = localStorage.getItem('candidato1')
    var masunVoto = parseInt(cont)+1
    localStorage.setItem('candidato1',masunVoto)
  }
  if (voto == 2) {
    var cont = localStorage.getItem('candidato2')
    var masunVoto = parseInt(cont)+1
    localStorage.setItem('candidato2',masunVoto)
  }
  if (voto == 3) {
    var cont = localStorage.getItem('candidato3')
    var masunVoto = parseInt(cont)+1
    localStorage.setItem('candidato3',masunVoto)
  }
  if (voto == 4) {
    var cont = localStorage.getItem('candidato4')
    var masunVoto = parseInt(cont)+1
    localStorage.setItem('candidato4',masunVoto)
  }
  if (voto == 5) {
    var cont = localStorage.getItem('candidato5')
    var masunVoto = parseInt(cont)+1
    localStorage.setItem('candidato5',masunVoto)
  }
  if (voto == 6) {
    var cont = localStorage.getItem('candidato6')
    var masunVoto = parseInt(cont)+1
    localStorage.setItem('candidato6',masunVoto)
  }
  
  
    alertify.confirm("Deseas votar por este candidato.",
    function(){
      alertify.success('Ok');
      location.reload(true);
      alertify.alert("Gracias por tu voto", function(){});
    },
    function(){
      alertify.error('Cancel');
        cambiarVista('#candidatos-sec','#logo-fe-alegria')
    });
  
}
function ListarVoto(){
    if (localStorage.getItem('candidato1') == null) {
      localStorage.setItem('candidato1',0)
    }
    if (localStorage.getItem('candidato2') == null) {
      localStorage.setItem('candidato2',0)
    }
    if (localStorage.getItem('candidato3') == null) {
      localStorage.setItem('candidato3',0)
    }
    if (localStorage.getItem('candidato4') == null) {
      localStorage.setItem('candidato4',0)
    }
    if (localStorage.getItem('candidato5') == null) {
      localStorage.setItem('candidato5',0)
    }
    if (localStorage.getItem('candidato6') == null) {
      localStorage.setItem('candidato6',0)
    }

}
function EstablecerCandidatos(){
  var cand1 = d.querySelector('#cand-1'),
      cand2 = d.querySelector('#cand-2'),
      cand3 = d.querySelector('#cand-3'),
      cand4 = d.querySelector('#cand-4'),
      cand5 = d.querySelector('#cand-5'),
      cand6 = d.querySelector('#cand-6')
  cand1.onclick = asignarVoto
  cand2.onclick = asignarVoto
  cand3.onclick = asignarVoto
  cand4.onclick = asignarVoto
  cand5.onclick = asignarVoto
  cand6.onclick = asignarVoto
}
// IniciarDatos()
EstablecerCandidatos()
ListarVoto()
verStats()

// PediClave();


const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#photo');
const file = document.querySelector('#file');
const uploadBtn = document.querySelector('#uploadBtn');

//Si la usuaria se cierne sobre img div

imgDiv.addEventListener('mouseenter', function(){
    uploadBtn.style.display = "block";
});

//si nos alejamos de img div

imgDiv.addEventListener('mouseleave', function(){
    uploadBtn.style.display = "none";
});

//vamos a trabajar para que la imagen muestre la funcionalidad cuando elegimos una imagen para cargar

//cuando elegimos una foto para subir

file.addEventListener('change', function(){
    // esto se refiere al archivo
    const choosedFile = this.files[0];

    if (choosedFile) {

        const reader = new FileReader(); //FileReader es una función predefinida de JS

        reader.addEventListener('load', function(){
            img.setAttribute('src', reader.result);
        });

        reader.readAsDataURL(choosedFile);

        //Todo bien hecho

         // por favor dale me gusta al video
         // comente si tiene algún problema relacionado con el video y también califique mi trabajo en la sección de comentarios

         //Y también suscríbete para más tutoriales como este

         //gracias por ver
    }
});