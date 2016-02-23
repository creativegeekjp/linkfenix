var data = [
            {"label":"Aragorn", "actor":"Viggo Mortensen"},
            {"label":"Arwen", "actor":"Liv Tyler"},
            {"label":"Bilbo Baggins", "actor":"Ian Holm"},
            {"label":"Boromir", "actor":"Sean Bean"},
            {"label":"Frodo Baggins", "actor":"Elijah Wood"},
            {"label":"Gandalf", "actor":"Ian McKellen"},
            {"label":"Gimli", "actor":"John Rhys-Davies"},
            {"label":"Gollum", "actor":"Andy Serkis"},
            {"label":"Legolas", "actor":"Orlando Bloom"},
            {"label":"Meriadoc Merry Brandybuck", "actor":"Dominic Monaghan"},
            {"label":"Peregrin Pippin Took", "actor":"Billy Boyd"},
            {"label":"Samwise Gamgee", "actor":"Sean Astin"}
];
$(function() {
    $("input#title").autocomplete({
        source: data,
        minLength: 1,
        delay: 0,
    });             
});