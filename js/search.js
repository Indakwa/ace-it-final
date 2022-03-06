const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn_hamburger');
const nav = document.querySelector('.nav');
const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.menu-nav_item');
const logoDiv = document.querySelector('.logo-div');
const container = document.getElementById('container');
const myQuestions = document.getElementById('myQuestions');


let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){
        myQuestions.style.zIndex = "1";
        container.style.zIndex = "1";
        logoDiv.style.display = "none";
        hamburger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        navItems.forEach(item => item.classList.add('open'));

        showMenu = true;
    }else{
        hamburger.classList.remove('open');
        nav.classList.remove('open');
        menuNav.classList.remove('open');
        navItems.forEach(item => item.classList.remove('open'));
        showLogo();
        showMenu = false;
    }
}

function showLogo(){
    setTimeout(() => {
        logoDiv.style.display = "block";
        container.style.zIndex = "10";
        myQuestions.style.zIndex = "10";
    }, 600);
}







const searchBar = document.getElementById("search-bar");
const accordion = document.getElementById("accordion");

const questions = [
	{ 
        quiz: "How can I get my work done at ACEIT consultancy?",
        answ: "ACEIT consultancy has made it easy to place orders. Log in to our site as a client, no personal      information is needed, then engage us on our chat box. Your order will be received and further communication will be provided on the way forward. "
     },

	{ 
        quiz: " How long does it take to process an order?",
        answ: "Depending on the size of your project and the time provided, we will ensure that the order is completed in good time. This can range from hours to days depending on your needs."
     },

	{ 
        quiz: "What is the payment protocol at ACEIT?",
        answ: "We accept payment via PayPal and Venmo. However, we can adjust to your preferred mode of payment where possible. The specific accounts will be provided once an order is placed. We receive a down payment as commitment for work to commence and the rest is paid once the work is completed. You will not be required to disclose your bank details at any point and this is our guarantee for transparency and autonomy."
     },
     
	{ 
        quiz: "Is ACEIT a reliable consultancy?",
        answ: "With a rating of 5 stars, we guarantee authenticity, transparency and high quality work. Our clients are satisfied with our services and we forge long term relations from working together."
     }

];

const filter = () => {
	accordion.innerHTML = "";

	const text = searchBar.value.toLowerCase();

	for (let question of questions) {
		let quiz = question.quiz.toLowerCase();
		let answ = question.answ.toLowerCase();

		if (quiz.indexOf(text) !== -1 || answ.indexOf(text) !== -1) {
			accordion.innerHTML += `<div class="accordion-item">
                                        <div class="accordion-item-header">
                                            ${question.quiz}
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                ${question.answ} 
                                            </div>
                                        </div>
                                    </div>`;
		}
	}

	if (accordion.innerHTML === "") {
		accordion.innerHTML += `<p id="sorry-text"><i class="fas fa-sad-tear"></i> Sorry, Your Question Has Not   Been Asked Before </p>`;
	}




    //ACCORDION
    const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

    accordionItemHeaders.forEach(accordionItemHeader => {
    accordionItemHeader.addEventListener("click", event => {
        
        // Uncomment in case you only want to allow for the display of only one collapsed item at a time!
        
        // const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
        // if(currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader!==accordionItemHeader) {
        //   currentlyActiveAccordionItemHeader.classList.toggle("active");
        //   currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
        // }

        accordionItemHeader.classList.toggle("active");
        const accordionItemBody = accordionItemHeader.nextElementSibling;
        if(accordionItemHeader.classList.contains("active")) {
        accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
        }
        else {
        accordionItemBody.style.maxHeight = 0;
        }
        
    });
    });




};

filter();

searchBar.addEventListener("keyup", filter);



