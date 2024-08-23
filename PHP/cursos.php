
<section id="cursos">
    <span class="barra_lateral">
        <div class="search">
            <input id="searchbar" type="text" name="searchbar" placeholder="buscar um curso..." >
        </div>
        <div class="courses_list">
            <ul class="category_list">
                <li class="category"><a href="#">Todos</a></li>
                <li class="category"><a href="#">Mais procurados</a></li>
                <li class="category"><a href="#">Desenvolvimento pessoal</a></li>
                <li class="category"><a href="#">Melhore na comunicação!</a></li>
                <li class="category"><a href="#">Linguagens</a></li>
                <li class="category"><a href="#">Segurança</a></li>
                <li class="category"><a href="#">Descubra!</a></li>
            </ul>
        </div>
    </span>
    <div class="card-container">
    <span class="curso">
        <h2 class="tit">titulo</h2>
        <p class="desc">descrição</p>
    </span>
    </div>

</section>




<!-- CÓDIGO QUE CRIA AS CARDS PRA PODER PESQUISAR OS NGC -->
<script>
    const data = [
    {title: "Comunicação não violenta",
    description: "Explore estratégias práticas para uma comunicação mais empática e eficaz com o curso de Comunicação Não Violenta. Desenvolva habilidades para expressar necessidades e ouvir os outros com compaixão, facilitando relações mais harmoniosas."
    },
    {
        title: "Informática Básica",
    description: "Explore estratégias práticas para uma comunicação mais empática e eficaz com o curso de Comunicação Não Violenta. Desenvolva habilidades para expressar necessidades e ouvir os outros com compaixão, facilitando relações mais harmoniosas."
    },
    {
        title: "Empreendedorismo",
    description: "Explore estratégias práticas para uma comunicação mais empática e eficaz com o curso de Comunicação Não Violenta. Desenvolva habilidades para expressar necessidades e ouvir os outros com compaixão, facilitando relações mais harmoniosas."
    },
    {
        title: "Inglês Básico",
    description: "Explore estratégias práticas para uma comunicação mais empática e eficaz com o curso de Comunicação Não Violenta. Desenvolva habilidades para expressar necessidades e ouvir os outros com compaixão, facilitando relações mais harmoniosas."
    },
    {
        title: "Atualidades",
    description: "Explore estratégias práticas para uma comunicação mais empática e eficaz com o curso de Comunicação Não Violenta. Desenvolva habilidades para expressar necessidades e ouvir os outros com compaixão, facilitando relações mais harmoniosas."
    }
];

const cardContainer = document.querySelector(".card-container");
const searchbar = document.querySelector("#searchbar");


const displayData = data => {
    cardContainer.innerHTML = "";
    data.forEach(e => {
    cardContainer.innerHTML += `
    <div class="curso"></div>
    <h2 class="tit">${e.title}</h2> 
    <p class="desc">${e.description}</p> 
        `
    })
}

searchbar.addEventListener("keyup", (e) => {
    const search = data.filter(i => i.title.toLocaleLowerCase().includes(e.target.value.toLocaleLowerCase()));
    displayData(search);
})  

window.addEventListener("load", displayData.bind(null,data));
</script>
