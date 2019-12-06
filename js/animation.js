var frontEndOpen = false;
var backEndOpen = false;


function showFrontEnd(){
    TweenMax.to('.cover-heading', 1, {y: -75});
    TweenMax.to('.lead', 1, {opacity: 0});
    TweenMax.to('.feCard', 1, {scaleX: 1, delay: 1});
    TweenMax.to('.feContent', 1, {opacity: 1, delay: 1.5});
    frontEndOpen = true;
};
function closeFrontEnd(){
    if(backEndOpen == false) {
        TweenMax.to('.cover-heading', 1, {y: 0, delay: 2});
        TweenMax.to('.lead', 1, {opacity: 1, delay: 2});
    };
    TweenMax.to('.feCard', 1, {scaleX: 0, delay: 1});
    TweenMax.to('.feContent', 1, {opacity: 0});
    frontEndOpen = false;
};

function showBackEnd(){
    TweenMax.to('.cover-heading', 1, {duration: 2.5, ease: "back.inOut(2)", y: -75});
    TweenMax.to('.beCard', 1, {scaleX: 1});
    TweenMax.to('.beContent', 1, {opacity: 1, delay: 1});
    backEndOpen = true;
};
function closeBackEnd(){
    if(frontEndOpen == false) {
        TweenMax.to('.cover-heading', 1, {duration: 2.5, ease: "back.inOut(2)", y: 0, delay: 2});
    };
    TweenMax.to('.beCard', 1, {scaleX: 0, delay: 1});
    TweenMax.to('.beContent', 1, {opacity: 0});
    backEndOpen = false;
};




