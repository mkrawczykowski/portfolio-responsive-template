const fetchTriggers = document.querySelectorAll('.portfolio-filtering__categories-item, .portfolio-filtering__button');
const homepageURL = document.body.dataset.homepage;

fetchTriggers.forEach((fetchTrigger, index) => {
    const thisSectionSelector = fetchTrigger.closest('.portfolio-filtering');
    const thisSelectionLoadMore = thisSectionSelector.querySelector(':scope .portfolio-filtering__button');

    fetchTrigger.addEventListener('click', function(){
        let whatWasClicked;
        if (this.classList.contains('portfolio-filtering__categories-item')){
            whatWasClicked = 'li';
            thisSelectionLoadMore.innerHTML = 'Explore more';
        } else if (this.classList.contains('portfolio-filtering__button')){
            whatWasClicked = 'button';
        }

        //if clicked on category li, the button (Load more) gets category's id
        if (whatWasClicked === 'li'){
            const categoryId = this.dataset.id;
            thisSelectionLoadMore.dataset.id = categoryId;
        }

        const windowWidth = window.innerWidth;
        let perPage = (windowWidth > 1200) ? 4 : 3;
        const portfolioPostsThisSection = document.querySelector(`#${thisSectionSelector.id} .portfolio-filtering__posts`);
        let offset = (whatWasClicked === 'button') ? document.querySelectorAll(`#${thisSectionSelector.id} .portfolio-filtering__post`).length : 0;
        const endpoint = (this.dataset.id === 'all') ? `${homepageURL}/wp-json/wp/v2/portfolio?per_page=${perPage+1}&offset=${offset}&_embed` : `http://localhost/portfolio-responsive-template/wp-json/wp/v2/portfolio?categories=${this.dataset.id}&per_page=${perPage+1}&offset=${offset}&_embed`;

        if (whatWasClicked ==='li'){
            fetchPosts(endpoint);
        }
        if (whatWasClicked ==='button' && thisSelectionLoadMore.dataset.active === 'true'){
            fetchPosts(endpoint);
        }

        function fetchPosts(endpoint){
            fetch(endpoint)
                .then(response => response.json())
                .then(data => {
                    const widthArray = ['', 'portfolio-filtering__post--wide', 'portfolio-filtering__post--wide', ''];

                    if (whatWasClicked === 'li'){
                        while (portfolioPostsThisSection.firstChild){
                            portfolioPostsThisSection.firstChild.remove();
                        }
                    }
                        const howManyPosts = (data.length < perPage) ? data.length : perPage;
                        for (let index = 0; index < howManyPosts; index++){
                            let portfolioPost = data[index];
                            const portfolioItemTerms = portfolioPost._embedded['wp:term'][0];
                            let portfolioItemTermsString = '';

                            portfolioItemTerms.forEach((portfolioItemTerm, index) => {
                                portfolioItemTermsString += portfolioItemTerm.name;
                                portfolioItemTermsString += (index === portfolioItemTerms.length-1) ? '' : ', ';
                            });

                            const h3Element = document.createElement('h3');
                            const h3Text = document.createTextNode(portfolioPost.title.rendered);
                            h3Element.appendChild(h3Text);

                            const h4Element = document.createElement('h4');
                            const h4Text = document.createTextNode(portfolioItemTermsString);
                            h4Element.appendChild(h4Text);

                            const linkElement = document.createElement('a');
                            linkElement.className = `portfolio-filtering__post ${widthArray[index]}`;
                            linkElement.appendChild(h4Element);
                            linkElement.appendChild(h3Element);

                            portfolioPostsThisSection.appendChild(linkElement);
                        }
                        
                    if (data.length <= perPage){
                        thisSelectionLoadMore.innerHTML = 'No more posts';
                        thisSelectionLoadMore.dataset.active === 'false'
                    }
                })
        }
    })
})




















// const categoryItems = document.querySelectorAll('.portfolio-filtering__categories-item');

// categoryItems.forEach((categoryItem, index) => {
//     const thisSectionSelector = categoryItem.closest('.portfolio-filtering');

//     categoryItem.addEventListener('click', function(){
//         const windowWidth = window.innerWidth;
//         let perPage = (windowWidth > 1200) ? 4 : 3;
//         const portfolioPostsThisSection = document.querySelector(`#${thisSectionSelector.id} .portfolio-filtering__posts`);
//         let offset = document.querySelectorAll(`#${thisSectionSelector.id} .portfolio-filtering__post`).length;

//         const endpoint = (this.dataset.id === 'all') ? `http://localhost/portfolio-responsive-template/wp-json/wp/v2/portfolio?per_page=${perPage}&offset=${offset}&_embed` : `http://localhost/portfolio-responsive-template/wp-json/wp/v2/portfolio?categories=${this.dataset.id}&per_page=${perPage}&offset=${offset}&_embed`;
        
//         fetch(endpoint)
//         .then(response => response.json())
//         .then(data => {

//             const widthArray = ['', 'portfolio-filtering__post--wide', 'portfolio-filtering__post--wide', ''];

//             if (this.classList.contains('portfolio-filtering__categories-item')){
//                 while (portfolioPostsThisSection.firstChild){
//                     portfolioPostsThisSection.firstChild.remove();
//                 }
//             }

//             data.forEach((portfolioPost, index) => {
//                 const portfolioItemTerms = portfolioPost._embedded['wp:term'][0];
//                 let portfolioItemTermsString = '';

//                 portfolioItemTerms.forEach((portfolioItemTerm, index) => {
//                     console.log(portfolioItemTerm.name);
//                     portfolioItemTermsString += portfolioItemTerm.name;
//                     portfolioItemTermsString += (index === portfolioItemTerms.length-1) ? '' : ', ';
//                 });

//                 const h3Element = document.createElement('h3');
//                 const h3Text = document.createTextNode(portfolioPost.title.rendered);
//                 h3Element.appendChild(h3Text);

//                 const h4Element = document.createElement('h4');
//                 const h4Text = document.createTextNode(portfolioItemTermsString);
//                 h4Element.appendChild(h4Text);

//                 const linkElement = document.createElement('a');
//                 linkElement.className = `portfolio-filtering__post ${widthArray[index]}`;
//                 linkElement.appendChild(h4Element);
//                 linkElement.appendChild(h3Element);

//                 portfolioPostsThisSection.appendChild(linkElement);
//             })
//         })
//     })     
// });
