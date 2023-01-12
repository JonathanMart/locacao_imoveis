
const buscar = document.getElementById("buscarCep")

buscar.addEventListener("click", () => {


     function required  (){
       
        const response =  fetch ("https://viacep.com.br/ws/")
    
    
    
        const date =  response.json()
        console.log(date)
    }

})



