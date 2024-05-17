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


async function loadCandidates () {
  const container = document.querySelector('main > section:nth-child(3) > section');
  const response = await fetch('../../api/candidates.php?');
  const candidates = await response.json();
  if (candidates != '') {
    container.innerHTML = "";
    candidates.forEach((candidate) => {
      container.insertAdjacentHTML(
          'beforeend',
          ` <article>
              <ul>
                <li>Name: ${candidate.firstname} ${candidate.lastname}</li>
                <li>House: ${candidate.house}</li>
                <li>Grade: ${candidate.grade}</li>
              </ul>
            </article>
          `
      );
  })
}

}


document.querySelector('main>section:nth-child(3) > button').addEventListener('click', loadCandidates);


document.querySelector('main > section:nth-child(2) > form').addEventListener('submit', (event)=> {
  event.preventDefault();

  let firstname = document.getElementById('firstname').value;
  let lastname = document.getElementById('lastname').value;
  let house = document.querySelector('input[name="house"]:checked');
  let grade = document.getElementById('grade').value;
  let message = document.getElementById('message').value;
  
  if (firstname.trim() === '') {
      alert('Please enter your first name');
      return;
  }

  if (lastname.trim() === '') {
      alert('Please enter your last name');
      return;
  }

  if (!house) {
      alert('Please select a house');
      return;
  }

  if (grade.trim() === '') {
      alert('Please select a grade');
      return;
  }

  if (message.trim() === '') {
      alert('Please enter a message');
      return;
  }

  if (message.length < 200) {
    alert('Your reason should be at least 200 words');
    return;
  }

  if (firstname.length > 50) {
    alert("Your firstname should be no more than 50 letters");
    return;
  }

  if (lastname.length > 50) {
    alert("Your lastname should be no more than 50 letters");
    return;
  }

  event.target.submit();
});