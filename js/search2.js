const menuBtn = document.querySelector('.menu-btn');
const hamburger = document.querySelector('.menu-btn_hamburger');
const nav = document.querySelector('.nav');
const menuNav = document.querySelector('.menu-nav');
const navItems = document.querySelectorAll('.menu-nav_item');
const logoDiv = document.querySelector('.logo-div');
const mySearch = document.getElementById('mySearch');
const openChat = document.getElementById('openChat');


let showMenu = false;

menuBtn.addEventListener('click', toggleMenu);

function toggleMenu(){
    if(!showMenu){
        openChat.style.zIndex = "1";
        mySearch.style.zIndex = "1";
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
        mySearch.style.zIndex = "10";
        openChat.style.zIndex = "10";
    }, 600);
}







const searchBar = document.getElementById("search-bar");
const jobslist = document.getElementById("jobslist");


const jobs = [
	{ 
        thumbnail: "db.jpg",
        title: "Relational database management systems",

        description: "What is meant by ACID properties in DBMS?.ACID stands for Atomicity, Consistency, Isolation, and Durability in a DBMS these are those properties that ensure a safe and secure way of sharing data among multiple users.Atomicity: This property reflects the concept of either executing the whole query or executing nothing at all.",

        date: "22 April",
        category: "Database management",
     },

     { 
        thumbnail: "trs.png",
        title: "Transcription payouts.",

        description: " the simplest form of general transcription and take the least amount of skill. It may be a good place for a beginning typist to get started, but it won’t pay much. However, work-at-home scams can be dressed up to look like data entry jobs, so be familiar with data entry scams. Examples of companies offering this type entry-level transcription job include QuickTate or Scribie, which each offer transcribers short bits audio to transcribe at a set fee.",

        date: "11 January",
        category: "Transcription, Data Entry",
     },

     { 
        thumbnail: "seo.jpg",
        title: "Search Engine Optimization",

        description: "Are you more likely to get your widgets from a trusted resource who offered great information each of the last four times you turned to Google for help with a problem, or someone you have never heard  Is your site optimized for searchGet a free SEO audit with the free LOCALiQ website grader.  What Actually Works for riving SEO Traffic from Search Engines.",

        date: "5 May",
        category: "SEO",
     },

     { 
        thumbnail: "thumb3.jpg",
        title: "Article writing.",
        
        description: "Reach a massive audience with the help of the press. In the case of article writing, the press refers to publishing houses of newspapers, magazines, journals.",

        date: "14 February",
        category: "Writing",
     }

];

const filter = () => {
	jobslist.innerHTML = "";

	const text = searchBar.value.toLowerCase();

	for (let job of jobs) {
		let thumbnail = job.thumbnail.toLowerCase();
		let title = job.title.toLowerCase();
        let description = job.description.toLowerCase();
        let date = job.date.toLowerCase();
        let category = job.category.toLowerCase();

		if (title.indexOf(text) !== -1 || description.indexOf(text) !== -1 || date.indexOf(text) !== -1 || category.indexOf(text) !== -1) {
			jobslist.innerHTML += `<div class="box">

            <div class="img"><img src="images/${thumbnail}" alt=""></div>

            <div class="text">
                <h5>${title}</h5>
                <p>${description}
                </p>
                <p class="icons">
                    <span><i class="far fa-calendar-alt"></i> ${date}</span> <span><i class="fas fa-tag"></i> ${category}</span>
                </p>
            </div>

        </div>`;
		}
	}

	if (jobslist.innerHTML === "") {
		jobslist.innerHTML += `<p id="sorry-text"><i class="fas fa-sad-tear"></i> Sorry, Assignment Not Found </p>`;
	}



};

filter();

searchBar.addEventListener("keyup", filter);



