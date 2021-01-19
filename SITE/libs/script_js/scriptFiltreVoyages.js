// POUR FILTRER PARMI LES CONTINENTS //
$('#input-continent').keyup(function () {         //quand on appuie, lache une touche
    var input = $(this);
    var val = input.val();                     //éviter de retaper la chaine de caractères quand on en a besoin
    if (val == '') {
        $('#filtre tr').show();                 // permet d'afficher tous les mots si on supprime la recherche
        return true;
    }
console.log("cc");
    var regexp = '\\b(.*)';                 //chercher un mot qui commence
    for (var j in val) {                      //chercher chaque lettre intermédiaires du mot
        regexp += '(' + val[j] + ')(.*)';
    }
    regexp += '\\b';                        //chercher un mot qui se finit

    $('#filtre tr').find('#filtreContinent').each(function () {         //chercher les enfants de tr
        var td = $(this);
        var result = td.text().match(new RegExp(regexp, 'i'));     //match verifie si le texte est une expression réguliaire
                                                                    //i sert à ignorer les majuscules et minuscules
        if (result) {                         
            var string = '';
            for (var j in result) {

                if (j > 0) {
                        string += result[j];  
                }
                
            }
            td.empty().append(string);      //vide
        } else {
            td.parent().hide();      //permet de cacher les elements "null" car ils ne possèdent pas les lettres tapées
        }
    })
});


// POUR FILTRER PARMI LES PAYS //
$('#input-pays').keyup(function () {         
    var input = $(this);
    var val = input.val();              
    if (val == '') {
        $('#filtre tr').show();                
        return true;
    }
console.log("cc");
    var regexp = '\\b(.*)';                 
    for (var j in val) {                     
        regexp += '(' + val[j] + ')(.*)';
    }
    regexp += '\\b';                        

    $('#filtre tr').find('#filtrePays').each(function () {         
        var td = $(this);
        var result = td.text().match(new RegExp(regexp, 'i'));    
                                                                   
        if (result) {                         
            var string = '';
            for (var j in result) {

                if (j > 0) {
                        string += result[j];  
                }
                
            }
            td.empty().append(string);   
        } else {
            td.parent().hide();     
        }
    })
});