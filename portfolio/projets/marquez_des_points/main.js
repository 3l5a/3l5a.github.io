
    let rightAnswer = document.querySelectorAll(".bonne_reponse");
    let wrongAnswer = document.querySelectorAll(".mauvaise_reponse");
    let resultat = document.querySelector(".resultat");

    resultat.addEventListener("click", (e) => {
        e.preventDefault();
        let totalRightAnswer = 0;
        let totalWrongAnswer = 0;
        rightAnswer.forEach((element) => {
            if (element.checked) {
                totalRightAnswer += 1;
                element.nextElementSibling.style.color = "green";
            } else {
                totalWrongAnswer += 1;
            }
        })

        wrongAnswer.forEach((element) => {
            if (element.checked) {
                element.nextElementSibling.style.color = "red";
            }
        })
        alert("Vous avez " + totalRightAnswer + " bonnes réponses et "+ totalWrongAnswer+ " mauvaises réponses.")
        if (totalRightAnswer == rightAnswer.length) {
            let newDiv = document.createElement("div");
            newDiv.textContent = "Bravo ! Vous avez tout juste !";
            newDiv.style.color = "blue";
            document.body.append(newDiv);
        }
    })