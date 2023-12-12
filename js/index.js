var newsSwiper = new Swiper(".swiper--news", {
    spaceBetween: 0,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    wrapperClass: 'swiper--news_wraper',

    direction: 'horizontal',
    freeMode: true,
    freeModeMomentum: false,
    freeModeMomentumBounce: false,
    speed: 5000,
    autoplay: {
        delay: 10,
        disableOnInteraction: true,

    },
    grabCursor: true,

});

newsSwiper.on('touchEnd', function () {
    newsSwiper.autoplay.start();
});



var brandsSwiper = new Swiper(".brandsSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: '.swiper-brands-button-next',
        prevEl: '.swiper-brands-button-prev',
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 5,
            spaceBetween: 40,
        },
        "@1.50": {
            slidesPerView: 8,
            spaceBetween: 50,
        },
    },
});

var teamMember = new Swiper(".teamMember", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    navigation: {
        nextEl: '.swiper-teamMember-button-next',
        prevEl: '.swiper-teamMember-button-prev',
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});



var blogSwiper = new Swiper(".blogSwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-blog-button-next',
        prevEl: '.swiper-blog-button-prev',
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        "@1.50": {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});




const navigation = document.getElementsByClassName("navigation")[0]
const mobileNav = document.getElementsByClassName("mobile")[0]

function toggleNav() {
    navigation.classList.toggle("active")
    mobileNav.classList.toggle("active")
}



function servicesTabHandler() {
    const tabsContainer = document.querySelector(".tabsContainer")
    if (!tabsContainer) return;

    const tabsTitle = tabsContainer.querySelectorAll(".tabsTitle>*")

    const tabsSection = tabsContainer.querySelectorAll(".tabsSection")
    const tabsSectionItem = tabsContainer.querySelectorAll(".tabsSection>*")

    function removeActiveClass(lists) {
        
        lists.forEach(item=>{
            if(item.classList.contains("active")){
                item.classList.remove("active")
            }
        })
        
        
        // item.classList.add("animationHidden")
        // setTimeout(() => {
        //     item.classList.remove('active')
        //     item.classList.remove('animationHidden')
        // }, 500);
        // current?.classList.add("active")

    }
    function setHeight(section) {
        const plus = window.innerWidth > 640 ? tabsTitle[0].parentElement.scrollHeight  + 20 : 20
        const activeTabsSection = section.querySelector(".active")
        section.style.height = activeTabsSection.scrollHeight+ plus + "px"
    }

    window.addEventListener('resize', ()=>tabsSection.forEach(tabSection => {
        setHeight(tabSection)
    }))
    tabsSection.forEach(tabSection => {
        setHeight(tabSection)
    })
    tabsTitle.forEach(item => {
        item.onclick = function () {
            if(this.classList.contains("active")) return
            removeActiveClass(tabsTitle)
            removeActiveClass(tabsSectionItem)
            this.classList.add("active")
            const activeTabList = tabsContainer.querySelectorAll(`.tabsSection>*[data-section="${this.dataset.item}"]`)
            activeTabList.forEach(section => section.classList.add('active'))
            
            tabsSection.forEach(tabSection => {
                setHeight(tabSection)
            })
        }
    })


}



function tabHndler() {

    const sobelz_tab = document.getElementsByClassName("sobelz_tab")[0]
    if (!sobelz_tab) return
    const contentList = sobelz_tab?.querySelectorAll(".content ul li")
    const tabsList = sobelz_tab?.querySelectorAll("ul.tabs li")

    function sobelz_set_content_height() {
        const allH = [];
        contentList?.forEach(function (li) {
            allH.push(li.scrollHeight)
        })
        const ulContent = sobelz_tab?.querySelector('.content ul')
        ulContent.style.minHeight = Math.round(Math.max(...allH)) + 10 + "px"
    }


    sobelz_set_content_height()

    window.addEventListener('resize', sobelz_set_content_height)

    function sobelz_remove_active_class(elem) {
        elem.forEach(li => {
            li.classList.remove('active')
        })
    }

    tabsList?.forEach((li, index) => {
        li.onclick = function () {
            sobelz_remove_active_class(tabsList)
            sobelz_remove_active_class(contentList)
            contentList[index].querySelector(".tab-title").innerText = this.querySelector('span').innerText
            this.classList.add("active")
            contentList[index].classList.add("active")
        }
    });
}





function handleInputChange(event) {
    const value = event.target.value ? event.target.value.trim() : ""
    if (value && value.length > 0) {
        event.target.nextElementSibling.classList.add("hasValue")
    } else {
        event.target.nextElementSibling.classList.remove("hasValue")
    }
}



function accordionInitial() {
    const allAccordion = document.getElementsByClassName("accordion") || []
    for (let i = 0; i < allAccordion.length; i++) {
        const accordionTitle = allAccordion[i].querySelectorAll(".title");
        const accordionContent = allAccordion[i].getElementsByClassName("content")[0];

        if (allAccordion[i].classList.contains("active")) {
            accordionContent.style.height = accordionContent.scrollHeight + "px"
        }
        accordionTitle.forEach(item => {
            item.onclick = function () {
                allAccordion[i].classList.toggle("active")
                if (allAccordion[i].classList.contains("active")) {
                    accordionContent.style.height = accordionContent.scrollHeight + "px"
                } else {
                    accordionContent.style.height = 0
                }
            }
        })


    }
}

function counter() {
    const counters = document.querySelectorAll(".counter-wraper")
    if(!counters || counters.length <1) return;

    counters.forEach(counter=>{
        var obs = new IntersectionObserver(([entry]) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.querySelectorAll("&>*").forEach(item => {
                        const counterSpan = item.querySelector('.counter')
                        const { min, max, duration } = counterSpan.dataset
                        let number = Number(min)
                        const interval = setInterval(() => {
                            if (number < +max) {
                                counterSpan.innerHTML = number += 1

                            } else clearInterval(interval)
                        }, Number(duration / max));
                    })
                }, 1000);

                obs.disconnect()
            }
        })
        obs.observe(counter)
    })
    
}

function observer() {
    var allElementForObserver = document.getElementsByClassName("Observer")

    for (var i = 0; i < allElementForObserver.length; i++) {

        var obs = new IntersectionObserver(([entry]) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("startAnimate")
            }
        })
        obs.observe(allElementForObserver[i])
    }
}



window.addEventListener('resize', function (e) {

    const allAccordion = document.querySelectorAll(".accordion.active .content") || []
    allAccordion.forEach(item => {
        item.style.height = item.scrollHeight + "px"
    })

})

window.onload = function () {
    accordionInitial()
    observer()
    counter()
    tabHndler()
    servicesTabHandler()
}