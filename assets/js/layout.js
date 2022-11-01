
// FUNCAO PARA ESCOLHER O SLIDE ALEATORIAMENTE
function slideRandom() {
    
    const slideBackground = document.querySelector('#slide');

    const slideIMG = ['slide1', 'slide2', 'slide3', 'slide4', 'slide5', 'slide6', 'slide7'];
    const slideSetado = Math.floor(Math.random() * slideIMG.length);

    slideBackground.style.backgroundImage = `url(assets/img/${slideIMG[slideSetado]}.jpg)`;

}


// FUNCAO MUDA COR DO MENU 
function menuCor() {

    const nav1 = document.querySelector('#nav-1');
    const nav2 = document.querySelector('#nav-2');
    const nav3 = document.querySelector('#nav-3');
    const nav4 = document.querySelector('#nav-4');
    const nav5 = document.querySelector('#nav-5');

    $(window).scroll(function() {

        let scrollTop = $(window).scrollTop();
        let topo1 = $('#slide').height();
        let topo2 = topo1 + 150 + $('#skills').height();
        let topo3 = topo2 + 150 + $('#cursos').height();
        let topo4 = topo3 + 150 + $('#projetos').height();


        if(scrollTop < topo1) trocaNav1();
        if(scrollTop > topo1) trocaNav2();
        if(scrollTop > topo2) trocaNav3();
        if(scrollTop > topo3) trocaNav4();
        if(scrollTop > topo4) trocaNav5();

    });



    function trocaNav1() {
        nav1.classList.add('pag');
        nav2.classList.remove('pag');
    }

    function trocaNav2() {
        nav1.classList.remove('pag');
        nav2.classList.add('pag');
        nav3.classList.remove('pag');
    }

    function trocaNav3() {
        nav2.classList.remove('pag');
        nav3.classList.add('pag');
        nav4.classList.remove('pag');
    }

    function trocaNav4() {
        nav3.classList.remove('pag');
        nav4.classList.add('pag');
        nav5.classList.remove('pag');
    }

    function trocaNav5() {
        nav4.classList.remove('pag');
        nav5.classList.add('pag');
    }

}



// FUNCAO PARA CAROUSEL DOS CURSOS
function carrossel() {
    $('.carousel').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
                breakpoint: 920,
                settings: {
                slidesToShow: 1,
                slidesToScroll: 1
                }
            }
        ]
    });
}


// FUNCAO PARA ABRIR E FECHAR DETAHLES DO CURSO
function openCurso() {

    // FUNCAO DE ANIMACAO PARA ABRIR BOX
    function animeOpen(j) {
        j.classList.remove('anime-dark');
        

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .box')) {
            setTimeout(() => {
                i.classList.remove('anime-box');
            }, 500);

            setTimeout(() => {
                i.classList.remove('anime-Scroll');
            }, 1200);
        }

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .box button')) {
            setTimeout(() => {
                i.classList.remove('anime-close');
            }, 800);
        }

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .row-1')) {
            setTimeout(() => {
                i.classList.remove('anime-conteudo');
            }, 1200);
        }

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .row-2')) {
            setTimeout(() => {
                i.classList.remove('anime-conteudo');
            }, 1700);
        }

    }

    // FUNCAO DE ANIMACAO PARA FECHAR BOX
    function animeClose(j) {

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .box button')) {
            i.classList.add('anime-close');
        }

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .row-1')) {
            i.classList.add('anime-conteudo');
        }

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .row-2')) {
            setTimeout(() => {
                i.classList.add('anime-conteudo');
            }, 500);
        }

        for(let i of darkCurso.querySelectorAll('#detalhesCursos .dark .box')) {
            setTimeout(() => {
                i.classList.add('anime-Scroll');
            }, 500);

            setTimeout(() => {
                i.classList.add('anime-box');
            }, 1000);
        }

        setTimeout(() => {
            j.classList.add('anime-dark');
        }, 1500);

    }



    const darkCurso = document.querySelector('#detalhesCursos');
    const listCurso = document.querySelector('.carousel');
    let close = "";

    
    // ABRINDO BOX
    for(let i of listCurso.querySelectorAll('.carousel .curso .curso-descricao .button button')) {

        i.addEventListener('click', function() {

            for(let j of darkCurso.querySelectorAll('#detalhesCursos .dark')) {

                if(i.className === j.id) {
                    animeOpen(j);

                }

            }

        });

    }


    // FECHANDO BOX
    for(let closeBox of darkCurso.querySelectorAll('#detalhesCursos .dark')) {

        close = closeBox.querySelector('.box button');

        close.addEventListener('click', function() {
            animeClose(closeBox);
        });
        

    }


}



// FUNCAO PARA ABRIR E FECHAR NAV MOBILE
function navMobile() {

    const botNav = document.querySelector('#botNav button');
    const navDark = document.querySelector('#paiHeader nav');
    const navBlock = document.querySelector('#paiHeader nav div');
    const navLink = document.querySelector('#paiHeader nav div ul');
    const botNavHr = document.querySelector('#hr');
    let checkNav = false;

    // Funcao para abrir nav
    function abreNav() {
        botNav.classList.add('anime-nav-bot');
        botNavHr.classList.add('anime-hr');
        navDark.classList.remove('anime-nav-dark');
            setTimeout(() => {
                navBlock.classList.remove('anime-nav-box');
            }, 300);
            checkNav = true;
    }

    // Funcao para fechar nav
    function fechaNav() {
        botNav.classList.remove('anime-nav-bot');
        botNavHr.classList.remove('anime-hr');
        navBlock.classList.add('anime-nav-box');
            setTimeout(() => {
                navDark.classList.add('anime-nav-dark');
            }, 300);
        checkNav = false;
    }

    botNav.addEventListener('click', function() {
        if(checkNav === false) {
            abreNav();
        } else {
            fechaNav();
        }
    });

    for(let i of navLink.querySelectorAll('li')) {
        i.addEventListener('click', function() {
            fechaNav();
        });
    }

}








navMobile();
menuCor();
openCurso();
carrossel();
slideRandom();