//Bouton Likes

// $("#boutonLikes").on("click", function (e) {
    // $.ajax(
        // 'exoAjax(HW).php',
        // {
            // success: function (voirText) {
                // if (voirText.indexOf("Erreur") >= 0) {
                    // document.body.appendChild(document.createTextNode(voirText));
                // } else {
                    // const h1 = document.createElement("h1");
                    // h1.textContent = voirText;
                    // document.body.appendChild(h1);
                // }
            // },
            // error: function (jqxhr, errorText, textstatus) {
                // console.log(jqxhr, jqxhr.status, textstatus);
                // alert("Erreur est survenue")
            // }
        // }
    // )
// });


// $("#boutonLikes").on("click", function (e) {
    $("#boutonLikes").addEventListener('click', updateBtn);

function updateBtn() {
    if ($("#boutonLikes").src === '../../img/logos_divers/Like_vide.png') {
        $("#boutonLikes").src = '../../img/logos_divers/Like_rempli.png';
    } else {
        $("#boutonLikes").src = '../../img/logos_divers/Like_vide.png';
    }
  }