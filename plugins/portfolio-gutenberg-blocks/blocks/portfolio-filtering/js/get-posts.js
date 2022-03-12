const categoryItems = document.querySelectorAll('.portfolio-filtering__categories-item');

categoryItems.forEach((categoryItem, index) => {
    const thisSectionSelector = categoryItem.closest('.portfolio-filtering');

    categoryItem.addEventListener('click', function(){
        const endpoint = (this.dataset.id === 'all') ? 'http://localhost/portfolio-responsive-template/wp-json/wp/v2/portfolio?_embed' : `http://localhost/portfolio-responsive-template/wp-json/wp/v2/portfolio?categories=${this.dataset.id}&_embed`;
        fetch(endpoint)
        .then(response => response.json())
        .then(data => {

            const portfolioPostsThisSection = document.querySelector(`#${thisSectionSelector.id} .portfolio-filtering__posts`);

            const widthArray = ['', 'portfolio-filtering__post--wide', 'portfolio-filtering__post--wide', ''];

            while (portfolioPostsThisSection.firstChild){
                portfolioPostsThisSection.firstChild.remove();
            }

            data.forEach((portfolioPost, index) => {
                const portfolioItemTerms = portfolioPost._embedded['wp:term'][0];
                let portfolioItemTermsString = '';

                portfolioItemTerms.forEach((portfolioItemTerm, index) => {
                    console.log(portfolioItemTerm.name);
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
            })
        })
    })     
});
