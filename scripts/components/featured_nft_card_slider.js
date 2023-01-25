const featuredNftCardSlideNode = document.getElementById("featured_nft_cards_slider");
const featuredNftSliderDotsContainer = document.getElementById("featured_nft_cards_slider_dots");


var options = { loop: false }
var featuredNftCardSlideApi = EmblaCarousel(featuredNftCardSlideNode, options)

for (let i = 0; i < featuredNftSliderDotsContainer.children.length; i++) {
    featuredNftSliderDotsContainer.children[i]
        .addEventListener("click", () => {
            featuredNftCardSlideApi.scrollTo(i);
        })
}

const handleSlideChange = () => {
    const selectedSlide = featuredNftCardSlideApi.selectedScrollSnap();
    for (let i = 0; i < featuredNftSliderDotsContainer.children.length; i++) {
        featuredNftSliderDotsContainer.children[i].classList.remove("active");
    }
    featuredNftSliderDotsContainer.children[selectedSlide].classList.add("active");
}


featuredNftCardSlideApi
    .on("init", handleSlideChange)
    .on("select", handleSlideChange)

