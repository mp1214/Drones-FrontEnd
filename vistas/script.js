document.addEventListener("click", function (event) {
  if (event.target.classList.contains("ver")) {
    const element = event.target.parentElement.parentElement;
    const src = element.getAttribute("loc");
    var iframe = document.getElementById("miIframe");
    iframe.setAttribute("src", src);
  }
});

const { createApp } = Vue

  createApp({
    data() {
      return {
        drones:[],
        showModal: false,
        imagenDron:"https://firebasestorage.googleapis.com/v0/b/white-con-amor.appspot.com/o/drones%2Fdrone-3198324_1280.jpg?alt=media&token=acdbf9b7-98a3-4421-ba7d-8ee0bb82d948",
        carga:true,
        ver:false,
        message:"Espere un momento a que se carguen los datos",
        url:'https://dron-api-1605.onrender.com/drones'
      }
    },
    methods: {
    
        fetchData(url) { 
           
           fetch(url)
            .then(response => response.json())
            .then(data => {
              console.log(data)
              this.drones=data
        this.carga=false
           })
            .catch(error=>{
               alert("Ups... se produjo un error: "+ error);
               this.error=true
             })
        
        }
      },
      created() {
        this.fetchData(this.url)
      }
    

  }).mount('#app')
