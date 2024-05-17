function openNav() {
    document.querySelector("nav > section:nth-child(3)").style.height = "100vh";
}
  
function closeNav() {
    document.querySelector("nav > section:nth-child(3)").style.height = "0%";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
    document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
}

function openCatalog(id) {
    if (id == 1) {
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "block";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
    } else if (id == 2) {
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "block";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
    } else if (id == 3) { 
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "block";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "none";
    } else if (id == 4){
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(5)").style.display = "block";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(2)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(3)").style.display = "none";
      document.querySelector("nav > section:nth-child(3) > section:nth-of-type(4)").style.display = "none";
    }
  
}

async function loadSubjects (id) {
    let q;
    if (id === 0) {
      q = document.getElementById('q').value;
      if (q === "") {
        q = "allsubjects";
      }
    } else if (id === 1) {
      q = "allsubjects";
    } else if (id === 2) {
      q = "owl";
    } else if (id === 3) {
      q = "newt";
    }

    const response = await fetch('/api/subjects.php?q=' + encodeURIComponent(q));
    const subjects = await response.json();
    const bg =  document.querySelector('main > section:nth-child(3)');
    const container = document.querySelector('main > section:nth-child(3)');

    if (subjects != ' ') {
      subjects.sort((a, b) => b.id - a.id);
      container.innerHTML = " ";
      bg.style.display = "flex";
      let str;

      subjects.forEach((subject) => {
        if (subject.is_OWL == 1) {
            str = 'O.W.L';
        } else if (subject.is_NEWT == 1) {
          str = 'N.E.W.T'; 
        } else {
          str = "";
        }
        container.insertAdjacentHTML(
            'afterbegin',
            ` <article>
                <p>
                  <a href="#">${subject.name}</a>
                  <span>${str}</span>
                </p>
                <p>
                  ${subject.description}
                </p>
              </article>
            `
        );
        if (str === "O.W.L") {
          document.querySelector('main > section:nth-child(3) > article > p:first-child > span').style.background = 'rgb(188, 201, 212)';
        } else if (str === "N.E.W.T") {
          document.querySelector('main > section:nth-child(3) > article > p:first-child > span').style.background = 'rgb(228, 201, 201)';
        } 
    })
  }

  }
  

document.querySelector('main > header > form > button').addEventListener('click', (event) => {
  event.preventDefault(); 
  loadSubjects(0); 
});


document.addEventListener('DOMContentLoaded', loadSubjects(0));
