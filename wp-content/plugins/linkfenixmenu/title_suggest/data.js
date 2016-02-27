

var data = [
        {
        "label":"Deadpool"
        },
        {
        "label":"Batman vs Superman: Dawn of Justice"
        },
        {
        "label":"Zoolander 2"
        },
        {
        "label":"How to be Singel"
        },
        {
        "label":"Captain America: Civil War"
        },
        {
        "label":"Suicide Squad"
        },
        {
        "label":"Hall Caesar!"
        },
        {
        "label":"Ghostbuster"
        },
        {
        "label":"Pride and Prejudice and Zombies"
        },
        {
        "label":"X-men Apocalypse"
        },
        {
        "label":"Triple 9"
        },
        {
        "label":"Risen"
        },
        {
        "label":"The huntsman Winter's war"
        },
        {
        "label":"Midnight Speacial"
        },
        {
        "label":"Kung Fu Panda 3"
        },
        {
        "label":"Gods of Egypt"
        }

           
];
$(function() {
    $("input#title").autocomplete({
        source: data,
        minLength: 1,
        delay: 0,
    });             
});