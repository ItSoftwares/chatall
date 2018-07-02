var como = [
    ["", "", ""],
    ["", "", ""],
    ["", "", ""],
    ["", "", ""]
];

$(document).ready(function() {
    $(document).scroll();
});

$(document).scroll(function() {
    scroll = $(document).scrollTop();
    if (scroll>100 && !$("#topo").hasClass("branco")) {
        $("#topo").addClass("branco");
        $("#topo h3 img").attr("src", "img/logo-colorida.png");
    } else if (scroll<=100 && $("#topo").hasClass("branco")) {
        $("#topo").removeClass("branco");
        $("#topo h3 img").attr("src", "img/logo-branca.png");
    }
    
    if (scroll>$("#inicio").height()/2) {
        $("#subir").css({right: "10px"});
    } else {
        $("#subir").css({right: "-60px"});
    }
});

$(".tarefa").click(function() {
    if ($(this).hasClass("completa")) {
       $(this).removeClass("completa").find("label").removeClass("marcada");
    } else {
        $(this).addClass("completa").find("label").addClass("marcada");
    }
});

$("#container > div").click(function() {
    $("#container > div").removeClass("selecionado");
    id = $(this).addClass("selecionado").attr("data-id");
});

$("#subir").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
});

$("#topo li a:not(:last-child)").click(function(e) {
    e.preventDefault();
    $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, "slow");
    $("#topo li").removeClass("selecionado");
    $(this).parent().addClass("selecionado");
});