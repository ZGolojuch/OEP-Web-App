
const search = document.querySelector('input[placeholder="search excerpt"]');

const excerptContainer = document.querySelector(".excerpts");

search.addEventListener('keyup', function(event){
    if (event.key === "Enter"){
        event.preventDefault();

        const data = {search: this.value};

        fetch('/search', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data),
        }).then(function (response){
            return response.json();
        }).then(function (excerpts){
           excerptContainer.innerHTML = "";
           loadExcerpts(excerpts);
        });
    }

});

function loadExcerpts(excerpts){
    excerpts.forEach(excerpt => {
        console.log(excerpt);
        createExcerpt(excerpt);
        }

    )
}

function createExcerpt(excerpt){
    const template = document.querySelector('#excerpt-template');

    const clone = template.content.cloneNode(true);

    const image = clone.querySelector("img");
    image.src = '/public/uploads/$(project.image)';

    const title = clone.querySelector("h2");
    title.innerHTML = excerpt.title;

    const information = clone.querySelector("p");
    information.innerHTML = excerpt.information;

    const like = clone.querySelector(".fas fa-heart");
    like.innerText = excerpt.like;

    const dislike = clone.querySelector(".fa-solid fa-thumbs-down");
    like.innerText = excerpt.dislike;


    excerptContainer.appendChild(clone);
}