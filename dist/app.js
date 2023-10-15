


const slider = document.querySelector("#latest-offers-scroll-wrapper");
const scrollDistance = 100;

function scrollSlider() {
    const currentScroll = slider.scrollLeft;
    const maxScroll = slider.scrollWidth - slider.clientWidth;

    if (currentScroll + scrollDistance >= maxScroll) {
        slider.scrollLeft = 0;
    } else {
        slider.scrollLeft = currentScroll + scrollDistance;
    }
}

setInterval(scrollSlider, 3000);

function scrollLeft(scrollWrapper){
    let currentScrollLeft = scrollWrapper.scrollLeft();
    scrollWrapper.animate({ scrollLeft: currentScrollLeft - 250 }, 600);
}
function scrollRight(scrollWrapper){
    let currentScrollLeft = scrollWrapper.scrollLeft();
    scrollWrapper.animate({ scrollLeft: currentScrollLeft + 250 }, 600);
}

// Nav Scroll
let navBadgeScrollWrapper = $("#nav-badge-scroll-wrapper")

$("#scroll-forward-btn").click(function (){
    scrollRight(navBadgeScrollWrapper)
});
$("#scroll-back-btn").click(function (){
    scrollLeft(navBadgeScrollWrapper)
});


// Special offer scroller
let offerCardScrollWrapper = $("#offers-scroll-wrapper")

$("#scroll-forward-btn-offer").click(function (){
    scrollRight(offerCardScrollWrapper)
});
$("#scroll-back-btn-offer").click(function (){
    scrollLeft(offerCardScrollWrapper)
});



// Latest posts
let latestOfferCardScrollWrapper = $("#latest-offers-scroll-wrapper")

$("#scroll-forward-btn-latest-offer").click(function (){
    scrollRight(latestOfferCardScrollWrapper)
});
$("#scroll-back-btn-latest-offer").click(function (){
    scrollLeft(latestOfferCardScrollWrapper)
});


// swiper
var swiper = new Swiper(".mySwiper", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

// Animations


// Nav Animation, quickserach
const nav = $('#second-nav');
const quickSearch = $('#quick-search');

const timeline = gsap.timeline();

timeline.to(nav, { x: 3000, duration: 0, ease: 'power2.inOut' });
timeline.to(quickSearch, { x: 2500, duration: 0, ease: 'power2.inOut'});
timeline.to([quickSearch,nav], { x: -40, duration: 1, ease: 'power2.inOut' });
timeline.to([nav, quickSearch], { x: 0, duration: 0.5, ease: 'power2.inOut' });


timeline.play();


// Transport cards animation
var transportCards = $(".transport-animate");
var transportCardstl = gsap.timeline();
transportCardstl.from(transportCards, {
    y: -200,
    opacity: 0,
    duration: 1,
    stagger: 0.4,
});

// Left apper animation
var leftAnimateElements = $(".left-appear-animation");
var leftAnimateTL = gsap.timeline({
    scrollTrigger: {
        trigger: leftAnimateElements,
        start: "top center",
        end: "bottom center",
        toggleActions: "play none none none",
    },
});

leftAnimateTL.from(leftAnimateElements, {
    x: -1000,
    duration: 1.2,
});

var rightAnimateElements = $(".right-appear-animation");
var rightAnimateTl = gsap.timeline({
    scrollTrigger: {
        trigger: rightAnimateElements,
        start: "top center",
        end: "bottom center",
        toggleActions: "play none none none",
    },
});

rightAnimateTl.from(rightAnimateElements, {
    x: 2000,
    duration: 1.2,

});


var animateElements = $("#map");
var animateTL = gsap.timeline({
    scrollTrigger: {
        trigger: animateElements,
        start: "top center",
        end: "bottom center",
        toggleActions: "play none none none",
    },
});

gsap.from($("#map"), {
    opacity: 0,
    duration: 1, // Animation duration in seconds
    scrollTrigger: {
        trigger: $("#map"),
        start: "top 80%",
        end: "top 20%",
        toggleActions: "play none none none",
    },
});